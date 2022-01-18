$(document).ready(function () {
    $("#header").mouseenter(function () {
        $("#atas").animate({ fontSize: "70px" }, "fast");
        $("#nav").animate({ opacity: "0.5" }, "fast");
    });

    $("#header").mouseleave(function () {
        $("#atas").animate({ fontSize: "40px" }, "fast");
        $("#nav").animate({ opacity: "1" }, "fast");
    });
});
