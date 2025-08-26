<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>News Overview</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">

  <style>
    .navbar {
      border-bottom: 2px solid #00e1ff;
    }
    .card-img-top {
        width: 100%;
        height: 277px;
        object-fit: cover;
        margin: 0 ;
    }
    .card {
        border: 1px solid grey !important; 
        border-radius: 10px; 
    }
    .card-body {
        margin-left: -10px; 
        padding-left: 10px; 
    }
     </style>
</head>
<body class="bg-black text-white">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black px-4 ">
    <a class="navbar-brand text-white" href="homepage.html">
        <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47715 0 0 4.47715 0 10V35C0 35.5523 0.447716 36 1 36H13.2678C13.652 36 14.0023 35.7798 14.1689 35.4336L22.1977 18.7459C22.9245 17.2354 25.0755 17.2354 25.8023 18.7459L33.8311 35.4336C33.9977 35.7798 34.348 36 34.7322 36H37.8621C38.5989 36 39.0827 35.2303 38.7633 34.5664L36.1415 29.1171C35.5026 27.7893 36.4702 26.25 37.9437 26.25H64.0563C65.5298 26.25 66.4974 27.7893 65.8585 29.1171L63.2367 34.5664C62.9173 35.2304 63.4011 36 64.1378 36H74C74.5523 36 75 35.5523 75 35V10C75 4.47715 70.5229 0 65 0H10ZM10.8621 39C11.5989 39 12.0827 39.7696 11.7633 40.4336L9.14146 45.8829C8.50262 47.2107 9.47022 48.75 10.9437 48.75H37.0563C38.5298 48.75 39.4974 47.2107 38.8585 45.8829L36.2367 40.4336C35.9173 39.7696 36.4011 39 37.1379 39H40.2678C40.652 39 41.0023 39.2202 41.1689 39.5664L49.1977 56.2541C49.9245 57.7646 52.0755 57.7646 52.8023 56.2541L60.8311 39.5664C60.9977 39.2202 61.348 39 61.7322 39H74C74.5523 39 75 39.4477 75 40V65C75 70.5229 70.5229 75 65 75H10C4.47715 75 0 70.5229 0 65V40C0 39.4477 0.447715 39 1 39H10.8621Z" fill="#497C9B"/>
        </svg>
        <b>What’s New</b>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
              <li class="nav-item"><a class="nav-link text-white" href="homepage.html">Home</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="news-overview.php">News</a></li>
             <li class="nav-item"><a class="nav-link text-white" href="index.html">Search</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="portfolio.php">Portfolio</a></li>
             <li class="nav-item"><a class="nav-link text-white" href="settings.html">Settings</a></li>
              <li class="nav-item ms-3">
                <img src="assets/profile.jpeg" alt="Profile" width="35" height="35" class="rounded-circle border border-light">
              </li>
            </ul>
        </div>
    </nav>

<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php for ($i = 0; $i < 8; $i++): ?>
    <div class="col">
      <div class="card h-100 bg-black text-white border-light p-3">
        <a href="detailed-news.html" class="text-decoration-none text-white">
          <img src="assets/news1.jpeg" class="card-img-top" alt="News">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Alguna Noticia</h5>
            <p class="card-text" style="font-size: 1rem;">
            Algo paso en el mercado y entonces ahora esta notica esta aqui para que el publioc lo pueda leer y formar su propia opinion sobre el tema que esta en mano...
            </p>
          </div>
        </a>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
