
/*** LE PROJET*****/
/**Text show */
document.getElementById('infoImg1').addEventListener("mouseover", (() =>{
    $('.pi1,.projRight').removeClass('infoHidden');
    $('.pi2,.pi3').addClass('infoHidden');


}));

document.getElementById('infoImg2').addEventListener("mouseover", (() =>{
    $('.pi2,.projRight').removeClass('infoHidden');
    $('.pi1,.pi3').addClass('infoHidden');


}));

document.getElementById('infoImg3').addEventListener("mouseover", (() =>{
    $('.pi3,.projRight').removeClass('infoHidden');
    $('.pi2,.pi1').addClass('infoHidden');


}));


/*** social logos hover****/

/*insta*/
    document.getElementById('insta').addEventListener("mouseover", (function(){
        $('#insta').attr('src','img/instacol.png');
    }));
    
    document.getElementById('insta').addEventListener("mouseout", (function(){
        
            $('#insta').attr('src','img/instab.png');
    }));

/*twitter*/
    document.getElementById('twi').addEventListener("mouseover", (function(){
    $('#twi').attr('src','img/twicol.png');
    }));
    
    document.getElementById('twi').addEventListener("mouseout", (function(){
        
            $('#twi').attr('src','img/twib.png');
    }));

     
/*youtube*/
    document.getElementById('you').addEventListener("mouseover", (function(){
    $('#you').attr('src','img/youcol.png');
    }));
    
    document.getElementById('you').addEventListener("mouseout", (function(){
        
            $('#you').attr('src','img/youb.png');
    }));
     

/*facebook*/
    document.getElementById('face').addEventListener("mouseover", (function(){
    $('#face').attr('src','img/facecol.png');
    }));
    
    document.getElementById('face').addEventListener("mouseout", (function(){
        
            $('#face').attr('src','img/faceb.png');
    }));
     
 

/***** Effet scroll whole page (HOME) ********/
const threshold = .5
const options = {
  root: null,
  rootMargin: '0px',
  threshold
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > threshold) {
      entry.target.classList.remove('reveal')
      observer.unobserve(entry.target)
    }
  })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  const targets = document.querySelectorAll('.reveal')
  targets.forEach(function (target) {
    observer.observe(target)
  })
})