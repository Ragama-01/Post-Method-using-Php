function login() {
    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;

    // Implement your login logic here (e.g., check against a database)

    console.log('Login:', username, password);
}

function register() {
    var newUsername = document.getElementById('newUsername').value;
    var newPassword = document.getElementById('newPassword').value;

    // Implement your registration logic here (e.g., store in a database)

    console.log('Register:', newUsername, newPassword);
}
