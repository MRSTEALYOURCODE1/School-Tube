<?php 
    include 'dbh.php';
    require 'schooltube.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search School-Tube</title>
    <style>
        .section{
            background-color: whitesmoke;
            width: 100%;
            height: 95%;
            position: absolute;
            top: 9%;
            left: 0%;
            text-align: center;
        }

        .search-cont{
            width: 30%;
            border: solid #116dff;
            height: 6.5%;
            border-radius: 10px;
            resize: none;
            position: absolute;
            top: 1%;
            left: 2.5%;
        }

        .search-real{
            background: #f1f1f1;
            border: solid #116dff;
            height: 6.5%;
            width: 8.7%;
            text-align: center;
            position: absolute;
            top: 1%;
            left: 33%;
            border-radius: 10px;
        }

        .search-real:hover{
            transition: .7s;
            background-color: #116dff;
            color: whitesmoke;
        }

        .article-container {
            background-color: white;
            position: absolute;
            top: 15%;
            left: 2.5%;
            width: 95%;
            border-radius: 10px;
        }
        .all-results{
            position: absolute;
            left: 46%;
            top: 7.5%;
        }

        .article-box{
            padding-bottom: 30px;
            width: 100%;
            border: solid #116dff;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <div class="section">
        <form action="search.php" method="POST">
            <input class="search-cont" type="text" name="search" placeholder="Search"></input>
            <button class="search-real" type="submit" name="submit-search">Search</button>
        </form>

        <h3 class="all-results">All-Results</h3>
        

        <div class="article-container">
            <?php 
                $sql = "SELECT * FROM article";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='article-box'>
                            <h3 class='tittle'>".$row['a_tittle']."</h3>
                            <p'>".$row['a_text']."</p>
                            <p>".$row['a_date']."</p>
                            <p>".$row['a_author']."</p>
                        </div>";
                    }
                }
            ?>
        </div>
    
    </div>
</body>
</html>