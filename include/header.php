<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/style.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
  <nav class="primary-nav flex">
    <div class="brand flex">
      <div class="logo-container">
        <i class="bi bi-pinterest"></i>
      </div>
      <button class="search-btn">
        <i class="bi bi-search"></i>
      </button>
      <div class="search-data">
        <input id="" class="search-text" type="text" name="search-text" placeholder="Search Items...">
        <div class="icon-container">
          <i class="bi bi-search"></i>
        </div>
      </div>
    </div>
    <button class="sidebar-toggle">
      <i class="bi bi-list"></i>
    </button>
    <ul class="nav-list flex">
      <li class="nav-list__item nav-list__item--active">
        Home
      </li>
      <li class="nav-list__item">
        Furniture
      </li>
      <li class="nav-list__item">
        About
      </li>
      <li class="nav-list__item">
        Contact
      </li>
    </ul>
  </nav>
