<?php
    require "schooltube.php";
?>

    <main>
    <style>
        .back{
            background-color: rgb(220, 220, 220);
            width: 100%;
            height: 92%;
            position: absolute;
            bottom: 0%;
            left: 0%;
        }

        .signback{
            background-color: white;
            width: 35%;
            height: 60%;
            position: absolute; 
            top: 25%;
            left: 32%;
        }

        .usr{
            background: #f1f1f1;
            border: none;
            text-align: center;
            height: 6.5%;
            width: 65%;
            top: 10%;
            left: 17.5%;
            position: absolute;
            border-radius: 10px;
        }

        .usr1{
            background: #f1f1f1;
            border: none;
            text-align: center;
            height: 6.5%;
            width: 65%;
            top: 25%;
            left: 17.5%;
            position: absolute;
            border-radius: 10px;
        }

        .usr2{
            background: #f1f1f1;
            border: none;
            text-align: center;
            height: 6.5%;
            width: 65%;
            top: 40%;
            left: 17.5%;
            position: absolute;
            border-radius: 10px;
        }

        .usr3{
            background: #f1f1f1;
            border: none;
            text-align: center;
            height: 6.5%;
            width: 65%;
            top: 55%;
            left: 17.5%;
            position: absolute;
            border-radius: 10px;
        }

        .signupbtn{
            background: #f1f1f1;
            border: solid #116dff;
            height: 20%;
            width: 50%;
            text-align: center;
            position: absolute;
            top: 70%;
            left: 25%;
            border-radius: 10px;
        }

        .signupbtn:hover{
            transition: .7s;
            background-color: #116dff;
            color: #f1f1f1;
        }

        .fam{
            position: absolute;
            top: 85%;
            left: 46%;
            color: red;
        }

    </style>

        <div class="back"></div>


        <h1>Sign-Up</h1>
        <?php 
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="fam">Fill In All Fields!</p>';
                }else if($_GET['error'] == "invalidmail"){
                    echo '<p class="Invalid Mail!</p>';

                }else if($_GET['error'] == "passwordcheck"){
                    echo '<p class="Password Does Not Match!</p>';

                }else if($_GET['error'] == "internet_error_or_sql_error"){
                    echo '<p class="Internet Not Connected!</p>';
                }

                
            }
        ?>
        <div class="signback">
            <form action="includes/signup.inc.php" method="post">
                <input class="usr" type="text" name="uid" placeholder="Username">
                <input class="usr1" type="text" name="mail" placeholder="E-mail">
                <input class="usr2" type="password" name="pwd" placeholder="Password">
                <input class="usr3" type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button class="signupbtn" type="submit" name="signup-submit">SignUp</button>
            </form>
        </div>
    </main>

<?php
    require "schooltubefooter.php";
?>