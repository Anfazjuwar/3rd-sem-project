
function smoothScroll(targetId) {
  const targetElement = document.getElementById(targetId);
  if (targetElement) {
    window.scrollTo({
      top: targetElement.offsetTop,
      behavior: 'smooth',
    });
  }
}

document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.nav-links ul li a');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      smoothScroll(targetId) ;
    });
  });
});




// Function to scroll to the top of the page
function scrollToTop() {
window.scrollTo({
  top: 0,
  behavior: 'smooth', // Add smooth scrolling behavior
});
}

// Show the button when the user scrolls down a certain distance
window.addEventListener('scroll', function () {
const scrollToTopButton = document.getElementById('scrollToTopButton');
if (window.scrollY > 300) {
  scrollToTopButton.style.display = 'block';
} else {
  scrollToTopButton.style.display = 'none';
}
});

// Attach a click event listener to the button
document.getElementById('scrollToTopButton').addEventListener('click', scrollToTop);

























const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
