
// GWA IMAGES
var gwaImgs = document.querySelectorAll('.gwa-img');

// CLICKED IMAGE
var gwaViewer = document.getElementById('gwa-viewer');
var clickedImg = document.getElementById('gwa-img-clicked');
var close = document.querySelector('.close');

for(let i = 0; i < gwaImgs.length; i++){
   gwaImgs[i].addEventListener('click', function(){

      gwaViewer.style.display = 'flex';
      clickedImg.src = gwaImgs[i].src;
      
   });
}

close.addEventListener('click', function(){
   gwaViewer.style.display = 'none';
});