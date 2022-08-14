
/**
 * header active on scroll
 */

// this block of code is for the input buttons
// get all the inputs
const inputs = document.querySelectorAll(".input");

// functions
const handleFocus = (e) => {
  // get the parent
  const parent = e.target.parentElement;
  // get the icon
  const icon = e.target.nextElementSibling;

  //add the focused class
  parent.classList.add("focused");

  // then remove success and error
  parent.classList.remove("correct");
  parent.classList.remove("wrong");

  // then remove the icon
  icon.className = "icon fas";
};

const handleBlur = (e) => {
  // get the parent
  const parent = e.target.parentElement;
  // get the icon
  const icon = e.target.nextElementSibling;

  if (e.target.checkValidity()) {
    parent.classList.add("correct");
    icon.classList.add("fa-check");
  } else {
    parent.classList.add("wrong");
    icon.classList.add("fa-exclamation");
  }
};
// add event listeners on the inputs
inputs.forEach((input) => {
  input.addEventListener("focus", handleFocus);
  input.addEventListener("blur", handleBlur);
  // input.addEventListener('input', handleInput);
});
// the end
const buttonRight = document.getElementById("right-btn");

const buttonLeft = document.getElementById("left-btn");

buttonRight.onclick = function(){
  document.getElementById("promotions-blk-container").scrollLeft += 20;
}

buttonLeft.onclick = function(){
  document.getElementById("promotions-blk-container").scrollLeft -= 20;
}
// 
const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  window.scrollY >= 10
    ? header.classList.add("active")
    : header.classList.remove("active");
});
/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navbar = document.querySelector("[data-navbar]");
const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");

const navToggleFunc = function () {
  navToggleBtn.classList.toggle("active");
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
};


navToggleBtn.addEventListener("click", navToggleFunc);
overlay.addEventListener("click", navToggleFunc);

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", navToggleFunc);
}
