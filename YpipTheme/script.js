console.log('it works');

// Get New Date for Footer

var d = new Date();
document.getElementById("update-year-text").innerHTML = d.getFullYear();

// On click event to change Accommodation in Navbar to a Link

function gotoaccommad(){
  window.location.href="https://www.yourpartnerinproperty.co.uk/accommodation/";
}

function gotoservices(){
  window.location.href="https://www.yourpartnerinproperty.co.uk/servicesnew/";
}

// When the user scrolls the page, execute myFunction

window.onscroll = function() {myFunction()};

// WHAT IS IN THE FUNCTION.PHP FILE

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer);

// $handle is the name for the script.
// $src defines where the script is located.
// $deps is an array that can handle any script that your new script depends on, such as jQuery.
// $ver lets you list a version number.
// $in_footer is a boolean parameter (true/false) that allows you to place your scripts in the footer of your HTML document rather then in the header, so that it does not delay the loading of the DOM tree.
