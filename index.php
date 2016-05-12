<?php

include "connectdb.php";

echo <<<_END

_EN;

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="./js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Two-Alpha</h1>
    <p>We specialize in Data Analysis</p>
    <form class="form-inline">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <button type="button" class="btn btn-danger">Subscribe</button>
    </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About Company</h2><br>
            <h4>Ten days ago, we set out to create products that would transform the way organizations use their data.
                Today, our products are deployed at the most critical government, commercial, and non-profit institutions
                in the world to solve problems we hadn’t even dreamed of back then.</h4><br>
            <p>We’re focused on creating the world’s best user experience for working with data, one that empowers
               people to ask and answer complex questions without requiring them to master querying
               languages, statistical modeling, or the command line. To achieve this, we build platforms for integrating,
               managing, and securing data on top of which we layer applications for fully interactive human-driven,
               machine-assisted analysis.</p>
            <br>
            <button class="btn btn-default btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
            <h2>Our Values</h2><br>
            <h4><strong>MISSION:</strong> Our customers have data and a deep understanding of the problems they face.
                We have proven products and an engineering mindset. We send our engineers into the field to work
                directly with our customers—deploying our products, integrating their data, optimizing their workflows,
                and producing operational results in weeks, not years. By establishing a true partnership,
                we help customers get the most out of our products and engineering expertise</h4><br>
            <p><strong>VISION:</strong> Fraudsters are sophisticated criminals, changing their tactics nearly every day.
                To combat this kind of threat, Palantir Anti-Fraud augments human analytic capabilities by capitalizing
                on the strengths of machine analysis while avoiding the risks of purely automated approaches.
                Palantir’s approach to this kind of human-computer symbiosis was inspired by lessons learned from
                combating adaptive threats at PayPal. Palantir Anti-Fraud uses algorithms to comb through existing
                archives and streams of new data in order to isolate and surface patterns based on rules defined by
                human analysts. The analysts, in turn, investigate cases using their intuition, experience, and domain
                knowledge, identifying and responding to subtle cues, edge cases, and new indicators of evolving fraud
                tactics.</p>
        </div>
    </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
        <div id="power" class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>Top 10 Twitters</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="love" class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>userhotperiod</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="job" class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>avglongestweets</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div id="green" class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>bestcreative</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="CERTIFIED" class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>hottesthashtags</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="HARD" class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4 style="color:#303030;">bestcreative</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div id="OK" class="col-sm-4">
            <span class="glyphicon glyphicon-ok logo-small"></span>
            <h4>hotUsers</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="VEDIO" class="col-sm-4">
            <span class="glyphicon glyphicon-play-circle logo-small"></span>
            <h4>mostfollowers</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div id="FILE" class="col-sm-4">
            <span class="glyphicon glyphicon-file logo-small"></span>
            <h4>mostretweets</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>

_END;


// hottest twitter
if ($stmt = $mysqli->prepare("SELECT * FROM topfavorite")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $tweetid, $text, $favoriteCount);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"target-10twitter\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>Top 10 Twitter<h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-1\">id</th>";
        echo "<th class=\"text-center col-sm-1\">uid</th>";
        echo "<th class=\"text-center col-sm-1\">tweetid</th>";
        echo "<th class=\"text-center col-sm-8\">text</th>";
        echo "<th class=\"text-center col-sm-1\">favoriteCount</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$uid</td>";
            echo "<td>$tweetid</td>";
            echo "<td>$text</td>";
            echo "<td>$favoriteCount</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}



if ($stmt = $mysqli->prepare("SELECT * FROM avglongestweets")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $username, $avglength);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"avglength\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>avglongestweets</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        //echo "<th class=\"text-center col-sm-1\">uid</th>";
        echo "<th class=\"text-center col-sm-4\">username</th>";
        echo "<th class=\"text-center col-sm-8\">avglength</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            //echo "<td>$uid</td>";
            echo "<td>$username</td>";
            echo "<td>$avglength</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}

if ($stmt = $mysqli->prepare("SELECT * FROM bestcreative")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $username, $tweetCount);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"bestcreative\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>bestcreative</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-3\">uid</th>";
        echo "<th class=\"text-center col-sm-3\">username</th>";
        echo "<th class=\"text-center col-sm-6\">tweetCount</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$username</td>";
            echo "<td>$tweetCount</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}


if ($stmt = $mysqli->prepare("SELECT * FROM hottesthashtags")) {
    $stmt->execute();

    $stmt->bind_result($id, $hashtag, $count);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"hottesthashtags\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>hottesthashtags</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-3\">hashtag</th>";
        echo "<th class=\"text-center col-sm-6\">count</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$hashtag</td>";
            echo "<td>$count</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}

if ($stmt = $mysqli->prepare("SELECT * FROM hotusers")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $username, $score);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"hotusers\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>hotUsers</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-3\">uid</th>";
        echo "<th class=\"text-center col-sm-3\">username</th>";
        echo "<th class=\"text-center col-sm-6\">score</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$username</td>";
            echo "<td>$score</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}


if ($stmt = $mysqli->prepare("SELECT * FROM mostfollowers")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $username, $friendCount);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"mostfollowers\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>mostfollowers</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-3\">uid</th>";
        echo "<th class=\"text-center col-sm-3\">username</th>";
        echo "<th class=\"text-center col-sm-6\">mostfollowers</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$username</td>";
            echo "<td>$friendCount</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}

if ($stmt = $mysqli->prepare("SELECT * FROM mostretweets")) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $tweetid, $text, $retweetCount);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<div id=\"mostretweets\" class=\"target-detail container-fluid text-center\" style=\"display:none;\">";
        echo "<h2>mostretweets</h2>";
        echo "<br>";
        echo "<table class=\"table .table-striped text-center\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th class=\"text-center col-sm-1\">uid</th>";
        echo "<th class=\"text-center col-sm-1\">tweetid</th>";
        echo "<th class=\"text-center col-sm-6\">text</th>";
        echo "<th class=\"text-center col-sm-2\">retweetCount</th>";
        echo "</tr>";
        echo "</thead>";

        while ($stmt->fetch()) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$tweetid</td>";
            echo "<td>$text</td>";
            echo "<td>$retweetCount</td>";
        }

        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type=\"button\" class=\"btn btn-success return\">Return</button>";
        echo "</div>";
    }
}


echo <<<_END

<div id="userhotperiod" class="container-fluid text-center target-detail" style="display:none;">
    <form class="form-inline">
        <input id="searchTxt" type="number" class="form-control" size="50" placeholder="User Id" required>
        <button id="search" type="button" class="btn btn-danger">Search</button>
    </form>
_END;

    echo "<p id=\"userhottime\"></p>";

echo <<<_END
    <button type="button" class="btn btn-success return">Return</button>

    <div id=period_imag>
        </br></br>
        <p>The line chart of the user hot time</p>
        <img src="./imag/hot_period.png" class="img-responsive center-block" alt="Period_imag" width="500" height="300">
    </div>

</div>



<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">

    <h2>What our customers say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span>
                </h4>
            </div>
            <div class="item">
                <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
            </div>
            <div class="item">
                <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span>
                </h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p><strong>20</strong> Lorem</p>
                    <p><strong>15</strong> Ipsum</p>
                    <p><strong>5</strong> Dolor</p>
                    <p><strong>2</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$19</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Pro</h1>
                </div>
                <div class="panel-body">
                    <p><strong>50</strong> Lorem</p>
                    <p><strong>25</strong> Ipsum</p>
                    <p><strong>10</strong> Dolor</p>
                    <p><strong>5</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$29</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p><strong>100</strong> Lorem</p>
                    <p><strong>50</strong> Ipsum</p>
                    <p><strong>25</strong> Dolor</p>
                    <p><strong>10</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$49</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->

<script>
    var myCenter = new google.maps.LatLng(41.878114, -87.629798);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 12,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

</body>
</html>

_END;

?>