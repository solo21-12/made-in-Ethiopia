const form = document.getElementById("checkout-form");

form.addEventListener("submit", function (event) {
  event.preventDefault();
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const address = document.getElementById("address").value.trim();
  const city = document.getElementById("city").value.trim();
  const state = document.getElementById("state").value.trim();
  const zip = document.getElementById("zip").value.trim();
  const cardNumber = document.getElementById("card-number").value.trim();
  const expirationDate = document
    .getElementById("expiration-date")
    .value.trim();
  const securityCode = document.getElementById("security-code").value.trim();

  let emailRegex = /^\S+@\S+\.\S+$/;


  if (name === "") {
    document.getElementById("name").style.borderColor = "red";
  }
  if (email === "") {
    document.getElementById("email").style.borderColor = "red";
  }
  if (address === "") {
    document.getElementById("address").style.borderColor = "red";
  }
  if (city === "") {
    document.getElementById("city").style.borderColor = "red";
  }
  if (state === "") {
    document.getElementById("state").style.borderColor = "red";
  }
  if (zip === "") {
    document.getElementById("zip").style.borderColor = "red";
  }
  if (cardNumber === "") {
    document.getElementById("card-number").style.borderColor = "red";
  }
  if (expirationDate === "") {
    document.getElementById("expiration-date").style.borderColor = "red";
  }
  if (securityCode === "") {
    document.getElementById("security-code").style.borderColor = "red";
  } 
  else {
    // Submit the form to the server
    form.submit();
  }
});
