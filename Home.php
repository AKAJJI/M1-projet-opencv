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
        <?php if(isset($_GET['action']) && $_GET['action']=='train'){
                shell_exec('python '.getcwd().'\faces-train.py');
                ?>
            <h2 style="text-align:center"><i class="fas fa-check-circle text-warning"></i> L'ENTRAINEMENT EST FINI AVEC SUCCÈS</h2>
        <?php
            }?>
        <br><br>
                          <a  class="navlink btn btn-primary " href="Home.php?action=train"><i class="fas fa-dumbbell"></i> Entrainer le modele</a>
                  <a  class="navlink btn btn-success" href="exec.php"><i class="fas fa-video"></i> Identifier les hooligans</a>
        
    </div>    
    
    </body>
</html>