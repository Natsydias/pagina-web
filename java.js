$(document).ready(function() {
    $('#menu-toggle').click(function() {
      $('#menu').toggleClass('open');
    });
  });
window.onload = function() {
    var menuItems = document.getElementById("menu").getElementsByTagName("li");
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].onclick = function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        }
    }
}