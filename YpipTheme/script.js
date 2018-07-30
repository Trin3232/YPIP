// Get New Date for Footer

// var d = new Date();
// document.getElementById("update-year-text").innerHTML = d.getFullYear();

var d = new Date();
var update_year_text = document.getElementById("update-year-text");
if(update_year_text != null){
	update_year_text.innerHTML = d.getFullYear();
}

// On click event to change Accommodation in Navbar to a Link

function gotoaccommad(){
  window.location.href="https://www.yourpartnerinproperty.co.uk/accommodation/";
}

function gotoservices(){
  window.location.href="https://www.yourpartnerinproperty.co.uk/servicesnew/";
}

// When the user scrolls the page, execute myFunction

// window.onscroll = function() {myFunction()};
