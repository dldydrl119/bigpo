$(document).ready(function() {
    $("#list>button:first-of-type").click(function() {
        $("#pop").fadeIn();
        $("#pop").addClass("black");
    });
    $("#pop>article").click(function() {
        $(this).parent().fadeOut();
    });
});