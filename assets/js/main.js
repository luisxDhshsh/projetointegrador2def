$(document).ready(function() {
    $(".menu-icon").click(function() {
        if($(".nav-links").css("display") == "none") {
            $(".nav-links").css("display", "block");
            $(".nav-links > span").css("display", "block")
        } else {
            $(".nav-links").css("display", "none");
            $(".nav-links > span").css("display", "none");
        }
    });
    $(".nav-links > span").click(function () {
        $(".nav-links").css("display", "none")
    })
});