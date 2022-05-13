// Input field
var inputTexts = document.querySelectorAll('input[type="text"]');
var inputNum = document.querySelectorAll('input[type="number"]');
var inputDate = document.querySelectorAll('input[type="date"]');
var select = document.querySelectorAll('select');
console.log(inputTexts);
console.log(inputNum);
console.log(inputDate);
console.log(select);

// text-input labels
var labels = document.querySelectorAll('.text-input label .errMessage');

console.log(labels);


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
  if(inputTexts[0].value == '' || inputTexts[1].value == '' || inputTexts[2].value == '' || inputTexts[4].value == '' || inputNum[0].value == '' || inputNum[0].value == '' || select[0].value == ''){ 
    labels[0].innerHTML = '*This field is required';
    labels[1].innerHTML = '*This field is required';
    labels[2].innerHTML = '*This field is required';
    labels[4].innerHTML = '*This field is required';
    labels[5].innerHTML = '*This field is required';
    labels[6].innerHTML = '*This field is required';
    labels[7].innerHTML = '*This field is required';

  }
  else{
    progressNumber[1].classList.add('current');
    demographContainer1.classList.add('toLeft');
    demographContainer2.classList.remove('toLeft');
  }
});


select[0].addEventListener('change', ()=>{
  labels[7].innerHTML = '';
})
  

nxtButton2.addEventListener('click', function() {
  
  if(inputTexts[5].value == '' || inputTexts[6].value == '' || inputTexts[7].value == '' || inputTexts[8].value == '' || select[1].value == '' || inputTexts[9].value == '' || inputTexts[10].value == ''){ 
    labels[8].innerHTML = '*This field is required';
    labels[9].innerHTML = '*This field is required';
    labels[10].innerHTML = '*This field is required';
    labels[11].innerHTML = '*This field is required';
    labels[12].innerHTML = '*This field is required';
    labels[13].innerHTML = '*This field is required';
    labels[14].innerHTML = '*This field is required';

  }
  else{
   progressNumber[2].classList.add('current');
   demographContainer2.classList.add('toLeft');
   contactSched.classList.remove('toLeft');
  }
  
});



nxtButton3.addEventListener('click', function(){
  if(inputTexts[11].value == '' || inputTexts[12].value == ''){ 
    labels[15].innerHTML = '*This field is required';
    labels[16].innerHTML = '*This field is required';
    

  }
  else{
    progressNumber[3].classList.add('current');
    contactSched.classList.add('toLeft');
    documentContainer.classList.remove('toLeft');
  }
 
});

// BACK BUTTONS
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



