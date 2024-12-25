<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyceum #1 - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Шапка -->
    <header>
    <h1>Physical-Mathematical Lyceum #1 by name M.Osimi</h1>
    <p>Сайт создан для курсового проекта 3 курса. Это не основной сайт школы</p> 
        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Lyceum #1 Logo">
        </div>
        <nav>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="/about">About</a>
            <a href="/schedule">Schedule</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- Герой-секция -->
    <section class="hero">
        <h1>Back to School</h1>
        <p>Welcome to all of our students</p>
        <a href="/contact" class="btn">Discover the School</a>
    </section>

    <!-- Информационные секции -->
    <section class="info">
        <div class="card">
            <h2>Student Life</h2>
            <img src="{{ asset('images/student-life.jpg') }}" alt="Student Life">
            <p>Our students enjoy a variety of school activities, from sports competitions to cultural programs. We always support each student and provide opportunities for growth</p>
            <a href="#" class="btn">Student Information</a>
        </div>
        <div class="card">
            <h2>Week News</h2>
            <img src="{{ asset('images/enrollment.jpg') }}" alt="Open Enrollment">
            <p>Stay up to date with the latest news and events at Lyceum #1. There are always exciting events and activities happening at our school that you need to know about!</p>
            <a href="/news" class="btn">Day News</a>
        </div>
    </section>

    <!-- Футер -->
    <footer>
 
<div>
            <h3>Quick Navigation</h3>
            <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/schedule">Schedule</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Stay Connected</h3>
            <p>Follow us on social media!</p>
            <ul>
                <li><a href="https://www.facebook.com/people/%D0%A4%D0%B8%D0%B7%D0%B8%D0%BA%D0%BE-%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BB%D0%B8%D1%86%D0%B5%D0%B9-1-%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-%D0%9C%D0%9E%D1%81%D0%B8%D0%BC%D0%B8-%D0%B3%D0%BE%D1%80%D0%BE%D0%B4-%D0%A5%D1%83%D0%B4%D0%B6%D0%B0%D0%BD%D0%B4/100054410652679/?mibextid=LQQJ4d">Facebook</a></li>
                <li><a href="https://www.instagram.com/lyceum1_osimi?igsh=eTFsYXN4dm1xOHBk">Instagram</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Our contacts</h3>
            <p>Address: M.Tanburi 24, Khujand</p>
            <ul>
                <li>Phone:920000000</li>
                <li>Email:lyceum.1.@school.tj</li>
            </ul>
        </div>
        
    </footer>
</body>
</html>