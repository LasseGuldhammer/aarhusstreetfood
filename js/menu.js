



    
    
/*Add eventlistener to button and toggle class .active on click*/
var button = document.getElementById("openbutton");
button.addEventListener("click", function () {
	console.log("button clicked");
	var element = document.getElementById("mySidenav");
    element.classList.toggle('active');

});


$( "#openbutton" ).click(function() {
    $( ".frame" ).toggleClass( "closebutton" );
});

/*$( "#mySidenav" ).mouseover(function() {
    $( ".st0" ).removeClass( "st0" );
    $( ".st0" ).addClass( "sthover" );
});

$( "#mySidenav" ).mouseleave(function() {
    $( ".sthover" ).removeClass( "sthover" );
    $( ".sthover" ).addClass( "st0" );
});*/


