<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    * {
        scroll-behavior: smooth;
    }

    body {
        background-color: rgb(198, 203, 162);
    }

    a {
        text-decoration: none;
        color: #000;
    }

    #navbarNav {
        justify-content: center !important;
    }

    #story {
        border: 1px solid #000;
    }

    #lookbook {
        border: 1px solid #000;
    }

    #flicks {
        border: 1px solid #000;
    }

    #story,
    #lookbook,
    #flicks {
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #story,
    #lookbook,
    #flicks h2:hover {
        cursor: pointer;
    }

    .gap-card {
        margin: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        padding: 20px;
        background-color: rgb(198, 203, 162);
    }

    .gap-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    h2,
    li,
    p {
        font-family: 'Courier New', Courier, monospace;
    }

    h2 {
        font-weight: 800;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(198, 203, 162);">
        <div class="container-fluid">

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Dropdown menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="#">My Story</a></li>
                            <li><a class="dropdown-item" href="#">Lookbook</a></li>
                            <li><a class="dropdown-item" href="#">Flicks</a></li>
                        </ul>
                    </li>
                    <!-- Socials -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Socials</a>
                    </li>
                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mb-5" id="portfolio">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 800;">Welcome to My Portfolio</h1>
                <p class="lead" style="font-family: 'Courier New', Courier, monospace; font-weight: 800;">Explore my work and connect with me!</p>
            </div>
        </div>

        < <div class="row mt-5 justify-content-center gx-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-4 gap-card" id="story">
                <a href="#story">
                    <h2>My Story</h2>
                </a>
                <p>Learn about my journey and experiences.</p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-4 gap-card" id="lookbook">
                <a href="#lookbook">
                    <h2>Lookbook</h2>
                </a>
                <p>Check out my latest projects and designs.</p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-4 gap-card" id="flicks">
                <a href="#flicks">
                    <h2>Flicks</h2>
                </a>
                <p>Watch my video content and creative works.</p>
            </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>