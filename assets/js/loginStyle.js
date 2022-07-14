$("#registrar").click(function() {
    $(".message").css("transform", "translateX(100%)");
    if ($(".message").hasClass("login")) {
        $(".message").removeClass("login");
    }
    $(".message").addClass("registrar");
});

$("#login").click(function() {
    $(".message").css("transform", "translateX(0)");
    if ($(".message").hasClass("login")) {
        $(".message").removeClass("registrar");
    }
    $(".message").addClass("login");
});
