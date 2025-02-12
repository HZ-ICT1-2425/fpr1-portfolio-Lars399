<style>
    .navbar {
        z-index: 1000; /* Ensure the navbar stays on top of other elements */
    }
    .context-dark,
    .bg-gray-dark,
    .bg-primary {
        color: white;
    }

    .navbarcolor {
        background-color: #2d4056;
        margin-bottom: 0px;
    }

    .coloreigen {
        color: #ffffff;
    }

    .navbar-nav .active {
        background-color: #3498db;
        color: #000 !important;
        border-radius: 25px;
    }

    .tableboxdashboard {
        background-color: white;
        border: 30px solid white;
        border-radius: 25px;
    }

    .backgroundrownbsa {
        background-color: white;
        border: 25px solid white;
        border-radius: 25px;
    }

    .backgroundcolornbsa,
    .backgroundcolordashboard {
        background-color: #3498db;
        border-radius: 25px;
        border: 5px solid #3498db;
        border-top: 25px solid #3498db;
        border-bottom: 25px solid #3498db;
    }

    .sidebar {
        height: calc(90vh - 56px);
        width: 300px;
        position: sticky;
        top: 56px;
        left: 0;
        background-color: #3498db;
        padding-top: 20px;
        z-index: 999;
        border-radius: 25px;
    }

    .sidebar a {
        padding: 15px 10px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block;
    }

    .sidebar a:hover {
        background-color: white;
    }

    .asidemenulink {
        background-color: rgb(176, 237, 239);
        border-radius: 25px;
        width: 80%;
        margin-top: 25px;
        margin-left: 5px;
    }

    .main-content {
        margin-left: 220px;
        padding: 20px;
        margin-top: 56px;
    }

    .btncollour {
        background-color: rgb(176, 237, 239) !important;
    }

    .profileimg {
        width: 550px;
        height: 800px;
        margin-bottom: 25px;
        border-radius: 25px;
    }

    .textboxprofile {
        background-color: white;
        border: 30px solid white;
        border-radius: 25px;
    }

    .tablebackgroundprofile {
        background-color: #3498db;
        margin-bottom: -10px !important;
    }

    .tableborderprofile {
        border: 25px solid #3498db;
        border-radius: 10px;
    }

    .tableprofiletext {
        color: black;
    }

    .profilemargintop {
        margin-top: 15px;
    }

    .tableborderprofile table {
        border-color: black !important;
    }

    .tableborderprofile th,
    .tableborderprofile td {
        border-color: black !important;
    }

    .tablecontentcenter {
        text-align: center;
    }

    .backgroundcoloricons {
        background-color: white;
        border-radius: 25px;
        border: 10px solid white;
    }

    .indextable,
    tr,
    th,
    thead,
    td {
        border: 1px solid black;
    }

    .indeximg1,
    .indeximg2 {
        width: 350px;
        margin-bottom: 5px;
        border-radius: 25px;
    }

    .rowcontentindex {
        margin-bottom: 100px;
    }

    .indeximgmyself {
        height: 400px;
        margin-bottom: 100px;
        border-radius: 25px;
    }

    .tablerowindex {
        margin-top: 100px;
    }

    .triangle-background {
        position: relative;
        background-color: rgb(176, 237, 239);
        padding: 20px 0;
        overflow: hidden;
    }

    .triangle-background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #3498db;
        clip-path: polygon(0 0, 100% 0, 0 100%);
        z-index: 0;
    }

    .triangle-background-reverse {
        position: relative;
        background-color: rgb(176, 237, 239);
        padding: 20px 0;
        overflow: hidden;
    }

    .triangle-background-reverse::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #3498db;
        clip-path: polygon(100% 100%, 100% 0, 0 100%);
        z-index: 0;
    }

    .row > .col-sm-4,
    .row > .col-sm-2 {
        position: relative;
        z-index: 1;
    }

    .triangle-background-flipped {
        position: relative;
        background-color: rgb(176, 237, 239);
        padding: 20px 0;
        overflow: hidden;
    }

    .triangle-background-flipped::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #3498db;
        clip-path: polygon(
            0 0,
            100% 100%,
            100% 0
        );
        z-index: 0;
    }

    .backgroundcolorindex {
        background-color: rgb(176, 237, 239);
    }

    .textboxindex {
        background-color: white;
        border: 50px solid white;
        border-radius: 25px;
    }

    .tableboxindex {
        background-color: white;
        border: 50px solid white;
        border-radius: 25px;
    }

    .section1,
    .section2,
    .section3,
    .section4,
    .faqsection1,
    .faqsection2,
    .faqsection3,
    .faqsection4,
    .faqsection5 {
        background-color: #2d4056;
    }

    .backgroundcolorblog {
        border: 25px solid #2d4056;
        border-radius: 25px;
        margin-bottom: 50px;
    }

    .backgroundcolorfaq {
        border: 25px solid #2d4056;
        border-radius: 25px;
        margin-bottom: 50px;
    }

    .textcolorfaq {
        margin-bottom: -5px;
        color: white;
    }

    .textcolorblog,
    .textcolorfaqh1,
    .faqlinkcolor {
        color: white;
    }

    .bodybackgroundcolorblog,
    .bodybackgroundcolorfaq,
    .bodybackgroundcolorprofile,
    .bodybackgroundcolordashboard {
        background-color: rgb(176, 237, 239);
    }


    .textboxblog {
        background-color: white;
        border: 30px solid white;
        border-radius: 25px;
    }

    .footerbackground {
        background-color: #2d4056;
    }

    .footertext {
        color: white;
    }

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>

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

{{$slot}}

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
