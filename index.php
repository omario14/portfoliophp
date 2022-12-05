<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img width="120px" src="images/logo.png"/>
                
            </a>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>HELLO WORD</h1>
            <p>I'm Chokri Khemira Developer who's passionate about creating digital experiences through problem-solving.</p>
            <a class="main-btn" href="#contact">Contact</a>
        </div>
    </header>
    <section id="features" class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about"> 
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque eum quia magni, voluptatibus nesciunt vero. Reprehenderit fugiat soluta ullam praesentium, omnis autem voluptatibus quae.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>
    <footer id="contact" class="contact">
        <div class="contact-heading">
            <h1>Interested? Contact me! </h1>
            <p>just fill this form and send me your message</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="username" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>