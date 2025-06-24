<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Settings</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <style>
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background: linear-gradient(to bottom, #1f1f1f, #00e1ff);
        color: white;
    }

    .settings-card {
      background-color: black;
      padding: 2rem;
      max-width: 483px;
      height: 800px;
      margin: auto;
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .settings-card .btn,
    .settings-card .form-switch .form-check-input {
      margin-bottom: 1rem;
    }

    .settings-card button,
    .settings-card .form-switch {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .toggle-btn {
      padding: 0.6rem 1.2rem;
    }
    .form-check-input:checked {
        background-color: #00e1ff;
        order-color: #00e1ff;
    }


    .footer-text {
      margin-top: 1rem;
      font-size: 0.8rem;
      color: #ccc;
      text-align: center;
    }
    .koulen {
        font-family: 'Koulen', sans-serif;
    }

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black px-4 ">
    <a class="navbar-brand text-white" href="#">
      <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47715 0 0 4.47715 0 10V35C0 35.5523 0.447716 36 1 36H13.2678C13.652 36 14.0023 35.7798 14.1689 35.4336L22.1977 18.7459C22.9245 17.2354 25.0755 17.2354 25.8023 18.7459L33.8311 35.4336C33.9977 35.7798 34.348 36 34.7322 36H37.8621C38.5989 36 39.0827 35.2303 38.7633 34.5664L36.1415 29.1171C35.5026 27.7893 36.4702 26.25 37.9437 26.25H64.0563C65.5298 26.25 66.4974 27.7893 65.8585 29.1171L63.2367 34.5664C62.9173 35.2304 63.4011 36 64.1378 36H74C74.5523 36 75 35.5523 75 35V10C75 4.47715 70.5229 0 65 0H10ZM10.8621 39C11.5989 39 12.0827 39.7696 11.7633 40.4336L9.14146 45.8829C8.50262 47.2107 9.47022 48.75 10.9437 48.75H37.0563C38.5298 48.75 39.4974 47.2107 38.8585 45.8829L36.2367 40.4336C35.9173 39.7696 36.4011 39 37.1379 39H40.2678C40.652 39 41.0023 39.2202 41.1689 39.5664L49.1977 56.2541C49.9245 57.7646 52.0755 57.7646 52.8023 56.2541L60.8311 39.5664C60.9977 39.2202 61.348 39 61.7322 39H74C74.5523 39 75 39.4477 75 40V65C75 70.5229 70.5229 75 65 75H10C4.47715 75 0 70.5229 0 65V40C0 39.4477 0.447715 39 1 39H10.8621Z" fill="#497C9B"/>
        </svg>
         Home
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


<!-- Settings Content -->
<div class="settings-card text-center">
  <h2 class="koulen" style="margin-bottom: 5rem;">SETTING</h2>

  <button class="btn btn-info" style="width: 353px; height: 74px; margin-left: 35px;">
    <h3>Start Free Trial</h3>
    </button>
  
    <div class="d-flex justify-content-center align-items-center my-3 gap-3">
        <!-- Subscription Button -->
        <div style="width: 210px; height: 74px;">
            <button class="btn btn-info text-black w-100 h-100 d-flex align-items-center justify-content-center m-0">
                <h3 class="m-0">Subscription</h3>
            </button>
        </div>

        <!-- Theme Toggle Box with label on top -->
        <div style="width: 128px; height: 74px; background-color: white; color: black; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
            <div class="text-center">
                <div class="fw-bold" style="font-size: 24px; line-height: 1; margin-top: 15px;">Theme</div>
                <div class="form-check form-switch d-flex justify-content-center mt-1">
                    <input class="form-check-input" style="font-size: 24px;" type="checkbox" id="themeSwitch">
                </div>
            </div>
        </div>

    </div>


  <div class="d-flex justify-content-center align-items-center" style="margin-left: 15px; margin-bottom: 5rem;" >
    <button class="btn btn-info text-black d-flex align-items-center justify-content-center me-3 toggle-btn" style="font-size: 32px; width: 70px; height: 52px;">$</button>
    <button class="btn btn-info text-black d-flex align-items-center justify-content-center me-3 toggle-btn" style="font-size: 32px; width: 126px; height: 52px;">USA</button>
    <button class="btn btn-info text-black d-flex align-items-center justify-content-center me-3 toggle-btn" style="font-size: 32px; width: 118px; height: 52px;">EN</button>
  </div>

  <h2 class="koulen" style="margin-bottom: 3rem;">NOTIFICATION</h2>
  <div class="form-check form-switch d-flex align-items-center justify-content-between" style="padding: 0 40px;">
    <label class="form-check-label" style="font-size: 24px;" for="priceAlert">Activate Price Alerts</label>
    <input class="form-check-input" style="font-size: 20px;" type="checkbox" id="priceAlert">
  </div>
  <div class="form-check form-switch d-flex align-items-center justify-content-between" style="padding: 0 40px;">
    <label class="form-check-label" style="font-size: 24px;" for="eventAlert">Activate Event Alerts</label>
    <input class="form-check-input" style="font-size: 20px;" type="checkbox" id="eventAlert">
  </div>

  <p class="footer-text text-white" style="font-size: 18px; padding-top: 100px;">Version 0.1 DMAF CORP</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
