console.log('FINHUB_KEY:', process.env.FINHUB_KEY);
const express = require('express');
const axios = require('axios');
const router = express.Router();

const symbols = [
  'INTC', 'NVDA', 'PYPL', 'MA', 'META', 'TSLA', 'CRM', 'WMT', 'ORCL', 'PFE',
  'BA', 'AMZN', 'NKE', 'XOM', 'KO'
];

router.get('/api/stocks', async (req, res) => {
  const apiKey = process.env.FINHUB_KEY;
  try {
    const results = await Promise.all(symbols.map(async symbol => {
      const [quote, profile] = await Promise.all([
        axios.get(`https://finnhub.io/api/v1/quote?symbol=${symbol}&token=${apiKey}`),
        axios.get(`https://finnhub.io/api/v1/stock/profile2?symbol=${symbol}&token=${apiKey}`)
      ]);
      const open = quote.data.o ?? 0;
      const last = quote.data.c ?? 0;
      const change = open !== 0 ? ((last - open) / open) * 100 : 0;
      return {
        symbol,
        company: profile.data.name || symbol,
        price: last,
        pctChange: change,
        isUp: last >= open,
      };
    }));
    res.json(results);
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Failed to fetch stocks' });
  }
});

module.exports = router;
