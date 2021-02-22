$(document).ready(function () {
   $(".changeMood").click(function (e) {
      e.preventDefault();
      let mode = $(this).attr("mode");
      document.documentElement.setAttribute("data-theme", mode);
   });
   $("li[data-filter]").click(function (e) {
      e.preventDefault();
      $([document.documentElement, document.body]).animate(
         {
            scrollTop: $(".menu-container").offset().top - 300,
         },
         500
      );
   });
});

let headerHeright = $("header").outerHeight();
let topbarHeight = $("#topbar").outerHeight();
let totalHeaderHeight = headerHeright + topbarHeight - 60;

$(".single-page main").css("margin-top", totalHeaderHeight);
