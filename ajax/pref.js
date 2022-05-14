$(document).ready(function(){
   $('#checkbox').change(function(){
      
      var statusWeb = $('.status-web').html();

      $('.on-off').load("../php/webpref.php",{
         status: statusWeb
      })
   });
});