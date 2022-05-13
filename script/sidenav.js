// NAV LINKS
var dashboardLink = document.getElementById("navLink").querySelectorAll('.nav-link');


// Containers
var dashboard = document.querySelector('.dashboard');
var applicants = document.querySelector('.applicants');
var approveApplicants = document.querySelector('.approved-applicants');
var schedule = document.querySelector('.schedule');


dashboardLink[0].addEventListener('click', function (){
   dashboard.style.display = "flex";
   applicants.style.display = "none";
   approveApplicants.style.display = "none";
   schedule.style.display = "none";


   dashboardLink[0].classList.add('current');

   for (let index = 0; index < dashboardLink.length; index++) {
      if(index != 0){
         dashboardLink[index].classList.remove('current');
      }
   }
});

dashboardLink[1].addEventListener('click', function (){
   dashboard.style.display = "none";
   applicants.style.display = "flex";
   approveApplicants.style.display = "none";
   schedule.style.display = "none";

   dashboardLink[1].classList.add('current');

   for (let index = 0; index < dashboardLink.length; index++) {
      if(index != 1){
         dashboardLink[index].classList.remove('current');
      }
   }

});

dashboardLink[2].addEventListener('click', function(){
   dashboard.style.display = "none";
   applicants.style.display = "none";
   approveApplicants.style.display = "flex";
   schedule.style.display = "none";

   dashboardLink[2].classList.add('current');

   for (let index = 0; index < dashboardLink.length; index++) {
      if(index != 2){
         dashboardLink[index].classList.remove('current');
      }
   }
});


dashboardLink[3].addEventListener('click', function(){
   dashboard.style.display = "none";
   applicants.style.display = "none";
   approveApplicants.style.display = "none";
   schedule.style.display = "flex";

   dashboardLink[3].classList.add('current');

   for (let index = 0; index < dashboardLink.length; index++) {
      if(index != 3){
         dashboardLink[index].classList.remove('current');
      }
   }
   console.log('Hi');
});