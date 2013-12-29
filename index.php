<!DOCTYPE html>
    
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/Structure.css"   />
        
        <script src="jquery.js"></script>
        <title>
            Sam Boles
        </title>
        
    </head>
    <body>
        <?php
            //require_once "dbcon.php";
            //ob_start();
            $register = "<li onclick=\"loadReg()\">Register</li>";
            $login = "<li onclick=\"loadLogin()\">Login</li>";
            $reserve = "<li onclick=\"loadRes()\">Reserved</li>";
            $logout = "<li onclick=\"logout()\">Logout</li>";
        ?>
        <script>
            function loadAbout()
            {
                $(".window").load("Register.php");
            }
            function loadHome()
            {
                $(".window").load("Home.php");
            }
            function loadContact()
            {
                $(".window").load("Contact.php");
            }
        </script>
        <div class="head">
            Boghall Surgery
        </div>
        
        <div class="menu">
            <ul class="men">
                <li onclick="loadHome()">Home</li>
                <li onclick="loadContact()">Contact</li>
                <li onclick="loadAbout()">About</li>
            </ul>
        </div>
        
        <div class="window">
            <?php include('Home.php');?>
        </div>
        
        <img class="logo" src="img/icon.jpg"/>
        
    </body>
</html>