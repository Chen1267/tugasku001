<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Tutorials</title>
  <link rel="stylesheet"  href="tuto.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Tutorials</title>
    <link rel="stylesheet" href="tuto.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<section id="push-ups" class="workout-cards">
    <h2>Push-Up Tutorial</h2>
    <p>Push-ups are a fundamental exercise for building upper body strength. Follow these steps:</p>
    <ol>
        <li>Start in a plank position with your hands slightly wider than shoulder-width apart.</li>
        <li>Lower your body until your chest nearly touches the floor.</li>
        <li>Push through your hands to return to the starting position.</li>
        <li>Keep your body in a straight line throughout the movement.</li>
    </ol>
    <video controls class="tutorial-video">
        <source src=" pushup.mp4" type="video/mp4">
    </video>
   
</section>
<section id="sit-ups" class="workout-cards">
    <h2>Sit-Up Tutorial</h2>
    <p>Sit-ups are a great way to strengthen your core. Follow these steps:</p>
    <ol>
        <li>Lie on your back with your knees bent and feet flat on the floor.</li>
        <li>Cross your arms over your chest or place your hands behind your head.</li>
        <li>Engage your core and lift your upper body towards your knees.</li>
        <li>Lower back down to the starting position.</li>
    </ol>
    <video controls class="tutorial-video">
        <source src="situp.mp4" type="video/mp4">
    </video>

</section>

<section id="squats" class="workout-cards">
    <h2>Squat Tutorial</h2>
    <p>Squats are excellent for building lower body strength. Follow these steps:</p>
    <ol>
        <li>Stand with your feet shoulder-width apart.</li>
        <li>Lower your body as if sitting back into a chair.</li>
        <li>Keep your chest up and knees behind your toes.</li>
        <li>Return to the starting position.</li>
    </ol>
    <video controls class="tutorial-video">
        <source src="squat-tutorial.mp4" type="video/mp4">
    </video>
 
</section>

</body>
</html>
