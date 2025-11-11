<form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" placeholder="<?php echo esc_attr_x( 'Search products, brands, categories...', 'placeholder', 'jouvin' ); ?>" value="<?php echo get_search_query(); ?>" name="s" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-white/80 backdrop-blur-sm">
    <div class="absolute left-3 top-2.5 text-gray-400">
        <i class="fas fa-search"></i>
    </div>
    <input type="hidden" name="post_type" value="product" />
</form>
