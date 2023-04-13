function validateLieuDepart() {
    const lieuDepartInput = document.getElementById("lieu_depart");
    const lieuDepartValue = lieuDepartInput.value.trim();
    const regExp = /^[a-zA-Z\s]*$/;
    const lieuDepartError = document.getElementById("lieu_depart_error");
  
    if (lieuDepartValue.length < 3 || lieuDepartValue.length > 20 || !regExp.test(lieuDepartValue)) {
      lieuDepartError.textContent = "Le lieu de départ doit comporter entre 3 et 20 caractères et ne doit contenir que des lettres .";
      lieuDepartInput.classList.add("is-invalid");
      lieuDepartInput.classList.remove("is-valid");
      return false;
    } else {
      lieuDepartError.textContent = "";
      lieuDepartInput.classList.remove("is-invalid");
      lieuDepartInput.classList.add("is-valid");
      return true;
    }
  }
  
  function validateDestination() {
    const destinationInput = document.getElementById("destination");
    const destinationValue = destinationInput.value.trim();
    const regExp = /^[a-zA-Z\s]*$/;
    const destinationError = document.getElementById("destination_error");
  
    if (destinationValue.length < 3 || destinationValue.length > 20 || !regExp.test(destinationValue)) {
      destinationError.textContent = "La destination doit comporter entre 3 et 20 caractères et ne doit contenir que des lettres .";
      destinationInput.classList.add("is-invalid");
      destinationInput.classList.remove("is-valid");
      return false;
    } else {
      destinationError.textContent = "";
      destinationInput.classList.remove("is-invalid");
      destinationInput.classList.add("is-valid");
      return true;
    }
  }