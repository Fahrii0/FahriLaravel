document.getElementById('LoginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const correctUsername = 'fahri';
    const correctPassword = '12345';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword) {
        alert("Selamat Datang");
        window.location.href = '/index';
    } else {
        alert("Username atau password tidak sesuai");
    }
});