
function erreur_message(id, message) {
  document.getElementById(id).innerHTML = message;
}

function validation() {
  var username = document.getElementById('name');
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var confirmPassword = document.getElementById('cpass');
  var usernameValue = document.getElementById('name').value.trim();
  var emailValue = document.getElementById('email').value.trim();
  var passwordValue = document.getElementById('password').value.trim();
  var confirmPasswordValue = document.getElementById('cpass').value.trim();

  if (usernameValue == "") {
      username.style.border = "1px solid #ff8471";
      erreur_message('error_name', "Remplir nom d'utilisateur");
    }  else if (usernameValue.length < 3) {
        password.style.border = "1px solid #ff8471";
        erreur_message('error_name', 'Le nom doit contenir au moins 3 caractères');
  } else if (!validateUsername(usernameValue)) {
      username.style.border = "1px solid #ff8471";
      erreur_message('error_name', 'Le nom ne peut contenir que des lettres, des chiffres, des tirets et des underscores');
  } else {
      username.style.border = "1px solid #94f7e6";
      erreur_message('error_name', '');
  }

  if (emailValue == "") {
      email.style.border = "1px solid #ff8471";
      erreur_message('error_email', 'Remplir email');
  } else if (!validateEmail(emailValue)) {
      email.style.border = "1px solid #ff8471";
      erreur_message('error_email', 'Email invalide');
  } else {
      email.style.border = "1px solid #94f7e6";
      erreur_message('error_email', '');
  }

  if (passwordValue == "") {
      password.style.border = "1px solid #ff8471";
      erreur_message('error_password', 'Remplir mot de passe');
  } else if (passwordValue.length < 6) {
      password.style.border = "1px solid #ff8471";
      erreur_message('error_password', 'Le mot de passe doit contenir au moins 6 caractères');
  } else if (!validatePassword(passwordValue)) {
      password.style.border = "1px solid #ff8471";
      erreur_message('error_password', 'Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial');
  } else {
      password.style.border = "1px solid #94f7e6";
      erreur_message('error_password', '');
  }

  if (confirmPasswordValue == "") {
      confirmPassword.style.border = "1px solid #ff8471";
      erreur_message('error_cpass', 'Remplir la confirmation du mot de passe');
  } else if (passwordValue != confirmPasswordValue) {
      confirmPassword.style.border = "1px solid #ff8471";
      erreur_message('error_cpass', 'Les mots de passe ne correspondent pas');
  } else {
      confirmPassword.style.border = "1px solid #94f7e6";
      erreur_message('error_cpass', '');
  }

  if (usernameValue == "" || emailValue == "" || passwordValue == "" || confirmPasswordValue == "" || !validateUsername(usernameValue) || !validateEmail(emailValue) || passwordValue.length < 6 || !validatePassword(passwordValue) || passwordValue != confirmPasswordValue) {
      return false;
  } else {
      return true;
  }
}

function validateUsername(username) {
  //  valider le nom d'utilisateur
  var expReg = /^[a-zA-Z0-9\-]+$/;
  return expReg.test(username);
}

function validateEmail(email) {
  //  valider un email
  var expReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return expReg.test(email);
}

function validatePassword(password) {
  // valider la complexité du mot de passe
  var expReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;
  return expReg.test(password);
}
