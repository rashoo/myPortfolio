<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="portfolio/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>About Me</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="https://www.linkedin.com/in/rajooh/" target="_blank"
                                        class="text-light nav-link">LinkedIn</a>
                </li>
                <li class="nav-item"><a href="https://github.com/rashoo/myPortfolio" target="_blank"
                                        class="text-light nav-link">GitHub</a>
                </li>
                <li class="nav-item"><a href="https://docs.google.com/document/d/1asc9cImFt3tDdHrk9yXLSuHbPFRE1pDa/edit?usp=sharing&ouid=107296056725629493015&rtpof=true&sd=true" target="_blank" class="text-light nav-link">Résumé</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex">
            <div>
                <h1>Hi, I'm <span class="text-warning">Raju<span id="cursor">|</span></span></h1>
                <p class="lead my-4">
                    Thanks for checking out my portfolio!</p>
                <p class="lead my-1">
                    Developed from the keyboard & up, I have put my programming skills to build this site.<br>
                    Description & demo links to my projects are below!</p>
            </div>
            <img class="img-fluid w-50" src="portfolio/img/background.svg" alt=""/>
        </div>
    </div>
</section>
<section class="bg-primary text-light p-2">
    <div class="d-md-flex justify-content-center">
        <h3 class="mb-2 ">Programming Projects</h3>
    </div>
    <h7 class="d-md-flex justify-content-center">(Links open in a new tab)</h7>
</section>

<section class="bg-warning">
    <div class="container">
        <div class="row g-2">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body d-flex flex-column">
                        <div class="h1 mb-3">
                            <i class="bi bi-file-earmark-code d-flex justify-content-center"></i>
                        </div>
                        <h5 class="card-title mb-3 text-center">
                            Non-Framework Webpage
                        </h5>
                        <p class="card-text">
                            I developed this site without any help from Bootstrap or other helpers.
                            Visual styles and the structure is entirely written out with CSS.
                            The website also links to my other projects.
                        </p>
                        <a href="/home/index.php" target="_blank"
                           class="btn btn-primary d-flex justify-content-center mt-auto">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body  d-flex flex-column">
                        <div class="h1 mb-3">
                            <i class="bi bi-person-check d-flex justify-content-center"></i>
                        </div>
                        <h5 class="card-title mb-3 text-center">
                            Signup & Sign-in App
                        </h5>
                        <p class="card-text">
                            Developed a web-app using PHP & MySQL that signs up a user & allows them to login.
                            User password is securely stored in the database.
                        </p>
                        <a href="/home/sign_up.php" target="_blank"
                           class="btn btn-primary d-flex justify-content-center mt-auto">More</a>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body d-flex flex-column">
                        <div class="h1 mb-3">
                            <i class="bi  bi-pencil d-flex justify-content-center"></i>
                        </div>
                        <h5 class="card-title mb-3 text-center">
                            CRUD Web-app
                        </h5>
                        <p class="card-text">
                            Created using Bootstrap for easier navigation & cleaner look.
                            It allows for Create, Read, Update & Delete operations.
                            The text fields & the database are protected from malicious code injection.
                            (Feel free to try it out!)
                        </p>
                        <a href="/cruds/index2.php" target="_blank"
                           class="btn btn-primary d-flex justify-content-center  mt-auto">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body d-flex flex-column">
                        <div class="h1 mb-3">
                            <i class="bi bi-sort-numeric-up d-flex justify-content-center"></i>
                        </div>
                        <h5 class="card-title mb-3 text-center">
                            Algorithm Visualizer
                        </h5>
                        <p class="card-text">
                            Programmed in JavaScript showing how the bubble sorting algorithm works.
                        </p>
                        <a href="/sorting/index.php" target="_blank"
                           class="btn btn-primary d-flex justify-content-center mt-auto">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="p-5 bg-success text-light text-center text-sm-start">
    <div class="container">
        <div class="row g-4 ">
            <h2 class="text-center mb-0">Thanks for checking it out!</h2>
        </div>
    </div>
</section>


<script src="portfolio/home_js.js"></script>
<span id="cursor">|</span> <script> var cursor = true; var speed = 250; setInterval(() => { if(cursor) { document.getElementById('cursor').style.opacity = 0; cursor = false; }else { document.getElementById('cursor').style.opacity = 1; cursor = true; } }, speed); </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
