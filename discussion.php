
<?php

    require "schooltube.php";
    
?>

<html>
<head>
    <title>Comment System using PHP and Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .nah{
            width: 10%;
            height: 12.5%;
            border: solid blue;
            border-radius: 10px;
            position: absolute;
            bottom: 0%;
            left: 0%;
        }

        .nah2{
            width: 80%;
            border: solid blue;
            height: 12.5%;
            border-radius: 10px;
            resize: none;
            position: absolute;
            bottom: 0%;
            left: 10%;
        }

        .nice{
            border: solid blue;
            height: 12.5%;
            width: 10%;
            border-radius: 10px;
            position: absolute;
            bottom: 0%;
            left: 90%;
        }

        .yessir{
            width: 100%;
            height: 100%;
            top: 8.5%;
            background-color: whitesmoke;
        }

        .capto{
            visibility: hidden;
        }

        .loginpls{
            color: red;
            position: absolute;
            top: 50%;
            left: 37%;
        }
    </style>
</head>
 <body>
 <div class="yessir">
     <?php 
        if(isset($_SESSION['userId'])) {
            echo '<br />
            <br />
            <div class="container">
            <form method="POST" id="comment_form">
                <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="nah" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="nah2" placeholder="Enter Comment" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
                    <input type="submit" name="submit" id="submit" class="nice" value="Enter" />
                </div>
            </form>
            <span id="comment_message"></span>
                <br />
                <div id="display_comment"></div>
            </div>';
        }else{
            echo '<h4 class="loginpls">You Need To Login To Have A Disscussion</h4>';
        }
     ?>
</div>
    
    
 </body>
</html>



<script>
    $(document).ready(function(){
    
    $('#comment_form').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
    url:"add_comment.php",
    method:"POST",
    data:form_data,
    dataType:"JSON",
    success:function(data)
    {
        if(data.error != '')
        {
        $('#comment_form')[0].reset();
        $('#comment_message').html(data.error);
        $('#comment_id').val('0');
        load_comment();
        }
    }
    })
    });

    load_comment();

    function load_comment()
    {
    $.ajax({
    url:"fetch_comment.php",
    method:"POST",
    success:function(data)
    {
        $('#display_comment').html(data);
    }
    })
    }

    $(document).on('click', '.reply', function(){
    var comment_id = $(this).attr("id");
    $('#comment_id').val(comment_id);
    $('#comment_name').focus();
    });
    
});
</script>