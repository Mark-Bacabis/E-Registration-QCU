$(document).ready(function(){
   $("#addSched").click(function(){
      var btnSave = $("#addSched").val();
      var dateSched = $('#dateSched').val();
      var timeSched = $('#timeSched').val();
      var slot = $('#slot').val();

      $(".schedule-tbl").load("../php/addSched.php",{
         btnSave : btnSave,
         dateSched :  dateSched,
         timeSched : timeSched,
         slot  : slot
      });
   });
});