<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Tour & Travel</title>
</head>

<body>
    
    <header>
        <div class="fa fa-bars" id="menu-bar"></div>
        <a href="#" class="logo"><span>g</span>anapati.</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-user" id="login-btn"></i>
        </div>
    </header>
    <div class="login-form-container">
        <i class="fa fa-times" aria-hidden="true" id="form-close"></i>
        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="bond07@gmail.com" name="email">
            <input type="password" class="box" placeholder="password" name="password">
            <input type="submit" class="btn" value="login now">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="">register</a></p>
        </form>
    </div>
    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
            <a href="#" class="btn">Discover More</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/home-1.mp4"></span>
            <span class="vid-btn" data-src="images/home-2.mp4"></span>
            <span class="vid-btn" data-src="images/home-3.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/home-1.mp4" alt="" id="vid-slider" loop autoplay muted></video>
        </div>
    </section>
    <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book.jpg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guest">
                </div>
                <div class="inputBox">
                    <h3>arrival</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>depart</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>