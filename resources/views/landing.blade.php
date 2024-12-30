<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Product Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .blur-load {
            background-size: cover;
            background-position: center;
        }

        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(45deg, #4f46e5, #7c3aed);
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 40;
            padding: 2rem;
        }

        .mobile-menu.active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="flex justify-between items-center mb-8">
            <div class="text-2xl font-bold text-gradient">Premium Store</div>
            <button class="close-menu text-2xl">×</button>
        </div>
        <div class="flex flex-col space-y-6">
            <a href="#" class="text-gray-600 text-lg">Home</a>
            <a href="#products" class="text-gray-600 text-lg">Products</a>
            <a href="#" class="text-gray-600 text-lg">About</a>
            <a href="#" class="text-gray-600 text-lg">Contact</a>
            <a href="/admin" class="text-white bg-indigo-600 text-center py-2 rounded-full">Sign In</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="text-xl md:text-2xl font-bold text-gradient">Premium Store</div>

                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Home</a>
                    <a href="#products" class="text-gray-600 hover:text-indigo-600 transition-colors">Products</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">About</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
                </div>

                <div class="hidden md:flex">
                    <a href="/admin"
                        class="text-white bg-indigo-600 hover:bg-indigo-700 transition-colors px-6 py-2 rounded-full">Sign
                        In</a>
                </div>

                <button class="md:hidden menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 md:pt-28 pb-16 md:pb-20 gradient-bg">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 text-white text-center lg:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                        Discover Premium Quality Products
                    </h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90">
                        Exclusive collection of hand-picked products designed for your lifestyle.
                    </p>
                    <div
                        class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#products"
                            class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors">
                            Shop Now
                        </a>
                        <a href="#"
                            class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-indigo-600 transition-colors">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-12 lg:mt-0 px-4">
                    <img src="{{ asset('images/afterbox.png') }}" alt="Hero" class="rounded-lg shadow-2xl w-full"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 md:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-gradient">Featured Products</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto px-4">
                Discover our carefully curated collection of premium products designed to enhance your lifestyle.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($products as $product)
                    <div class="card-hover bg-white rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="{{ asset('images/afterbox.png') }}" alt="Hero"
                                class="w-full h-48 md:h-56 object-cover" loading="lazy">
                            <div class="absolute top-4 right-4">
                                <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm">
                                    {{ $product->category->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4 md:p-6">
                            <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl md:text-2xl font-bold text-indigo-600">
                                    Rp {{ number_format($product->selling_price, 0, ',', '.') }}
                                </span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">
                                    Stock: {{ $product->stock }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 md:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="text-center p-4 md:p-6">
                    <div class="text-4xl text-indigo-600 mb-4">⚡</div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Get your products delivered within 24 hours</p>
                </div>
                <div class="text-center p-4 md:p-6">
                    <div class="text-4xl text-indigo-600 mb-4">🛡️</div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Secure Payment</h3>
                    <p class="text-gray-600">100% secure payment methods</p>
                </div>
                <div class="text-center p-4 md:p-6">
                    <div class="text-4xl text-indigo-600 mb-4">💫</div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Premium Quality</h3>
                    <p class="text-gray-600">Handpicked premium products</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center md:text-left">
                    <h4 class="text-lg md:text-xl font-semibold mb-4">Premium Store</h4>
                    <p class="text-gray-400">Your destination for premium quality products.</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-lg md:text-xl font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQs</a></li>
                    </ul>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-lg md:text-xl font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>contact@premiumstore.com</li>
                        <li>+1 234 567 890</li>
                        <li>123 Premium Street</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg md:text-xl font-semibold mb-4 text-center md:text-left">Newsletter</h4>
                    <form class="space-y-4">
                        <input type="email" placeholder="Enter your email"
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-indigo-500">
                        <button
                            class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-sm md:text-base text-gray-400">
                <p>© 2024 Premium Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        // Mobile menu functionality
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeMenu = document.querySelector('.close-menu');

        // Toggle menu on burger click
        menuToggle.addEventListener('click', () => {
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
            } else {
                mobileMenu.classList.add('active');
            }
        });

        // Close menu on X button click
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Close menu when clicking a link
        const mobileLinks = document.querySelectorAll('.mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });
    </script>
</body>

</html>