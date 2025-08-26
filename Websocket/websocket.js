 const socket = new WebSocket('ws://localhost:8080'); 
  const dataMap = {};
  const tableBody = document.getElementById('stock-table-body');

  function renderTable() {
    tableBody.innerHTML = ''; 

    for (const symbol in dataMap) {
    
      const { p, t, v } = dataMap[symbol];
      const row = document.createElement('tr');

      row.innerHTML = `
        <td>${symbol}</td>
        <td>${p.toFixed(2)}</td>
        <td>${new Date(t).toLocaleTimeString()}</td>
        <td>${v}</td>
      `;

      tableBody.appendChild(row);
    }
  }

  socket.onopen = () => {
    console.log('WebSocket connected');
    ['META', 'TSLA', 'NVDA', 'AAPL', 'MSFT'].forEach(symbol => {
      socket.send(JSON.stringify({ type: 'subscribe', symbol }));
    });
  };

  socket.onmessage = (event) => {
    const message = JSON.parse(event.data);

    if (message.type === 'trade' && Array.isArray(message.data)) {
      message.data.forEach(({ s, p, t,v }) => {
        dataMap[s] = { p, s, t , v };
      });

      renderTable(); 
    }
  };

  socket.onerror = (err) => {
    console.error('WebSocket 错误:', err);
  };