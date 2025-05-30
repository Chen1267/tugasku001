document.querySelector('.hamburger').addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('active');
});

document.querySelector('.contact-form').addEventListener('submit', (e) => {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    
    if (!name || !email || !message) {
        e.preventDefault(); // Mencegah pengiriman form
        alert('Please fill out all fields.');
    }
});function showRegisterForm() {
    document.getElementById("form-login").style.display = "none";
    document.getElementById("form-register").style.display = "block";
}

function showLoginForm() {
    document.getElementById("form-login").style.display = "block";
    document.getElementById("form-register").style.display = "none";
}
