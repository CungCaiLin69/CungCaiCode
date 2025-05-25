<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/coursez.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">

</head>

<body>
    @include('partials.navbar')

    <main id="main-content" role="main">
        <section class="hero-section" aria-labelledby="hero-title">
            <h1 id="hero-title" class="hero-title">Choose Your Path to Success</h1>
            <p class="hero-subtitle">Master in-demand skills with our comprehensive career-focused courses designed for the modern developer</p>
        </section>

        <section class="course-container" aria-labelledby="courses-heading">
            <div class="course-grid" role="list">
                
                <article class="course-card frontend fade-in" role="listitem" tabindex="0">
                    <div class="progress-indicator">Popular</div>
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h2 class="course-title">Front-End Developer</h2>
                    </div>
                    <p class="course-description">Master HTML, CSS, JavaScript, React, and modern frontend frameworks to create stunning user interfaces.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            12 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Beginner
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.8/5
                        </span>
                    </div>
                    <a href="/courses/frontend" class="course-button" aria-label="Start Front-End Developer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card backend fade-in" role="listitem" tabindex="0">
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-server"></i>
                        </div>
                        <h2 class="course-title">Back-End Developer</h2>
                    </div>
                    <p class="course-description">Build robust server-side applications with Node.js, Python, databases, and cloud technologies.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            14 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Intermediate
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.7/5
                        </span>
                    </div>
                    <a href="/courses/backend" class="course-button" aria-label="Start Back-End Developer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card fullstack fade-in" role="listitem" tabindex="0">
                    <div class="progress-indicator">Featured</div>
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-layers"></i>
                        </div>
                        <h2 class="course-title">Full-Stack Developer</h2>
                    </div>
                    <p class="course-description">Complete end-to-end development skills combining frontend and backend technologies for modern web applications.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            20 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            All levels
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.9/5
                        </span>
                    </div>
                    <a href="/courses/fullstack" class="course-button" aria-label="Start Full-Stack Developer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card android fade-in" role="listitem" tabindex="0">
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-android2"></i>
                        </div>
                        <h2 class="course-title">Android Developer</h2>
                    </div>
                    <p class="course-description">Create powerful mobile applications using Kotlin, Java, and the latest Android development tools and frameworks.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            16 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Beginner
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.6/5
                        </span>
                    </div>
                    <a href="/courses/android" class="course-button" aria-label="Start Android Developer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card ios fade-in" role="listitem" tabindex="0">
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-apple"></i>
                        </div>
                        <h2 class="course-title">iOS Developer</h2>
                    </div>
                    <p class="course-description">Build innovative iOS applications using Swift, SwiftUI, and Apple's development ecosystem and tools.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            16 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Beginner
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.8/5
                        </span>
                    </div>
                    <a href="/courses/ios" class="course-button" aria-label="Start iOS Developer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card dataeng fade-in" role="listitem" tabindex="0">
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h2 class="course-title">Data Engineer</h2>
                    </div>
                    <p class="course-description">Master data pipelines, big data technologies, and analytics to transform raw data into valuable insights.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            18 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Intermediate
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.7/5
                        </span>
                    </div>
                    <a href="/courses/dataeng" class="course-button" aria-label="Start Data Engineer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article class="course-card uiux fade-in" role="listitem" tabindex="0">
                    <div class="progress-indicator">New</div>
                    <div class="course-header">
                        <div class="course-icon" aria-hidden="true">
                            <i class="bi bi-brush"></i>
                        </div>
                        <h2 class="course-title">UI/UX Designer</h2>
                    </div>
                    <p class="course-description">Design exceptional user experiences with modern design principles, prototyping tools, and user research methods.</p>
                    <div class="course-meta">
                        <span class="course-meta-item">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            10 weeks
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            Beginner
                        </span>
                        <span class="course-meta-item">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            4.9/5
                        </span>
                    </div>
                    <a href="/courses/uiux" class="course-button" aria-label="Start UI/UX Designer course">
                        Start Learning
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>

            </div>
        </section>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.course-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationDelay = `${Array.from(cards).indexOf(entry.target) * 0.1}s`;
                        entry.target.classList.add('fade-in');
                    }
                });
            }, { threshold: 0.1 });
            
            cards.forEach(card => observer.observe(card));

            cards.forEach(card => {
                card.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        const link = this.querySelector('.course-button');
                        if (link) link.click();
                    }
                });
            });

            const buttons = document.querySelectorAll('.course-button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const card = this.closest('.course-card');
                    card.classList.add('loading');
                    
                    setTimeout(() => {
                        card.classList.remove('loading');
                    }, 2000);
                });
            });
        });
    </script>
</body>

</html>