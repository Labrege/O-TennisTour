var btns = document.querySelectorAll('.btn');//bouton fleche droite et gaughe
var point=document.querySelectorAll('.dot');

console.log("js");
btns[0].addEventListener('click', btnClick);
btns[1].addEventListener('click', btnClick);


function btnClick() {
    console.log("bouton toucher");
  if(this.classList.contains('btn--prev')) {
    if(point[0].classList.contains('big-dot'))
    {

        point[0].classList.remove('big-dot');
        point[2].classList.add('big-dot');
    }    
    if(point[1].classList.contains('big-dot'))
    {
        point[1].classList.remove('big-dot');
        point[0].classList.add('big-dot');
    }    
    if(point[2].classList.contains('big-dot'))
    {
        point[2].classList.remove('big-dot');
        point[1].classList.add('big-dot');
    }    
  } else {
    
  }
  
  
}




