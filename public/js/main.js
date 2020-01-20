// /****** NAV Scroll Menu *****/
//Produits
$('#navDrop').hover(function() {
    $('.subMenu1').removeClass('infoHidden');
});



$('.subMenuA').hover(function() {
    $('.subMenu2').removeClass('infoHidden');
    $('.subMenu2b,.subMenu2c,.subMenu2d').addClass('infoHidden');

});

$('.subMenuB').hover(function() {
    $('.subMenu2b').removeClass('infoHidden');
    $('.subMenu2,.subMenu2c,.subMenu2d').addClass('infoHidden');

});

$('.subMenuC').hover(function() {
    $('.subMenu2c').removeClass('infoHidden');
    $('.subMenu2b,.subMenu2,.subMenu2d').addClass('infoHidden');

});

$('.subMenuD').hover(function() {
    $('.subMenu2d').removeClass('infoHidden');
    $('.subMenu2b,.subMenu2c,.subMenu2').addClass('infoHidden');

});

$('.testContent').mouseleave(function() {
    $('.subMenu1,.subMenu2,.subMenu2b,.subMenu2c,.subMenu2d').addClass('infoHidden');
})
$('navlink2,.navlink3,.navlink3,.navlink4').hover(function() {
    $('.subMenu1,.subMenu2,.subMenu2b,.subMenu2c,.subMenu2d').addClass('infoHidden');
})

//Artisans
//Artisans
$('#navDrop2').hover(function() {
    $('.subMenu2e').removeClass('infoHidden');
    $('.subMenu1,.subMenu2,.subMenu2b,.subMenu2c,.subMenu2d').addClass('infoHidden');
});

$('.subMenu2e').mouseleave(function() {
    $('.subMenu2e').addClass('infoHidden');
})

$('#navDrop,.navlink3,.navlink4').hover(function() {
    $('.subMenu2e').addClass('infoHidden');
})


/**************************************** Effet scroll whole page (HOME) ********************/
const threshold = .5
const options = {
    root: null,
    rootMargin: '0px',
    threshold
}

const handleIntersect = function(entries, observer) {
    entries.forEach(function(entry) {
        if (entry.intersectionRatio > threshold) {
            entry.target.classList.remove('reveal')
            observer.unobserve(entry.target)
        }
    })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(handleIntersect, options)
    const targets = document.querySelectorAll('.reveal')
    targets.forEach(function(target) {
        observer.observe(target)
    })
})


/**************************CAROUSEL****************************************** */
// MAIN FUNCTION
let FgSlider = function(fgContainer) {
    this.fgContainer = document.querySelector(`#${fgContainer}`) || document.querySelector('.fg-slider');
    this.setup = arguments[1];
    this.setup && this.setup.parallax ? this.fgContainer.classList.add('fg-parallax') : false;
    this.isParallax = this.setup && this.setup.parallax === true ? true : false;

    // if has PARALLAX class
    this.isParallax ? this.parallaxFunc() : false;

    this.sliderItems = this.fgContainer.querySelectorAll('img');
    this.current = 0;
    this.total = this.sliderItems.length;
    this.createdSlides = [];
    this.bulletArr = [];
    this.isTrue = false;
    this.fgTextContent = this.fgContainer.querySelectorAll('.fg-content') || null;
    this.globalInterval = null;

    // loader container
    this.loaderCont = document.createElement('div');
    this.loaderCont.classList.add('sk-folding-cube');

    // run the slider
    this.imageItems();

    // slider setup

    // run autoplay by default
    this.autoplay();
}

// CREATE SLIDER ITEMS
FgSlider.prototype.imageItems = function() {
    let This = this;
    let fgContainer = this.fgContainer;
    fgContainer.innerHTML = '';

    // loading animation container
    This.loaderCont.innerHTML = '<div class="sk-cube1 sk-cube"></div><div class="sk-cube2 sk-cube"></div><div class="sk-cube4 sk-cube"></div><div class="sk-cube3 sk-cube"></div>';
    fgContainer.appendChild(This.loaderCont);

    // create buttons
    let arrowContainer = document.createElement('div')
    arrowContainer.classList.add('arrow-container')

    // left arrow
    let leftArr = document.createElement('div');
    arrowContainer.appendChild(leftArr);
    leftArr.classList.add('left-arrow');
    leftArr.innerHTML = '<i class="fa fa-angle-left" aria-hidden="true"></i>';

    // right arrow
    let rightArr = document.createElement('div');
    arrowContainer.appendChild(rightArr);
    rightArr.classList.add('right-arrow');
    rightArr.innerHTML = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

    fgContainer.appendChild(arrowContainer);

    // create bullets
    let bulletContainer = document.createElement('div');
    bulletContainer.classList.add('bullet-container');
    fgContainer.appendChild(bulletContainer);

    // create slides & bullets. Loop

    for (let i = 0; i < This.sliderItems.length; i++) {
        // create slides
        let slides = document.createElement('div');
        if (This.fgTextContent[i]) {
            slides.appendChild(This.fgTextContent[i])
        }

        slides.classList.add('slider-item');
        slides.style.background = `url(${This.sliderItems[i].src}) no-repeat`;
        slides.style.backgroundSize = 'cover';
        slides.style.backgroundPosition = 'center center';
        fgContainer.appendChild(slides);
        This.createdSlides.push(slides);

        // create bullets
        if (This.setup.bullets) {
            let bullets = document.createElement('div');
            bullets.setAttribute('slide-index', i);
            bulletContainer.appendChild(bullets);
            This.bulletArr.push(bullets);

            // bullets add event listener
            bullets.addEventListener('click', function() {
                // change current item index
                This.current = parseInt(this.getAttribute('slide-index'));

                let bulletIndex = parseInt(this.getAttribute('slide-index'));
                This.clearInterval(This.globalInterval);
                This.slide(bulletIndex);
                This.autoplay();
            });
        }
    }; // end of the loop

    // event listeners
    // next & back event listeners
    rightArr.addEventListener('click', function() {
        This.clearInterval(This.globalInterval);
        This.nextFunc();
        This.autoplay();

    });
    leftArr.addEventListener('click', function() {
        This.clearInterval(This.globalInterval);
        This.prevFunc();
        This.autoplay();
    });

    // items loading function
    let sliderInterval = setInterval(function() {
        This.loaderCont.classList.add('active');
        if (fgContainer.querySelector('.slider-item')) {
            clearInterval(sliderInterval);
            This.loaderCont.classList.remove('active');

            // make active first alide and first bullet
            This.createdSlides[0].classList.add('active');
            This.bulletArr.length ? This.bulletArr[0].classList.add('active') : false;
        }

        // add animation effect to the slider
        if (This.setup.effect) {
            fgContainer.classList.add(This.setup.effect);
        } else {
            fgContainer.classList.add('fade');
        }

        // add slider size
        if (This.setup.size) {
            (This.setup.size.width) ? This.fgContainer.style.width = This.setup.size.width: false;
            (This.setup.size.height) ? This.fgContainer.style.height = This.setup.size.height: false;
        }
    }, 100);
}

// AUTOPLAY
FgSlider.prototype.autoplay = function() {
    let This = this;
    if (this.setup.autoplay && this.setup.autoplay === true) {
        let sliderDuration = (this.setup.duration) ? this.setup.duration : 5000;
        This.globalInterval = setInterval(function() {
            This.nextFunc();
        }, sliderDuration);
    }
}

// CLEAR INTERVAL
FgSlider.prototype.clearInterval = function(x) {
    clearInterval(x);
    this.globalInterval = 0;
}

// NEXT AND PROVIOUS FUNCTIONA
FgSlider.prototype.nextFunc = function() {
    (this.current === this.total - 1) ? this.current = 0: this.current += 1;
    this.slide(this.current);
}
FgSlider.prototype.prevFunc = function() {
    (this.current === 0) ? this.current = this.total - 1: this.current -= 1;
    this.slide(this.current);
}

// SELECT SLIDE & NONE OTHERS
FgSlider.prototype.slide = function(index) {
    let This = this;
    if (index >= 0 && index <= this.total - 1) {
        for (var s = 0; s <= this.total - 1; s++) {
            if (s === index) {
                this.createdSlides[s].classList.add('active');
                this.bulletArr.length ? this.bulletArr[s].classList.add('active') : false;
            } else {
                this.createdSlides[s].classList.remove('active');
                this.bulletArr.length ? this.bulletArr[s].classList.remove('active') : false;
                this.createdSlides[s].style.transition = 'all .7s ease';
            }
        }
    }
};


// PARALLAX FUNCTION /alpha/ 
FgSlider.prototype.parallaxFunc = function() {
    let This = this;
    let sliderHeight = parseInt(This.fgContainer.offsetHeight);

    let interval = setInterval(function() {
        if (This.createdSlides.length) {
            clearInterval(interval);

            This.createdSlides.forEach(function(items) {
                let getUrls = items.style.backgroundImage.match(/"(.*?)"/)[1];
                let images = new Image();
                images.src = getUrls;
                items.setAttribute('data-width', images.width)
                items.setAttribute('data-height', images.height)

                let imageHeight = parseInt(images.height);
                let sum = (imageHeight - sliderHeight) / 2;

                items.style.backgroundPositionY = `-${sum}px`;
                items.setAttribute('data-offset', `-${sum}`)


                window.addEventListener('scroll', function() {
                    let activeSlide = This.createdSlides[This.current]
                    let pageY = window.pageYOffset;
                    activeSlide.style.transition = 'none';
                    let numbers = parseInt(activeSlide.getAttribute('data-offset')) + pageY / 2;
                    This.createdSlides.forEach(function(items) {
                        items.style.backgroundPositionY = `${numbers}px`;
                    })
                })
            });

        }

    }, 100);
}


/*************************** LA TEAM******************************************/
/**Text show */
$(document).ready(function() {
    /*team1*/
    $('#infoImg1').mouseover(function() {
        $('.infoTeam1').removeClass('infoHidden');
        $('.infoTeam2,.infoTeam3,.infoTeam4,.infoTeam5').addClass('infoHidden');
    });

    /*team2*/
    $('#infoImg2').mouseover(function() {
        $('.infoTeam2').removeClass('infoHidden');
        $('.infoTeam1,.infoTeam3,.infoTeam4,.infoTeam5').addClass('infoHidden');
    });

    /*team3*/
    $('#infoImg3').mouseover(function() {
        $('.infoTeam3').removeClass('infoHidden');
        $('.infoTeam2,.infoTeam1,.infoTeam4,.infoTeam5').addClass('infoHidden');
    });

    /*team4*/
    $('#infoImg4').mouseover(function() {
        $('.infoTeam4').removeClass('infoHidden');
        $('.infoTeam2,.infoTeam3,.infoTeam1,.infoTeam5').addClass('infoHidden');
    });

    /*team5*/
    $('#infoImg5').mouseover(function() {
        $('.infoTeam5').removeClass('infoHidden');
        $('.infoTeam2,.infoTeam3,.infoTeam4,.infoTeam1').addClass('infoHidden');
    });


});


/***scrollup button */
$(document).ready(function() {
    // Add return on top button


    $(window).scroll(function() {
        // If on top fade the bouton out, else fade it in
        if ($(window).scrollTop() == 0)
            $('#scrollup').hide();
        else
            $('#scrollup').show();
    });
});

/*******************************Products by categories*********************************/
/****** filter nav animation******/


$('.sOA').hover(function() {
    $('.sO1a').css({ 'opacity': 1 });
    $('.sO1b').css({ 'opacity': 0 });
    $('.sO1c').css({ 'opacity': 0 });

});

$('.sOB').hover(function() {
    $('.sO1a').css({ 'opacity': 0 });
    $('.sO1b').css({ 'opacity': 1 });

});

$('.sOC').hover(function() {
    $('.sO1a').css({ 'opacity': 0 });
    $('.sO1b').css({ 'opacity': 0 });
    $('.sO1c').css({ 'opacity': 1 });
});

// $('.sO1c2, .sOB').mouseout(function(){
//   $('.sO1a,.sO1c').css({'opacity':0});
// }); 
$('.sO1c2,.sO1b').mouseout(function() {
    $('.sO1a,.sO1c').css({ 'opacity': 0 });
});
$('.pathRef,.lign').hover(function() {
    $('.sO1a,.sO1c,.sO1c').css({ 'opacity': 0 });
});