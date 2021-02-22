let sendingTextBokking = "sending ....";
let normalTextBooking = "send message";
const manageButtonBooking = (state) => {
   switch (state) {
      case "before":
         $("#reserveEnvoyer").attr("disabled", true);
         $("#reserveEnvoyer").text(sendingText);
         $("#reserveEnvoyer").css("cursor", "not-allowed");
         break;
      default:
         $("#reserveEnvoyer").attr("disabled", false);
         $("#reserveEnvoyer").text(normalText);
         $("#reserveEnvoyer").css("cursor", "");
         break;
   }
};
$("#reserveEnvoyer").click(function (e) {
   e.preventDefault();
   manageButtonBooking("before");
   $.ajax({
      type: "POST",
      url: "./reserve_process.php",
      datatype: "json",
      async: false,
      data: {
         Param_name: $("#reserveName").val(),
         Param_email: $("#reserveEmail").val(),
         Param_phone: $("#reservePhone").val(),
         Param_date: $("#reserveDate").val(),
         Param_time: $("#reserveTime").val(),
         Param_people: $("#reservePeople").val(),
         Param_message: $("#reserveMessage").val(),
      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log("error !!!!!!!!!");
      },
      success: function (response) {
         manageButtonBooking("after");
         if (response.succes) {
            $(".book-sent-message").removeClass("d-none");
            $(".book-error-message").addClass("d-none");
            $("input").val("");
            $("textarea").val("");
         } else {
            $(".book-sent-message").addClass("d-none");
            $(".book-error-message").removeClass("d-none");
            $(".book-error-message").html(response.message);
         }
      },
   });
});
