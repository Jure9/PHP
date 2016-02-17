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
                        <?php

                            include 'Connect.php';

                            try 
                            {
                                $conn = new Connect;
                                
                                
        
                                $ussers=$conn->getAll('uporabnik');
    
                                foreach($ussers as $user) 
                                {
                                    echo "<h3> Ussername:" . $user['ussername'] . ";&nbsp &nbsp Title:<a href=post.php?id=" .                                                                 $user['id'].">" . $user['naslov'] . "</a></h3>";
                                }              
        
                            }
                            catch(PDOException $e)
                            {
                                echo "Napaka: " . $e->getMessage();
                            }


                        ?>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </div>

        
    </body>
</html>
