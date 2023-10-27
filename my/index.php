<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital@1&display=swap" rel="stylesheet">
    <title>Home page</title>
</head>
<body>
<div>
    <h1 class="header1">Home Bakery<hr></H1>
    <ul>
        <?php 
        session_start();
        if(isset($_SESSION['login']))//checks the status of login
        {
        echo '<li ><a class="active" href="logout.php">Logout</a></li>';
        echo '<li ><a class="active" href="#">'.$_SESSION['login'].'</a></li>';
        echo '<li><a href="index.html">Home</a></li>';
        echo '<li><a href="catalog.php">Catalog</a></li>';
        echo '<li><a href="#">Contact</a></li>';
        }
        else
        {
        echo '<li style=><a class="active" href="Registration.html">Registration</a></li>';
        echo '<li style="><a class="active" href="login.html">Login</a></li>';
        echo '<li><a href="index.html">Home</a></li>';
        echo '<li><a href="catalog.php">Catalog</a></li>';
        echo '<li><a href="#">Contact</a></li>';
        } ?>
    </ul>
</div>
<img class="bannerimg" src="banner1.jpg">
<section class="product">
    <h2 class="product-category">Best selling</h2>
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="keksik.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to whislist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">keksik</h2>
                <p class="product-short-des">a short line about the cloth..</p>
                <span class="price">$5</span><span class="actual-price">$10</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="keksik.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to whislist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">keksik</h2>
                <p class="product-short-des">a short line about the cloth..</p>
                <span class="price">$5</span><span class="actual-price">$10</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="keksik.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to whislist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">keksik</h2>
                <p class="product-short-des">a short line about the cloth..</p>
                <span class="price">$5</span><span class="actual-price">$10</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="keksik.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to whislist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">keksik</h2>
                <p class="product-short-des">a short line about the cloth..</p>
                <span class="price">$5</span><span class="actual-price">$10</span>
            </div>
        </div>
    </div>
</section>
<div class="catalog2">
    <div class="rcolumn">
        <img class="rcolumn" src="banner.jpg">
      </div> 
      <div class="rcolumn">
        <h1 class="header1" style="color: black;">Our Baking</h1>
        <il>
            <li><a href="#">Cake</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Bread</a></li>
            <li><a href="#">biscuit</a></li>
        </il>
      </div>
</div>
</body>
</html>