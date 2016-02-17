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
                    
                        <form action="NuInput.php" method="post">
                            
                            <?php

                            include 'Connect.php';

                            try 
                            {
                                $conn = new Connect;
                                
                                $ID= intval($_GET['id']);
                                
                                
        
                                $ussrs = $conn->getAll('uporabnik');
                                
                                foreach($ussrs as $user) 
                                {
                                    
                                    if($user['id']==$ID)
                                    {
                                        
                                        $usserName=$user['ussername'];
                                        
                                        $title=$user['naslov'];
                                        
                                        $text=$user['sporocilo'];
                                        
                                    }
                                }       
    
                            }
                            catch(PDOException $e)
                            {
                                echo "Napaka: " . $e->getMessage();
                            }


                        ?>
                    
                            <h3>Title:</h3>
                            <input type="text" id="title" name="title" value="<?php echo $title; ?>">
                    
                            <h3>Ussername:</h3>
                            <input type="text" id="usser" name="usser" value="<?php echo $usserName; ?>">
                    
                            <h3>Text:</h3>
                            <textarea rows="10" cols="35" id="txt" name="txt"><?php echo $text; ?></textarea>
    
                            <button type="get" class="butn">Stisn</button>
                        </form>
                    
                    </div>
                    
                </div>
            
            </div>
            
        </div>

        
    </body>
</html>
