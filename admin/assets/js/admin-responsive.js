/**
 * Admin Panel Responsive JavaScript
 */

$(document).ready(function() {
    
    // Mobile sidebar functionality
    $('#mobile_btn').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('#sidebar-overlay').toggleClass('active');
    });
    
    // Close sidebar when clicking overlay
    $('#sidebar-overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('#sidebar-overlay').removeClass('active');
    });
    
    // Submenu toggle for mobile
    $('.submenu > a').on('click', function(e) {
        if ($(window).width() <= 991) {
            e.preventDefault();
            var $submenu = $(this).next('ul');
            var $arrow = $(this).find('.menu-arrow');
            
            if ($submenu.is(':visible')) {
                $submenu.slideUp();
                $arrow.removeClass('rotate');
            } else {
                $('.submenu ul').slideUp();
                $('.menu-arrow').removeClass('rotate');
                $submenu.slideDown();
                $arrow.addClass('rotate');
            }
        }
    });
    
    // Close sidebar on window resize
    $(window).on('resize', function() {
        if ($(window).width() > 991) {
            $('#sidebar').removeClass('active');
            $('#sidebar-overlay').removeClass('active');
        }
    });
    
    // Responsive table handling
    $('.table-responsive').each(function() {
        var $table = $(this);
        var $tableContent = $table.find('table');
        
        if ($tableContent.width() > $table.width()) {
            $table.addClass('table-scrollable');
        }
    });
    
    // Touch device optimizations
    if ('ontouchstart' in window) {
        $('body').addClass('touch-device');
        
        // Prevent double tap zoom
        var lastTouchEnd = 0;
        document.addEventListener('touchend', function(event) {
            var now = (new Date()).getTime();
            if (now - lastTouchEnd <= 300) {
                event.preventDefault();
            }
            lastTouchEnd = now;
        }, false);
    }
    
    // Responsive form handling
    $('.form-control').on('focus', function() {
        if ($(window).width() <= 767) {
            $(this).closest('.form-group').addClass('focused');
        }
    }).on('blur', function() {
        $(this).closest('.form-group').removeClass('focused');
    });
    
    // Auto-resize textareas
    $('textarea').on('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
    
    // Equal height cards
    function equalizeCards() {
        $('.row').each(function() {
            var $row = $(this);
            var $cards = $row.find('.card');
            
            if ($cards.length > 1) {
                var maxHeight = 0;
                $cards.each(function() {
                    var height = $(this).outerHeight();
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });
                
                $cards.css('min-height', maxHeight);
            }
        });
    }
    
    equalizeCards();
    $(window).on('resize', equalizeCards);
    
    // Back to top button
    var $backToTop = $('<button class="btn btn-primary back-to-top" title="Back to top"><i class="fa fa-arrow-up"></i></button>');
    $('body').append($backToTop);
    
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 300) {
            $backToTop.addClass('show');
        } else {
            $backToTop.removeClass('show');
        }
    });
    
    $backToTop.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
    });
    
    // Keyboard navigation
    $(document).on('keydown', function(e) {
        // ESC key to close modals and sidebars
        if (e.keyCode === 27) {
            $('.modal').modal('hide');
            $('#sidebar').removeClass('active');
            $('#sidebar-overlay').removeClass('active');
        }
    });
    
    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            setTimeout(function() {
                var perfData = performance.getEntriesByType('navigation')[0];
                if (perfData && perfData.loadEventEnd - perfData.loadEventStart > 3000) {
                    console.warn('Page load time is slow. Consider optimizing images and scripts.');
                }
            }, 0);
        });
    }
    
}); 