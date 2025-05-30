document.getElementById('calculate-btn').addEventListener('click', function() {
    // Mendapatkan input dari user
    const weight = parseFloat(document.getElementById('weight').value);
    const exercise = document.getElementById('exercise').value;
    const duration = parseFloat(document.getElementById('duration').value);
  
    // Memastikan input valid
    if (isNaN(weight) || isNaN(duration) || weight <= 0 || duration <= 0) {
      alert('Please enter valid values for weight and duration.');
      return;
    }
  
    // Menentukan kalori yang terbakar berdasarkan latihan dan durasi
    let caloriesBurned = 0;
    let calPerMinute = 0;
  
    switch (exercise) {
      case 'pushups':
        calPerMinute = 7; 
        break;
      case 'running':
        calPerMinute = 10; 
        break;
      case 'cycling':
        calPerMinute = 8; 
        break;
      case 'swimming':
        calPerMinute = 12;
        break;
    }
  
    // Menghitung kalori yang terbakar
    caloriesBurned = calPerMinute * duration;
  
    // Mengonversi kalori ke penurunan berat badan (kg)
    const weightLost = caloriesBurned / 7700;  // 7700 kcal = 1 kg
  
    // Menampilkan hasil
    document.getElementById('calories-burned').textContent = caloriesBurned.toFixed(2);
    document.getElementById('weight-lost').textContent = weightLost.toFixed(4);
  
    // Menampilkan div hasil
    document.getElementById('result').style.display = 'block';
  });