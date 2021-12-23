document.addEventListener("DOMContentLoaded", function() {

    let first = document.querySelector('.premiere');
    let two = document.querySelector('.deuxieme');

    first.addEventListener("mouseover", function( event ) {
        first.style.backgroundColor = "red";
    });
    first.addEventListener("mouseleave", function( event ) {
        first.style.backgroundColor = "white";
    });

    two.addEventListener("mouseover", function( event ) {
        two.style.backgroundColor = "red";
    });
    two.addEventListener("mouseleave", function( event ) {
        two.style.backgroundColor = "white";
    });

})