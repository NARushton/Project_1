
//function triggered when hamburger icon is clicked, which adds (or removes if already assigned) 'active' class to 'header_nav'
//resulting in the nav bar displaying/being hidden
$(document).ready(function() {
    $("#nav_toggle_button").click(function(e) {
        $(".header_nav").toggleClass("active");
    })
})