var detail=document.querySelector('.detail');
var extention=document.querySelector('.info_detail');

detail.addEventListener('click',function(){
  if(extention.classList.contains('contenue_afficher')){
    extention.classList.remove('contenue_afficher');
    extention.classList.add('contenue_cacher');
  }
  else if(extention.classList.contains('contenue_cacher')){
    extention.classList.remove('contenue_cacher');
    extention.classList.add('contenue_afficher');
  }
});
/*mouvement des fleche*/
var next=document.querySelector('.next');
var prev=document.querySelector('.prev');

var img=document.querySelectorAll('.emplacement_img');

next.addEventListener('click', btnClick1);
prev.addEventListener('click', btnClick2);
function btnClick2(){
  console.log("prev");
  
  for(var i = 0; i < img.length; i++) {
    if(img[i].classList.contains('one')){
      img[i].classList.remove('one');
      img[i].classList.add('two');
    }
    else if(img[i].classList.contains('two')){
      img[i].classList.remove('two');
      img[i].classList.add('three');
    }
    else if(img[i].classList.contains('three')){
      img[i].classList.remove('three');
      img[i].classList.add('four');
    }
    else if(img[i].classList.contains('four')){
      img[i].classList.remove('four');
      img[i].classList.add('five');
    }
    else if(img[i].classList.contains('five')){
      img[i].classList.remove('five');
      img[i].classList.add('one');
    }
  }
}

function btnClick1(){
  console.log("next");
  for(var i = 0; i < img.length; i++) {
    if(img[i].classList.contains('one')){
      img[i].classList.remove('one');
      img[i].classList.add('five');
    }
    else if(img[i].classList.contains('two')){
      img[i].classList.remove('two');
      img[i].classList.add('one');
    }
    else if(img[i].classList.contains('three')){
      img[i].classList.remove('three');
      img[i].classList.add('two');
    }
    else if(img[i].classList.contains('four')){
      img[i].classList.remove('four');
      img[i].classList.add('three');
    }
    else if(img[i].classList.contains('five')){
      img[i].classList.remove('five');
      img[i].classList.add('four');
    }
  }
}


/*
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





*/