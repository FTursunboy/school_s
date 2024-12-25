<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyceum School News</title>
    <link rel="stylesheet" href="{{ asset('css/news-style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Lyceum №1 School News</h1>
            <p>Stay Updated with the Latest Events</p>
        </div>
        <nav>
            <ul>
                <li><a href="http://127.0.0.1:8000/">Home</a></li> <!-- Ссылка на основной сайт -->
                <li><a href="#latest-news">Latest News</a></li>
                <li><a href="#announcements">Announcements</a></li>
                <li><a href="#events">Upcoming Events</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="latest-news">
            <h2>Latest News</h2>
            <article>
                <h3>New Science Lab Opened</h3>
                <p>
                    Our brand-new science lab is officially open! Equipped with state-of-the-art tools, it will give our students a better opportunity to explore the world of science. The ribbon-cutting ceremony was attended by parents, teachers, and the local community.
                </p>
                <small>Published: December 20, 2024</small>
            </article>
            <article>
                <h3>Congratulations to Our Debate Team!</h3>
                <p>
                    Lyceum's debate team won first place at the National Schools Debate Championship. Special thanks to their coach, Mr. Stevens, for guiding them to success.
                </p>
                <small>Published: December 15, 2024</small>
            </article>
        </section>

        <section id="announcements">
            <h2>Announcements</h2>
            <ul>
                <li>Winter holidays will start on December 25, 2024, and end on January 7, 2025.</li>
                <li>The parent-teacher meeting is scheduled for January 15, 2025.</li>
                <li>Applications for the Spring Sports Club are now open. Deadline: January 10, 2025.</li>
            </ul>
        </section>

        <section id="events">
            <h2>Upcoming Events</h2>
            <article>
                <h3>School Annual Day</h3>
                <p>
                    Join us on January 20, 2025, for a day of celebration with performances by our talented students and an awards ceremony to recognize their achievements.
                </p>
            </article>
            <article>
                <h3>Open House for New Admissions</h3>
                <p>
                    We invite prospective students and parents to visit our school on January 30, 2025, to explore our facilities and meet our teachers.
                </p>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Lyceum School. All rights reserved.</p>
        <a href="http://127.0.0.1:8000/">Back to Main Site</a> <!-- Ссылка на основной сайт -->
    </footer>
</body>
</html>