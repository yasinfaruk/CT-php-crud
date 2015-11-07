<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/7/15
 * Time: 12:42 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <style>
        @charset "utf-8";
        /* CSS Document */


        /* ---------------------------------------------------------------------- */
        /* HTML5/CSS3 Gray Navigation Menu
        /* ----------------------------------------------------------------------
        Version: 1.0
        Author: Ixtendo
        Author URI: http://www.ixtendo.com
        License: MIT License
        License URI: http://www.opensource.org/licenses/mit-license.php
        ------------------------------------------------------------------------- */


        * {
            margin: 0;
            padding: 0;
            outline: none;
        }

        ul {
            list-style: none;
        }

        #navigation {
            margin: 40px 0;
            font: bold 12px/18px "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            color: #444;
        }

        #navigation:after {
            clear: both;
            content: ".";
            display: block;
            height: 0;
            visibility: hidden;
        }

        #navigation ul {
            float: left;
            border-radius: 100px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }

        #navigation li {
            float: left;
            border-style: solid;
            border-width: 1px;
            border-color: #BABABA #BABABA #BABABA #FFF;
            box-shadow: 0 1px rgba(255,255,255,1) inset;
            -webkit-box-shadow: 0 1px rgba(255,255,255,1) inset;
            background: #F7F7F7; /* Old browsers */
            background: -moz-linear-gradient(top, #F7F7F7 0%, #EDEDED 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#F7F7F7), color-stop(100%,#EDEDED)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #F7F7F7 0%,#EDEDED 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #F7F7F7 0%,#EDEDED 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #F7F7F7 0%,#EDEDED 100%); /* IE10+ */
            background: linear-gradient(top, #F7F7F7 0%,#EDEDED 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F7F7F7', endColorstr='#EDEDED',GradientType=0 ); /* IE6-9 */
        }

        #navigation li:hover, #navigation li.current {
            box-shadow: 0 1px rgba(255,255,255,0.2) inset;
            -webkit-box-shadow: 0 1px rgba(255,255,255,0.2) inset;
            border-color: #262626 !important;
            background: #4D4D4D; /* Old browsers */
            background: -moz-linear-gradient(top, #4D4D4D 0%, #262626 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4D4D4D), color-stop(100%,#262626)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #4D4D4D 0%,#262626 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #4D4D4D 0%,#262626 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #4D4D4D 0%,#262626 100%); /* IE10+ */
            background: linear-gradient(top, #4D4D4D 0%,#262626 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4D4D4D', endColorstr='#262626',GradientType=0 ); /* IE6-9 */
        }

        #navigation a {
            display: block;
            padding: 10px 15px;
            color: #444;
            text-decoration: none;
            text-shadow: 0 1px #FFF;
        }

        #navigation a:hover, #navigation li.current a {
            color: #FFF;
            text-shadow: 0 1px #000;
        }

        #navigation li:first-child {
            border-left-color: #BABABA;
            border-radius: 100px 0 0 100px;
        }

        #navigation li:last-child {
            border-radius: 0 100px 100px 0;
        }
    </style>
</head>
<body>
    <div class="row">
        <div id="container" style="width: 430px; margin: 0px auto ;">

            <!-- begin navigation -->
            <nav id="navigation">
                <ul>
                    <li><a href="index.php">Login</a></li>
                    <li><a href="registration.php">Registration</a></li>

                    <li><a href="view.php">View</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="logout.php">Logout</a></li>
<!--                    <li><a href="#">Contact</a></li>-->
                </ul>
            </nav>
            <!-- end navigation -->

        </div>

    </div>
</body>
</html>
