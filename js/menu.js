
/* Add eventlistener to button and toggle class .active on click */
var button = document.getElementById("asf-logo");
button.addEventListener("click", function () {
	console.log("button clicked");
	var element = document.getElementById("mySidenav");
    element.classList.toggle('active');
});