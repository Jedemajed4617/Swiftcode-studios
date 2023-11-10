const openPhoneNavButton = document.getElementById("openPhoneNav");
const closePhoneNavButton = document.getElementById("closePhoneNav");
const phoneNav = document.querySelector(".header__phoneNav");

openPhoneNavButton.addEventListener("click", function() {
  phoneNav.classList.add("phoneNavOpen");
});

closePhoneNavButton.addEventListener("click", function() {
  phoneNav.classList.remove("phoneNavOpen");
});