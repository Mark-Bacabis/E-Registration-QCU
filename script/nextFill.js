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
   demographContainer1.classList.add('toLeft');
   demographContainer2.classList.remove('toLeft');
   progressNumber[1].classList.add('current');
});


nxtButton2.addEventListener('click', function() {
   demographContainer2.classList.add('toLeft');
   contactSched.classList.remove('toLeft');
   progressNumber[2].classList.add('current');
});

nxtButton3.addEventListener('click', function(){
   contactSched.classList.add('toLeft');
   documentContainer.classList.remove('toLeft');
   progressNumber[3].classList.add('current');
});


backBtn1.addEventListener('click', function(){
   demographContainer2.classList.add('toLeft');
   demographContainer1.classList.remove('toLeft');
   progressNumber[1].classList.remove('current');
});

backBtn2.addEventListener('click', function(){
   contactSched.classList.add('toLeft');
   demographContainer2.classList.remove('toLeft');
   progressNumber[2].classList.remove('current');
});

backBtn3.addEventListener('click', function(){
   documentContainer.classList.add('toLeft');
   contactSched.classList.remove('toLeft');
   progressNumber[3].classList.remove('current');
});

