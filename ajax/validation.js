// Input field

var inputTexts = document.querySelectorAll('input[type="text"]');
var select = document.querySelectorAll('select');


$(document).ready(function(){
   var inputField = document.querySelectorAll('.text-input input');
   var labels = document.querySelectorAll('.text-input label .errMessage');

   for(let i = 0; i < inputField.length; i++){

     
      $(inputField[i]).keyup(function(){
         if(inputField[i].value != '' && $("#sex").change){
            $(labels[i]).load("../php/validation.php");
         }
      });
   }

});

