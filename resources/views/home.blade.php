<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">

</head>

<body>
    @include('partials.navbar')

    <div id="home-header">
        <h1>Be A Programming Hero, From <code>null</code> Experience</h1>
        <p>Millions of students and professional landed their developer career with CungCaiCode, wanna know how they do it?</p>
        <a href=""><button>Check Out More</button></a>
    </div>

    <div id="home-reason">
        <div class="reason-title">
            Why CungCaiCode?
        </div>
        <div class="tab-header">
            <div class="active"><i class="fa -solid fa-gamepad"></i> Fun</div>
            <div><i class="fa-solid fa-puzzle-piece"></i> Interactive</div>
            <div><i class="fa-solid fa-gear"></i> Up To Date</div>
            <div><i class="fa-solid fa-laptop-code"></i> Project-Based</div>
        </div>
        <div class="tab-indicator">
            <div></div>
        </div>
        <div class="tab-body">
            <div class="active">
                <h2>Fun</h2>
                <p>Learning programming at CungCaiCode is a delightfully enjoyable experience. Our courses are designed to be engaging, with interactive coding challenges that turn learning into a thrilling game. You'll discover that coding can be not just educational but incredibly fun. Explore the world of programming with a smile on your face!</p>
            </div>
            <div>
                <h2>Interactive</h2>
                <p>At CungCaiCode, interactivity is at the heart of our teaching philosophy. Our platform offers hands-on coding exercises, quizzes, and real-time coding editors that let you practice what you've learned immediately. You won't just passively read through lessons; you'll actively engage with the material, ensuring a deeper understanding of programming concepts.</p>
            </div>
            <div>
                <h2>Up To Date</h2>
                <p>Stay at the cutting edge of technology with CungCaiCode. Our courses are always up-to-date to reflect the latest trends and advancements in the tech industry. You won't be learning outdated practices. Instead, you'll gain skills that are relevant and in demand in today's rapidly evolving tech landscape.</p>
            </div>
            <div>
                <h2>Project-Based</h2>
                <p>We believe in learning by doing. That's why our curriculum is project-based. You won't just learn theory; you'll apply your knowledge to real-world projects. Build web applications, games, and software that you can showcase in your portfolio. Our project-based approach ensures that you not only understand the concepts but can use them effectively to create practical solutions.</p>
            </div>
        </div>
    </div>

    <div id="home-testimonials">
        <h1>What they say about CungCaiCode?</h1>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2 class="testimonial-text">"Learning at CungCaiCode has been an incredible journey. The comprehensive courses and hands-on projects helped me build a strong foundation in programming. The support from the instructors and the active community made it a fantastic experience. I'm now a confident software engineer, thanks to CungCaiCode!"</h2>
                    <img class="testimonial-image" src="img/<?= $sendy; ?>" alt="sendy">
                    <em>Sendy Adriansyah, Software Engineer</em>
                </div>
                <div class="carousel-item">
                    <h2 class="testimonial-text">"CungCaiCode's platform is a goldmine for frontend developers. The courses are up-to-date and cover the latest technologies. The interactive coding challenges are a great way to practice and improve skills. I can't thank CungCaiCode enough for helping me become a proficient frontend developer."</h2>
                    <img class="testimonial-image" src="img/<?= $alvin; ?>" alt="alvin">
                    <em>Alvin Yovanza, Front End Developer</em>
                </div>
                <div class="carousel-item">
                    <h2 class="testimonial-text">"CungCaiCode is a game-changer for anyone aspiring to be a backend developer. The structured curriculum and real-world projects made learning backend development enjoyable and effective. The support team was always there to assist, and the community is incredibly helpful. Thanks to CungCaiCode, I've excelled as a backend developer."</h2>
                    <img class="testimonial-image" src="img/<?= $ben; ?>" alt="ben">
                    <em>Christopher Benjamin, Back End Developer</em>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="promotion">
        <h1>Become a Programming Hero, Now.</h1>
        
        <div class="promotion-sub">
            <h2>10M</h2>
            <p>Students</p>
        </div>
        <div class="promotion-sub">
            <h2>25M</h2>
            <p>Active Forum Members</p>
        </div>
        <div class="promotion-sub">
            <h2>90%</h2>
            <p>Landed Their Dream Job</p>
        </div>
    </div>

    <div id="learn-card">
        <div>
            <h1>Explore Tons of technology and language for you to master</h1>
            <a href=""><button>Explore Courses</button></a>
        </div>

        <img src="img/learn-tree.png" alt="">
    </div>

    <div id="forum-card">
        <div>
            <h1>Having a problem about your code?</h1>
            <h2>The forum and its active member ready to help you in need</h2>
            <a href=""><button>Ask in Forum</button></a>
        </div>

        <img src="img/forum.png" alt="">
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/homeAnimate.js') }}"></script>
</body>

</html>
