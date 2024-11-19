<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insight Ed</title>

    <link rel="icon" type="image/x-icon" href="https://insight-ed.in/assets/logo%201200x1200-C15vqz6H.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e3a8a, #6d28d9); /* Updated gradient */
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .logo img {
            width: 180px;
            animation: float 3s ease-in-out infinite;
            filter: drop-shadow(0 8px 20px rgba(0, 0, 0, 0.3));
        }
        .welcome-text {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: #fef3c7; /* Soft yellow */
            letter-spacing: 4px;
            text-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }
        .subtext {
            font-size: 1.5rem;
            color: #e5e7eb; /* Neutral gray */
            margin-bottom: 30px;
        }
        .cta-buttons {
            margin-top: 30px;
        }
        .cta-buttons a {
            text-decoration: none;
            padding: 14px 30px;
            margin: 10px;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #ffffff;
            background: linear-gradient(135deg, #f59e0b, #d97706); /* Warm gradient */
            border: none;
            transition: all 0.4s ease;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        .cta-buttons a:hover {
            background: linear-gradient(135deg, #fde68a, #fbbf24); /* Lighter warm tones */
            color: #6d28d9; /* Match the background gradient */
            transform: scale(1.1) rotate(-2deg);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            filter: blur(40px);
            animation: pulse 10s infinite;
            z-index: 1;
        }
        .circle-1 {
            width: 320px;
            height: 320px;
            background-color: #6d28d9;
            top: -60px;
            left: -80px;
        }
        .circle-2 {
            width: 450px;
            height: 450px;
            background-color: #1e3a8a;
            bottom: -90px;
            right: -100px;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.15);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Floating Circle Backgrounds -->
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>

        <!-- Content -->
        <div class="logo">
            <img src="https://insight-ed.in/assets/logo%201200x1200-C15vqz6H.png" alt="Insight Ed Logo">
        </div>
        <div class="welcome-text" id="welcome-text">Welcome to Insight Ed</div>
        <div class="subtext">Your trusted ERP solution for schools</div>
        <div class="cta-buttons">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            @endif
        </div>
    </div>

    <!-- GSAP Animations -->
    <script>
        // GSAP Logo Bounce Animation
        gsap.fromTo(".logo img", 
            { scale: 0.8, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 1.5, ease: "elastic.out(1, 0.5)" }
        );

        // Text Typing Animation
        gsap.registerPlugin(TextPlugin);
        gsap.to("#welcome-text", {
            text: "Welcome to Insight Ed",
            duration: 3,
            ease: "power2.out",
            repeat: -1,
            yoyo: true,
            delay: 1
        });

        // Floating Circle Animations
        gsap.to(".circle-1", {
            x: 60,
            y: 60,
            duration: 10,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        gsap.to(".circle-2", {
            x: -60,
            y: -60,
            duration: 10,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Button Hover Effects
        document.querySelectorAll(".cta-buttons a").forEach(button => {
            button.addEventListener("mouseenter", () => {
                gsap.to(button, { scale: 1.15, duration: 0.3 });
            });
            button.addEventListener("mouseleave", () => {
                gsap.to(button, { scale: 1, duration: 0.3 });
            });
        });
    </script>
</body>
</html>
