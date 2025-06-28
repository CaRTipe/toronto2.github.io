<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: rgb(198, 203, 162);
    }

    #navbarNav {
        justify-content: center !important;
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>