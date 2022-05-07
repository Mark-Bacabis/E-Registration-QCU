// NAV LINKS
var dashboardLink = document.getElementById("navLink").querySelectorAll('.nav-link');

// Containers
var dashboard = document.querySelector('.dashboard');
var applicants = document.querySelector('.applicants');
var approveApplicants = document.querySelector('.approved-applicants');


dashboardLink[0].addEventListener('click', function (){
   dashboard.style.display = "flex";
   applicants.style.display = "none";
   approveApplicants.style.display = "none";
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

   dashboardLink[2].classList.add('current');

   for (let index = 0; index < dashboardLink.length; index++) {
      if(index != 2){
         dashboardLink[index].classList.remove('current');
      }
   }
});