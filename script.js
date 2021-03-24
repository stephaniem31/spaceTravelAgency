const message =
  "We thank you for your request. Will contact you as soon as possible.";
document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
  });