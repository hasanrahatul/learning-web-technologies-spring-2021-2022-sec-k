<?php 
    session_start();
    if(isset($_POST['Status'])){
        $_SESSION['Status'] =$_POST['Status'];
    header("LOCATION: homepage.php");
    }
    
?>
<html>
    <head>
        <title>
            Status
        </title>
    </head>
    <body>
        
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    Status <input type="text" name="Status" value=""/><br>
    <input type ="submit" name ="sub" value ="Save"/>
    <input type ="reset"  name ="reset" value ="RESET"/>
</form>
    </body>
</html>