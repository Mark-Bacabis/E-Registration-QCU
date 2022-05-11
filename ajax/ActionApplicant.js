$(document).ready(function(){
   $(document).on('click', 'button[data-role=approve]', function(){
      alert($(this).data("id"));

      

   });
});