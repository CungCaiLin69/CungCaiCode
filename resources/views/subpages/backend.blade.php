<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backendz.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">

</head>

<body>
    @include('partials.navbar')

    <div id="backend-layout">
        <div id="backend-header">
            <a href="/courses"><i class="fa-solid fa-chevron-left"></i></a>

            <div>
                <h1>Back-End Developer Path</h1>
                <p>
                Back-end developers deal with the hidden processes that run behind the scenes, building APIs and databases that power the front-end.
                Includes PHP, Laravel, MySQL, Back-End, SQL, Security, and more.
                </p>
            </div>
            
            <img src="/img/backend.png" alt="">
        </div>
        
        <div id="backend-about">
            <h1>About this path</h1>
            <div>
                <p>Back-end developers deal with the hidden processes that run behind the scenes, building APIs and databases that power the front-end. This Career Path will teach you the technologies you need to do just that.</p>
                <div class="salary">
                    <p>Average Salary (IDN)</p>
                    <h4>Rp 8.000.000</h4>
                </div>
            </div>
        </div>

        <div id="backend-syllabus">
            <div>
                <h2>Syllabus</h2>
                <p>41 units • 122 lessons • 60 projects • 109 quizzes</p>
            </div>
            <div>
                <h1>1</h1>
                <h3>Back-end Engineering with Laravel</h3>
            </div>
            <div>
                <h1>2</h1>
                <h3>Installation and Configuration</h3>
            </div>
            <div>
                <h1>3</h1>
                <h3>Folder Structures, Routes and Views</h3>
            </div>
            <div>
                <h1>4</h1>
                <h3>Blade Templating Engine</h3>
            </div>
            <div>
                <h1>5</h1>
                <h3>Model, Collection, Controller</h3>
            </div>
            <div>
                <h1>6</h1>
                <h3>Database Migration and Eloquent</h3>
            </div>
            <div>
                <h1>7</h1>
                <h3>Database Seeder</h3>
            </div>
            <div>
                <h1>8</h1>
                <h3>Factory and Faker</h3>
            </div>
            <div>
                <h4>And Many More</h4>
            </div>
        </div>

        <div id="backend-learn">
            <h1>Ready to Learn?</h1>
            <a href="#video-sect" class="backend-btn">Start Now!</a>
        </div>

        <div id="video-sect">
            <div>
                <iframe id="videoBox" width="640" height="360" src="{{ $link1 }}" frameborder="0"></iframe>
            </div>

            <div>
                <ol>
                    <li onclick="changeVideo('{{ $link1 }}')">Back-end Engineering with Laravel</li>
                    <li onclick="changeVideo('{{ $link2 }}')">Insallation and Configuration</li>
                    <li onclick="changeVideo('{{ $link3 }}')">Folder Structures, Routes, and Views</li>
                    <li onclick="changeVideo('{{ $link4 }}')">Blade Templating Engine</li>
                    <li onclick="changeVideo('{{ $link5 }}')">Model, Collection, Controller</li>
                    <li onclick="changeVideo('{{ $link6 }}')">Database Migration and Eloquent</li>
                    <li onclick="changeVideo('{{ $link7 }}')">Database Seeder</li>
                    <li onclick="changeVideo('{{ $link8 }}')">Factory and Faker</li>
                </ol>
            </div>
        </div>

        <div id="backend-browse">
            <h3>Browse Other Courses</h3>

            <div>
                <a href="">Front-end Developer Path Course &rarr;</a>
                <a href="">Back-end Developer Path Course &rarr;</a>
                <a href="">Android Developer Path Course &rarr;</a>
                <a href="">iOS Developer Path Course &rarr;</a>
                <a href="">Data Engineer Path Course &rarr;</a>
                <a href="">UI/UX Designer Path Course &rarr;</a>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        function changeVideo(videoLink){
            var videoBox = document.getElementById('videoBox');

            videoBox.src = videoLink
        }
    </script>
</body>

</html>