<?php 
    require "schooltube.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>

        .background{
            background-color: whitesmoke;
            width: 100%;
            height: 95%;
            position: absolute;
            top: 9%;
            left: 0%;
            text-align: center;
        }
        .content-input {
            background: #f1f1f1;
            border: solid #116dff;
            text-align: center;
            border-radius: 10px;
            width: calc(31.5% - 1rem);
            height: 10rem;
            resize: none;
            position: absolute;
            left: 2.5%;
            top: 6%;
        }

        .content-output {
            float: left;
            box-sizing: border-box;
            background: #f9f9f9;
            padding: .5rem;
            width: calc(15% - 1rem);
            height: 10rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
            color: #202020;
            position: absolute;
            left: 500px;
            top: 500px;

        }

        .save-button {
            background: #f1f1f1;
            border: solid #116dff;
            border-radius: 10px;
            height: 6.5%;
            width: calc(31.5% - 1rem);
            text-align: center;
            cursor: pointer;
            position: absolute;
            left: 2.5%;
            top: 24.6%;
        }

        .save-button:hover{
            transition: .7s;
            background-color: #116dff;
            color: #f1f1f1;
        }

        .mid{
            color: red;
            position: absolute;
            top: 50%;
            left: 45%;
        }
    </style>
    <script>
        function enter() {
            
        }

        window.onload = function myFunction() {
            document.getElementById("demo").innerHTML = localStorage.getItem("name");
        }
    </script>
</head>
<body>

    <?php 
        if(isset($_SESSION['userId'])) {
            echo '
                <div class="background">
                    <div class="content-output"></div>
                    <textarea id="demo" class="content-input" placeholder="Note"></textarea>
                    <button onclick="enter()" id="save1-button" class="save-button">Add Note</button>
                    <p id="demo"></p>
                </div>
            ';
        }else{
            echo '<div class="background"><p class="mid">You Are Logged Out</p></div>';
        }

    ?>
    
</body>
</html>