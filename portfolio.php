<?php $query = $_GET['query'] ?? ''; ?>
<!DOCTYPE html>
<?php
$query = $_GET['query'] ?? '';
$add = isset($_GET['add']) ? (int)$_GET['add'] : 0;
$card_count = 4 + $add;
?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Bootstrap and Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

  
  <style>
    body {
      background-color: black;
      color: white;
    }
    .navbar {
      border-bottom: 2px solid #00e1ff;
    }
    .card {
      border: 1px solid #2a2a2a;
      width: 667px;
      height: 133px;
    }
    .bg-success {
      background-color: #169580 !important;
    }
    .bg-danger {
      background-color: #EB3546 !important;
    }
    .text-black {
      color: black !important;
    }
    .koulen {
        font-family: 'Koulen', sans-serif;
        
    }
    .container-fluid.py-4 {
        height: calc(100vh - 40px);
        padding-top: 0!important;  
        padding-bottom: 1rem !important;
        display: flex;
        flex-direction: column;
    }
    .row {
        flex: 1;
        display: flex;
        height: 100vh; 
    }
    .col-md-6 {
        height: 100%;
    }
    .thick-divider {
        border-right: 10px solid #00e1ff; 
        height: 100%;
    }
    .status-box {
        width: 80.75px;          
        height: 81.75px;         
        padding: 8px 12px;    
        border-radius: 6px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 32px;      
        font-weight: 700;
        color: black !important;
    }
    .btn-circle-lg {
        width: 60px;
        height: 60px;
        padding: 0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #00e1ff;
        border: none;
    }
    .minus-icon {
        width: 38.4px;
        height: 9.6px;
        background-color: black;
        border-radius: 2px;
    }
       .navbar-brand {
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 8px;
    }
  </style>
</head>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    
    document.querySelectorAll('.btn-circle-lg').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault(); 

        const card = btn.closest('.card');
        if (card) {
          card.remove();
        }
      });
    });
  });
</script>

<body class="bg-black text-white">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black px-4">
    <a class="navbar-brand text-white d-flex align-items-center" href="#">
      <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M10 0C4.47715 0 0 4.47715 0 10V35C0 35.5523 0.447716 36 1 36H13.2678C13.652 36 14.0023 35.7798 14.1689 35.4336L22.1977 18.7459C22.9245 17.2354 25.0755 17.2354 25.8023 18.7459L33.8311 35.4336C33.9977 35.7798 34.348 36 34.7322 36H37.8621C38.5989 36 39.0827 35.2303 38.7633 34.5664L36.1415 29.1171C35.5026 27.7893 36.4702 26.25 37.9437 26.25H64.0563C65.5298 26.25 66.4974 27.7893 65.8585 29.1171L63.2367 34.5664C62.9173 35.2304 63.4011 36 64.1378 36H74C74.5523 36 75 35.5523 75 35V10C75 4.47715 70.5229 0 65 0H10ZM10.8621 39C11.5989 39 12.0827 39.7696 11.7633 40.4336L9.14146 45.8829C8.50262 47.2107 9.47022 48.75 10.9437 48.75H37.0563C38.5298 48.75 39.4974 47.2107 38.8585 45.8829L36.2367 40.4336C35.9173 39.7696 36.4011 39 37.1379 39H40.2678C40.652 39 41.0023 39.2202 41.1689 39.5664L49.1977 56.2541C49.9245 57.7646 52.0755 57.7646 52.8023 56.2541L60.8311 39.5664C60.9977 39.2202 61.348 39 61.7322 39H74C74.5523 39 75 39.4477 75 40V65C75 70.5229 70.5229 75 65 75H10C4.47715 75 0 70.5229 0 65V40C0 39.4477 0.447715 39 1 39H10.8621Z"
          fill="#497C9B" />
      </svg>
      <span class="ms-2">Portfolio</span>
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="homepage.html">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="news-overview.php">News</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="index.html">Search</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="portfolio.php">Portfolio</a></li>
       <li class="nav-item"><a class="nav-link text-white" href="settings.html">Settings</a></li>
        <li class="nav-item d-flex align-items-center ms-3">
          <img src="assets/profile.jpeg" alt="Profile" width="35" height="35" class="rounded-circle border border-light">
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Portfolio/Watchlist Layout -->
  <div class="container-fluid py-4">
    <div class="row">
      <!-- Portfolio -->
      <div class="col-md-6 thick-divider">
        <h4 class="text-center mb-4 koulen" style="font-size: 40px;">PORTFOLIO</h4>
        <?php
          for ($i = 0; $i < 4; $i++):
            $gain = $i === 1 ? -7015 : 7015;
            $gainClass = $gain >= 0 ? 'bg-success' : 'bg-danger';
        ?>
          <div class="card bg-black text-white mb-3">
            <div class="card-body d-flex align-items-center justify-content-between px-5">
              <div class="d-flex align-items-center">
                <button class="btn btn-info btn-circle-lg me-3">
                    <div class="minus-icon"></div>
                </button>
                <div class="<?= $gain >= 0 ? 'bg-success' : 'bg-danger' ?> status-box me-3">
                    <div>DM</div><div>AF</div>
                </div>
                <div>
                  <div class="fw-bold" style="font-size: 32px;">DMAF</div>
                  <div class="text-white small" style="font-size: 24px;">DMAF Fnd.</div>
                </div>
              </div>
              <div class="text-end">
                <div class="fw-bold" style="font-size: 32px;">42,753.09</div>
                <div class="<?= $gainClass ?> text-black px-2 rounded mt-1 d-inline-block" style="font-size: 24px;">
                  <?= ($gain >= 0 ? '+' : '') . number_format($gain) ?>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

      <!-- Watchlist -->
      <div class="col-md-6">
        <h4 class="text-center mb-4 koulen" style="font-size: 40px;">WATCHLIST</h4>
        <?php for ($i = 0; $i < 2; $i++): ?>
          <div class="card bg-black text-white mb-3">
            <div class="card-body d-flex align-items-center justify-content-between px-5">
              <div class="d-flex align-items-center" >
                <button class="btn btn-info btn-circle-lg me-3">
                    <div class="minus-icon"></div>
                </button>
                <div class="bg-success text-black fw-bold text-center status-box me-3" style="padding: 5px 10px; border-radius: 4px;">
                  <div>DM</div><div>AF</div>
                </div>
                <div>
                  <div class="fw-bold" style="font-size: 32px;">DMAF</div>
                  <div class="text-white small" style="font-size: 24px;">DMAF Fnd.</div>
                </div>
              </div>
              <div class="text-end">
                <div class="fw-bold" style="font-size: 32px;">42,753.09</div>
                <div class="bg-success text-black px-2 rounded mt-1 d-inline-block" style="font-size: 24px;">+7,015</div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>

</body>
</html>

