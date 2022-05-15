$(document).ready(function(){
   $("#schedDate").change(function(){
      var schedDate = $("#schedDate").val();
      var schedTime = $("#schedTime").val();
      $("#schedTime").load("../php/schedule.php", {
         schedDate:schedDate
      });

      $("#slot-containter").load("../php/slot.php",{
         schedDate:schedDate,
         schedTime:schedTime
      });
   });

   $("#schedTime").change(function(){
      var schedTime = $("#schedTime").val();
      var schedDate = $("#schedDate").val();
      $("#slot-containter").load("../php/slot.php",{
         schedTime:schedTime,
         schedDate:schedDate
      });

   });


});