</div><!-- #content -->
    <footer class="footer-gradient text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-bag text-white text-sm"></i>
                        </div>
                        <h3 class="text-xl font-bold">ShopEcom</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Your trusted online shopping destination with quality products and exceptional service.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                    <?php
                        // You can make this dynamic by creating a new menu in Appearance > Menus and assigning it to a new 'footer-1' location.
                        // Then, use wp_nav_menu() here.
                    ?>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Shop</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Categories</h4>
                     <?php
                        // You can make this dynamic by creating a new menu in Appearance > Menus and assigning it to a new 'footer-2' location.
                    ?>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Electronics</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Fashion</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Home & Kitchen</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Beauty</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Sports</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h4 class="font-semibold text-lg mb-4">Contact Us</h4>
                    <?php // You can make this dynamic using theme options or a contact info widget. ?>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <span class="text-gray-300 text-sm">123 Commerce St, Business City, BC 12345</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary"></i>
                            <span class="text-gray-300 text-sm">+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <span class="text-gray-300 text-sm">info@shopecom.com</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-primary"></i>
                            <span class="text-gray-300 text-sm">Mon-Fri: 9AM - 6PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. | Designed with ❤️ for your shopping experience
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>