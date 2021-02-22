let sendingText = "sending ....";
let normalText = "send message";
const manageButton = (state) => {
   switch (state) {
      case "before":
         $("#envoyer").attr("disabled", true);
         $("#envoyer").text(sendingText);
         $("#envoyer").css("cursor", "not-allowed");
         break;
      default:
         $("#envoyer").attr("disabled", false);
         $("#envoyer").text(normalText);
         $("#envoyer").css("cursor", "");
         break;
   }
};
$("#envoyer").click(function (e) {
   e.preventDefault();
   manageButton("before");
   $.ajax({
      type: "POST",
      url: "./contact_process.php",
      datatype: "json",
      async: false,
      data: {
         Param_name: $("#name").val(),
         Param_email: $("#email").val(),
         Param_subject: $("#subject").val(),
         Param_message: $("#message").val(),
      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log("error !!!!!!!!!");
      },
      success: function (response) {
         manageButton("after");
         if (response.succes) {
            $(".sent-message-contact").removeClass("d-none");
            $(".error-message-contact").addClass("d-none");
            $("input").val("");
            $("textarea").val("");
         } else {
            $(".sent-message-contact").addClass("d-none");
            $(".error-message-contact").removeClass("d-none");
            $(".error-message-contact").html(response.message);
         }
      },
   });
});
