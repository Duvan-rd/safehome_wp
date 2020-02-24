/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	 //Menu sticky 

	 $(window).on('scroll', function(){
        
           if ($(this).scrollTop() > 250) {
                $('.sticky-header').addClass('fixed-header');
                $('.float-buttons').fadeIn();
            
           }
           if ($(this).scrollTop() < 250) {
                $('.sticky-header').removeClass('fixed-header');
		$('.float-buttons').fadeOut();
           }
        });

        $('.button-toggle-custom').click(function() {
           $('.container-nav-header').slideToggle();
        });

        $('.open-menu').click(function() {
            $('.menu-lateral').removeClass('hidden-menu')
            $('.bottom-header').fadeOut()
        })

        $('.close-menu-lateral').click(function() {
            $('.menu-lateral').addClass('hidden-menu')
            $('.bottom-header').fadeIn()
        })

        /*
        $(document).on("click",function(e) {
                    
            var container = $("#menu-lateral");
            var boton = $('.open-menu');
                               
               if (!container.is(e.target) && !boton.is(e.target) && $state_container == true) { 
                  $(container).addClass('hidden-menu')           
                  $('.bottom-header').fadeIn()
                  $state_container = false 
               }
        });
        */
        
        //Smooth Scroll

        //$('html').smoothScroll();


        $('.bottom-header .nav-link').removeClass('active');
        $('.page-id-299 .page-item-299 .nav-link').addClass('active');


        //COUNTER
        var counters = $(".counter");
        var countersQuantity = counters.length;
        var counter = [];

        for (i = 0; i < countersQuantity; i++) {
                counter[i] = parseInt(counters[i].innerHTML);
        }

        var count = function(start, value, id) {
                var localStart = start;
                setInterval(function() {
                if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
                }
                }, 40);
        }

        for (j = 0; j < countersQuantity; j++) {
                count(0, counter[j], j);
        }

        //Woocommerce js
        $('.item-cart-nav').hover(function() {
           $('.subitem-cart').slideToggle();
        })

        $('.woocommerce-input-wrapper input').addClass('form-control');
        $('textarea').addClass('form-control');
        $('.form-submit .submit').addClass('button-master');
        $('.form-submit .submit').addClass('principal-button');


        var ejecutar = false;

                $('.filter-toggle a').click(function(e) {
                        if (ejecutar) {
                                e.preventDefault();
                                $('.filter-toggle').removeClass('active');
                                $('#sidebar-container').addClass('d-none');
                                $('#products-loop-container').removeClass('col-md-9');
                                ejecutar = false;
                                //console.log(ejecutar);     
                        } else {
                                
                                e.preventDefault();
                                $('.filter-toggle').addClass('active');
                                $('#sidebar-container').removeClass('d-none');
                                $('#products-loop-container').addClass('col-md-9');
                                ejecutar = true;
                                //console.log(ejecutar);
                        }   
                });

} )( jQuery );


const getRemainTime = deadline => {
        let now = new Date(),
            remainTime = (new Date(deadline) - now + 1000) / 1000,
            remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
            remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
            remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
            remainDays = Math.floor(remainTime / (3600 * 24));
    
        return {
            remainTime,
            remainSeconds,
            remainMinutes,
            remainHours,
            remainDays
        }
    };
    
    
    const countdown = (elem, finalMessage) => {
        let el = document.getElementById(elem);
    
        let textDays = el.dataset.textDays
        let textHours = el.dataset.textHours
        let textMinutes = el.dataset.textMinutes
        let textSeconds = el.dataset.textSeconds
        
        let dateDay = el.dataset.dateDay
        let dateMonth = el.dataset.dateMonth
        let dateYear = el.dataset.dateYear
        let dateHour = el.dataset.dateHour
        let dateMinute = el.dataset.dateMinute
        let dateSecond = el.dataset.dateSecond
        
        let deadline = new Date(dateYear,dateMonth,dateDay,dateHour,dateMinute,dateSecond);
        
        let timerUpdate = setInterval( () => {
            let t = getRemainTime(deadline);
            el.innerHTML = `
            
            <div class="box-number" id="days">
                <span class="number">${t.remainDays}</span>
                <span class="text">${textDays}</span>
            </div>
            <div class="box-number" id="hours">
                <span class="number">${t.remainHours}</span>
                <span class="text">${textHours}</span>
            </div>
            <div class="box-number" id="minutes">
                <span class="number">${t.remainMinutes}</span>
                <span class="text">${textMinutes}</span>
            </div>
            <div class="box-number" id="seconds">
                <span class="number">${t.remainSeconds}</span>
                <span class="text">${textSeconds}</span>
            </div>
            `;
    
            if(t.remainTime <= 1){
                clearInterval(timerUpdate)
                el.innerHTML = finalMessage;
            }
        }, 1000)
    };


    var subitems = document.querySelectorAll('.menu-item-has-children')

    for (const item of subitems) {
        var texto_item = item.querySelector('.nav-link')
        texto_item.innerHTML += ' <i class="fas fa-sort-down"></i>'

        if (screen.width < 768) {

            let showMenu = false
            item.addEventListener('click', function() {
                if (!showMenu) {
                    
                    let submenus = document.querySelectorAll('.sub-menu')

                    for (const submenuItem of submenus) {
                        submenuItem.style.display = "none"
                    }

                    let submenu = this.querySelector('.nav-link').nextElementSibling
                    submenu.style.display = "block"
                    showMenu = true
                } else {
                    let submenu = this.querySelector('.nav-link').nextElementSibling
                    submenu.style.display = "none"
                    showMenu = false
                }
               
            })

        } else{

            item.addEventListener('mouseover', function() {
                var submenu = this.querySelector('.nav-link').nextElementSibling
                submenu.style.display = "block"
            })
    
            item.addEventListener('mouseout', function() {
                var submenu = this.querySelector('.nav-link').nextElementSibling
                submenu.style.display = "none"
            })
        }
        
    }


    document.getElementById('open-button-search').addEventListener('click', function(e) {
        e.preventDefault()
        document.getElementById('search-box').classList.add('show-modal')
    })

    document.getElementById('close-button-search').addEventListener('click', function(e) {
        e.preventDefault()
        document.getElementById('search-box').classList.remove('show-modal')
    })