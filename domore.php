<?php
    require "schooltube.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do More</title>
    <style>
        .capto{
            visibility: hidden;
        }

        .bkg{
            width: 100%;
            height: 91.5%;
            background-color: lightgray;
            position: absolute;
            bottom: 0%;
            left: 0%;
        }

        .section{
            width: 60%;
            height: 75%;
            background-color: white;
            position: absolute;
            left: 20%;
            top: 10%;
        }

        .head{
            position: absolute;
            left: 7.5%;
            font-family: Times;
        }

        .p{
            font-family: Times;
            position: absolute;
            top: 15%;
            left: 18%;
            font-size: 110%;
        }

        .watch{
            background-color: whitesmoke;
            color: #116dff;
            border: solid #116dff;
            height: 50px;
            width: 210px;
            position: absolute;
            top: 90%;
            left: 0%;
            border-radius: 10px;
        }

        .watch:hover{
            transition: .7s;
            background-color: #116dff;
            color: whitesmoke;
        }

        .play{
            background-color: whitesmoke;
            color: #116dff;
            border: solid #116dff;
            height: 50px;
            width: 210px;
            position: absolute;
            top: 90%;
            left: 25.4%;
            border-radius: 10px;
        }

        .play:hover{
            transition: .7s;
            background-color: #116dff;
            color: whitesmoke;
        }

        .create{
            background-color: whitesmoke;
            color: #116dff;
            border: solid #116dff;
            height: 50px;
            width: 210px;
            position: absolute;
            top: 90%;
            left: 50.4%;
            border-radius: 10px;
        }

        .create:hover{
            transition: .7s;
            background-color: #116dff;
            color: whitesmoke;
        }

        .learn{
            background-color: whitesmoke;
            color: #116dff;
            border: solid #116dff;
            height: 50px;
            width: 210px;
            position: absolute;
            top: 90%;
            left: 75.8%;
            border-radius: 10px;
        }

        .learn:hover{
            transition: .7s;
            background-color: #116dff;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="bkg">
    <div class="section">
            <h2 class="head">Do More</h2>
            <p class="p">
                With A Computer You Can Do A Lot Of Things
                Like Learn, Play, Create, Watch And
                <br> 
                Much More.
                <br>
                <br>
                So Lets Learn, Play, Create, Watch Only On This Page
            </p>
            <a href="https://www.youtube.com/" target="_blank">
                <button class="watch">Watch</button>
            </a>

            <a href="https://kizi.com/" target="_blank">
                <button class="play">Play</button>
            </a>

            <a href="https://www.lego.com/en-us/kids/games" target="_blank">
                <button class="create">Create</button>
            </a>

            <a href="https://www.youtube.com/channel/UCrwI4jRzkclr6Yhvffv2zdg?view_as=subscriber" target="_blank">
                <button class="learn">Learn</button>
            </a>
        <div>
    </div>
    
    
</body>
</html>