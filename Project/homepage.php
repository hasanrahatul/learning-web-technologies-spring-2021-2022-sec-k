<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#50C878 ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="site_logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="dashboard.php"> Dashboard  |</a></td>
                    <td><a href="homepage.php"> Home  |</a></td>
                    <td><a href="messenger.php"> Messages |</a></td>
                    
                    <td><a href="#"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="#50C878" valign="top" align="center">
           <img src="DP.jpg" width="180px" height="200px"><br>
           <h2>Md. Rahatul Hasan Rahat </h2><br>
           <p>Studies Bsc. in CSE at AIUB</p>
           <p>Lives in Dhaka, Bangladesh</p>
           <p>Followed by 1,214 people</p>
           <a href="#">Edit Profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Homepage</h1><hr>
            <table  align="center" width="500px" >
                
            </table>
            <form method="" action="">
        <fieldset>
        <legend>What's on your mind?</legend>
            
            Status Update <input type="text" name="myname" value="<?php if(isset($_SESSION['Name'])) { echo $_SESSION['Status']; } ?> " readonly/><a href = "status.php" > Update</a><br>
            Photo <input type="file" name="myimage" value="<?php if(isset($_SESSION['Photo'])) { echo   $_SESSION['Photo']; } ?> " readonly/><a href = "PHOTO.php" >Update</a><br>
        <input type ="submit" name ="sub" value ="Post"/></td><br>

        </fieldset> 
        
        

    </form>


        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           copyright @2022
        </td>
    </tr>
</table>


</html>