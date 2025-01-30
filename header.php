<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyedenFocus - Your Personal Focus & Meditation App</title>
    <link rel="icon" type="image/png" href="app_icon.png">
    <link rel="apple-touch-icon" href="app_icon.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .nav {
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 18px;
            color: #333;
        }

        .nav-app-icon {
            height: 24px;
            width: auto;
            margin-right: 8px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 16px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            display: flex;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #007BFF;
        }

        .button.elevated {
            padding: 8px 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }

        .button.elevated:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
        }

        .nav-links {
            display: flex;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                gap: 8px;
                background-color: #fff;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                padding: 16px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-top: 1px solid #ddd;
            }

            .nav-links.show {
                display: flex;
            }

            .hamburger {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="app_icon.png" alt="MyedenFocus Icon" class="nav-app-icon">
                    MyedenFocus
                </div>
                <span class="hamburger material-icons" onclick="toggleMenu()">menu</span>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.gorai.myedenfocus"><button class="button elevated">Download Now</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>
