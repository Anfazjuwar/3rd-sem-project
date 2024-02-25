
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
    const navLinks = document.querySelectorAll('nav .links li a');
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

 


//sendemail

function sendemail(){
  Email.send({
    Host : "example",
    Username :"example",
    password :"example ",
    To : 'example@gmail.com ',
    From : document.getElementById('email').value,
    Subject : "New Contact from Enquiry",
    Body : "Name : " + document.getElementById("fname").value + "<br> Email : " +document.getElementById("email").value+"<br> Info : "+document.getElementById("help").value
  }).then(
    message => alert("Message sent succesfully")
  );
  
}

function sendemail(){
  Email.send({
    Host : "example",
    Username :"example",
    password :"example ",
    To : 'example@gmail.com ',
    From : document.getElementById('email').value,
    Subject : "New Contact from Enquiry",
    Body : "<br> Email : " +document.getElementById("email").value 
  }).then(
    message => alert("We will reply to your email soon")
  );
  
}



function reloadPage() {
    window.location.reload();
  }
