/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you 
    // rename this variable, you will also need to rename the namespace below.
    var Roots = {
        // All pages
        common: {
            init: function() {
                /* set variables locally for increased performance */
                var scroll_timer;
                var displayed = false;
                var $message = $('#message a');
                var $window = $(window);
                var top = $(document.body).children(0).position().top;

                /* react to scroll event on window */
                $window.scroll(function () {
                    window.clearTimeout(scroll_timer);
                    scroll_timer = window.setTimeout(function () {
                        if($window.scrollTop() <= top)
                        {
                            displayed = false;
                            $message.fadeOut(500);
                        }
                        else if(displayed === false)
                        {
                            displayed = true;
                            $message.stop(true, true).show().click(function () { $message.fadeOut(500); });
                        }
                    }, 100);
                });

                $('#toggle-menu').on('click', function() {
                    //$('#dropdown').toggle();
                    $("#dropdown").slideToggle("fast");
                });

                $('#go-back').on('click', function() {
                    event.preventDefault();
                    window.history.back();
                });

                $('a.dropdown-toggle').on('click', function(e){
                  window.location.href = $(this).attr('href');
                });

                $('a.dropdown-toggle').parent().hover(
                    function() {
                      $(this).find('.dropdown-menu').show();
                    }, function() {
                      $(this).find('.dropdown-menu').hide();
                    }
                );

                $($message).click(function(e) {
                    e.preventDefault();
                    $.scrollTo(0,300);
                });
            }
        },
        // Home page
        home: {
            init: function() {
                // JavaScript to be fired on the home page
            }
        },
        // About us page, note the change from about-us to about_us.
        about_us: {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var namespace = Roots;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            UTIL.fire('common');

            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
            });
        }
    };

    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
