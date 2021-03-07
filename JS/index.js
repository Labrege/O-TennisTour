var titre_1="performance";
var text_1="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique vel pariatur quasi ? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique vel pariatur quasi ?";
var titre_2="infrastructure";
var text_2="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique vel pariatur quasi ? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique vel pariatur quasi ?";
var titre_3="Tennis";
var text_3="azefrgfhcrgfdhze frgsjfmnjezfmnjidnjfsjsdnv dereruqeru oer uqeu geru gheirug erougqmozie fqoze zoei ozme mqoze fqmzoeu qzmeo qmeur gqmzeumqzue qmzeu qzoeu qmeurg qlerub qliur bmqeru gqm";


var btns = document.querySelectorAll('.btn');
var paginationWrapper = document.querySelector('.pagination-wrapper');
var bigDotContainer = document.querySelector('.big-dot-container');
var littleDot = document.querySelector('.little-dot');
var texts=document.querySelectorAll('.valeurs-container');

for(var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', btnClick);
}

function btnClick() {
    var click=0;
  if(this.classList.contains('btn--prev')) {
    paginationWrapper.classList.add('transition-prev');
    for(var i = 0; i < texts.length; i++) {
        if(texts[i].classList.contains('contenue_afficher') && click==0)
        {
            click++;
            console.log("precedent");
            texts[i].classList.remove('contenue_afficher');
            if (i==0) texts[2].classList.add('contenue_afficher');
            else texts[i-1].classList.add('contenue_afficher');
        }
      }
  } else {
    paginationWrapper.classList.add('transition-next');
    
    for(var i = 0; i < texts.length; i++) {
        if(texts[i].classList.contains('contenue_afficher')&& click==0)
        {
            click++;
            console.log("suivant");
            texts[i].classList.remove('contenue_afficher');
            if (i==2) texts[0].classList.add('contenue_afficher');
            else texts[i+1].classList.add('contenue_afficher');
        }
      }
  }
  
  var timeout = setTimeout(cleanClasses, 500);
}

function cleanClasses() {
  if(paginationWrapper.classList.contains('transition-next')) {
    paginationWrapper.classList.remove('transition-next')
  } else if(paginationWrapper.classList.contains('transition-prev')) {
    paginationWrapper.classList.remove('transition-prev')
  }
}




