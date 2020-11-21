<?php 
    include 'searchheader.php';
?>
<h1>Search Page</h1>

<style>
        .article-container2 {
            background-color: white;
            position: absolute;
            bottom: 0%;
            left: 2.5%;
            width: 100%;
            height: 77%;
            left: 2.25%;
            border-radius: 10px;
        }

        .article-box{
            padding-bottom: 30px;
            width: 95%;
            border: solid #116dff;
            border-radius: 10px;
        }

        
        
</style>

    <?php 
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_tittle LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='article-container2'>
                    <div class='article-box'>
                            <h3 class='tittle'>".$row['a_tittle']."</h3>
                            <p'>".$row['a_text']."</p>
                            <p>".$row['a_date']."</p>
                            <p>".$row['a_author']."</p>
                        </div>
                        </div>
                        ";
                }
            }else{
                echo "There Are No Results!";
            }
        }
    ?>
