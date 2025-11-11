(function($) {
    'use strict';

    $(document).ready(function() {
        // Mobile Menu Toggle
        $('#mobile-menu-button').on('click', function() {
            $('#mobile-menu').toggleClass('hidden');
        });

        // Search Overlay Toggle
        $('#search-icon').on('click', function(e) {
            e.preventDefault();
            $('#search-overlay').toggleClass('hidden flex');
        });

        $('#close-search').on('click', function() {
            $('#search-overlay').toggleClass('hidden flex');
        });

        // Update cart count via AJAX
        $(document.body).on('added_to_cart', function() {
            $.post(jouvin_ajax.ajax_url, {
                action: 'update_cart_count'
            }, function(response) {
                $('.cart-count').text(response);
            });
        });
    });

})(jQuery);
