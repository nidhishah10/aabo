/* Custom General jQuery
/*--------------------------------------------------------------------------------------------------------------------------------------*/
(function ($, window, document, undefined) {
	//Genaral Global variables
	//"use strict";
	var $win = $(window);
	var $doc = $(document);
	var $winW = function () {
		return $(window).width();
	};
	var $winH = function () {
		return $(window).height();
	};
	var $screensize = function (element) {
		$(element).width($winW()).height($winH());
	};

	var screencheck = function (mediasize) {
		if (typeof window.matchMedia !== "undefined") {
			var screensize = window.matchMedia("(max-width:" + mediasize + "px)");
			if (screensize.matches) {
				return true;
			} else {
				return false;
			}
		} else { // for IE9 and lower browser
			if ($winW() <= mediasize) {
				return true;
			} else {
				return false;
			}
		}
	};

	$doc.ready(function () {
		/*--------------------------------------------------------------------------------------------------------------------------------------*/
		// Remove No-js Class
		$("html").removeClass('no-js').addClass('js');



		/* Get Screen size
		---------------------------------------------------------------------*/
		$win.on('load', function () {
			$win.on('resize', function () {
				$screensize('your selector');
			}).resize();
		});


		/* Menu ICon Append prepend for responsive
		---------------------------------------------------------------------*/
		$(window).on('resize', function () {
			if (screencheck(991)) {
				if (!$('#menu').length) {
					$('#mainmenu').prepend('<a href="#" id="menu" class="menulines-button"><span class="menulines"></span> <em>Menu</em></a>');
				}
			} else {
				$("#menu").remove();
			}
		}).resize();


		/* Tab Content box 
		---------------------------------------------------------------------*/
		var tabBlockElement = $('.tab-data');
		$(tabBlockElement).each(function () {
			var $this = $(this),
				tabTrigger = $this.find(".tabnav li"),
				tabContent = $this.find(".tabcontent");
			var textval = [];
			tabTrigger.each(function () {
				textval.push($(this).text());
			});
			$this.find(tabTrigger).first().addClass("active");
			$this.find(tabContent).first().show();

			$(tabTrigger).on('click', function () {
				$(tabTrigger).removeClass("active");
				$(this).addClass("active");
				$(tabContent).hide().removeClass('visible');
				var activeTab = $(this).find("a").attr("data-rel");
				$this.find('#' + activeTab).fadeIn('normal').addClass('visible');

				return false;
			});

			var responsivetabActive = function () {
				if (screencheck(767)) {
					if (!$this.find('.tabMobiletrigger').length) {
						$(tabContent).each(function (index) {
							$(this).before("<h2 class='tabMobiletrigger'>" + textval[index] + "</h2>");
							$this.find('.tabMobiletrigger:first').addClass("rotate");
						});
						$('.tabMobiletrigger').click('click', function () {
							var tabAcoordianData = $(this).next('.tabcontent');
							if ($(tabAcoordianData).is(':visible')) {
								$(this).removeClass('rotate');
								$(tabAcoordianData).slideUp('normal');
								//return false;
							} else {
								$this.find('.tabMobiletrigger').removeClass('rotate');
								$(tabContent).slideUp('normal');
								$(this).addClass('rotate');
								$(tabAcoordianData).not(':animated').slideToggle('normal');
							}
							return false;
						});
					}

				} else {
					if ($('.tabMobiletrigger').length) {
						$('.tabMobiletrigger').remove();
						tabTrigger.removeClass("active");
						$this.find(tabTrigger).removeClass("active").first().addClass('active');
						$this.find(tabContent).hide().first().show();
					}
				}
			};
			$(window).on('resize', function () {
				if (!$this.hasClass('only-tab')) {
					responsivetabActive();
				}
			}).resize();
		});

		/* Accordion box JS
		---------------------------------------------------------------------*/
		$('.accordion-databox').each(function () {
			var $accordion = $(this),
				$accordionTrigger = $accordion.find('.accordion-trigger'),
				$accordionDatabox = $accordion.find('.accordion-data');

			$accordionTrigger.first().addClass('open');
			$accordionDatabox.first().show();

			$accordionTrigger.on('click', function (e) {
				var $this = $(this);
				var $accordionData = $this.next('.accordion-data');
				if ($accordionData.is($accordionDatabox) && $accordionData.is(':visible')) {
					$this.removeClass('open');
					$accordionData.slideUp(400);
					e.preventDefault();
				} else {
					$accordionTrigger.removeClass('open');
					$this.addClass('open');
					$accordionDatabox.slideUp(400);
					$accordionData.slideDown(400);
				}
			});
		});


		/* Mobile menu click
		---------------------------------------------------------------------*/
		$(document).on('click', "#menu", function () {
			$(this).toggleClass('menuopen');
			$(this).next('ul').slideToggle('normal');
			return false;
		});




		/* Header Sticky
		---------------------------------------------------------------------*/
		if ($("#header").length) {
			$(window).scroll(function () {
				var headerHeight = $('#header').outerHeight() + 100;
				if ($(this).scrollTop() > headerHeight) {
					$("#header").addClass("sticky");
				} else {
					$("#header").removeClass("sticky");
				}
			});

		}

		// aabo customer slider

		if ($(".aabo-customer-slider").length) {
			var swiper = new Swiper('.aabo-customer-slider', {
				direction: 'horizontal',
				spaceBetween: 20,
				slidesPerView: 4,
				// slidesPerColumn: 1,
				loop: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				autoplay: {
					delay: 3000,
				},
				breakpoints: {
					1200: {
						slidesPerView: 4
					},
					// 1023: {slidesPerView: 6},
					768: {
						slidesPerView: 3
					},
					479: {
						slidesPerView: 2
					},
					375: {
						slidesPerView: 1
					},
					220: {
						slidesPerView: 1
					}
				}

			});
		}


		// jQuery counter up
		if ($(".counter").length) {
			var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"
			var $counters = $(".counter");
			/* Start counting, do this on DOM ready or with Waypoints. */
			$counters.each(function (ignore, counter) {
				var waypoint = new Waypoint({
					element: $(this),
					handler: function () {
						counterUp(counter, {
							duration: 3000,
							delay: 50
						});
						this.destroy();
					},
					offset: 'bottom-in-view',
				});
			});
		}

		// employ pop up form js

    // New custom dropdown
		$('.custom-select').each(function(){
			var $this = $(this), 
				numberOfOptions = $(this).children('option').length;
			
			$this.addClass('select-hidden'); 
			$this.wrap('<div class="select"></div>');
			$this.after('<div class="select-styled" tabindex="0"></div>');
		
			var $styledSelect = $this.next('div.select-styled');
			$styledSelect.text($this.children('option').eq(0).text());
			
			var $list = $('<ul />', {
				'class': 'select-options'
			}).insertAfter($styledSelect);
			
			for (var i = 0; i < numberOfOptions; i++) {
				$('<li />', {
					text: $this.children('option').eq(i).text(),
					rel: $this.children('option').eq(i).val()
				}).appendTo($list);
			}
			
			var $listItems = $list.children('li');
			
			$styledSelect.click(function(e) {
				e.stopPropagation();
				$('div.select-styled.active').not(this).each(function(){
					// $(this).removeClass('active').next('ul.select-options').hide();
					$(this).removeClass('active');
					$(this).parents('.select-dropdown').removeClass('active');
					$(this).next('ul.select-options').slideUp();
					// gsap.fromTo($(this).next('ul.select-options'), {opacity: 1, y:0 }, {opacity: 0, y:'-10px', duration:0.2});
					// setTimeout (function(){
					// 	$(this).next('ul.select-options').hide();
					// }, 200);
				});
				if($(this).hasClass('active')) {
					$(this).removeClass('active');
					$(this).parents('.select-dropdown').removeClass('active');
					$(this).next('ul.select-options').slideUp();
					// gsap.fromTo($(this).next('ul.select-options'), {opacity: 1, y:0 }, {opacity: 0, y:'-10px', duration:0.2});
					// setTimeout (function(){
					// 	$(this).next('ul.select-options').hide();
					// }, 200);
				} else {
					$(this).addClass('active');
					$(this).parents('.select-dropdown').addClass('active');
					// $(this).next('ul.select-options').show();
					$(this).next('ul.select-options').slideDown();
					// gsap.fromTo($(this).next('ul.select-options'), {opacity: 0, y:'-10px' }, {opacity: 1, y:0, duration:0.2});
				}
			});

			// $this.on('keyup', function(e){
			// 	if(e.keyCode==32) {
			// 		alert('asas');
			// 	}
			// });

			
			$listItems.click(function(e) {
				e.stopPropagation();
				$styledSelect.text($(this).text()).removeClass('active').addClass('selected');
				$(this).parents('.select-dropdown').removeClass('active');
				$this.val($(this).attr('rel'));
				$list.slideUp();
				// gsap.fromTo($list, {opacity: 1, y:0 }, {opacity: 0, y:'-10px', duration:0.2});
				// setTimeout (function(){
				// 	$list.hide();
				// }, 200);
			});
			
			$(document).click(function() {
				$styledSelect.removeClass('active');
				$styledSelect.parents('.select-dropdown').removeClass('active');
				$list.slideUp();
				// gsap.fromTo($list, {opacity: 1, y:0 }, {opacity: 0, y:'-10px', duration:0.2});
				// setTimeout (function(){
				// 	$list.hide();
				// }, 200);
			});

			$('.select-options li').click( function() {
				$('.select-options li').removeClass('active');
				$(this).addClass('active');
			});


			// Focus and enter on custom select
			var select_ele = $this.next('.select-styled');
			
			$(select_ele).on('keyup', function(e){
				if(e.keyCode==13) {
					if($(select_ele).hasClass('active')) {
						$(select_ele).removeClass('active');
						$(select_ele).parents('.select-dropdown').removeClass('active');
						$(select_ele).next('ul.select-options').slideUp();
						// gsap.fromTo($(select_ele).next('ul.select-options'), {opacity: 1, y:0 }, {opacity: 0, y:'-10px', duration:0.2});
						// setTimeout (function(){
						// 	$(select_ele).next('ul.select-options').hide();
						// }, 200);
					} else {
						$(select_ele).addClass('active');
						$(this).parents('.select-dropdown').addClass('active');
						// $(select_ele).next('ul.select-options').show();
						$(select_ele).next('ul.select-options').slideDown();
						// gsap.fromTo($(select_ele).next('ul.select-options'), {opacity: 0, y:'-10px' }, {opacity: 1, y:0, duration:0.2});
					}
					
				}
			});

		
		});

		// new about us timeline slider
		$(document).ready(function() {
			var imageswiper = new Swiper('.image-slider', {
				allowTouchMove: false,
				// simulateTouch : false,
				slidesPerView: 1,
				loop: true,
				loopedSlides: 10,
			});
			var timelineswiper = new Swiper('.timeline-slider', {
				loop: true,
				loopedSlides: 10,
				spaceBetween: 0,
				slidesPerView: "auto",
				slidesPerView: 5,
				centeredSlides: true,
				slidesPerGroupSkip: 1,
				slideToClickedSlide: true,
				freeMode: false,
				watchSlidesVisibility: true,
				watchSlidesProgress: true,
				breakpoints: {
								375: {
									slidesPerView: 3,
									spaceBetween: 0
								},
								568: {
									slidesPerView: 5,
									spaceBetween: 0
								}
							}
			
			});
			imageswiper.controller.control = timelineswiper;
			timelineswiper.controller.control = imageswiper;
		  });


		 
		  


		
		/* Newsletter-section*/

		$(document).on('click', ".newsletter-year h5 i", function () {
			if ($(this).hasClass('icon-down-arrow')) {
				$(this).removeClass('icon-down-arrow').addClass('icon-up-arrow');
			} else {
				$(this).removeClass('icon-up-arrow').addClass('icon-down-arrow');
			}
			$(this).closest('.newsletter-year').find('ul').slideToggle();
			return false;
		});

		

		if ($(".vacancies-details .accordian-section").length) {
			$(".vacancies-details .accordian-section").mCustomScrollbar({
				theme: "dark",
				scrollButtons: {
					enable: true
				}
			});
		}




		/* Popup function
		---------------------------------------------------------------------*/
		var $dialogTrigger = $('.poptrigger'),
			$pagebody = $('body');
		$dialogTrigger.click(function () {
			var popID = $(this).attr('data-rel');
			$('body').addClass('overflowhidden');
			var winHeight = $(window).height();
			$('#' + popID).fadeIn();
			var popheight = $('#' + popID).find('.popup-block').outerHeight(true);

			if ($('.popup-block').length) {
				var popMargTop = popheight / 2;
				//var popMargLeft = ($('#' + popID).find('.popup-block').width()/2);

				if (winHeight > popheight) {
					$('#' + popID).find('.popup-block').css({
						'margin-top': -popMargTop,
						//'margin-left' : -popMargLeft
					});
				} else {
					$('#' + popID).find('.popup-block').css({
						'top': 0,
						//'margin-left' : -popMargLeft
					});
				}

			}

			$('#' + popID).append("<div class='modal-backdrop'></div>");
			$('.popouterbox .modal-backdrop').fadeTo("slow", 0.70);
			if (popheight > winHeight) {
				$('.popouterbox .modal-backdrop').height(popheight);
			}
			$('#' + popID).focus();
			return false;
		});

		$(window).on("resize", function () {
			if ($('.popouterbox').length && $('.popouterbox').is(':visible')) {
				var popheighton = $('.popouterbox .popup-block').height() + 60;
				var winHeight = $(window).height();
				if (popheighton > winHeight) {
					$('.popouterbox .modal-backdrop').height(popheighton);
					$('.popouterbox .popup-block').removeAttr('style').addClass('taller');

				} else {
					$('.popouterbox .modal-backdrop').height('100%');
					$('.popouterbox .popup-block').removeClass('taller');
					$('.popouterbox .popup-block').css({
						'margin-top': -(popheighton / 2)
					});
				}
			}
		});

		//Close popup		
		$(document).on('click', '.close-dialogbox, .modal-backdrop', function () {
			$(this).parents('.popouterbox').fadeOut(300, function () {
				$(this).find('.modal-backdrop').fadeOut(250, function () {
					$('body').removeClass('overflowhidden');
					$('.popouterbox .popup-block').removeAttr('style');
					$(this).remove();
				});
			});
			return false;
		});

		

		// drop box js
    if($(".drop_box").length) {
			const dropArea = document.querySelector(".drop_box"),
				button = dropArea.querySelector("button"),
				dragText = dropArea.querySelector("header"),
				input = dropArea.querySelector("input");
			let file;
			var filename;

			// button.onclick = () => {
			// 	input.click();
			// };

			input.addEventListener("change", function (e) {
				var fileName = e.target.files[0].name;
				let filedata = `
					<form action="" method="post">
					<div class="form">
					<button class="button btn-outline">Upload</button>
					</div>
					</form>`;
				dropArea.innerHTML = filedata;
			});
	}






		/* Director-Swiper*/

		var swiper = new Swiper(".directorSwiper", {
			autoHeight: true,
			// autoplay: {
			// 	delay: 2500,
			// 	disableOnInteraction: false,
			//   },
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},

		});

		// equal height title news page
		if($('.news-content h5').length) {
			var largest = 0;
			$(document).find(".news-content h5").each(function(){
			var findHeight = $(this).height();
			if(findHeight > largest){
			largest = findHeight;
			}  
			});
			$(document).find(".news-content h5").css({"height":largest+"px"});
		  

		}

		// about slider equal height headings

		if($('.director-info .director-name').length) {
			var largest = 0;
			$(document).find(".director-info .director-name").each(function(){
			var findHeight = $(this).height();
			if(findHeight > largest){
			largest = findHeight;
			}  
			});
			$(document).find(".director-info .director-name").css({"height":largest+"px"});
		  

		}

		// sector section equal height headings

		if($('.sector-heading h5').length) {
			function titleHeightCheck() {
				var largest = 0;
				$(".sector-heading h5").each(function(){
					var findHeight = $(this).height();
					if(findHeight > largest){
						largest = Math.round(findHeight);
					}  
				});
				$(".sector-heading").css({"height":largest+"px"});
			}
			titleHeightCheck();
			$(window).on('resize', function(){
				titleHeightCheck();
			}).resize();
		  

		}

		 


	
	


		
		

		/*--------------------------------------------------------------------------------------------------------------------------------------*/
	});

	/*All function need to define here for use strict mode
	----------------------------------------------------------------------------------------------------------------------------------------*/



	/*--------------------------------------------------------------------------------------------------------------------------------------*/
})(jQuery, window, document);