$(document).ready(function() {
    $(".menu-icon").click(function() {
        if($(".nav-links").css("display") == "none") {
            $(".nav-links").css("display", "block");
        } else {
            $(".nav-links").css("display", "none");
        }
    });
});