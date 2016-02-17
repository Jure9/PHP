<?php 

//  includamo naš Connection class
    include 'Connect.php';

    try 
    {
        $conn = new Connect;
        
        $title=$_POST['title'];
        
        $usser=$_POST['usser'];
        
        $text=$_POST['txt'];
        
        
        $conn->setPost($title, $usser, $text);
        
    }
    catch(PDOException $e)
    {
        echo "Napaka: " . $e->getMessage();
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        
        <!-- Bootstrap CSS -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="blog.css">
        
    </head>
    <body>
        
        <div class="container" id="wrapper">
            
            <div id="myModal" role="dialog">
                
                <div class="modal-dialog">
                    
                    <div class="modal-content">
                    
                        <h2>Your data has been successfully saved.</h2>
                        
                        <a href="blogForma.html" class="btn btn-info" role="button">go back</a>
                        
                        <a href="allPosts.php" class="btn btn-info" role="button">All posts</a>
                    
                    </div>
                    
                </div>
            
            </div>
            
        </div>

        
    </body>
</html>
