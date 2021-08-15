
var btns = document.querySelectorAll('.button_accueil');
var paginationWrapper = document.querySelector('.pagination-wrapper');
var bigDotContainer = document.querySelector('.big-dot-container');
var littleDot = document.querySelector('.little-dot');
var texts= document.querySelectorAll('.valeurs-container');
var image= document.querySelector('.container-image');

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
            texts[i].classList.add('contenue_cacher');
            
            if (i==0) {
                texts[2].classList.add('contenue_afficher');
                texts[2].classList.remove('contenue_cacher');
                image.classList.remove('img1');
                image.classList.add('img3');
            }
            else{
                texts[i-1].classList.add('contenue_afficher');
                texts[i-1].classList.remove('contenue_cacher');
                if(i==1)
                {image.classList.remove('img2');
                image.classList.add('img1');}
                else{image.classList.remove('img3');
               image.classList.add('img2');}
            } 
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
            texts[i].classList.add('contenue_cacher');
            
            if (i==2){
                texts[0].classList.add('contenue_afficher');
                texts[0].classList.remove('contenue_cacher');
                image.classList.remove('img3');
                image.classList.add('img1');
            }
          
            else{
                texts[i+1].classList.add('contenue_afficher');
                texts[i+1].classList.remove('contenue_cacher');

                if(i==0)
                {image.classList.remove('img1');
                image.classList.add('img2');}
                else{image.classList.remove('img2');
                image.classList.add('img3');}
            }
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





