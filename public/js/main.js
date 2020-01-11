

document.getElementById('infoImg1').addEventListener("mouseover", (() =>{
    $('.pi1').removeClass('infoHidden');
    $('.pi2,.pi3').addClass('infoHidden');


}));

document.getElementById('infoImg2').addEventListener("mouseover", (() =>{
    $('.pi2').removeClass('infoHidden');
    $('.pi1,.pi3').addClass('infoHidden');


}));

document.getElementById('infoImg3').addEventListener("mouseover", (() =>{
    $('.pi3').removeClass('infoHidden');
    $('.pi2,.pi1').addClass('infoHidden');


}));

