<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>

    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/css/hamburgers.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/css/ninja-slider.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="loader">
            <div class="loaderContent">
                <h3 id="loadContent"></h3>
            </div> 

        </div>
        <div class="leftSide">
            <div class="leftContent">
                <h1>Sukanya Pedamkar</h1>
                <h2>Web developer</h2>
                <a class="mainBtn">
                    <span class="text">Resume</span>
                    <span class="line -right"></span>
                    <span class="line -top"></span>
                    <span class="line -left"></span>
                    <span class="line -bottom"></span>
                  </a>
                <div class="social-tab">
                    <label class="float-left">Stay in touch : </label>
                    <ul class="social-icons float-left">
                        <li class="float-left"><a href="https://www.linkedin.com/in/sukanya-pedamkar-12822574/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="float-left"><a href="https://github.com/sukanyapedamkar/" target="_blank"><i class="fab fa-github-alt"></i></a></li>
                        <li class="float-left"><a href="https://codepen.io/sukanyapedamkar/pen/yNvZbY" target="_blank"><i class="fab fa-codepen"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightSide">
            <div class="bgImgWrap">
            </div>
            <div class="rightContent">
                <nav class="navbar navbar-expand-lg">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <button class="navbar-toggler hamburger hamburger--3dxy" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-target="aboutme">About<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-target="projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-target="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <section class="content" id="content">
                    <?php include('pages/aboutme.php'); ?>
                </section>
                <footer class="footerWrap">
                    <p>&copy; 2018 made by <span>Sukanya</span></p>
                </footer>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/plugins/current-device.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="node_modules/plugins/ninja-slider.js"></script>
    <script type="text/javascript" src="node_modules/custom.js"></script>
</body>

</html>