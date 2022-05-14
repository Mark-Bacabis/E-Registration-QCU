$(document).ready(function(){
   $("#status").change(function(){
      var status = $("#status").val();
      $("#tbl-box-approved").load("../php/approvedAjax.php", {
         status:status
      });
   });
});