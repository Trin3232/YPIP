console.log('it works');

// Get New Date for Footer

var d = new Date();
document.getElementById("update-year-text").innerHTML = d.getFullYear();

// On click event to change Accommodation in Navbar to a Link

function gotoaccommad(){
  window.location.href="accommad.html";
}
