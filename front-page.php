<?php get_header(); ?>

    <!-- Hero Section with Special Products -->
    <section class="hero-gradient py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center space-x-2 bg-red-100 text-red-800 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-bolt"></i>
                    <span class="font-semibold">SPECIAL OFFERS</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Featured & Special Products
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover our handpicked selection of premium products with exclusive discounts and limited-time offers.
                </p>
            </div>

            <?php // NOTE: This is a static section. To make it dynamic, you could use a custom post type for "Deals" or feature products with a specific tag. ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Special Product 1 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x300/2563eb/white?text=Smartphone" alt="Smartphone" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="special-badge text-white px-3 py-1 rounded-full text-sm font-semibold">-40% OFF</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-500">Electronics</span>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Premium Smartphone Pro</h3>
                        <p class="text-gray-600 text-sm mb-4">Latest model with advanced camera and all-day battery life.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-gray-800">$699</span>
                                <span class="text-lg text-gray-400 line-through">$1199</span>
                            </div>
                            <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 2 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x300/7c3aed/white?text=Wireless+Headphones" alt="Wireless Headphones" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-accent to-emerald-600 text-white px-3 py-1 rounded-full text-sm font-semibold">LIMITED STOCK</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-500">Audio</span>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Wireless Noise-Canceling Headphones</h3>
                        <p class="text-gray-600 text-sm mb-4">Premium sound quality with 30-hour battery life.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-gray-800">$249</span>
                                <span class="text-lg text-gray-400 line-through">$399</span>
                            </div>
                            <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 3 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x300/dc2626/white?text=Smart+Watch" alt="Smart Watch" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">FLASH SALE</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-500">Wearables</span>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Premium Smart Watch Series 5</h3>
                        <p class="text-gray-600 text-sm mb-4">Advanced health tracking with elegant design.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-gray-800">$199</span>
                                <span class="text-lg text-gray-400 line-through">$349</span>
                            </div>
                            <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="border-2 border-primary text-primary px-8 py-3 rounded-full font-semibold hover:bg-primary hover:text-white transition-all">
                    View All Special Offers
                </button>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Shop by Category</h2>
                <p class="text-gray-600">Explore our wide range of product categories</p>
            </div>
            <?php // NOTE: This is a static section. You can make this dynamic by querying WooCommerce product categories. ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Electronics -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-blue-50">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mobile-alt text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Electronics</h3>
                    <p class="text-sm text-gray-600">124 items</p>
                </div>
                <!-- Fashion -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-purple-50">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tshirt text-secondary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Fashion</h3>
                    <p class="text-sm text-gray-600">256 items</p>
                </div>
                <!-- Home & Kitchen -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-green-50">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-accent text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Home & Kitchen</h3>
                    <p class="text-sm text-gray-600">198 items</p>
                </div>
                <!-- Beauty -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-pink-50">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-spa text-pink-500 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Beauty</h3>
                    <p class="text-sm text-gray-600">142 items</p>
                </div>
                <!-- Sports -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-orange-50">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-futbol text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Sports</h3>
                    <p class="text-sm text-gray-600">87 items</p>
                </div>
                <!-- Books -->
                <div class="category-item bg-gray-50 rounded-xl p-6 text-center hover:bg-indigo-50">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Books</h3>
                    <p class="text-sm text-gray-600">321 items</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Sections with Products -->
    <main class="flex-1 py-16">
        <?php // NOTE: This is a static section. You can use WooCommerce shortcodes or custom WP_Query loops to display products from different categories. ?>
        <!-- Electronics Category -->
        <div class="container mx-auto px-4 mb-16">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Electronics</h2>
                    <p class="text-gray-600">Latest gadgets and tech accessories</p>
                </div>
                <button class="text-primary font-semibold hover:text-secondary transition-colors">
                    View All →
                </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/3b82f6/white?text=Laptop" alt="Laptop" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Gaming Laptop Pro</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(124)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$1,299</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/6366f1/white?text=Tablet" alt="Tablet" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Premium Tablet</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(89)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$499</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/8b5cf6/white?text=Camera" alt="Camera" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">DSLR Camera Kit</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(203)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$899</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/a855f7/white?text=Speaker" alt="Speaker" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Bluetooth Speaker</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(67)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$129</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fashion Category -->
        <div class="container mx-auto px-4 mb-16 category-section">
            <div class="p-8">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Fashion</h2>
                        <p class="text-gray-600">Trendy clothing and accessories</p>
                    </div>
                    <button class="text-primary font-semibold hover:text-secondary transition-colors">
                        View All →
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="product-card bg-white rounded-xl overflow-hidden">
                        <div class="relative">
                            <img src="https://placehold.co/300x250/f97316/white?text=T-Shirt" alt="T-Shirt" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                                <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Cotton T-Shirt</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-500 text-sm ml-2">(156)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-800">$29</span>
                                <button class="text-primary hover:text-secondary">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-xl overflow-hidden">
                        <div class="relative">
                            <img src="https://placehold.co/300x250/059669/white?text=Jeans" alt="Jeans" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                                <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Slim Fit Jeans</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-500 text-sm ml-2">(234)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-800">$79</span>
                                <button class="text-primary hover:text-secondary">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-xl overflow-hidden">
                        <div class="relative">
                            <img src="https://placehold.co/300x250/dc2626/white?text=Dress" alt="Dress" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                                <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Summer Dress</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-gray-500 text-sm ml-2">(189)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-800">$59</span>
                                <button class="text-primary hover:text-secondary">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-xl overflow-hidden">
                        <div class="relative">
                            <img src="https://placehold.co/300x250/7c3aed/white?text=Shoes" alt="Shoes" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                                <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Running Shoes</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-500 text-sm ml-2">(98)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-800">$119</span>
                                <button class="text-primary hover:text-secondary">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home & Kitchen Category -->
        <div class="container mx-auto px-4 mb-16">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Home & Kitchen</h2>
                    <p class="text-gray-600">Everything for your home</p>
                </div>
                <button class="text-primary font-semibold hover:text-secondary transition-colors">
                    View All →
                </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/059669/white?text=Cookware" alt="Cookware" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Premium Cookware Set</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(145)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$249</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/0d9488/white?text=Blender" alt="Blender" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Professional Blender</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(78)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$179</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/14b8a6/white?text=Bedding" alt="Bedding" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Luxury Bedding Set</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(203)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$199</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/300x250/2dd4bf/white?text=Lamp" alt="Lamp" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
                            <i class="far fa-heart text-gray-400 hover:text-red-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-1">Modern Floor Lamp</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(56)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-800">$89</span>
                            <button class="text-primary hover:text-secondary">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>