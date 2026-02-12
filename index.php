<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildPath Adventures - Explore the Wild, One Trek at a Time</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="#" class="logo">
            <svg fill="currentColor" viewBox="0 0 24 24">
                <path d="M14,6L10.25,11L13.1,14.8L11.5,16C9.81,13.75 7,10 7,10L1,18H23L14,6Z" />
            </svg>
            WildPath Adventures
        </a>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-menu" id="navMenu">
            <li><a href="#hero">Home</a></li>
            <li><a href="#trips">Adventures</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-background"></div>
        <div class="gradient-mesh"></div>
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="particles" id="particles"></div>
        <div class="hero-mountains"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">WILDPATH<br>ADVENTURES</h1>
            <p class="hero-tagline">Explore the Wild, One Trek at a Time</p>
            <a href="#trips" class="cta-button">Book Your Adventure</a>
        </div>
        <div class="scroll-indicator">
            <svg fill="white" viewBox="0 0 24 24">
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" />
            </svg>
        </div>
    </section>

    <!-- Featured Trips Section -->
    <section id="trips" class="section trips-section">
        <h2 class="section-title">Featured Adventures</h2>
        <p class="section-subtitle">Choose your next wilderness experience</p>

        <div class="trips-container">
            <!-- Trip Card 1 -->
            <div class="trip-card" onclick="openModal('alpine')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/01.png" alt="Alpine Heights Trek" />
                    <div class="difficulty-badge difficulty-moderate">Moderate</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Alpine Heights Trek</h3>
                        <span class="trip-duration">5 Days</span>
                    </div>
                    <p class="trip-description">
                        Experience breathtaking mountain vistas and pristine alpine meadows.
                        This journey takes you through rugged terrain with stunning panoramic views
                        and nights under starlit skies.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$1,250<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>

            <!-- Trip Card 2 -->
            <div class="trip-card" onclick="openModal('forest')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/02.png" alt="Forest Sanctuary" />
                    <div class="difficulty-badge difficulty-easy">Easy</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Forest Sanctuary</h3>
                        <span class="trip-duration">3 Days</span>
                    </div>
                    <p class="trip-description">
                        Immerse yourself in ancient forests and discover hidden waterfalls.
                        Perfect for beginners, this trek combines gentle trails with
                        peaceful bivouac camping experiences.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$650<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>

            <!-- Trip Card 3 -->
            <div class="trip-card" onclick="openModal('peak')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/03.png" alt="Summit Challenge" />
                    <div class="difficulty-badge difficulty-hard">Hard</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Summit Challenge</h3>
                        <span class="trip-duration">7 Days</span>
                    </div>
                    <p class="trip-description">
                        Conquer challenging peaks and test your limits in this advanced expedition.
                        Navigate rocky terrain, cross mountain passes, and experience the ultimate
                        wilderness adventure.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$2,100<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>

            <!-- Trip Card 4 -->
            <div class="trip-card" onclick="openModal('river')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/07.jpg" alt="Summit Challenge" />
                    <div class="difficulty-badge difficulty-easy">Easy</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Riverside Escape</h3>
                        <span class="trip-duration">2 Days</span>
                    </div>
                    <p class="trip-description">
                        Follow scenic river trails through lush valleys and camp beside crystal-clear
                        waters. Ideal for families and first-time trekkers seeking natural beauty
                        and tranquility.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$450<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>

            <!-- Trip Card 5 -->
            <div class="trip-card" onclick="openModal('wilderness')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/06.jpg" alt="Summit Challenge" />
                    <div class="difficulty-badge difficulty-moderate">Moderate</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Wilderness Explorer</h3>
                        <span class="trip-duration">4 Days</span>
                    </div>
                    <p class="trip-description">
                        Discover remote wilderness areas rarely visited by others.
                        Navigate diverse landscapes from dense forests to open meadows,
                        with expert guides leading the way.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$950<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>

            <!-- Trip Card 6 -->
            <div class="trip-card" onclick="openModal('glacier')">
                <div class="trip-image">
                    <img src="assets/images/adventures_images/05.jpg" alt="Summit Challenge" />
                    <div class="difficulty-badge difficulty-hard">Hard</div>
                </div>
                <div class="trip-content">
                    <div class="trip-header">
                        <h3 class="trip-name">Glacier Expedition</h3>
                        <span class="trip-duration">6 Days</span>
                    </div>
                    <p class="trip-description">
                        Experience the raw beauty of glacial landscapes in this challenging expedition.
                        Traverse ice fields, witness towering peaks, and camp in the heart of
                        pristine mountain wilderness.
                    </p>
                    <div class="trip-footer">
                        <div class="trip-price">$1,850<span>/person</span></div>
                        <button class="trip-button">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section section">
        <div class="about-content">
            <div class="about-text">
                <h2>Why Choose WildPath</h2>
                <p>
                    For over 15 years, WildPath Adventures has been guiding explorers through
                    the world's most spectacular wilderness areas. Our passion for nature and
                    commitment to sustainable tourism drives everything we do.
                </p>
                <p>
                    We believe that true adventure comes from connecting with nature in its
                    purest form. Our experienced guides, carefully planned routes, and dedication
                    to safety ensure that every journey is both thrilling and secure.
                </p>

                <div class="about-features">
                    <div class="feature-item">
                        <h4>Expert Guides</h4>
                        <p>Certified professionals with decades of wilderness experience</p>
                    </div>
                    <div class="feature-item">
                        <h4>Safety First</h4>
                        <p>Comprehensive safety protocols and emergency support</p>
                    </div>
                    <div class="feature-item">
                        <h4>Eco-Friendly</h4>
                        <p>Leave no trace principles and sustainable practices</p>
                    </div>
                    <div class="feature-item">
                        <h4>Local Knowledge</h4>
                        <p>Deep understanding of terrain, weather, and wildlife</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="assets/images/gallery/04.jpg" alt="Summit Challenge" />
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section section">
        <h2 class="section-title">Adventurer Stories</h2>
        <p class="section-subtitle">Hear from those who've trekked with us</p>

        <div class="testimonials-container">
            <div class="testimonial-card">
                <p class="testimonial-text">
                    The Alpine Heights Trek exceeded all expectations. Our guide was knowledgeable,
                    the views were absolutely breathtaking, and the whole experience was perfectly
                    organized. I can't wait to book my next adventure!
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>Sarah Mitchell</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">
                    As a first-time trekker, I was nervous, but the Forest Sanctuary trip was
                    perfect. The guides made me feel safe and confident. The bivouac camping
                    under the stars was magical. Highly recommend!
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>James Chen</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">
                    The Summit Challenge pushed me to my limits in the best way possible.
                    WildPath's attention to detail, safety measures, and passionate guides
                    made this the adventure of a lifetime. Unforgettable!
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>Emily Rodriguez</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <h2 class="section-title">Captured Moments</h2>
        <p class="section-subtitle">Memories from the trail</p>
<div class="gallery-grid" id="lightgallery">
    <a href="assets/images/gallery/01.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/01.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/02.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/02.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/03.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/03.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/04.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/04.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/05.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/05.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/06.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/06.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/07.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/07.jpg" alt="Summit Challenge" />
        </div>
    </a>
    <a href="assets/images/gallery/08.jpg" data-lg-size="1600-2400">
        <div class="gallery-item">
            <img src="assets/images/gallery/08.jpg" alt="Summit Challenge" />
        </div>
    </a>
</div>

    </section>
    <!-- Modal overlay -->

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>WildPath Adventures</h3>
                <p>Explore the wild, one trek at a time. Sustainable wilderness experiences since 2009.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#trips">Browse Trips</a>
                <a href="#about">About Us</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
            </div>

            <div class="footer-section">
                <h3>Contact</h3>
                <p>📍 123 Mountain View Road<br>Boulder, CO 80302</p>
                <p>📞 (555) 123-4567</p>
                <p>✉️ info@wildpathadventures.com</p>
            </div>

            <div class="footer-section">
                <h3>Newsletter</h3>
                <p>Subscribe for exclusive trips and adventure tips</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email" required>
                    <button type="submit">Join</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 WildPath Adventures. All rights reserved. | Crafted with ❤️ for adventurers</p>
        </div>
    </footer>

    <!-- Modal -->
    <div id="tripModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-gallery">
                <img src="assets/images/adventures_images/01.png" alt="Alpine Heights Trek" />
            </div>
            <div class="modal-body">
                <h2 class="modal-title" id="modalTitle">Alpine Heights Trek</h2>
                <div class="modal-details">
                    <div>
                        <div class="detail-section">
                            <h3>Trip Overview</h3>
                            <p id="modalDescription">
                                Embark on an unforgettable journey through pristine alpine terrain.
                                This 5-day trek takes you across mountain passes, through flowering meadows,
                                and along crystal-clear mountain streams. Each night, we'll set up bivouac
                                camps in stunning locations where you'll fall asleep under a blanket of stars.
                            </p>
                        </div>

                        <div class="detail-section">
                            <h3>What's Included</h3>
                            <ul>
                                <li>Professional wilderness guide</li>
                                <li>All camping equipment (tents, sleeping bags, mats)</li>
                                <li>Meals and water purification</li>
                                <li>Emergency communication devices</li>
                                <li>First aid and safety equipment</li>
                                <li>Park permits and fees</li>
                            </ul>
                        </div>

                        <div class="detail-section">
                            <h3>Recommended Gear</h3>
                            <ul>
                                <li>Hiking boots (broken in)</li>
                                <li>Waterproof jacket and pants</li>
                                <li>Layered clothing system</li>
                                <li>Daypack (20-30L)</li>
                                <li>Water bottles (2L capacity)</li>
                                <li>Headlamp with extra batteries</li>
                                <li>Sun protection (hat, sunglasses, sunscreen)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="reservation-form">
                        <h3 style="font-family: 'Bebas Neue', sans-serif; font-size: 1.8rem; margin-bottom: 1.5rem; letter-spacing: 0.02em;">Reserve Your Spot</h3>
                        <form onsubmit="submitReservation(event)">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" required placeholder="John Doe">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" required placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label>Trip Dates</label>
                                <input type="date" required>
                            </div>
                            <div class="form-group">
                                <label>Number of People</label>
                                <select required>
                                    <option value="">Select...</option>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5+ People</option>
                                </select>
                            </div>
                            <button type="submit" class="confirm-button">Confirm Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.0/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.0/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.0/plugins/thumbnail/lg-thumbnail.umd.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500,
        zoom: true,
        thumbnail: true,
        download: true,
        loop: true
    });
});
</script>
    <script>
        // Create floating particles
        const particlesContainer = document.getElementById('particles');
        const particleCount = 30;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (15 + Math.random() * 10) + 's';
            particlesContainer.appendChild(particle);
        }

        // Mobile menu toggle
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('active');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Modal functionality
        function openModal(tripType) {
            const modal = document.getElementById('tripModal');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';

            // You can customize modal content based on tripType here
            const tripData = {
                alpine: {
                    title: 'Alpine Heights Trek',
                    description: 'Embark on an unforgettable journey through pristine alpine terrain...'
                },
                forest: {
                    title: 'Forest Sanctuary',
                    description: 'Immerse yourself in ancient forests and discover hidden waterfalls...'
                },
                peak: {
                    title: 'Summit Challenge',
                    description: 'Conquer challenging peaks and test your limits in this advanced expedition...'
                },
                river: {
                    title: 'Riverside Escape',
                    description: 'Follow scenic river trails through lush valleys...'
                },
                wilderness: {
                    title: 'Wilderness Explorer',
                    description: 'Discover remote wilderness areas rarely visited by others...'
                },
                glacier: {
                    title: 'Glacier Expedition',
                    description: 'Experience the raw beauty of glacial landscapes...'
                }
            };

            if (tripData[tripType]) {
                document.getElementById('modalTitle').textContent = tripData[tripType].title;
                document.getElementById('modalDescription').textContent = tripData[tripType].description;
            }
        }

        function closeModal() {
            const modal = document.getElementById('tripModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function submitReservation(event) {
            event.preventDefault();
            alert('Thank you for your reservation! We will contact you shortly to confirm your adventure.');
            closeModal();
        }

        // Close modal when clicking outside
        document.getElementById('tripModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.trip-card, .testimonial-card, .gallery-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>


</html>