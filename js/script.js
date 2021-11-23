var isClick = false;
var chart = document.getElementsByClassName('sizeChart')[0];
function sizeChart() {
  if (isClick) {
    chart.style.display = 'none';
    isClick = false;
  } else {
    chart.style.display = 'block';
    isClick = true;
  }
}





const navbar = document.querySelector('.navbar');
window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    navbar.style.backgroundColor = 'white';
  } else {
    navbar.style.backgroundColor = 'rgba(255, 255, 255,0.4)';
  }
}

