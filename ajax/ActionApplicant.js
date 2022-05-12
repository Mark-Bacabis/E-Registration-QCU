$(document).ready(function(){
   $(document).on('click', 'button[data-role=approve]', function(){
      var reg_num = $(this).data("id");
      
      $("#tbl-box").load('../method/approve_applicants.php', {
         regNum:reg_num
      });
      
      $('.summary').load('../method/overview.php',{
         
      });
      
      

   });


   $(document).on('click', 'button[data-role=decline]', function(){
      var reg_num = $(this).data("id");
      
      $("#tbl-box").load('../method/decline_applicants.php', {
         regNum:reg_num
      });
      
      $('.summary').load('../method/overview.php',{
         
      });
      
      

   });
});