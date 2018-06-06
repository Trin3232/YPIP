console.log('it works');

// Get New Date for Footer

var d = new Date();
document.getElementById("update-year-text").innerHTML = d.getFullYear();

// On click event to change Accommodation in Navbar to a Link

function gotoaccommad(){
  window.location.href="accommad.html";
}

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var head = document.getElementByID("head");

// Get the offset position of the navbar
var sticky = head.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    head.classList.add("sticky")
  } else {
    head.classList.remove("sticky");
  }
}


// Animate Freebies Images

$('.break-fist').addClass('animated bounceIn');
