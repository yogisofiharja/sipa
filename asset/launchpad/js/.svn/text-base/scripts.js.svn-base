;
(function($, window) {
    /** Settings **/

    // List of background images to use, the default image will be the first one in the list
    var backgrounds = [
    'asset/launchpad/images/backgrounds/placeholder14.jpg',
    'asset/launchpad/images/backgrounds/placeholder2.jpg',
    'asset/launchpad/images/backgrounds/placeholder4.jpg',
    'asset/launchpad/images/backgrounds/placeholder6.jpg',
    'asset/launchpad/images/backgrounds/placeholder7.jpg',
    'asset/launchpad/images/backgrounds/placeholder8.jpg',
    'asset/launchpad/images/backgrounds/placeholder9.jpg',
    'asset/launchpad/images/backgrounds/placeholder10.jpg',
    'asset/launchpad/images/backgrounds/placeholder.jpg',
    'asset/launchpad/images/backgrounds/placeholder11.jpg',
    'asset/launchpad/images/backgrounds/placeholder12.jpg',
    'asset/launchpad/images/backgrounds/placeholder3.jpg'
    ],
	
    // Background options - see documentation
    backgroundOptions = {
		
    },
	
    // Twitter username
    twitterUsername = 'ThemeCatcher',
		
    // Number tweets to show, set to 0 to disable
    tweetCount = 2,
	
    // The final percentage the bar should animate to
    progressPercentage = 25,
	
    // The time to complete the bar animation in milliseconds, 1000 = 1 second
    progressAnimationSpeed = 2000,
	
    // Enter your launch date
    launchDate = {
        day: 11,
        month: 11,
        year: 2011,
        hour: 0,
        min: 0,
        sec: 0	
    },
	
    // Months
    months = {
        1: 'Jan',
        2: 'Feb',
        3: 'Mar',
        4: 'Apr',
        5: 'May',
        6: 'Jun',
        7: 'Jul',
        8: 'Aug',
        9: 'Sep',
        10: 'Oct',
        11: 'Nov',
        12: 'Dec'
    };
	
    /** End settings **/
	
    $('html').addClass('js-enabled');
		
    $(document).ready(function() {
        // Preview options
        $('#options-panel').tabSlideOut({
            tabHandle: '.options-handle',                              //class of the element that will be your tab
            tabLocation: 'right',                               //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                                        //speed of animation
            action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
            topPos: '100px',                                   //position from the top
            fixedPosition: false
        });
		
        $('#options-style').change(function() {
            $('body').removeClass('dark light').addClass($(this).val());
        });
		
        $('#options-bg').change(function() {
            $('#img-overlay-effects')[0].className = $(this).val();
        });
		
        $('#options-colour').change(function() {
            $('.outside').removeClass('green blue purple orange red pink sky lime gold').addClass($(this).val());
        });
		
        $('#options-align').change(function () {
            $('body').removeClass('left center right').addClass($(this).val());
        });
		
        $('#options-font').change(function() {
            $('.launch-date-wrap .day, .launch-date-wrap .month, .launch-date-wrap .year, .dash .digit').css('font-family', $(this).val());
        });
		
        $('#options-hfont').change(function() {
            $('h1, h2, h3, h4, .launch-date-wrap .title, .countdown_dashboard .title').css('font-family', $(this).val());
        });
		
        $('#options-rounded').click(function () {
            $('body').removeClass('rounded');
            if ($(this).is(':checked')) {
                $('body').addClass('rounded');
            }
        });
		
        $('#options-show-footer').click(function () {
            $('body').removeClass('show-footer');
            if ($(this).is(':checked')) {
                $('body').addClass('show-footer');
            }
        });
        // End preview options		
		
        $.fullscreen(
            $.extend(backgroundOptions, {
                backgrounds: window.backgrounds || backgrounds,
                backgroundIndex: window.backgroundIndex
            })
            );
		
        $('#countdown_dashboard').countDown({
            targetDate: launchDate,
            omitWeeks: true
        });
		
        $('.launch-date-wrap .day').html(launchDate.day);
        $('.launch-date-wrap .month').html(months[launchDate.month]);
        $('.launch-date-wrap .year').html(launchDate.year);
				
        $('.fancybox-portfolio a.portfolio-thumb-link').fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600, 
            'speedOut': 200,
            'overlayColor': '#111',
            onStart: $.fullscreen.unbindKeyboard,
            onClosed: $.fullscreen.bindKeyboard
        });	
		
        // Footer pop out boxes
        $('.footer-pop-out-trigger', '#footer').click(function () {
            var $trigger = $(this);
            var $allBoxes = $('.footer-pop-out-box', '#footer');
            if ($allBoxes.is(':animated')) {
                return false;
            }
			
            var thisId = $trigger.attr('id').substring(16);
            var $thisBox = $('#' + thisId + '-pop-out');
            if ($thisBox.is(':visible')) {
                $('.footer-pop-out-trigger').removeClass('footer-pop-active');
                $thisBox.slideUp();
            } else {
                if ($allBoxes.is(':visible')) {
                    $('.footer-pop-out-trigger').removeClass('footer-pop-active');
                    $allBoxes.filter(':visible').slideUp(function() {
                        $trigger.addClass('footer-pop-active');
                        $thisBox.slideDown();
                    });
                } else {
                    $trigger.addClass('footer-pop-active');
                    $thisBox.slideDown();
                }
            }
			
            return false;
        });		

        // Make the form inputs clear value when focused
        $('.toggle-val').toggleVal({
            populateFrom: 'label', 
            removeLabels: true
        });
		
        // Create the gallery rollover effect
        $('li.one-portfolio-item a').append(
            $('<div class="portfolio-hover"></div>').css({
                opacity: 0, 
                display: 'block'
            })
            ).live('mouseenter', function() {
            $(this).find('.portfolio-hover').stop().fadeTo(400, .5);
        }).live('mouseleave', function() {
            $(this).find('.portfolio-hover').stop().fadeTo(400, 0.0);
        });
		
        $('.social-list-small a').css({
            opacity: 0.3
        }).live('mouseenter', function() {
            $(this).stop().fadeTo(400, 0.8);
        }).live('mouseleave', function() {
            $(this).stop().fadeTo(400, 0.3);
        });
		
        $('#tabs').tabs({
            fx: {
                opacity: 'toggle', 
                duration: 'slow'
            }
        });
    }); // End (document).ready
	
$(window).load(function() {
    // Animate progress bar
    if (progressPercentage < 1) {
        progressPercentage = 1;
    } else if (progressPercentage > 100) {
        progressPercentage = 100;
    }
    var progressBarWrap = $('#progress-bar-wrap');
    var progressAmount = $('#progress-amount');    
    var targetWidth = $('#progress-wrap').width() * (progressPercentage / 100);
    progressBarWrap.animate({
        width: targetWidth
    }, progressAnimationSpeed, function() {
        $('#moving-arrow').fadeIn('slow');
        progressAmount.text(progressPercentage + '%').fadeIn('slow')
    }).css('overflow', 'visible');
    $('#progress-indicator').fadeIn('slow');
		
    $('.homepage-slider-loading').remove();
    $('ul#homepage-slider').show().anythingSlider({
        width: 540,
        height: 52,
        resizeContents: false,
        delay: 6000,
        animationTime: 1200,
        buildNavigation: false,
        buildStartStop: false
    });
		
    // Load the Twitter feed
    if (twitterUsername && tweetCount > 0) {
        (function() {
            var t = document.createElement('script');
            t.type = 'text/javascript';
            t.src = 'http://twitter.com/statuses/user_timeline/' + twitterUsername + '.json?callback=twitterCallback2&count=' + tweetCount;
            var h = document.getElementsByTagName('head')[0];
            h.appendChild(t);
        })();
    }
}); // End (window).load	

// Any images to preload
window.preload([
    'asset/launchpad/images/close1.png',
    'asset/launchpad/images/close.png',
    'asset/launchpad/images/minimise1.png',
    'asset/launchpad/images/minimise.png',
    'asset/launchpad/images/3-col-hover.png',
    'asset/launchpad/images/light-bg-rep.png',
    'asset/launchpad/images/dark-bg-rep.png',
    'asset/launchpad/images/dark-play.png',
    'asset/launchpad/images/dark-pause.png',
    'asset/launchpad/images/light-play.png',
    'asset/launchpad/images/light-pause.png'	
    ]);
})(jQuery, window);