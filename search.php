<?php $query = $_GET['query'] ?? ''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <meta charset="UTF-8" />
  <title>Post Search Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: black;
      color: white;
    }

    .navbar {
      border-bottom: 2px solid #00e1ff;
    }

    .input-group input {
      border-radius: 20px;
      padding-left: 20px;
    }

    .input-group button {
      border-radius: 20px;
      padding: 0 20px;
    }

    .card .col-md-4 {
      padding: 10px; 
    }
    
    .card img {
      max-width: 275px;   
      max-height: 275px;  
      object-fit: cover;  
      width: 100%;        
      height: auto;
      margin-left: 20px;
    }
    .card {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.4);
      height: 300px;
      background-color: black;
      border: none;
    }
    

    .custom-card {
      width: calc(95% + 50px);
      max-width: calc(1300px + 50px);
      margin: 0 auto;
      border-radius: 12px;
    }
    
    .stock-result {
      background-color: black;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .stock-card {
      background-color: black; /* solid black background */
      border: 1px solid grey;  /* grey border */
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* optional for depth */
    }

    .ticker-badge {
      width: 48px;
      height: 48px;
      background-color: #00e1ff;
      color: black;
      font-weight: bold;
      text-align: center;
      border-radius: 8px;
      font-size: 0.8rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      line-height: 1;
    }
    .change-box {
      padding: 2px 8px;
      border-radius: 4px;
      display: inline-block;
      font-weight: bold;
      color: black !important; /* text is always black */
    }

    .company-name {
      font-size: 0.75rem;
      color: #ccc;
    }

    .price-data {
      text-align: right;
      font-size: 1rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black px-4 ">
    <a class="navbar-brand text-white" href="#">
    <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47715 0 0 4.47715 0 10V35C0 35.5523 0.447716 36 1 36H13.2678C13.652 36 14.0023 35.7798 14.1689 35.4336L22.1977 18.7459C22.9245 17.2354 25.0755 17.2354 25.8023 18.7459L33.8311 35.4336C33.9977 35.7798 34.348 36 34.7322 36H37.8621C38.5989 36 39.0827 35.2303 38.7633 34.5664L36.1415 29.1171C35.5026 27.7893 36.4702 26.25 37.9437 26.25H64.0563C65.5298 26.25 66.4974 27.7893 65.8585 29.1171L63.2367 34.5664C62.9173 35.2304 63.4011 36 64.1378 36H74C74.5523 36 75 35.5523 75 35V10C75 4.47715 70.5229 0 65 0H10ZM10.8621 39C11.5989 39 12.0827 39.7696 11.7633 40.4336L9.14146 45.8829C8.50262 47.2107 9.47022 48.75 10.9437 48.75H37.0563C38.5298 48.75 39.4974 47.2107 38.8585 45.8829L36.2367 40.4336C35.9173 39.7696 36.4011 39 37.1379 39H40.2678C40.652 39 41.0023 39.2202 41.1689 39.5664L49.1977 56.2541C49.9245 57.7646 52.0755 57.7646 52.8023 56.2541L60.8311 39.5664C60.9977 39.2202 61.348 39 61.7322 39H74C74.5523 39 75 39.4477 75 40V65C75 70.5229 70.5229 75 65 75H10C4.47715 75 0 70.5229 0 65V40C0 39.4477 0.447715 39 1 39H10.8621Z" fill="#497C9B"/>
    </svg>
    <b>Home</b>
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="#">News</a></li>
        <li class="nav-item"><a class="nav-link active text-white" href="#">Search</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Settings</a></li>
        <li class="nav-item d-flex align-items-center ms-3">
          <img src="assets/profile.jpeg" alt="Profile" width="35" height="35" class="rounded-circle border border-light">
        </li>
        
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <!-- Search Bar -->
    <form action="search.php" method="GET" class="d-flex justify-content-center mb-2">
      <div class="position-relative w-75">
        <input 
        type="text" 
        name="query"
        class="form-control custom-search-input ps-4 pe-5 rounded-pill bg-black border-info"
        placeholder="Search for news, symbols or companies"
        value="<?= htmlspecialchars($query) ?>"
        style="height: 48px; font-size: 1.1rem; color: #ffffff !important;"
        >
        <button 
        type="submit" 
        class="btn position-absolute top-50 end-0 translate-middle-y me-3 p-0 text-info border-0 bg-transparent"
        style="font-size: 1.25rem;"
        >
        <i class="bi bi-search"></i>
       </button>
      </div>
    </form>
    
    <!-- Stock Ticker Results -->
    <div class="container">
      <div class="row mb-4">
        <!-- Ticker 1 -->
        <div class="col-md-6">
          <div class="stock-card text-white d-flex justify-content-between align-items-center px-3 py-3">
            <div class="d-flex align-items-center">
              <div class="bg-success text-dark d-flex flex-column justify-content-center align-items-center me-3" style="width: 60px; height: 60px; border-radius: 10px;">
                <div class="fw-bold" style="line-height: 1;">DM</div>
                <div class="fw-bold" style="line-height: 1;">AF</div>
              </div>
              <div>
                <div class="fw-bold">DMAF</div>
                <small class="text-white">DMAF Fnd</small>
              </div>
            </div>
            <div class="text-end">
              <div class="fw-bold">42,753.09</div>
              <div class="change-box bg-success text-dark">+7,015</div>
            </div>
          </div>
        </div>

        <!-- Ticker 2 -->
         <div class="col-md-6">
          <div class="stock-card text-white d-flex justify-content-between align-items-center px-3 py-3">
            <div class="d-flex align-items-center">
              <div class="bg-danger text-dark d-flex flex-column justify-content-center align-items-center me-3" style="width: 60px; height: 60px; border-radius: 10px;">
                <div class="fw-bold" style="line-height: 1;">NY</div>
                <div class="fw-bold" style="line-height: 1;">SE</div>
              </div>
              <div>
                <div class="fw-bold">NYSE</div>
                <small class="text-white">NYSE Corp.</small>
              </div>
            </div>
            <div class="text-end">
              <div class="fw-bold">28,324.75</div>
              <div class="change-box bg-danger text-dark">-3,023</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <!-- Ticker 3 -->
         <div class="col-md-6">
          <div class="stock-card text-white d-flex justify-content-between align-items-center px-3 py-3">
            <div class="d-flex align-items-center">
              <div class="bg-danger text-dark d-flex flex-column justify-content-center align-items-center me-3" style="width: 60px; height: 60px; border-radius: 10px;">
                <div class="fw-bold" style="line-height: 1;">NY</div>
                <div class="fw-bold" style="line-height: 1;">SE</div>
              </div>
              <div>
                <div class="fw-bold">NYSE</div>
                <small class="text-white">NYSE Corp.</small>
              </div>
            </div>
            <div class="text-end">
              <div class="fw-bold">28,324.75</div>
              <div class="change-box bg-danger text-dark">-3,023</div>
            </div>
          </div>
        </div>
      
        <!-- Ticker 4 -->
         <div class="col-md-6">
          <div class="stock-card text-white d-flex justify-content-between align-items-center px-3 py-3">
            <div class="d-flex align-items-center">
              <div class="bg-success text-dark d-flex flex-column justify-content-center align-items-center me-3" style="width: 60px; height: 60px; border-radius: 10px;">
                <div class="fw-bold" style="line-height: 1;">DM</div>
                <div class="fw-bold" style="line-height: 1;">AF</div>
              </div>
              <div>
                <div class="fw-bold">DMAF</div>
                <small class="text-white">DMAF Fnd.</small>
              </div>
            </div>
            <div class="text-end">
              <div class="fw-bold">42,753.09</div>
              <div class="change-box bg-success text-dark">+7,015</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- News Section -->
    <div class="card custom-card bg-black text-white border border-secondary mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/news1.jpeg" class="img-fluid" alt="Stock Down">
        </div>
        <div class="col-md-8 px-2 p-5 ">
          <div class="card-body py-2 px-0">
            <h5 class="card-title" style="font-size: 2.5rem; margin-bottom: 0.5rem;">Stocks Down</h5>
            <p class="card-text" style="font-size: 2rem;">During the last couple of days stocks have been down in the market, causing a lot of investors to lose money they had invested in the market are in the...</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card custom-card bg-black text-white border border-secondary mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/news2.jpg" class="img-fluid h-100" alt="Other News">
        </div>
        <div class="col-md-8 px-2 p-5">
          <div class="card-body py-2 px-0">
            <h5 class="card-title" style="font-size: 2.5rem; margin-bottom: 0.5rem;">Other News</h5>
            <p class="card-text" style="font-size: 2rem;">Some other news related to the stock market, stocks, people related to it, investment opportunities, tutorials or any other topic that is related...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


