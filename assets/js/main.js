(function($) {
    'use strict';

    // Mobile Menu Toggle
    $('.menu-toggle').on('click', function() {
        $('#site-navigation').toggleClass('toggled');
    });

    // Search Icon Toggle
    $('.search-icon > i').on('click', function() {
        $('.search-form-container').slideToggle();
    });

    // Update cart count via AJAX
    $(document.body).on('added_to_cart', function() {
        $.post(jouvin_ajax.ajax_url, {
            action: 'update_cart_count'
        }, function(response) {
            $('.cart-contents-count').text(response);
        });
    });

})(jQuery);
