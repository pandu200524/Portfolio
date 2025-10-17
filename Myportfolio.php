<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revanth Vangapandu | Portfolio</title>
    <style>
        /* BLACK & YELLOW Color Scheme */
        :root {
            --primary: #ffc400; /* Vibrant Yellow */
            --primary-light: #ffeb3b; /* Lighter Yellow */
            --primary-dark: #cc9c00; /* Darker Yellow/Gold */
            --secondary: #1a1a1a; /* Near Black */
            --accent: #f44336; /* Red Accent (optional, kept one for contrast) */
            --light: #ffffff; /* White */
            --dark: #000000; /* Black */
            --gray: #4d4d4d; /* Dark Gray */
            --light-gray: #f2f2f2; /* Off-White/Light Gray for sections */
            --border: #333333; /* Dark Border */
            --background-gradient-start: #ffffff;
            --background-gradient-end: #fffbe8; /* Very light yellow tint */
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Glass Morphism Effect */
        .glass {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        }

        /* Particles Background */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            /* Light yellow/white gradient background */
            background: linear-gradient(135deg, var(--background-gradient-start) 0%, var(--background-gradient-end) 100%);
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 5%;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary); /* Changed logo text to black for contrast */
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: var(--primary); /* Yellow box */
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark); /* Black text on yellow box */
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover {
            color: var(--primary-dark); /* Darker yellow hover */
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            z-index: 101;
        }

        /* Sections */
        section {
            min-height: 100vh;
            padding: 6rem 5% 2rem;
            display: flex;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Home Section */
        #home {
            position: relative;
            overflow: hidden;
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3rem;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: var(--dark);
        }

        .hero-content h1 span {
            color: var(--primary-dark); /* Darker yellow for the name highlight */
        }

        .hero-content h2 {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--gray);
        }

        .btn-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.8rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--primary); /* Yellow background */
            color: var(--dark); /* Black text on primary button */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary:hover {
            background: var(--primary-dark); /* Darker yellow hover */
            color: var(--light); /* White text on hover */
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: var(--dark); /* Black background */
            color: var(--primary); /* Yellow text on secondary button */
            border: 1px solid var(--primary); /* Yellow border */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary:hover {
            background: var(--secondary); /* Near black background on hover */
            border-color: var(--primary-light);
            color: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            font-size: 1.3rem;
            color: var(--dark); /* Black icons for contrast */
            background: var(--primary); /* Yellow background */
            padding: 0.6rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 196, 0, 0.4);
            text-decoration: none;
        }

        .social-link:hover {
            transform: scale(1.15);
            box-shadow: 0 6px 18px rgba(255, 196, 0, 0.7);
            color: var(--dark);
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .profile-image {
    width: 280px;
    height: 280px;
    object-fit: contain; /* Show full image without cropping */
    object-position: center; /* Keep image centered */
    border-radius: 50%;
    border: 4px solid white;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    z-index: 2;
    position: relative;
    margin-top: 30px;
    animation: float 4s ease-in-out infinite;
    background-color: #fff; /* Optional white background if image has transparent edges */
}

/* Floating animation */
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
    100% {
        transform: translateY(0);
    }
}



        @keyframes pulse {
            0% { transform: scale(0.95); opacity: 0.7; }
            50% { transform: scale(1.05); opacity: 0.3; }
            100% { transform: scale(0.95); opacity: 0.7; }
        }

        .shape {
            position: absolute;
            z-index: 1;
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            background: var(--primary);
            opacity: 0.1;
            border-radius: 50%;
            top: -50px;
            right: -50px;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            background: var(--dark); /* Black accent shape */
            opacity: 0.1;
            border-radius: 20px;
            bottom: -50px;
            left: -50px;
            transform: rotate(45deg);
        }

        /* About Section */
        #about {
            background-color: var(--light-gray);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(to right, var(--primary-dark), var(--primary)); /* Yellow gradient underline */
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }

        .about-content {
            display: flex;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .about-text h3 span {
            color: var(--primary-dark);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--gray);
        }

        /* Info Items Grid */
        .about-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        /* Each Info Item (icon + text) */
        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            line-height: 1.4;
            background: rgba(255, 255, 255, 0.6);
            padding: 0.8rem 1rem;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        /* Icon Box */
        .info-icon {
            min-width: 42px;
            min-height: 42px;
            background: var(--dark); /* Black icon background */
            color: var(--primary); /* Yellow icon */
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* Text Content */
        .info-text h4 {
            margin: 0;
            color: var(--dark);
            font-weight: 600;
            font-size: 1rem;
        }

        .info-text p,
        .info-text a {
            margin: 2px 0 0;
            color: var(--gray);
            font-size: 0.95rem;
            display: block;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-text a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }


        .skills-container {
            margin-top: 3rem;
        }

        .skill-item {
            margin-bottom: 1.5rem;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-name {
            font-weight: 600;
            color: var(--dark);
        }

        .skill-percent {
            color: var(--primary-dark);
            font-weight: 600;
        }

        .skill-bar {
            height: 8px;
            background: var(--border);
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--primary-dark);
            border-radius: 4px;
            position: relative;
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .about-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .about-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Experience Section */
        #experience {
            background-color: var(--light);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background: var(--border);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            padding: 2rem;
            background: var(--light);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border); /* Added a subtle dark border */
        }

        .timeline-date {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .timeline-company {
            color: var(--gray);
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .timeline-description {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--primary); /* Yellow dot */
            border-radius: 50%;
            top: 30px;
            z-index: 1;
            border: 3px solid var(--dark); /* Black ring around dot */
        }

        .timeline-item:nth-child(odd)::after {
            right: -10px;
        }

        .timeline-item:nth-child(even)::after {
            left: -10px;
        }

        .skill-tag {
            background: var(--dark); /* Black background */
            color: var(--primary); /* Yellow text */
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: default;
        }

        .skill-tag:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.5);
            background: var(--secondary);
            color: var(--primary-light);
        }

        /* Projects Section */
        #projects {
            background-color: var(--light-gray);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .project-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            background: var(--light);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .project-image {
            height: 200px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.05);
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .project-description {
            color: var(--gray);
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .project-tag {
            background: var(--dark); /* Black tag background */
            color: var(--primary-light); /* Light yellow text */
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .project-links {
            display: flex;
            gap: 1rem;
        }

        .project-link {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            text-decoration: none;
            color: var(--primary-dark); /* Dark yellow links */
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            color: var(--dark);
        }

        /* Additional Styles for View All Card */
        .view-all-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            /* Light yellow background blend */
            background: linear-gradient(135deg, rgba(255, 196, 0, 0.05) 0%, rgba(255, 196, 0, 0.02) 100%);
        }

        .view-all-link {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: inherit;
            padding: 2rem;
            width: 100%;
            height: 100%;
        }

        .project-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-light);
            color: var(--dark); /* Black icon on light yellow circle */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .view-all-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .view-all-card:hover .project-icon {
            transform: scale(1.1);
            background: var(--primary);
            color: var(--dark);
        }

        .project-cta {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            color: var(--primary-dark);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .view-all-card:hover .project-cta {
            color: var(--dark);
            transform: translateX(5px);
        }


        /* Contact Section */
        #contact {
            background-color: var(--light);
        }

        .contact-container {
            display: flex;
            gap: 3rem;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--dark); /* Black icon background */
            color: var(--primary); /* Yellow icon */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        .skills-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-top: 1.5rem;
        }


        .contact-text h4 {
            margin-bottom: 0.3rem;
            color: var(--dark);
        }

        .contact-text p, .contact-text a {
            color: var(--gray);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-text a:hover {
            color: var(--primary-dark);
        }

        .contact-form {
            flex: 1;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            background: var(--light);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 196, 0, 0.2);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background: var(--dark); /* Black Footer */
            color: white;
        }

        .footer-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .footer-link {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: var(--primary-light); /* Yellow hover in footer */
        }

        .copyright {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Responsive Design (Color changes applied through inheritance/overrides) */
        @media (max-width: 768px) {
            .nav-links {
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                box-shadow: -5px 0 25px rgba(0, 0, 0, 0.1);
            }

            .nav-links a:hover {
                background: rgba(255, 196, 0, 0.1); /* Light yellow background hover */
                color: var(--dark);
            }

            .hamburger {
                background: var(--dark); /* Black hamburger button */
                color: var(--primary); /* Yellow lines */
            }

            .hamburger:hover {
                background: var(--secondary);
            }
        }
        
        /* Loader Specific Styles - Color Updates */
        /* Updated animations for loader to use new colors */
        @keyframes pulse {
            0%, 100% { transform: scale(0.95); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
        }

        /* The styles below are for the Contact Form's floating label and border and need to be updated from the original inline styles in the HTML block as well, but this covers the general styles. */
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>


<div id="loader" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 9999;
    transition: all 0.6s cubic-bezier(0.83, 0, 0.17, 1);
">
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Updated placeholder to reflect new colors */
        background: url('https://placehold.co/1000x800/000000/ffc400?text=Revanth') no-repeat center center; 
        background-size: cover;
    "></div>

    <div style="
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(4px);
    ">
        <div style="
            position: relative;
            width: 120px;
            height: 120px;
            margin-bottom: 24px;
        ">
            <div style="
                position: absolute;
                width: 100%;
                height: 100%;
                /* Updated gradient to black/dark gray */
                background: radial-gradient(circle, #2d3748 0%, #1a202c 100%);
                border-radius: 50%;
                opacity: 0.8;
                animation: pulse 2s infinite ease-in-out;
                box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
            "></div>

            <div id="letter-container" style="
                position: absolute;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--primary); /* Yellow text */
                font-weight: 700;
                font-size: 48px;
                font-family: 'Inter', sans-serif;
                animation: float 3s infinite ease-in-out;
            ">R</div>

            <div style="
                position: absolute;
                width: 100%;
                height: 100%;
                animation: orbit 6s linear infinite;
            ">
                <div style="
                    position: absolute;
                    top: -8px;
                    left: 50%;
                    width: 16px;
                    height: 16px;
                    background: var(--primary); /* Yellow dot */
                    border-radius: 50%;
                    transform: translateX(-50%);
                    box-shadow: 0 0 10px rgba(255, 196, 0, 0.8);
                "></div>
            </div>
        </div>

        <div style="
            display: flex;
            gap: 8px;
            font-size: 1.1rem;
            color: var(--primary-light); /* Light yellow text */
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        ">
            <span style="animation: textWave 1.8s infinite">L</span>
            <span style="animation: textWave 1.8s infinite 0.1s">o</span>
            <span style="animation: textWave 1.8s infinite 0.2s">a</span>
            <span style="animation: textWave 1.8s infinite 0.3s">d</span>
            <span style="animation: textWave 1.8s infinite 0.4s">i</span>
            <span style="animation: textWave 1.8s infinite 0.5s">n</span>
            <span style="animation: textWave 1.8s infinite 0.6s">g</span>
        </div>

        <div style="
            width: 180px;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            margin-top: 24px;
            overflow: hidden;
        ">
            <div style="
                width: 100%;
                height: 100%;
                /* Updated progress bar gradient to yellow */
                background: linear-gradient(90deg, #ffc400, #ffeb3b);
                border-radius: 2px;
                animation: progress 2s cubic-bezier(0.65, 0, 0.35, 1) infinite;
                transform-origin: left;
            "></div>
        </div>
    </div>
</div>

<script>
    document.body.classList.add('no-scroll');

    // Letter rotation sequence (R, V, A, N, T, H)
    const letters = ['R', 'E', 'V', 'A', 'N', 'T', 'H'];
    const letterContainer = document.getElementById('letter-container');
    let currentIndex = 0;

    const letterInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % letters.length;
        letterContainer.textContent = letters[currentIndex];

        // Add pop animation
        letterContainer.style.transform = 'scale(1.2)';
        setTimeout(() => {
            letterContainer.style.transform = 'scale(1)';
        }, 200);
    }, 450); // Change faster since there are more letters

    // Modern fade-out with scaling effect after 3.5 seconds
    setTimeout(() => {
        clearInterval(letterInterval);
        const loader = document.getElementById('loader');
        loader.style.opacity = '0';
        loader.style.transform = 'scale(0.98)';
        document.body.classList.remove('no-scroll');

        setTimeout(() => {
            loader.style.display = 'none';
        }, 600);
    }, 3500); // Total duration 3.5 seconds
</script>


    <div id="particles-js"></div>

    <nav>
        <div class="logo">
            <div class="logo-icon">R</div>
            <span>Revanth</span>
        </div>
        <ul class="nav-links">
    <li>
        <a href="#home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li>
        <a href="#about">
            <i class="fas fa-user"></i>
            <span>About</span>
        </a>
    </li>
    <li>
        <a href="#experience">
            <i class="fas fa-briefcase"></i>
            <span>Experience</span>
        </a>
    </li>
    <li>
        <a href="#projects">
            <i class="fas fa-code"></i>
            <span>Projects</span>
        </a>
    </li>
    <li>
        <a href="#contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </li>
</ul>
<div class="hamburger">
    <i class="fas fa-bars"></i>
</div>
    </nav>

    <section id="home">
        <div class="container">
            <div class="hero">
                <div class="hero-content">
                    <h1>Hello, I'm <span>Revanth Vangapandu</span></h1>
                    <h2>Computer Science Engineer & Full-Stack Enthusiast</h2>
                    <p>I am a passionate Computer Science Engineering student at SRM AP University. I enjoy exploring and building, with a strong focus on front-end development using modern frameworks, and solid foundations in C++ and software engineering principles.</p>
                    <div class="btn-group">
    <a href="#projects" class="btn btn-primary">
        <i class="fas fa-code"></i> View Projects
    </a>
    <a href="https://linkedin.com/in/revanth-vangapandu-pandu200524" class="btn btn-secondary" target="_blank">
        <i class="fab fa-linkedin-in"></i> View LinkedIn
    </a>
</div>

                    <div class="social-links">
    <a href="https://linkedin.com/in/revanth-vangapandu-pandu200524" class="social-link" target="_blank" title="LinkedIn">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a href="https://github.com/revanthvangapandu" class="social-link" target="_blank" title="GitHub">
        <i class="fab fa-github"></i>
    </a>

    <a href="mailto:vrevanth200524@gmail.com" class="social-link" title="Email">
        <i class="fas fa-envelope"></i>
    </a>
</div>

                </div>
                <div class="hero-image">
                    <img src="temp/img_1.jpeg" alt="Revanth Vangapandu Placeholder" class="profile-image">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>I'm <span>Revanth Vangapandu</span> & I'm a Developer & Engineer</h3>
                    <p>Hello! I'm Revanth Vangapandu, a dedicated Computer Science student in the 2022-2026 B.Tech batch at SRM AP University. I am driven by a passion for creating efficient and scalable software, specializing in modern Web Development (MERN Stack) and core C/C++ programming. I recently gained practical experience in AI/ML during my internship at Edunet Foundation.</p>

                    <div class="about-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="info-text">
                                <h4>Enrollment Year</h4>
                                <p>2022</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-percent"></i>
                            </div>
                            <div class="info-text">
                                <h4>GPA (B.Tech)</h4>
                                <p>8.09 / 10.0</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div class="info-text">
                                <h4>LinkedIn</h4>
                                <a href="https://linkedin.com/in/revanth-vangapandu-pandu200524" target="_blank">Revanth Vangapandu</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-text">
                                <h4>Email</h4>
                                <a href="mailto:vrevanth200524@gmail.com">vrevanth200524@gmail.com</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <h4>Phone</h4>
                                <a href="tel:+919392864169">+91 93928 64169</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="info-text">
                                <h4>Degree</h4>
                                <p>B.Tech CSE (2022-2026)</p>
                            </div>
                        </div>
                    </div>

                    <h3 style="margin-top: 2rem; margin-bottom: 1rem;">Skills & Technologies</h3>
<div class="skills-tags">
    <span class="skill-tag">HTML</span>
    <span class="skill-tag">CSS</span>
    <span class="skill-tag">JavaScript</span>
    <span class="skill-tag">PHP</span>
    <span class="skill-tag">C</span>
    <span class="skill-tag">C++</span>
    <span class="skill-tag">Python</span>
    <span class="skill-tag">React.Js</span>
    <span class="skill-tag">MongoDB</span>
    <span class="skill-tag">Node js</span>
    <span class="skill-tag">SQL</span>
    <span class="skill-tag">VS Code</span>
    <span class="skill-tag">MySQL</span>
    <span class="skill-tag">Google Colab</span>
</div>


                    <div class="skills-container">
                        <h3>My Core Competencies</h3>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Full-Stack Web Development (MERN/LAMP)</span>
                                <span class="skill-percent">95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">C/C++ & Core Programming</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">SQL & Database Management</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Data Analysis & Predictive Analytics (AI/ML)</span>
                                <span class="skill-percent">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="projects">
    <div class="container">
        <h2 class="section-title">Latest Projects</h2>
        <div class="projects-grid">

            <div class="project-card glass">
                <div class="project-image">
                    <img src="https://placehold.co/600x400/000000/ffc400?text=Foody+App" alt="Foody App Project">
                </div>
                <div class="project-info">
                    <h3 class="project-title">Foody - MERN Stack Delivery App</h3>
                    <p class="project-description">Developed "Foody," a comprehensive MERN stack food delivery application enabling users to browse restaurants, place orders, and track deliveries in real time.</p>
                    <div class="project-tags">
                        <span class="project-tag">React.Js</span>
                        <span class="project-tag">Node.js</span>
                        <span class="project-tag">MongoDB</span>
                        <span class="project-tag">Express</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/revanthvangapandu/foody-app" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i> GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card glass">
                <div class="project-image">
                    <img src="https://placehold.co/600x400/ffc400/000000?text=Sports+Management" alt="Sports Event Management Project">
                </div>
                <div class="project-info">
                    <h3 class="project-title">Sports Event Management System</h3>
                    <p class="project-description">Created a user-friendly system for event registration and scheduling using traditional web technologies. Features responsive design for managing participants and tracking results.</p>
                    <div class="project-tags">
                        <span class="project-tag">HTML</span>
                        <span class="project-tag">CSS</span>
                        <span class="project-tag">JavaScript</span>
                        <span class="project-tag">PHP</span>
                        <span class="project-tag">MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/revanthvangapandu/sports-event-mgmt" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i> GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card glass">
                <div class="project-image">
                    <img src="https://placehold.co/600x400/1a1a1a/ffeb3b?text=School+DBMS" alt="School Database Management System Project">
                </div>
                <div class="project-info">
                    <h3 class="project-title">School Database Management System</h3>
                    <p class="project-description">A robust DBMS solution built to simplify school administration by managing student enrollment, tracking attendance, and storing academic records for quick access.</p>
                    <div class="project-tags">
                        <span class="project-tag">SQL</span>
                        <span class="project-tag">DBMS</span>
                        <span class="project-tag">C++ (or Python/Java backend)</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/revanthvangapandu/school-dbms" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i> GitHub</a>
                    </div>
                </div>
            </div>

            <div class="project-card glass view-all-card" style="
                /* Updated border to yellow and black background blend */
                border: 2px dashed rgba(255, 196, 0, 0.5);
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 200, 0.9) 100%); 
                transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            ">
                <a href="https://github.com/revanthvangapandu" class="view-all-link" style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-decoration: none;
                    color: inherit;
                    padding: 2rem;
                    width: 100%;
                    height: 100%;
                ">
                    <div class="project-icon" style="
                        width: 70px;
                        height: 70px;
                        background: rgba(255, 196, 0, 0.1);
                        color: var(--primary-dark);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 1.8rem;
                        margin-bottom: 1.5rem;
                        border: 2px dotted rgba(255, 196, 0, 0.5);
                        transition: all 0.3s ease;
                    ">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h3 class="project-title" style="
                        font-size: 1.3rem;
                        margin-bottom: 0.8rem;
                        color: var(--dark);
                    ">View All Projects</h3>
                    <p class="project-description" style="
                        color: var(--gray);
                        margin-bottom: 1.5rem;
                        font-size: 0.95rem;
                        text-align: center;
                        max-width: 80%;
                    ">Explore my complete repository on GitHub for more code and contributions.</p>
                    <div class="project-cta" style="
                        display: inline-flex;
                        align-items: center;
                        gap: 0.5rem;
                        padding: 0.6rem 1.2rem;
                        border-radius: 30px;
                        background: rgba(255, 196, 0, 0.1);
                        color: var(--primary-dark);
                        font-weight: 600;
                        font-size: 0.9rem;
                        transition: all 0.3s ease;
                    ">
                        <span>Browse Collection</span>
                        <i class="fas fa-arrow-right" style="transition: transform 0.3s ease;"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<script>
// Add hover effects via JavaScript for View All Card since we're using inline styles
document.querySelectorAll('.view-all-card').forEach(card => {
    card.onmouseenter = function() {
        this.style.transform = 'translateY(-8px)';
        this.style.boxShadow = '0 15px 30px -5px rgba(0, 0, 0, 0.15)';
        this.style.borderColor = 'rgba(255, 196, 0, 0.8)';
        this.querySelector('.project-icon').style.transform = 'rotate(15deg) scale(1.1)';
        this.querySelector('.project-icon').style.background = 'rgba(255, 196, 0, 0.3)';
        this.querySelector('.project-cta').style.background = 'rgba(255, 196, 0, 0.3)';
        this.querySelector('.project-cta i').style.transform = 'translateX(3px)';
    };

    card.onmouseleave = function() {
        this.style.transform = '';
        this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
        this.style.borderColor = 'rgba(255, 196, 0, 0.5)';
        this.querySelector('.project-icon').style.transform = '';
        this.querySelector('.project-icon').style.background = 'rgba(255, 196, 0, 0.1)';
        this.querySelector('.project-cta').style.background = 'rgba(255, 196, 0, 0.1)';
        this.querySelector('.project-cta i').style.transform = '';
    };
});
</script>


    <section id="experience">
        <div class="container">
            <h2 class="section-title">Education & Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content glass">
                        <div class="timeline-date">June 2024 - July 2024</div>
                        <h3 class="timeline-title">Internship: AI/ML Development</h3>
                        <div class="timeline-company">Edunet Foundation</div>
                        <p class="timeline-description">Developed an employee burnout prediction model using AI/ML techniques. Key responsibilities included data analysis, model training, and optimization. Gained hands-on experience in deep learning and predictive analytics, applying theoretical knowledge to a real-world problem.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content glass">
                        <div class="timeline-date">2022 - 2026</div>
                        <h3 class="timeline-title">Bachelor of Technology (B.Tech)</h3>
                        <div class="timeline-company">SRM University AP (GPA: 8.09/10.0)</div>
                        <p class="timeline-description">Currently pursuing a B.Tech in Computer Science Engineering. This rigorous program provides a strong foundation in core programming, software development methodologies, and modern web technologies.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content glass">
                        <div class="timeline-date">2022</div>
                        <h3 class="timeline-title">Intermediate Education (12th Std)</h3>
                        <div class="timeline-company">Amaravati Junior College (87%)</div>
                        <p class="timeline-description">Completed 12th standard with a strong focus on science and mathematics, laying the necessary academic foundation for university-level engineering studies.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content glass">
                        <div class="timeline-date">2020</div>
                        <h3 class="timeline-title">Secondary Education (10th Std)</h3>
                        <div class="timeline-company">Sri Chaitanya Techno School (96%)</div>
                        <p class="timeline-description">Achieved excellent results in the 10th standard, demonstrating early academic excellence and discipline.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section id="contact" style="background-color: var(--light-gray); padding: 5rem 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h2 class="section-title" style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: var(--dark);">Get In Touch</h2>
        <div class="contact-container" style="display: flex; gap: 2rem; flex-wrap: wrap;">
            <div class="contact-info glass" style="flex: 1; min-width: 300px; padding: 2.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 16px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); backdrop-filter: blur(10px);">
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--dark); position: relative; padding-bottom: 0.5rem;">
                    Contact Information
                    <span style="position: absolute; left: 0; bottom: 0; width: 50px; height: 3px; background: var(--primary-dark); border-radius: 3px;"></span>
                </h3>
                <p style="margin-bottom: 2rem; color: var(--gray); font-size: 0.95rem;">I am highly responsive to messages and look forward to discussing collaborations or opportunities.</p>
                <div class="contact-details" style="display: flex; flex-direction: column; gap: 1.8rem;">
                    <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1.2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--dark); color: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4 style="margin-bottom: 0.3rem; color: var(--dark); font-size: 1.1rem;">Email</h4>
                            <a href="mailto:vrevanth200524@gmail.com" style="color: var(--gray); text-decoration: none; transition: all 0.3s ease; font-size: 0.95rem; line-height: 1.5;">vrevanth200524@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1.2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--dark); color: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4 style="margin-bottom: 0.3rem; color: var(--dark); font-size: 1.1rem;">Call Us On</h4>
                            <a href="tel:+919392864169" style="color: var(--gray); text-decoration: none; transition: all 0.3s ease; font-size: 0.95rem; line-height: 1.5;">+91 93928 64169</a>
                        </div>
                    </div>
                    <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1.2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--dark); color: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="contact-text">
                            <h4 style="margin-bottom: 0.3rem; color: var(--dark); font-size: 1.1rem;">LinkedIn Profile</h4>
                            <a href="https://linkedin.com/in/revanth-vangapandu-pandu200524" target="_blank" style="color: var(--gray); text-decoration: none; transition: all 0.3s ease; font-size: 0.95rem; line-height: 1.5;">Revanth Vangapandu</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contact-form glass" style="flex: 1; min-width: 300px; padding: 2.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 16px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); backdrop-filter: blur(10px);">
                <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--dark); position: relative; padding-bottom: 0.5rem;">
                    Send Me a Message
                    <span style="position: absolute; left: 0; bottom: 0; width: 50px; height: 3px; background: var(--primary-dark); border-radius: 3px;"></span>
                </h3>
                <form id="contactForm">
                    <div class="form-group" style="position: relative; margin-bottom: 1.8rem;">
                        <label for="name" style="position: absolute; top: 0.8rem; left: 1rem; color: var(--gray); font-weight: 400; font-size: 1rem; transition: all 0.3s ease; pointer-events: none; background: white; padding: 0 0.3rem;">Name</label>
                        <input type="text" id="name" name="name" placeholder=" " required style="width: 100%; padding: 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; background: transparent;">
                        <span class="focus-border" style="position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--primary); transition: width 0.4s ease;"></span>
                    </div>
                    <div class="form-group" style="position: relative; margin-bottom: 1.8rem;">
                        <label for="email" style="position: absolute; top: 0.8rem; left: 1rem; color: var(--gray); font-weight: 400; font-size: 1rem; transition: all 0.3s ease; pointer-events: none; background: white; padding: 0 0.3rem;">Your Email</label>
                        <input type="email" id="email" name="email" placeholder=" " required style="width: 100%; padding: 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; background: transparent;">
                        <span class="focus-border" style="position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--primary); transition: width 0.4s ease;"></span>
                    </div>
                    <div class="form-group" style="position: relative; margin-bottom: 1.8rem;">
                        <label for="subject" style="position: absolute; top: 0.8rem; left: 1rem; color: var(--gray); font-weight: 400; font-size: 1rem; transition: all 0.3s ease; pointer-events: none; background: white; padding: 0 0.3rem;">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder=" " style="width: 100%; padding: 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; background: transparent;">
                        <span class="focus-border" style="position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--primary); transition: width 0.4s ease;"></span>
                    </div>
                    <div class="form-group" style="position: relative; margin-bottom: 1.8rem;">
                        <label for="message" style="position: absolute; top: 0.8rem; left: 1rem; color: var(--gray); font-weight: 400; font-size: 1rem; transition: all 0.3s ease; pointer-events: none; background: white; padding: 0 0.3rem;">Message</label>
                        <textarea id="message" name="message" placeholder=" " required style="width: 100%; padding: 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; background: transparent; min-height: 150px; resize: vertical;"></textarea>
                        <span class="focus-border" style="position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: var(--primary); transition: width 0.4s ease;"></span>
                    </div>
                    <button type="submit" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.8rem; font-size: 1rem; background: var(--primary); color: var(--dark); border: none; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
    input.addEventListener('focus', function() {
        const label = this.previousElementSibling;
        label.style.top = '-0.6rem';
        label.style.left = '0.8rem';
        label.style.fontSize = '0.8rem';
        label.style.color = 'var(--primary-dark)'; /* Use primary-dark for focus */
        label.style.fontWeight = '500';
        // Check if next sibling exists before accessing its style
        if (this.nextElementSibling) {
            this.nextElementSibling.style.width = '100%';
        }
    });

    input.addEventListener('blur', function() {
        if (!this.value) {
            const label = this.previousElementSibling;
            label.style.top = '0.8rem';
            label.style.left = '1rem';
            label.style.fontSize = '1rem';
            label.style.color = 'var(--gray)';
            label.style.fontWeight = '400';
            // Check if next sibling exists before accessing its style
            if (this.nextElementSibling) {
                this.nextElementSibling.style.width = '0';
            }
        }
    });

    // Initialize labels if input has value
    if (input.value) {
        const label = input.previousElementSibling;
        label.style.top = '-0.6rem';
        label.style.left = '0.8rem';
        label.style.fontSize = '0.8rem';
        label.style.color = 'var(--primary-dark)';
        label.style.fontWeight = '500';
        // Check if next sibling exists before accessing its style
        if (input.nextElementSibling) {
            input.nextElementSibling.style.width = '100%';
        }
    }
});
</script>

    <footer>
        <div class="footer-content">
            <div class="logo" style="color: white; justify-content: center; margin-bottom: 1rem;">
                <div class="logo-icon" style="background: var(--primary); color: var(--dark);">R</div>
                <span>Revanth Vangapandu</span>
            </div>
            <div class="footer-links">
                <a href="#home" class="footer-link">Home</a>
                <a href="#about" class="footer-link">About</a>
                <a href="#experience" class="footer-link">Experience</a>
                <a href="#projects" class="footer-link">Projects</a>
                <a href="#contact" class="footer-link">Contact</a>
            </div>
<div class="social-links" style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
    <a href="https://linkedin.com/in/revanth-vangapandu-pandu200524" class="social-link" target="_blank" title="LinkedIn"
       style="font-size: 24px; color: var(--primary); text-decoration: none; background: transparent; box-shadow: none; padding: 0;">
        <i class="fab fa-linkedin-in" style="transition: transform 0.3s ease, color 0.3s ease;"></i>
    </a>

    <a href="https://github.com/revanthvangapandu" class="social-link" target="_blank" title="GitHub"
       style="font-size: 24px; color: var(--primary); text-decoration: none; background: transparent; box-shadow: none; padding: 0;">
        <i class="fab fa-github" style="transition: transform 0.3s ease, color 0.3s ease;"></i>
    </a>

    <a href="mailto:vrevanth200524@gmail.com" class="social-link" title="Email"
       style="font-size: 24px; color: var(--primary); text-decoration: none; background: transparent; box-shadow: none; padding: 0;">
        <i class="fas fa-envelope" style="transition: transform 0.3s ease, color 0.3s ease;"></i>
    </a>
</div>

<br>
            <p class="copyright">© 2025 Revanth Vangapandu. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Mobile Navigation
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.innerHTML = navLinks.classList.contains('active') ?
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Particles.js Configuration
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffc400" // Yellow particles
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.5, // Slightly higher opacity for yellow
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffeb3b", // Light yellow links
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Sticky navigation on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Form submission with mailto link
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitButton = this.querySelector('button[type="submit"]');
                const originalButtonText = submitButton.innerHTML;

                // Show loading state
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitButton.disabled = true;

                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;

                // Encode values for URL
                const encodedSubject = encodeURIComponent(subject || "Inquiry from Portfolio");
                const encodedBody = encodeURIComponent(
                    `Sender Name: ${name}\nSender Email: ${email}\n\nMessage:\n${message}`
                );

                // Create mailto link using Revanth's email
                const mailtoLink = `mailto:vrevanth200524@gmail.com?subject=${encodedSubject}&body=${encodedBody}`;

                // Open email client
                window.location.href = mailtoLink;

                // Reset button and form after a short delay
                setTimeout(() => {
                    submitButton.innerHTML = originalButtonText;
                    submitButton.disabled = false;
                    contactForm.reset();
                }, 2000);
            });
        }

        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.timeline-item, .project-card, .about-content, .hero-content');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        // Set initial state for animated elements
        document.querySelectorAll('.timeline-item, .project-card, .about-content, .hero-content').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        // Run once on page load
        animateOnScroll();

        // Then run on scroll
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>