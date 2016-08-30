
$(document).ready(function(){

    if(Getpostion()){
        alert("top!") ;
    }

});
$(window).load(function(){

    //PARALLAX BACKGROUND
    $(window).stellar({
        horizontalScrolling: false
    })