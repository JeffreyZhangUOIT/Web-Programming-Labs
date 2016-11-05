<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .col-md-6r {
            position: relative;
            min-height: 1px;
            padding-left: -15px;
            padding-right: 15px;
            width: 50%;
            float:left;
        }
        .row {
            padding-top: 25px;
            margin-bottom: -15px;
        }
        .row1 {
            padding-top: 20px;
            padding-bottom: 20px;
            margin-left: -10px;
        }
        .textbg {
            background: url(http://65.media.tumblr.com/64718993f98e606f540ef468f4b60717/tumblr_o0yhouvdqM1sqcorto1_1280.jpg) 600px 800px;
            color: red;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-weight: bold;
            font-family: arial, helvetica;
            font-size:45px;
        }
        .pad-below{
            padding-bottom: 20px;
        }
        .pad-else{
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
    <!-- bootstrap plugins -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
    <script>
    jQuery(document).ready(function() {
    jQuery('.carousel[data-type="multi"] .item').each(function(){
        var next = jQuery(this).next();
        if (!next.length) {
            next = jQuery(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo(jQuery(this));

        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = jQuery(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
    });
    </script>
    <title>Cuisine Origins</title>


</head>
<body>
    <!-- bootstrap code -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cusine Origins</a>
            </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html#section1">Home</a></li>
                            <li><a href="index.html#section2">Gallery</a></li>
                            <li><a href="index.html#section3">Recipe of the Month</a></li>
                            <li><a href="index.html#section4">Popularity Rankings</a></li>
                            <li><a href="recipes.html">Recipes</a></li>
                            <li><a href="plots.html">Plots</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="userProfile.html">User Profile</a></li>
                    </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div id="userProfile" class="row">
            <h1 class="textbg">User Profile</h1>

            <div class="col-md-4">
                <p> Username: <br>
                    Email: <br>
                    Experience: <br>
                    Gender: <br>
                    Bio: <br>
                  </p>
            </div>
            <div class="col-md-8">

             <?php  echo htmlspecialchars($_GET['username']);
             echo htmlspecialchars($_GET['email']);
             echo htmlspecialchars($_GET['experience']);
             echo ($_GET['gender']);
             echo htmlspecialchars($_GET['comments']);
             ?>
            </div>


        </div>

    </div>
    <footer class="footer jumbotron" style="text-align:center;">
        <p class="footer-company-name" style="font-size:20px">Cusine Origins &copy; 2016</p>
    </footer>
</body>
</html>
