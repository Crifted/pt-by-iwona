    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KOZA Fit | Premium Personal Training</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            :root {
                --pink: #ff0066;
                --pink-dark: #e6005c;
                --pink-light: rgba(255, 0, 102, 0.1);
                --dark: #111111;
                --gray-900: #222222;
                --gray-800: #333333;
                --gray-700: #444444;
                --gray-600: #666666;
                --gray-500: #777777;
                --gray-400: #999999;
                --gray-300: #dddddd;
                --gray-200: #eeeeee;
                --gray-100: #f7f7f7;
                --white: #ffffff;
                
                --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
                --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.06);
                --shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.08);
                
                --radius-sm: 4px;
                --radius-md: 8px;
                --radius-lg: 12px;
                --radius-xl: 20px;
                
                --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                
                --transition-fast: 0.2s cubic-bezier(0.16, 1, 0.3, 1);
                --transition-base: 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                --transition-slow: 0.5s cubic-bezier(0.16, 1, 0.3, 1);
                
                --header-height: 80px;
                --header-height-scrolled: 70px;
                
                --container-max-width: 1200px;
                --container-padding: 24px;
                
                --section-spacing: 120px;
                --section-spacing-mobile: 80px;
            }

            /* Reset */
            *, *::before, *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                font-size: 16px;
                scroll-behavior: smooth;
                height: 100%;
                scroll-padding-top: var(--header-height);
            }

            body {
                font-family: var(--font-sans);
                font-weight: 400;
                line-height: 1.7;
                color: var(--gray-800);
                background-color: var(--white);
                overflow-x: hidden;
                min-height: 100%;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            img {
                max-width: 100%;
                height: auto;
                display: block;
            }

            a {
                text-decoration: none;
                color: inherit;
                transition: color var(--transition-base);
            }

            ul, ol {
                list-style: none;
            }

            button {
                background: none;
                border: none;
                cursor: pointer;
                font-family: inherit;
                font-size: inherit;
                color: inherit;
            }

            /* Typography */
            h1, h2, h3, h4, h5, h6 {
                font-weight: 700;
                line-height: 1.2;
                margin-bottom: 1rem;
                color: var(--dark);
            }

            h1 {
                font-size: clamp(2.5rem, 5vw, 4rem);
            }

            h2 {
                font-size: clamp(2rem, 4vw, 3rem);
            }

            h3 {
                font-size: clamp(1.5rem, 3vw, 2rem);
            }

            p {
                margin-bottom: 1.5rem;
                font-size: 1.0625rem;
            }

            /* Layout */
            .container {
                width: 100%;
                max-width: var(--container-max-width);
                margin: 0 auto;
                padding: 0 var(--container-padding);
            }

            .section {
                padding: var(--section-spacing) 0;
            }

            .section--light {
                background-color: var(--white);
            }

            .section--gray {
                background-color: var(--gray-100);
            }

            .section--dark {
                background-color: var(--dark);
                color: var(--white);
            }

            .section__header {
                margin-bottom: 60px;
                text-align: center;
            }

            .section__pretitle {
                display: block;
                font-size: 0.875rem;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 600;
                color: var(--pink);
                margin-bottom: 16px;
            }

            .section__title {
                font-size: clamp(2rem, 4vw, 2.75rem); 
                margin-bottom: 24px;
                position: relative;
                display: inline-block;
                padding-bottom: 16px;
            }

            .section__title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 60px;
                height: 3px;
                background-color: var(--pink);
            }

            .section__description {
                max-width: 760px;
                margin: 0 auto;
                color: var(--gray-600);
                font-size: 1.125rem;
                line-height: 1.7;
            }

            .grid {
                display: grid;
                gap: 32px;
            }

            .grid--2 {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid--3 {
                grid-template-columns: repeat(3, 1fr);
            }

            /* Header */
            .header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: var(--header-height);
                z-index: 100;
                transition: all var(--transition-base);
                background-color: transparent;
            }

            .header--scrolled {
                background-color: rgba(0, 0, 0, 0.9);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                height: var(--header-height-scrolled);
                box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            }

            .header__container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 100%;
            }

            .logo {
                font-size: 1.75rem;
                font-weight: 800;
                color: var(--white);
                letter-spacing: -0.5px;
            }

            .logo span {
                color: var(--pink);
            }

            .nav__menu {
                display: flex;
                gap: 40px;
            }

            .nav__link {
                color: var(--white);
                font-weight: 500;
                font-size: 0.9375rem;
                position: relative;
                opacity: 0.9;
            }

            .nav__link::after {
                content: "";
                position: absolute;
                bottom: -6px;
                left: 0;
                width: 0;
                height: 2px;
                background-color: var(--pink);
                transition: width var(--transition-base);
            }

            .nav__link:hover, 
            .nav__link.active {
                opacity: 1;
            }

            .nav__link:hover::after, 
            .nav__link.active::after {
                width: 100%;
            }

            .nav__toggle {
                display: none;
                flex-direction: column;
                gap: 6px;
                cursor: pointer;
                z-index: 110;
            }

            .nav__toggle span {
                display: block;
                width: 24px;
                height: 2px;
                background-color: var(--white);
                transition: transform var(--transition-base), opacity var(--transition-base);
            }

            /* Hero Section met 1.jpg achtergrond */
            .hero {
                height: 100vh;
                min-height: 680px;
                display: flex;
                align-items: center;
                position: relative;
                color: var(--white);
                overflow: hidden;
                /* Achtergrond afbeelding */
                background-image: url('images/1.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .hero__overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, rgba(0, 0, 0, 0.85) 0%, rgba(255, 0, 102, 0.7) 100%);
                z-index: 1;
            }

            .hero__content {
                position: relative;
                z-index: 2;
                max-width: 750px;
            }

            .hero__trust {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(10px);
                padding: 8px 16px;
                border-radius: 25px;
                margin-bottom: 1rem;
                font-size: 0.9rem;
                opacity: 0;
                transform: translateY(20px);
                animation: fadeInUp 1s ease forwards 0.2s;
            }

            .hero__tag {
                display: inline-block;
                background-color: var(--white);
                color: var(--pink);
                padding: 8px 16px;
                border-radius: 100px;
                font-size: 0.875rem;
                font-weight: 700;
                margin-bottom: 24px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                opacity: 0;
                transform: translateY(20px);
                animation: fadeInUp 1s ease forwards 0.4s;
            }

            .hero__title {
                font-size: clamp(2.5rem, 6vw, 4.5rem);
                font-weight: 800;
                line-height: 1.1;
                margin-bottom: 24px;
                text-transform: uppercase;
                letter-spacing: -0.5px;
                color: var(--white);
                opacity: 0;
                transform: translateY(30px);
                animation: fadeInUp 1s ease forwards 0.6s;
            }

            .hero__description {
                font-size: clamp(1.125rem, 2vw, 1.25rem);
                margin-bottom: 40px;
                color: rgba(255, 255, 255, 0.9);
                max-width: 600px;
                line-height: 1.6;
                opacity: 0;
                transform: translateY(20px);
                animation: fadeInUp 1s ease forwards 0.8s;
            }

            .btn-group {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
                opacity: 0;
                transform: translateY(20px);
                animation: fadeInUp 1s ease forwards 1s;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 14px 32px;
                border-radius: 100px;
                font-weight: 600;
                font-size: 0.9375rem;
                transition: transform var(--transition-base), box-shadow var(--transition-base);
                position: relative;
                overflow: hidden;
                z-index: 1;
                border: 2px solid transparent;
            }

            .btn i {
                margin-right: 8px;
            }

            .btn--primary {
                background-color: var(--pink);
                color: var(--white);
                box-shadow: 0 4px 20px rgba(255, 0, 102, 0.2);
            }

            .btn--primary:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 30px rgba(255, 0, 102, 0.25);
            }

            .btn--secondary {
                background-color: var(--white);
                color: var(--dark);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            }

            .btn--secondary:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            }

            .btn--outline {
                background-color: transparent;
                border: 2px solid currentColor;
            }

            .btn--white {
                color: var(--white);
            }

            .btn--white:hover {
                background-color: var(--white);
                color: var(--pink);
            }

            .btn--lg {
                padding: 16px 40px;
                font-size: 1rem;
            }

            .btn--block {
                display: flex;
                width: 100%;
            }

            /* Live Status */
            .live-status {
                position: absolute;
                top: 20px;
                right: 20px;
                background: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(10px);
                padding: 8px 16px;
                border-radius: 20px;
                color: white;
                font-size: 0.8rem;
                display: flex;
                align-items: center;
                gap: 8px;
                z-index: 3;
            }

            .live-dot {
                width: 8px;
                height: 8px;
                background: #4ade80;
                border-radius: 50%;
                animation: pulse 2s infinite;
            }

            /* WhatsApp Floating Button */
            .whatsapp-float {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: #25D366;
                color: white;
                border-radius: 50px;
                padding: 15px 20px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 10px;
                box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
                z-index: 1000;
                transition: all 0.3s ease;
                animation: pulse 2s infinite;
            }

            .whatsapp-float:hover {
                transform: scale(1.1);
                box-shadow: 0 6px 20px rgba(37, 211, 102, 0.5);
                color: white;
                text-decoration: none;
            }

            .whatsapp-float i {
                font-size: 1.5rem;
            }

            /* Card */
            .card {
                border-radius: var(--radius-lg);
                overflow: hidden;
                box-shadow: var(--shadow-md);
                background-color: var(--white);
                transition: transform var(--transition-base), box-shadow var(--transition-base);
            }

            .card:hover {
                transform: translateY(-8px);
                box-shadow: var(--shadow-lg);
            }

            /* About Section - FIXED */
.about__image {
    width: 100%;
    min-height: 350px;
    max-height: 850px;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    aspect-ratio: 4/5;
}

.about__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 15%;
    transition: transform var(--transition-slow);
}

.about__image:hover img {
    transform: scale(1.05);
}

            .about__title {
                font-size: clamp(1.75rem, 3vw, 2.25rem);
                margin-bottom: 24px;
                position: relative;
                padding-bottom: 16px;
            }

            .about__title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 3px;
                background-color: var(--pink);
            }

            .about__text {
                margin-bottom: 24px;
                color: var(--gray-700);
                font-size: 1.0625rem;
            }

            .features {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
                margin-top: 32px;
            }

            .feature {
                display: flex;
                align-items: flex-start;
                gap: 16px;
            }

            .feature__icon {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                background-color: var(--pink-light);
                color: var(--pink);
                border-radius: 50%;
                font-size: 1.25rem;
                flex-shrink: 0;
                transition: all var(--transition-base);
            }

            .feature:hover .feature__icon {
                background-color: var(--pink);
                color: var(--white);
                transform: translateY(-4px);
                box-shadow: 0 5px 15px rgba(255, 0, 102, 0.2);
            }

            .feature__title {
                font-size: 1rem;
                font-weight: 600;
                margin-bottom: 4px;
                color: var(--gray-900);
            }

            .feature__description {
                font-size: 0.9375rem;
                color: var(--gray-600);
                margin-bottom: 0;
            }

            /* Services */
            .tabs {
                display: flex;
                justify-content: center;
                gap: 12px;
                margin-bottom: 48px;
                flex-wrap: wrap;
            }

            .tab {
                padding: 10px 24px;
                border-radius: 100px;
                font-weight: 600;
                font-size: 0.9375rem;
                cursor: pointer;
                transition: all var(--transition-base);
                background-color: var(--white);
                color: var(--gray-700);
                border: 1px solid var(--gray-300);
            }

            .tab:hover {
                box-shadow: var(--shadow-sm);
            }

            .tab.active {
                background-color: var(--pink);
                color: var(--white);
                border-color: var(--pink);
                box-shadow: 0 5px 15px rgba(255, 0, 102, 0.2);
            }

            .services {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 32px;
                margin-bottom: 60px;
            }

            .service {
                overflow: hidden;
                height: 100%;
                display: flex;
                flex-direction: column;
                position: relative;
            }

            /* Verschillende kleuren per dienst */
            .service:nth-child(1) {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .service:nth-child(2) {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            }

            .service:nth-child(3) {
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            }

            .service::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(255, 255, 255, 0.95);
                z-index: 1;
                transition: all var(--transition-base);
            }

            .service:hover::before {
                background: rgba(255, 255, 255, 0.85);
            }

            .service__content {
                padding: 48px 32px 32px;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                text-align: center;
                position: relative;
                z-index: 2;
            }

            .service__icon-large {
                width: 100px;
                height: 100px;
                background: var(--white);
                color: var(--pink);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2.5rem;
                margin: 0 auto 32px;
                transition: all var(--transition-base);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                border: 3px solid transparent;
            }

            .service:nth-child(1) .service__icon-large {
                color: #667eea;
                border-color: #667eea;
            }

            .service:nth-child(2) .service__icon-large {
                color: #f5576c;
                border-color: #f5576c;
            }

            .service:nth-child(3) .service__icon-large {
                color: #00f2fe;
                border-color: #00f2fe;
            }

            .service:hover .service__icon-large {
                transform: scale(1.15) rotate(10deg);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            }

            .service:nth-child(1):hover .service__icon-large {
                background: #667eea;
                color: white;
            }

            .service:nth-child(2):hover .service__icon-large {
                background: #f5576c;
                color: white;
            }

            .service:nth-child(3):hover .service__icon-large {
                background: #00f2fe;
                color: white;
            }

            /* Decoratieve elementen - gekleurde bolletjes rechts boven */
            .service::after {
                content: '';
                position: absolute;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                top: 20px;
                right: 20px;
                opacity: 0.1;
                z-index: 1;
                transition: all var(--transition-base);
            }

            .service:nth-child(1)::after {
                background: #667eea;
            }

            .service:nth-child(2)::after {
                background: #f5576c;
            }

            .service:nth-child(3)::after {
                background: #00f2fe;
            }

            .service:hover::after {
                transform: scale(1.5);
                opacity: 0.2;
            }

            /* Services CTA */
            .services__cta {
                text-align: center;
                background: var(--white);
                padding: 48px 32px;
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-md);
                border: 2px solid var(--pink-light);
                margin-top: 40px;
            }

            .services__cta-title {
                font-size: 1.75rem;
                font-weight: 700;
                margin-bottom: 16px;
                color: var(--dark);
            }

            .services__cta-description {
                font-size: 1.125rem;
                color: var(--gray-600);
                margin-bottom: 32px;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }

            .service__title {
                font-size: 1.375rem;
                font-weight: 700;
                margin-bottom: 16px;
                color: var(--dark);
            }

            .service__description {
                color: var(--gray-600);
                margin-bottom: 24px;
                flex-grow: 1;
            }

            .service__list {
                margin-bottom: 32px;
            }

            .service__list-item {
                position: relative;
                padding-left: 28px;
                margin-bottom: 12px;
                color: var(--gray-700);
            }

            .service__list-item::before {
                content: "";
                position: absolute;
                top: 8px;
                left: 0;
                width: 16px;
                height: 16px;
                background-color: var(--pink);
                border-radius: 50%;
            }

            .service__list-item::after {
                content: "✓";
                position: absolute;
                top: 7px;
                left: 4px;
                font-size: 10px;
                color: white;
            }

            /* Testimonials */
            .testimonials {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 32px;
            }

            .testimonial {
                height: 100%;
                display: flex;
                flex-direction: column;
                padding: 32px;
                border-left: 3px solid var(--pink);
            }

            .testimonial__text {
                position: relative;
                font-size: 1.0625rem;
                line-height: 1.7;
                color: var(--gray-700);
                margin-bottom: 32px;
                flex-grow: 1;
                padding-top: 8px;
            }

            .testimonial__text::before {
                content: """;
                position: absolute;
                top: -24px;
                left: -12px;
                font-size: 5rem;
                line-height: 1;
                font-family: serif;
                color: rgba(255, 0, 102, 0.1);
            }

            .testimonial__author {
                display: flex;
                align-items: center;
                gap: 16px;
                border-top: 1px solid var(--gray-200);
                padding-top: 24px;
            }

            .testimonial__avatar {
                width: 56px;
                height: 56px;
                border-radius: 50%;
                background-color: var(--gray-100);
                color: var(--pink);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
                flex-shrink: 0;
                transition: all var(--transition-base);
            }

            .testimonial:hover .testimonial__avatar {
                background-color: var(--pink);
                color: var(--white);
            }

            .testimonial__name {
                font-size: 1.125rem;
                font-weight: 700;
                color: var(--dark);
                margin-bottom: 4px;
            }

            .testimonial__role {
                font-size: 0.875rem;
                color: var(--gray-500);
            }

            /* Infinite Scroll Gallery */
            .gallery-section {
                position: relative;
                padding: 80px 0 0;
                background-color: var(--gray-900);
                overflow: hidden;
            }

            .gallery-header {
                text-align: center;
                margin-bottom: 60px;
            }

            .gallery-title {
                font-size: clamp(2rem, 4vw, 3rem);
                font-weight: 800;
                color: var(--white);
                margin-bottom: 16px;
                text-transform: uppercase;
                letter-spacing: -0.5px;
            }

            .gallery-subtitle {
                font-size: 1.25rem;
                color: rgba(255, 255, 255, 0.8);
                margin-bottom: 0;
            }

            .gallery-wrapper {
                position: relative;
                width: 100%;
                overflow: hidden;
                margin-bottom: 60px;
            }

            .gallery-track {
                display: flex;
                animation: scroll 40s linear infinite;
            }

            .gallery-track:hover {
                animation-play-state: paused;
            }

            .gallery-slide {
                flex: 0 0 auto;
                width: 400px;
                height: 500px;
                margin-right: 20px;
                position: relative;
                overflow: hidden;
                border-radius: var(--radius-lg);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                transition: transform var(--transition-base);
            }

            .gallery-slide:hover {
                transform: scale(1.05);
            }

            .gallery-slide img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform var(--transition-slow);
            }

            .gallery-slide:hover img {
                transform: scale(1.1);
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(-50%);
                }
            }

            /* Gallery CTA */
            .gallery-cta {
                background-color: rgba(0, 0, 0, 0.8);
                padding: 60px 0;
                text-align: center;
            }

            .gallery-cta .cta-content {
                max-width: 600px;
                margin: 0 auto;
            }

            .gallery-cta h3 {
                font-size: 2.5rem;
                font-weight: 800;
                margin-bottom: 16px;
                color: var(--white);
            }

            .gallery-cta p {
                font-size: 1.25rem;
                color: rgba(255, 255, 255, 0.9);
                margin-bottom: 32px;
            }

            .gallery-cta .cta-buttons {
                display: flex;
                gap: 16px;
                justify-content: center;
                flex-wrap: wrap;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .gallery-slide {
                    width: 280px;
                    height: 350px;
                }
                
                .gallery-track {
                    animation-duration: 30s;
                }
                
                .gallery-cta {
                    padding: 40px 20px;
                }
                
                .gallery-cta h3 {
                    font-size: 2rem;
                }
                
                .gallery-cta .cta-buttons {
                    flex-direction: column;
                    align-items: center;
                }
                
                .gallery-cta .btn {
                    width: 100%;
                    max-width: 300px;
                }
            }

            @media (max-width: 480px) {
                .gallery-slide {
                    width: 200px;
                    height: 250px;
                    margin-right: 10px;
                }
                
                .gallery-title {
                    font-size: 1.75rem;
                }
                
                .gallery-subtitle {
                    font-size: 1rem;
                }
            }

            .cta__title {
                font-size: clamp(2rem, 5vw, 3rem);
                font-weight: 800;
                margin-bottom: 24px;
                text-transform: uppercase;
                letter-spacing: -0.5px;
                color: var(--white);
            }

            .cta__description {
                font-size: 1.25rem;
                margin-bottom: 40px;
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
                color: var(--white);
            }

            .cta .btn-group {
                justify-content: center;
                align-items: center;
            }

            /* Contact */
            .contact {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
                gap: 40px;
            }

            .contact__info {
                background-color: var(--white);
                padding: 40px;
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-md);
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .contact__title {
                font-size: 1.75rem;
                margin-bottom: 32px;
                position: relative;
                padding-bottom: 16px;
            }

            .contact__title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 3px;
                background-color: var(--pink);
            }

            .contact__list {
                margin-bottom: 40px;
            }

            .contact__item {
                display: flex;
                gap: 20px;
                margin-bottom: 24px;
                transition: transform var(--transition-base);
            }

            .contact__item:hover {
                transform: translateX(8px);
            }

            .contact__icon {
                width: 48px;
                height: 48px;
                background-color: var(--pink-light);
                color: var(--pink);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
                flex-shrink: 0;
                transition: all var(--transition-base);
            }

            .contact__item:hover .contact__icon {
                background-color: var(--pink);
                color: var(--white);
                transform: rotate(360deg);
            }

            .contact__label {
                display: block;
                font-weight: 700;
                color: var(--dark);
                margin-bottom: 4px;
            }

            .contact__value {
                color: var(--gray-600);
            }

            .contact__social {
                margin-top: auto;
                text-align: center;
            }

            .contact__social-title {
                font-size: 1.125rem;
                margin-bottom: 16px;
            }

            .social {
                display: flex;
                gap: 12px;
                justify-content: center;
            }

            .social__link {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                background-color: var(--pink);
                color: var(--white);
                border-radius: 50%;
                font-size: 1.25rem;
                transition: all var(--transition-base);
                box-shadow: 0 4px 12px rgba(255, 0, 102, 0.2);
            }

            .social__link:hover {
                transform: translateY(-8px) rotate(10deg);
                box-shadow: 0 8px 20px rgba(255, 0, 102, 0.3);
            }

            .contact__form {
                background-color: var(--white);
                padding: 40px;
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-md);
            }

            .form__group {
                margin-bottom: 24px;
            }

            .form__label {
                display: block;
                font-weight: 600;
                color: var(--dark);
                margin-bottom: 8px;
            }

            .form__control {
                width: 100%;
                padding: 14px 16px;
                border: 1px solid var(--gray-300);
                border-radius: var(--radius-sm);
                font-size: 0.9375rem;
                transition: all var(--transition-base);
                background-color: var(--gray-100);
                color: var(--gray-800);
                font-family: var(--font-sans);
            }

            .form__control:focus {
                outline: none;
                border-color: var(--pink);
                box-shadow: 0 0 0 3px rgba(255, 0, 102, 0.1);
                background-color: var(--white);
            }

            .form__control::placeholder {
                color: var(--gray-500);
            }

            .form__control--textarea {
                resize: vertical;
                min-height: 150px;
            }

            /* Footer */
            .footer {
                background-color: var(--dark);
                color: var(--white);
                padding: 80px 0 24px;
            }

            .footer__grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 40px;
                margin-bottom: 60px;
            }

            .footer__logo {
                font-size: 1.75rem;
                font-weight: 800;
                margin-bottom: 24px;
                display: inline-block;
                color: var(--white);
            }

            .footer__logo span {
                color: var(--pink);
            }

            .footer__text {
                color: var(--gray-400);
                margin-bottom: 24px;
                font-size: 0.9375rem;
            }

            .footer__social {
                display: flex;
                gap: 12px;
            }

            .footer__social-link {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background-color: rgba(255, 255, 255, 0.1);
                color: var(--white);
                border-radius: 50%;
                transition: all var(--transition-base);
                font-size: 1rem;
            }

            .footer__social-link:hover {
                background-color: var(--pink);
                transform: translateY(-5px);
            }

            .footer__title {
                font-size: 1.125rem;
                font-weight: 700;
                margin-bottom: 24px;
                position: relative;
                padding-bottom: 12px;
            }

            .footer__title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 40px;
                height: 2px;
                background-color: var(--pink);
            }

            .footer__links {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .footer__link {
                color: var(--gray-400);
                transition: all var(--transition-base);
                font-size: 0.9375rem;
            }

            .footer__link:hover {
                color: var(--white);
                transform: translateX(5px);
            }

            .footer__contact-item {
                display: flex;
                gap: 12px;
                margin-bottom: 16px;
                color: var(--gray-400);
                font-size: 0.9375rem;
            }

            .footer__contact-icon {
                color: var(--pink);
                flex-shrink: 0;
            }

            .footer__bottom {
                text-align: center;
                padding-top: 24px;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .footer__copyright {
                color: var(--gray-500);
                font-size: 0.875rem;
            }

            /* Animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes pulse {
                0%, 100% { 
                    opacity: 1; 
                    transform: scale(1);
                }
                50% { 
                    opacity: 0.7; 
                    transform: scale(0.95);
                }
            }

            /* Mobile */
            @media screen and (max-width: 1024px) {
                .grid--2 {
                    grid-template-columns: 1fr;
                }
                
                .services {
                    grid-template-columns: 1fr;
                }
            }

            @media screen and (max-width: 768px) {
                .nav__menu {
                    position: fixed;
                    top: 0;
                    right: -100%;
                    width: 280px;
                    height: 100vh;
                    background-color: rgba(0, 0, 0, 0.95);
                    backdrop-filter: blur(10px);
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    transition: right var(--transition-base);
                    z-index: 100;
                }
                
                .nav__menu.active {
                    right: 0;
                }
                
                .nav__toggle {
                    display: flex;
                }
                
                .whatsapp-float span {
                    display: none;
                }
                
                .whatsapp-float {
                    padding: 15px;
                    border-radius: 50%;
                }
                
                .btn-group {
                    flex-direction: column;
                    align-items: center;
                }
                
                .btn {
                    width: 100%;
                    max-width: 300px;
                }
                
                .features {
                    grid-template-columns: 1fr;
                }
                
                .contact {
                    grid-template-columns: 1fr;
                }

                .hero {
                    background-attachment: scroll; /* Fix voor mobiel */
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header class="header" id="header">
            <div class="container header__container">
                <a href="#" class="logo">KOZA <span>FIT</span></a>
                <nav class="nav">
                    <ul class="nav__menu">
                        <li><a href="#home" class="nav__link active">Home</a></li>
                        <li><a href="#about" class="nav__link">Over Mij</a></li>
                        <li><a href="#services" class="nav__link">Diensten</a></li>
                        <li><a href="#testimonials" class="nav__link">Ervaringen</a></li>
                        <li><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                    <div class="nav__toggle" id="nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Hero -->
        <section class="hero" id="home">        
            <!-- Gradient overlay -->
            <div class="hero__overlay"></div>
            
            <!-- Live status indicator -->
            <div class="live-status">
                <div class="live-dot"></div>
                <span>Nu beschikbaar</span>
            </div>
            
            <!-- Hero content with animations -->
            <div class="container">
                <div class="hero__content">
                    <!-- Trust element -->
                    <div class="hero__trust">
                        <i class="fas fa-star" style="color: #fbbf24;"></i>
                        <span>4.9/5 sterren • 150+ tevreden moeders</span>
                    </div>
                    
                    <div class="hero__tag">Voor moeders, door een moeder</div>
                    <h1 class="hero__title">
                        Jouw Doel<br>Mijn Missie
                    </h1>
                    <p class="hero__description">Persoonlijke begeleiding bij het bereiken van jouw fitnessdoelen met professionele training op maat</p>
                    
                    <div class="btn-group">
                        <a href="https://wa.me/31619175990?text=Hoi%20Iwona!%20Ik%20wil%20graag%20een%20gratis%20intakegesprek%20plannen" class="btn btn--primary">
                            <i class="fab fa-whatsapp"></i>
                            Gratis Intakegesprek
                        </a>
                        <a href="#services" class="btn btn--outline btn--white">Bekijk Diensten</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="section section--light" id="about">
            <div class="container">
                <div class="section__header">
                    <span class="section__pretitle">Leer me kennen</span>
                    <h2 class="section__title">Over Mij</h2>
                    <p class="section__description">Als moeder begrijp ik jouw uitdagingen en help ik je om sport in je drukke leven te integreren</p>
                </div>
                <div class="grid grid--2">
                    <div class="about__image">
    <img src="images/overmama.jpg" alt="Iwona Personal Trainer" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
</div>
                 
                   
                    <div>
                        <h3 class="about__title">Jouw coach in een druk leven</h3>
                        <p class="about__text">Als moeder van vier kinderen en met een jarenlange carrière in loondienst weet ik als geen ander hoe hectisch het leven kan zijn. Toch heb ik altijd tijd gevonden om te blijven sporten, omdat ik geloof dat zelfzorg geen luxe is, maar een noodzaak.</p>
                        <p class="about__text">Met mijn Personal Training-opleiding bij Start2Move en meerdere groepsleslicenties, waaronder XCORE, BRN en Functional Strength Training, help ik vrouwen – vooral moeders – om hun leefstijl structureel te verbeteren.</p>
                        <div class="features">
                            <div class="feature">
                                <div class="feature__icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div>
                                    <h4 class="feature__title">Personal Training Certificaat</h4>
                                    <p class="feature__description">Professionele opleiding Start2Move</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature__icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h4 class="feature__title">Groepslesinstructeur</h4>
                                    <p class="feature__description">XCORE, BRN, Functional Training</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature__icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <h4 class="feature__title">Blessurepreventie Specialist</h4>
                                    <p class="feature__description">WRAK Link Training</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature__icon">
                                    <i class="fas fa-apple-alt"></i>
                                </div>
                                <div>
                                    <h4 class="feature__title">Voedingskennis</h4>
                                    <p class="feature__description">Specialisatie in sportvoeding</p>
                                </div>
                            </div>
                        </div>
                        <a href="https://wa.me/31619175990?text=Hoi%20Iwona!%20Ik%20wil%20graag%20kennismaken" class="btn btn--primary" style="margin-top: 32px;">
                            <i class="fab fa-whatsapp"></i>
                            Maak Kennis
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section section--gray" id="services">
            <div class="container">
                <div class="section__header">
                    <span class="section__pretitle">Wat ik aanbied</span>
                    <h2 class="section__title">Mijn Diensten</h2>
                    <p class="section__description">Gepersonaliseerde training en begeleiding afgestemd op jouw behoeften en doelen</p>
                </div>
                
                <div class="services">
                    <div class="card service">
                        <div class="service__content">
                            <div class="service__icon-large">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <h3 class="service__title">Personal Training</h3>
                            <p class="service__description">Volledig gepersonaliseerde trainingsschema's, afgestemd op jouw doelen en mogelijkheden als drukke moeder.</p>
                            <ul class="service__list">
                                <li class="service__list-item">1-op-1 begeleiding op maat</li>
                                <li class="service__list-item">Flexibele planning rond gezinstijd</li>
                                <li class="service__list-item">Blessurepreventie</li>
                                <li class="service__list-item">Ook mogelijk met kinderen erbij</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card service">
                        <div class="service__content">
                            <div class="service__icon-large">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="service__title">Groepslessen</h3>
                            <p class="service__description">Energieke groepslessen zoals HIIT, BBB, XCORE, BRN en Functional Strength Training voor alle niveaus.</p>
                            <ul class="service__list">
                                <li class="service__list-item">Motiverende groepssfeer</li>
                                <li class="service__list-item">Voor alle fitnessniveaus</li>
                                <li class="service__list-item">Vaste momenten voor je routine</li>
                                <li class="service__list-item">Effectieve full-body workouts</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card service">
                        <div class="service__content">
                            <div class="service__icon-large">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="service__title">Voedingsadvies</h3>
                            <p class="service__description">Praktische voedingsplannen die passen bij een druk gezinsleven - zonder ingewikkelde diëten of speciale maaltijden.</p>
                            <ul class="service__list">
                                <li class="service__list-item">Gezinsgerichte voedingstips</li>
                                <li class="service__list-item">Realistische eetpatronen</li>
                                <li class="service__list-item">Boodschappenlijsten & recepten</li>
                                <li class="service__list-item">Energiebalans voor drukke dagen</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Services CTA -->
                <div class="services__cta">
                    <h3 class="services__cta-title">Interesse? Plan een vrijblijvend kennismakingsgesprek</h3>
                    <p class="services__cta-description">Laten we samen kijken welke aanpak het beste bij jouw situatie en doelen past.</p>
                    <a href="#contact" class="btn btn--primary btn--lg">
                        <i class="fas fa-calendar-alt"></i>
                        Neem Contact Op
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section section--gray" id="testimonials">
            <div class="container">
                <div class="section__header">
                    <span class="section__pretitle">Succesverhalen</span>
                    <h2 class="section__title">Wat Klanten Zeggen</h2>
                    <p class="section__description">Lees de ervaringen van anderen en ontdek hoe ik hen heb geholpen hun doelen te bereiken</p>
                </div>
                <div class="testimonials">
                    <div class="card testimonial">
                        <p class="testimonial__text">"Iwona heeft mij geholpen weer plezier te vinden in sporten. Haar persoonlijke aanpak en motivatie hebben echt het verschil gemaakt. Na jaren niet sporten, was ik bang dat ik het niet zou kunnen. Maar dankzij haar heb ik inmiddels 10 kilo verloren!"</p>
                        <div class="testimonial__author">
                            <div class="testimonial__avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="testimonial__name">Linda</div>
                                <div class="testimonial__role">HIIT & BBB Klant</div>
                            </div>
                        </div>
                    </div>
                    <div class="card testimonial">
                        <p class="testimonial__text">"De groepslessen van Iwona zijn intensief maar super leuk! Ze zorgt dat iedereen op zijn eigen niveau kan trainen. Ik kijk elke week uit naar de lessen en heb al enorme vooruitgang geboekt."</p>
                        <div class="testimonial__author">
                            <div class="testimonial__avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="testimonial__name">Mark</div>
                                <div class="testimonial__role">Groepslessen Klant</div>
                            </div>
                        </div>
                    </div>
                    <div class="card testimonial">
                        <p class="testimonial__text">"Als werkende moeder had ik weinig tijd voor sport. Iwona heeft een schema gemaakt dat perfect in mijn leven past. Resultaat: 10 kilo lichter! Ze begrijpt als geen ander hoe je training kunt inpassen."</p>
                        <div class="testimonial__author">
                            <div class="testimonial__avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="testimonial__name">Sophie</div>
                                <div class="testimonial__role">Personal Training Klant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infinite Scroll Gallery -->
        <section class="gallery-section" id="gallery">
            <div class="gallery-header">
                <div class="container">
                    <h2 class="gallery-title">Transformeer Je Leven</h2>
                    <p class="gallery-subtitle">Bekijk onze trainingen, faciliteiten en successen</p>
                </div>
            </div>
            
            <div class="gallery-wrapper">
                <div class="gallery-track">
                    <!-- First set of images -->
                    <div class="gallery-slide">
                        <img src="images/1.jpg" alt="Personal Training Session">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/1duh.jpg" alt="Group Fitness Class">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/groeples.jpg" alt="HIIT Training">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/groterebicepsdanmij.jpg" alt="Strength Training">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/personal.jpg" alt="Outdoor Bootcamp">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery6.jpg" alt="Nutrition Coaching">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery7.jpg" alt="Client Success">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery8.jpg" alt="Modern Equipment">
                    </div>
                    
                    <!-- Duplicate set for seamless loop -->
                    <div class="gallery-slide">
                        <img src="images/gallery1.jpg" alt="Personal Training Session">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery2.jpg" alt="Group Fitness Class">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery3.jpg" alt="HIIT Training">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery4.jpg" alt="Strength Training">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery5.jpg" alt="Outdoor Bootcamp">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery6.jpg" alt="Nutrition Coaching">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery7.jpg" alt="Client Success">
                    </div>
                    <div class="gallery-slide">
                        <img src="images/gallery8.jpg" alt="Modern Equipment">
                    </div>
                </div>
            </div>
            
            <!-- CTA section underneath gallery -->
            <div class="gallery-cta">
                <div class="container">
                    <div class="cta-content">
                        <h3>Klaar om te starten?</h3>
                        <p>Begin vandaag nog met jouw persoonlijke transformatie</p>
                        <div class="cta-buttons">
                            <a href="https://wa.me/31619175990?text=Hoi%20Iwona!%20Ik%20wil%20graag%20starten" class="btn btn--primary btn--lg">
                                <i class="fab fa-whatsapp"></i>
                                Start Nu
                            </a>
                            <a href="#services" class="btn btn--outline btn--white btn--lg">
                                Meer Info
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section section--light" id="contact">
            <div class="container">
                <div class="section__header">
                    <span class="section__pretitle">Laten we verbinden</span>
                    <h2 class="section__title">Neem Contact Op</h2>
                    <p class="section__description">Heb je vragen of wil je een afspraak maken? Ik sta voor je klaar!</p>
                </div>
                <div class="contact">
                    <div class="contact__info">
                        <h3 class="contact__title">Contactgegevens</h3>
                        <div class="contact__list">
                            <div class="contact__item">
                                <div class="contact__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <span class="contact__label">Adres</span>
                                    <span class="contact__value">Berkendreef 13, 5165AT Waspik</span>
                                </div>
                            </div>
                            <div class="contact__item">
                                <div class="contact__icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <span class="contact__label">Telefoon</span>
                                    <span class="contact__value">06-19175990</span>
                                </div>
                            </div>
                            <div class="contact__item">
                                <div class="contact__icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="contact__label">Email</span>
                                    <span class="contact__value">yvonnekjagi@hotmail.com</span>
                                </div>
                            </div>
                            <div class="contact__item">
                                <div class="contact__icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div>
                                    <span class="contact__label">KvK & BTW-nr</span>
                                    <span class="contact__value">KvK: 96512229<br>BTW-nr: NL004887238B66</span>
                                </div>
                            </div>
                        </div>
                        <div class="contact__social">
                            <h4 class="contact__social-title">Volg mij</h4>
                            <div class="social">
                                <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social__link"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/31619175990" class="social__link"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact__form">
                        <form>
                            <div class="form__group">
                                <label class="form__label" for="name">Naam</label>
                                <input type="text" id="name" name="name" class="form__control" placeholder="Jouw naam" required>
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form__control" placeholder="jouw@email.nl" required>
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="phone">Telefoonnummer</label>
                                <input type="tel" id="phone" name="phone" class="form__control" placeholder="06 12345678">
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="subject">Interesse In</label>
                                <select id="subject" name="subject" class="form__control" required>
                                    <option value="" selected disabled>Maak een keuze</option>
                                    <option value="Personal Training">Personal Training</option>
                                    <option value="Groepslessen">Groepslessen</option>
                                    <option value="21-Dagen Programma">21-Dagen Programma</option>
                                    <option value="Voedingsadvies">Voedingsadvies</option>
                                    <option value="Anders">Anders</option>
                                </select>
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="message">Jouw Bericht</label>
                                <textarea id="message" name="message" class="form__control form__control--textarea" placeholder="Vertel me over jouw situatie en doelen..." required></textarea>
                            </div>
                            <div style="margin-top: 32px;">
                                <button type="submit" class="btn btn--primary btn--block">Verstuur Bericht</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer__grid">
                    <div>
                        <a href="#" class="footer__logo">KOZA <span>FIT</span></a>
                        <p class="footer__text">Ik help moeders hun fitnessdoelen te bereiken met persoonlijke training, groepslessen en voedingsadvies. Samen bouwen we aan een sterkere, energiekere versie van jezelf!</p>
                        <div class="footer__social">
                            <a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="footer__social-link"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/31619175990" class="footer__social-link"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="footer__title">Quick Links</h4>
                        <ul class="footer__links">
                            <li><a href="#home" class="footer__link">Home</a></li>
                            <li><a href="#about" class="footer__link">Over Mij</a></li>
                            <li><a href="#services" class="footer__link">Diensten</a></li>
                            <li><a href="#testimonials" class="footer__link">Ervaringen</a></li>
                            <li><a href="#contact" class="footer__link">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer__title">Diensten</h4>
                        <ul class="footer__links">
                            <li><a href="#services" class="footer__link">Personal Training</a></li>
                            <li><a href="#services" class="footer__link">Groepslessen</a></li>
                            <li><a href="#services" class="footer__link">21-Dagen Programma</a></li>
                            <li><a href="#services" class="footer__link">HIIT Training</a></li>
                            <li><a href="#services" class="footer__link">Voedingsadvies</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer__title">Contact</h4>
                        <ul class="footer__links">
                            <li class="footer__contact-item">
                                <i class="fas fa-map-marker-alt footer__contact-icon"></i>
                                <span>Berkendreef 13, 5165AT Waspik</span>
                            </li>
                            <li class="footer__contact-item">
                                <i class="fas fa-phone-alt footer__contact-icon"></i>
                                <span>06-19175990</span>
                            </li>
                            <li class="footer__contact-item">
                                <i class="fas fa-envelope footer__contact-icon"></i>
                                <span>yvonnekjagi@hotmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__bottom">
                    <p class="footer__copyright">&copy; 2024 KOZA FIT. Alle rechten voorbehouden.</p>
                </div>
            </div>
        </footer>

        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/31619175990?text=Hoi%20Iwona!%20Ik%20heb%20een%20vraag" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
            <span>Chat nu</span>
        </a>

        <script>
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.getElementById('header');
                if (window.scrollY > 100) {
                    header.classList.add('header--scrolled');
                } else {
                    header.classList.remove('header--scrolled');
                }
            });

            // Mobile navigation toggle
            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.querySelector('.nav__menu');

            if (navToggle) {
                navToggle.addEventListener('click', function() {
                    navToggle.classList.toggle('active');
                    navMenu.classList.toggle('active');
                });
            }

            // Close mobile menu when clicking a link
            document.querySelectorAll('.nav__link').forEach(link => {
                link.addEventListener('click', function() {
                    navToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            });

            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Infinite Gallery - Optional: Add pause on hover for better UX
            const galleryTrack = document.querySelector('.gallery-track');
            
            if (galleryTrack) {
                // Gallery is already set up with CSS animation
                // This is just for potential future enhancements
                
                // Example: You could add click functionality to open images in a lightbox
                const gallerySlides = document.querySelectorAll('.gallery-slide');
                gallerySlides.forEach(slide => {
                    slide.addEventListener('click', function() {
                        // Future: Open lightbox or link to portfolio
                        console.log('Gallery slide clicked');
                    });
                });
            }

            // Form submission
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Here you would normally handle form submission
                    alert('Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.');
                });
            }
        </script>
    </body>
    </html>