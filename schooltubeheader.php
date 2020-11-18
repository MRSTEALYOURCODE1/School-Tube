
<?php
    require "schooltube.php";
?>

    <main>
        <style>
            .section-default{
            background-color: whitesmoke;
            width: 100%;
            height: 95%;
            position: absolute;
            top: 9%;
            left: 0%;
            text-align: center;
        }

        .ptag{
            font-family: monospace;
            font-weight: bold;
            position: absolute;
            top: 40%;
            left: 42%;
            color: #116dff;
        }

        

        .nothanks{
            position: absolute;
            top: 50%;
            left: 43%;
            background-color: whitesmoke;
            color: red;
            border: solid red;
            height: 50px;
            width: 210px;
            border-radius: 10px;
        }

        .nothanks:hover{
            transition: .7s;
            background-color: red;
            color: whitesmoke;
        }
        </style>
            

                <?php
                    if(isset($_SESSION['userId'])) {
                        echo '<p>You Are Logged In</p>';
                    }else{
                        echo '<section class="section-default"> <p class="ptag">Login For A Better Experience</p>
                        <a href="schooltube.php"> 
                        <button class="nothanks">No, Thanks</button> 
                        </a>

                        </section>
                        '; 
                    }
                ?>
                
                

            
        
    </main>


<?php
    require "schooltubefooter.php"
?>