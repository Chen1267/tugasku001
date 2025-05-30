<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calorie Burn Calculator</title>
  <link rel="stylesheet" href="kalori.css">
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

  <div class="container">
    <h1>Calorie Burn Calculator</h1>
    
    <div class="input-section">
      <label for="weight">Enter your weight (kg):</label>
      <input type="number" id="weight" placeholder="Enter weight in kg" required>
    </div>
    
    <div class="input-section">
      <label for="exercise">Select Exercise:</label>
      <select id="exercise">
        <option value="pushups">Push-ups</option>
        <option value="running">Running (6 mph)</option>
        <option value="cycling">Cycling (12-14 mph)</option>
        <option value="swimming">Swimming</option>
      </select>
    </div>
    
    <div class="input-section">
      <label for="duration">Duration (minutes):</label>
      <input type="number" id="duration" placeholder="Enter duration in minutes" required>
    </div>
    
    <button id="calculate-btn">Calculate Calories Burned</button>
    
    <div id="result" class="result" style="display:none;">
      <p>Total Calories Burned: <span id="calories-burned">0</span> kcal</p>
      <p>Weight Lost (kg): <span id="weight-lost">0</span> kg</p>
    </div>
  </div>

  <script src="kalori.js"></script>
</body>
</html>
