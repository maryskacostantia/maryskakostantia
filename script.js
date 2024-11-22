document.addEventListener("DOMContentLoaded", () => {
    
// Kalkulator
const calculatorForm = document.getElementById('calculator-form');
if (calculatorForm) {
	calculatorForm.addEventListener('submit', (e) => {
		e.preventDefault();
	});
}

// Login Form Handling
const loginForm = document.getElementById('login-form');
if (loginForm) {
	loginForm.addEventListener('submit', (e) => {
		e.preventDefault();

		const username = document.getElementById('username').value.trim();
		const password = document.getElementById('password').value.trim();
		const messageDiv = document.getElementById('login-message');

		if (!username || !password) {
			messageDiv.innerText = 'Input tidak lengkap! Silakan isi semua kolom.';
			return;
		}

		if (username === 'admin' && password === 'password123') {
			messageDiv.innerText = 'Login sukses!';
		} else {
			messageDiv.innerText = 'Login gagal! ID atau Password salah.';
		}
	});
}
});
