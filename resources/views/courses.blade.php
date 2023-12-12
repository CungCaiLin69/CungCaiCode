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

    <div id="course-section">
        <h1>Choose your desired career path and learn from scratch</h1>

        <div class="course-group">
            <div class="single-course">
                <img src="img/frontend.png" alt="">
                <div>
                    <h1>Front-End Developer Path Course</h1>
                    <a href="/courses/frontend" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/backend.png" alt="">
                <div>
                    <h1>Back-End Developer Path Course</h1>
                    <a href="/courses/backend" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/fullstack.png" alt="">
                <div>
                    <h1>Fullstack Developer Path Course</h1>
                    <a href="/courses/fullstack" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/android.png" alt="">
                <div>
                    <h1>Android Developer Path Course</h1>
                    <a href="/courses/android" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/ios.png" alt="">
                <div>
                    <h1>iOS Developer Path Course</h1>
                    <a href="/courses/ios" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/dataeng.png" alt="">
                <div>
                    <h1>Data Engineer Path Course</h1>
                    <a href="/courses/dataeng" class="btn btn-primary">Check Course</a>
                </div>
            </div>
            <div class="single-course">
                <img src="img/uiux.png" alt="">
                <div>
                    <h1>UI/UX Designer Path Course</h1>
                    <a href="/courses/uiux" class="btn btn-primary">Check Course</a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>