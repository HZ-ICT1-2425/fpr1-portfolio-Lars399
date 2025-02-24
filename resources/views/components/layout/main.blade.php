@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio</title>

    <!-- Bootstrap 4 -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/js.js"></script>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body class="backgroundcolorindex">
<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-dark navbarcolor">
    <a class="navbar-brand" href="/">Homepage</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item zeibalkdingetje">
                <a class="nav-link" href="#"> | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
            </li>
            <li class="nav-item zeibalkdingetje">
                <a class="nav-link" href="#"> | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard">Dashboard</a>
            </li>
            <li class="nav-item zeibalkdingetje">
                <a class="nav-link" href="#"> | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq">FAQ</a>
            </li>
            <li class="nav-item zeibalkdingetje">
                <a class="nav-link" href="#"> | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content') <!-- Hier wordt de pagina-content geplaatst -->

<!-- Footer -->
<footer class="footerbackground text-light text-center py-4">
    <div class="container">
        <p class="mb-1 footertext">Lars - Software Developer</p>
        <p class="mb-3 footertext">HBO ICT HZ Middelburg</p>
        <ul class="list-inline">
            <li class="list-inline-item">
            <span>
              <i
                  class="fa fa-instagram"
                  style="font-size: 36px; color: white; cursor: pointer;"
                  onclick="instagram()"
              ></i>
            </span>
            </li>
            <li class="list-inline-item">
            <span>
              <i
                  class="fa fa-github"
                  style="font-size: 36px; color: white; cursor: pointer;"
                  onclick="github()"
              ></i>
            </span>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>

<script>
    function instagram() {
        window.open("https://www.instagram.com/carspotlars/", "_blank");
    }

    function github() {
        window.open(
            "https://github.com/Lars399?tab=overview&from=2024-09-01&to=2024-09-05",
            "_blank"
        );
    }
</script>
