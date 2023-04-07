function erreur_message(id, message) {
  document.getElementById(id).innerHTML = message;
}

function validation() {
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var emailValue = document.getElementById('email').value.trim();
  var passwordValue = document.getElementById('password').value.trim();

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

  if (emailValue == "" || passwordValue == "" || !validateEmail(emailValue) || passwordValue.length < 6 || !validatePassword(passwordValue)) {
      return false;
  } else {
      return true;
  }
}

function validateEmail(email) {
  // Expression régulière pour valider un email
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

function validatePassword(password) {
  // Expression régulière pour valider la complexité du mot de passe
  var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;
  return re.test(password);
}