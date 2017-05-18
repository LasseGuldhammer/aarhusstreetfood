/*

function openNav() {
    document.getElementById("mySidenav").style.width = "50vw";
}        
        

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
} 
*/

function toggleNav() {
    var width = document.getElementById("mySidenav").style.width;
    if (width == 0) {
        document.getElementById("mySidenav").style.width = "50vw";
    } else {
        document.getElementById("mySidenav").style.width = "0";
    }
}