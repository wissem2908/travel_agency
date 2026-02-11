<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildPath Adventures - Explore the Wild, One Trek at a Time</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --wilderness-dark: #1a2f1a;
            --forest-green: #2d5a3d;
            --moss-green: #4a7c59;
            --earth-brown: #8b6f47;
            --sand-beige: #d4c5b9;
            --sky-blue: #7ba3cc;
            --sunset-orange: #e67e50;
            --snow-white: #f8f9fa;
            --deep-night: #0d1b0d;
            
            --gradient-forest: linear-gradient(135deg, var(--forest-green) 0%, var(--moss-green) 100%);
            --gradient-sunset: linear-gradient(135deg, var(--earth-brown) 0%, var(--sunset-orange) 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Outfit', sans-serif;
            color: var(--wilderness-dark);
            overflow-x: hidden;
            background: var(--snow-white);
        }
        
        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1.5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(13, 27, 13, 0.1);
            backdrop-filter: blur(20px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .navbar.scrolled {
            background: rgba(13, 27, 13, 0.95);
            padding: 1rem 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(230, 126, 80, 0.2);
        }
        
        .logo {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.8rem;
            color: var(--snow-white);
            letter-spacing: 0.05em;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            z-index: 10;
        }
        
        .logo svg {
            width: 30px;
            height: 30px;
            filter: drop-shadow(0 0 10px rgba(230, 126, 80, 0.5));
            animation: logoGlow 3s ease-in-out infinite;
        }
        
        @keyframes logoGlow {
            0%, 100% { filter: drop-shadow(0 0 10px rgba(230, 126, 80, 0.5)); }
            50% { filter: drop-shadow(0 0 20px rgba(230, 126, 80, 0.8)); }
        }
        
        .nav-menu {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }
        
        .nav-menu a {
            color: var(--snow-white);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--sunset-orange);
            transition: width 0.3s ease;
        }
        
        .nav-menu a:hover {
            color: var(--sunset-orange);
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 5px;
            z-index: 10;
        }
        
        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--snow-white);
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            background: 
                linear-gradient(135deg, rgba(13, 27, 13, 0.7) 0%, rgba(26, 47, 26, 0.6) 100%),
                url('https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=2070&auto=format&fit=crop') center/cover;
            z-index: 0;
            animation: heroZoom 30s ease-in-out infinite alternate;
        }
        
        @keyframes heroZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        
        /* Modern Floating Elements */
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
        }
        
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            top: 10%;
            left: -5%;
            background: radial-gradient(circle, rgba(123, 163, 204, 0.15), transparent);
            animation: float 20s ease-in-out infinite;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 10%;
            transform: rotate(45deg);
            background: linear-gradient(135deg, rgba(230, 126, 80, 0.1), transparent);
            animation: float 25s ease-in-out infinite reverse;
        }
        
        .shape-3 {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            bottom: 20%;
            left: 15%;
            background: radial-gradient(circle, rgba(74, 124, 89, 0.15), transparent);
            animation: float 18s ease-in-out infinite;
            animation-delay: -5s;
        }
        
        .shape-4 {
            width: 250px;
            height: 250px;
            top: 30%;
            right: -5%;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: linear-gradient(135deg, rgba(212, 197, 185, 0.1), transparent);
            animation: morph 15s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(30px, -30px) rotate(90deg); }
            50% { transform: translate(-20px, 20px) rotate(180deg); }
            75% { transform: translate(40px, 30px) rotate(270deg); }
        }
        
        @keyframes morph {
            0%, 100% { 
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                transform: rotate(0deg) scale(1);
            }
            50% { 
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
                transform: rotate(180deg) scale(1.1);
            }
        }
        
        /* Particle Effect */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: particleFloat 15s linear infinite;
        }
        
        @keyframes particleFloat {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(50px); opacity: 0; }
        }
        
        .hero-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(123, 163, 204, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(230, 126, 80, 0.15) 0%, transparent 50%);
            animation: atmosphereShift 20s ease-in-out infinite;
        }
        
        @keyframes atmosphereShift {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.1); }
        }
        
        .hero-mountains {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60%;
            background: linear-gradient(to top, rgba(13, 27, 13, 0.9) 0%, transparent 100%);
            clip-path: polygon(
                0% 100%, 0% 70%, 
                15% 60%, 25% 50%, 35% 55%, 
                45% 40%, 55% 35%, 65% 45%, 
                75% 50%, 85% 45%, 95% 55%, 
                100% 60%, 100% 100%
            );
            z-index: 1;
            animation: mountainFloat 30s ease-in-out infinite;
        }
        
        @keyframes mountainFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 40%, transparent 0%, rgba(13, 27, 13, 0.5) 100%);
            z-index: 2;
        }
        
        /* Gradient Mesh Overlay */
        .gradient-mesh {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            background: 
                radial-gradient(at 20% 30%, rgba(123, 163, 204, 0.3) 0%, transparent 50%),
                radial-gradient(at 80% 70%, rgba(230, 126, 80, 0.25) 0%, transparent 50%),
                radial-gradient(at 50% 50%, rgba(74, 124, 89, 0.2) 0%, transparent 60%);
            filter: blur(60px);
            animation: meshMove 20s ease-in-out infinite;
        }
        
        @keyframes meshMove {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 0.9; transform: scale(1.2); }
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: var(--snow-white);
            max-width: 900px;
            padding: 0 2rem;
            animation: heroReveal 1.5s ease-out;
        }
        
        @keyframes heroReveal {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .hero-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(3.5rem, 8vw, 7rem);
            letter-spacing: 0.05em;
            line-height: 0.95;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            animation: titleGlow 3s ease-in-out infinite;
        }
        
        @keyframes titleGlow {
            0%, 100% { text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); }
            50% { text-shadow: 0 4px 30px rgba(123, 163, 204, 0.6), 0 0 40px rgba(123, 163, 204, 0.3); }
        }
        
        .hero-tagline {
            font-size: clamp(1.2rem, 2.5vw, 1.8rem);
            font-weight: 300;
            margin-bottom: 3rem;
            letter-spacing: 0.02em;
            opacity: 0.95;
            animation: heroReveal 1.5s ease-out 0.3s backwards;
        }
        
        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            background: var(--gradient-sunset);
            color: var(--snow-white);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 10px 30px rgba(230, 126, 80, 0.3);
            animation: heroReveal 1.5s ease-out 0.6s backwards;
            position: relative;
            overflow: hidden;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }
        
        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(230, 126, 80, 0.5);
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 3rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            animation: bounce 2s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(10px); }
        }
        
        .scroll-indicator svg {
            width: 30px;
            height: 30px;
            opacity: 0.7;
            filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.3));
        }
        
        /* Featured Trips Section */
        .section {
            padding: 6rem 2rem;
            position: relative;
        }
        
        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: linear-gradient(to bottom, var(--snow-white), transparent);
            pointer-events: none;
        }
        
        .trips-section {
            background: 
                radial-gradient(circle at 10% 20%, rgba(123, 163, 204, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(230, 126, 80, 0.03) 0%, transparent 50%);
        }
        
        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            text-align: center;
            margin-bottom: 1rem;
            letter-spacing: 0.03em;
            color: var(--wilderness-dark);
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, rgba(230, 126, 80, 0.1), transparent 70%);
            border-radius: 50%;
            z-index: -1;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--sunset-orange), transparent);
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--moss-green);
            margin-bottom: 4rem;
            font-weight: 300;
        }
        
        .trips-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }
        
        .trip-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            cursor: pointer;
            position: relative;
        }
        
        .trip-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(230, 126, 80, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 0;
            border-radius: 24px;
        }
        
        .trip-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(230, 126, 80, 0.1);
        }
        
        .trip-card:hover::before {
            opacity: 1;
        }
        
        .trip-image {
            width: 100%;
            height: 250px;
            background: var(--gradient-forest);
            position: relative;
            overflow: hidden;
        }
        
        .trip-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(45, 90, 61, 0.3) 0%, 
                rgba(74, 124, 89, 0.2) 50%, 
                rgba(123, 163, 204, 0.3) 100%);
            animation: imageShimmer 6s ease-in-out infinite;
        }
        
        @keyframes imageShimmer {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .difficulty-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .difficulty-easy {
            background: rgba(74, 174, 89, 0.9);
            color: white;
        }
        
        .difficulty-moderate {
            background: rgba(230, 126, 80, 0.9);
            color: white;
        }
        
        .difficulty-hard {
            background: rgba(220, 53, 69, 0.9);
            color: white;
        }
        
        .trip-content {
            padding: 2rem;
        }
        
        .trip-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        
        .trip-name {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.8rem;
            letter-spacing: 0.02em;
            color: var(--wilderness-dark);
        }
        
        .trip-duration {
            font-size: 0.9rem;
            color: var(--moss-green);
            font-weight: 500;
            white-space: nowrap;
            margin-left: 1rem;
        }
        
        .trip-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        
        .trip-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.5rem;
            border-top: 1px solid #e0e0e0;
        }
        
        .trip-price {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2rem;
            color: var(--sunset-orange);
            letter-spacing: 0.02em;
        }
        
        .trip-price span {
            font-family: 'Outfit', sans-serif;
            font-size: 0.9rem;
            font-weight: 400;
            color: #777;
        }
        
        .trip-button {
            padding: 0.8rem 1.8rem;
            background: var(--gradient-forest);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .trip-button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(45, 90, 61, 0.3);
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(13, 27, 13, 0.95);
            z-index: 1000;
            overflow-y: auto;
            animation: modalFadeIn 0.3s ease-out;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .modal.active {
            display: block;
        }
        
        .modal-content {
            max-width: 1200px;
            margin: 3rem auto;
            background: white;
            border-radius: 30px;
            overflow: hidden;
            animation: modalSlideUp 0.4s ease-out;
            position: relative;
        }
        
        @keyframes modalSlideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .modal-close {
            position: absolute;
            top: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .modal-close:hover {
            transform: rotate(90deg) scale(1.1);
            background: var(--sunset-orange);
            color: white;
        }
        
        .modal-gallery {
            height: 400px;
            background: var(--gradient-forest);
            position: relative;
            overflow: hidden;
        }
        
        .modal-gallery::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 40%, rgba(123, 163, 204, 0.3), transparent 70%),
                        radial-gradient(circle at 70% 60%, rgba(230, 126, 80, 0.2), transparent 70%);
        }
        
        .modal-body {
            padding: 3rem;
        }
        
        .modal-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--wilderness-dark);
            letter-spacing: 0.02em;
        }
        
        .modal-details {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        .detail-section h3 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--forest-green);
            letter-spacing: 0.02em;
        }
        
        .detail-section p, .detail-section ul {
            color: #555;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .detail-section ul {
            list-style: none;
            padding-left: 0;
        }
        
        .detail-section li {
            padding-left: 1.5rem;
            position: relative;
            margin-bottom: 0.5rem;
        }
        
        .detail-section li::before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--moss-green);
            font-weight: bold;
        }
        
        .reservation-form {
            background: var(--snow-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--wilderness-dark);
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--moss-green);
            box-shadow: 0 0 0 3px rgba(74, 124, 89, 0.1);
        }
        
        .confirm-button {
            width: 100%;
            padding: 1rem;
            background: var(--gradient-sunset);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .confirm-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(230, 126, 80, 0.3);
        }
        
        /* About Section */
        .about-section {
            background: linear-gradient(135deg, var(--wilderness-dark) 0%, var(--forest-green) 100%);
            color: var(--snow-white);
        }
        
        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .about-text h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 2rem;
            letter-spacing: 0.03em;
        }
        
        .about-text p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
            opacity: 0.95;
        }
        
        .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .feature-item h4 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            letter-spacing: 0.02em;
        }
        
        .feature-item p {
            font-size: 0.9rem;
            margin: 0;
        }
        
        .about-image {
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 40% 50%, rgba(123, 163, 204, 0.3), transparent 60%),
                        radial-gradient(circle at 60% 50%, rgba(230, 126, 80, 0.2), transparent 60%);
        }
        
        /* Testimonials */
        .testimonials-section {
            background: var(--sand-beige);
        }
        
        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background: white;
            padding: 2.5rem;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            border: 1px solid transparent;
            background-clip: padding-box;
            transition: all 0.4s ease;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 5rem;
            color: var(--moss-green);
            opacity: 0.15;
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 24px;
            padding: 2px;
            background: linear-gradient(135deg, rgba(230, 126, 80, 0.3), rgba(123, 163, 204, 0.3));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .testimonial-card:hover::after {
            opacity: 1;
        }
        
        .testimonial-text {
            position: relative;
            margin-bottom: 1.5rem;
            line-height: 1.7;
            color: #555;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-forest);
        }
        
        .author-info h4 {
            font-weight: 600;
            color: var(--wilderness-dark);
            margin-bottom: 0.2rem;
        }
        
        .author-info .stars {
            color: var(--sunset-orange);
            font-size: 0.9rem;
        }
        
        /* Gallery */
        .gallery-section {
            padding: 6rem 2rem;
        }
        
        .gallery-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .gallery-item {
            aspect-ratio: 1;
            background: var(--gradient-forest);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        
        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(45, 90, 61, 0.4) 0%, 
                rgba(123, 163, 204, 0.3) 100%);
            transition: all 0.5s ease;
            z-index: 1;
        }
        
        .gallery-item::after {
            content: '+';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            font-size: 3rem;
            color: white;
            font-weight: 300;
            z-index: 2;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        
        .gallery-item:hover {
            transform: scale(1.08) rotate(2deg);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            z-index: 10;
        }
        
        .gallery-item:hover::before {
            opacity: 0.3;
        }
        
        .gallery-item:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }
        
        /* Footer */
        .footer {
            background: var(--deep-night);
            color: var(--snow-white);
            padding: 4rem 2rem 2rem;
        }
        
        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        .footer-section h3 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            letter-spacing: 0.02em;
        }
        
        .footer-section p, .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: var(--sunset-orange);
        }
        
        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 30px;
            font-family: 'Outfit', sans-serif;
        }
        
        .newsletter-form button {
            padding: 0.8rem 1.5rem;
            background: var(--gradient-sunset);
            border: none;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .newsletter-form button:hover {
            transform: scale(1.05);
        }
        
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--sunset-orange);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem 1.5rem;
            }
            
            .menu-toggle {
                display: flex;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                background: rgba(13, 27, 13, 0.98);
                flex-direction: column;
                padding: 2rem;
                gap: 1.5rem;
                transition: left 0.3s ease;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .about-content, .modal-details {
                grid-template-columns: 1fr;
            }
            
            .about-features {
                grid-template-columns: 1fr;
            }
            
            .trips-container {
                grid-template-columns: 1fr;
            }
            
            .hero-title {
                font-size: 3rem;
            }
            
            .section {
                padding: 4rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="#" class="logo">
            <svg fill="currentColor" viewBox="0 0 24 24">
                <path d="M14,6L10.25,11L13.1,14.8L11.5,16C9.81,13.75 7,10 7,10L1,18H23L14,6Z"/>
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
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
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
            <div class="about-image"></div>
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
        
        <div class="gallery-grid">
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>WildPath Adventures</h3>
                <p>Explore the wild, one trek at a time. Sustainable wilderness experiences since 2009.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
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
            <div class="modal-gallery"></div>
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
            anchor.addEventListener('click', function (e) {
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