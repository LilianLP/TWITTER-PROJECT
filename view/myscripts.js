function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_confirm").value;
    if (password != confirmPassword) {
      alert("Les mots de passe ne correspondent pas");
      return false;
    }
    return true;
  }

  function validateAge() {
    var dob = new Date(document.getElementById("date").value);
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();
    var m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
      age--;
    }
    if (age < 13) {
      alert("Vous devez avoir au moins 13 ans pour vous inscrire.");
      return false;
    }
    return true;
  }
  