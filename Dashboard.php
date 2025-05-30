
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitList - Your Fitness Journey Starts Here</title>
    <link rel="stylesheet" href="styless.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>



<body>

    <!-- Navigation Bar -->
<nav class="navbar">
    <div class="logo">
        <h1>FitList</h1>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Enjoy</header>
        <ul>
            <li><a href="Dashboard.php"><i class="fas fa-qrcode"></i> Dashboard</a></li>
            <li><a href="Tutorial.php"><i class="fas fa-chalkboard-teacher"></i> Tutorial</a></li>
            <li><a href="Calendar.php"><i class="fas fa-calendar-week"></i> Calendar</a></li>
            <li><a href="kalori.php"><i class="fa-solid fa-calculator"></i> Kalori</a></li>
            <li><a href="logout.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Transform Your fitness journey</h1>
            <p>Track, plan, and achieve your fitness goals with FitList</p>
        </div> 
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h2>Why Choose FitTrackPro?</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <i class="fas fa-dumbbell"></i>
                <h3>Workout Tracking</h3>
                <p>Log and monitor your workouts with ease</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-tasks"></i>
                <h3>Custom Plans</h3>
                <p>Create personalized fitness plans</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Progress Analytics</h3>
                <p>Visual insights into your fitness journey</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p>Welcome to FitList, your ultimate fitness companion! Whether you're a beginner or a seasoned fitness enthusiast, FitList helps you stay on top of your daily workout routines and track your progress. We believe in the power of consistency, and that every push-up, sit-up, pull-up, and lat pull-down brings you one step closer to your fitness goals.

Our mission is simple: to provide you with a straightforward, easy-to-use platform that makes tracking your daily activities a breeze. With FitList, you can log all your workouts, monitor your strength and endurance, and stay motivated to push through new challenges.

We’re passionate about building muscle, improving fitness, and inspiring people to lead healthier lives. Join us in your fitness journey today!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Send me</h2>
        <form class="contact-form" action="mailto:chenchinfong123@gmail.com?subject=Contact to FitList&body=" method="POST" enctype="text/plain">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Send Message</button>
        </form>
    </section>


    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>FitList</h3>
                <p>Your ultimate fitness companion</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#about">About</a>
            </div>
            <div class="footer-section">
                <h3>Connect</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 FitList. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
