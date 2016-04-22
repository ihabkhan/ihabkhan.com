<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

    Created on : 19/04/2016, 2:41:45 PM
    Author     : Ihab Khan
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ihab Khan</title>

        <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="styles/general.css">

        <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
        <script src="scripts/jquery.zoomooz.min.js"></script> 

    </head>
    <body>
        <div id="PageContents">
            <div id="BoxContainer">
                <div class="box-lightgray box box1"></div>
                <div class="box-blue box box2 " ></div>
                <div class="box-darkgray box box3 "></div>
                <div class="box-bluegray box box4 "></div>

                <div class="box-bluegray box box5 "></div>
                <div class="box-darkgray box box6 "></div>
                <div class="box-lightgray box box7 "></div>
                <div class="box-blue box box8 "></div>

                <div class="box-darkgray box box9 "></div>
                <div class="box-blue box box10 "></div>
                <div class="box-bluegray box box11 "></div>
                <div class="box-lightgray box box12 "></div>
            </div>
        </div>

        <div id="footer">
            COPYRIGHT © IHABKHAN.COM 2016+. ALL RIGHTS RESERVED
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            var time = 0;

            var randomNumbers = new Array();

            while (randomNumbers.length < 12) {
                var number = Math.floor((Math.random() * 12) + 1);
                var found = false;
                for (var i = 0; i < randomNumbers.length; i++) {
                    if (randomNumbers[i] === number) {
                        found = true;
                        break
                    }
                }
                if (!found)
                    randomNumbers[randomNumbers.length] = number;
            }

            for (var i = 0; i < randomNumbers.length; i++) {
                $('.box' + randomNumbers[i]).delay(time).effect("highlight", {color: 'white'}, 1000)
                time += 100;
            }

            $('.box').each(function () {
                $(this).click(function () {
                    $(this).zoomTo({
                        targetsize: 1.0,
                        root: $('#BoxContainer'),
                        animationendcallback: EndZoom()
                    });
                });
                $(this).mouseenter(function () {
                    $(this).effect("highlight", {color: 'white'}, 1000)
                });
            });

            function EndZoom() {
                
            }
        });
    </script>
</html>
