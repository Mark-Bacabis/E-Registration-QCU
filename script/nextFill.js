
// Progress bar
var progressNumber = document.getElementById("progress").querySelectorAll('.number');

// Buttons
var nxtButton1 = document.getElementById('next1');
var nxtButton2 = document.getElementById('next2');
var nxtButton3 = document.getElementById('next3');
var cnclBtn = document.getElementById('cancel');
var backBtn1 = document.getElementById('back1');
var backBtn2 = document.getElementById('back2');
var backBtn3 = document.getElementById('back3');

//Containers
var demographContainer1 = document.querySelector('.demographic-box');
var demographContainer2 = document.querySelector('.demographic-box2');
var contactSched = document.querySelector('.contact-sched');
var documentContainer = document.querySelector('.documents');

nxtButton1.addEventListener('click', function() {
   /*if(document.getElementById("lname").value.trim() != "" || document.getElementById("fname").value.trim() != "" || document.getElementById("mname").value.trim() != ""|| document.getElementById("bdate").value.trim() != ""|| document.getElementById("PoB").value.trim() != ""|| document.getElementById("age").value.trim() != ""){ */
  
   progressNumber[1].classList.add('current');
   demographContainer1.classList.add('toLeft');
   demographContainer2.classList.remove('toLeft');
});
  

nxtButton2.addEventListener('click', function() {
  /* if(document.getElementById("zipCode").value.trim() != "" || document.getElementById("hNoStrt").value.trim() != "" || document.getElementById("brgy").value.trim() != "" || document.getElementById("city").value.trim() != "" ||  document.getElementById("nationality").value.trim() != "" || document.getElementById("religion").value.trim() != ""){*/

   progressNumber[2].classList.add('current');
   demographContainer2.classList.add('toLeft');
   contactSched.classList.remove('toLeft');
});



nxtButton3.addEventListener('click', function(){
   /*if(document.getElementById("email").value.trim() != "" || document.getElementById("cNum").value.trim() != "" || document.getElementById("schedDate").value.trim() != "" || document.getElementById("schedTime").value.trim() != ""){*/
   progressNumber[3].classList.add('current');
   contactSched.classList.add('toLeft');
   documentContainer.classList.remove('toLeft');
});


backBtn1.addEventListener('click', function(){
   progressNumber[1].classList.remove('current');
   demographContainer1.classList.remove('toLeft');
   demographContainer2.classList.add('toLeft');
});

backBtn2.addEventListener('click', function(){
   progressNumber[2].classList.remove('current');
   demographContainer2.classList.remove('toLeft');
   contactSched.classList.add('toLeft');
});

backBtn3.addEventListener('click', function(){
   progressNumber[3].classList.remove('current');
   contactSched.classList.remove('toLeft');
   documentContainer.classList.add('toLeft');
});




/*
function checkTextFieldln(field) {
  document.getElementById("error1").innerText =
    (field.value === "") ? "*Lastname is required" : "";
}

function checkTextFieldfn(field) {
  document.getElementById("error2").innerText =
    (field.value === "") ? "*Firstname is required" : "";
}

function checkTextFieldmn(field) {
  document.getElementById("error3").innerText =
    (field.value === "") ? "*Middlename is required" : "";
}


function checkTextFieldbd(field) {
  document.getElementById("error5").innerText =
    (field.value === "") ? "*Birthday is required" : "";
}

function checkTextFieldpb(field) {
  document.getElementById("error6").innerText =
    (field.value === "") ? "*Place of birth is required" : "";
}

function checkTextFieldage(field) {
  document.getElementById("error7").innerText =
    (field.value === "") ? "*Age is required" : "";
}

function checkTextFieldsex(field) {
  document.getElementById("error8").innerText = (field.value === "") ? "*Sex is required" : "";
}


   */