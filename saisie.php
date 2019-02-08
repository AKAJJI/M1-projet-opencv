<?php session_start(); ?>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="modif.css">
    <link rel="stylesheet" href="slides.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="pwdstrong.css" >
   
</head>

<body>
    
<?php include("header.php"); ?>

    <div class="container"><br>
        <br>
         <form action="traitement.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                
                <input type="file" id="images" name="images[]" class="form-control" multiple required>
                
            </div>
        
            <button type="submit" class="btn btn-primary">Envoyer</button>
           
            </form>
        
    </div>    
    
    </body>
</html>