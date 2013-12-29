<!DOCTYPE html>
    
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/Structure.css"   />
        
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
<<<<<<< HEAD
        <script
                $(document).ready(firstLoad());
                function firstLoad()
                {
                    
                }
        </script>
        
=======
>>>>>>> 1bbe7031d9ec8e757f9fe615d4a02ec7f795adb3
        <title>
            Sam Boles
        </title>
        
    </head>
    <body>
        
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
            Sam Boles
        </div>
        
        <div class="menu">
            <ul class="men">
                <li onclick="loadHome()">Home</li>
                <li onclick="loadContact()">Contact</li>
                <li onclick="loadAbout()">About</li>
            </ul>
        </div>
        
        <div class="window">
        </div>
        
        <img class="logo" src="img/icon.jpg"/>
        
    </body>
</html>
