$(document).ready(function(){
   $("#email").keyup(function(){
      var email = $("#email").val();

      $("#email-mess").load("../php/emailValidation.php", {
         email:email
      });

   });
});