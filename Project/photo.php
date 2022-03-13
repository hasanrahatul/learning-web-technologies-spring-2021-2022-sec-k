<?php 
    session_start();
    if(isset($_POST['Photo'])){
        $_SESSION['Photo'] =$_POST['Photo'];
    
    header("LOCATION: homepage.php");
    
    } 
?>
<html>
    <head>
        <title>
            PHOTO
        </title>
    </head>
    <body>
        
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    Photo update <input type="file" name="myimage" value=""/><br>
    <input type ="submit" name ="sub" value ="Save"/>
    <input type ="reset"  name ="reset" value ="RESET"/>
</form>
    </body>
</html>