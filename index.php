<!DOCTYPE html>
<html lang="en">
<head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Document</title>
</head>
<body>

                    <!--Form for $_REQUEST -->
        <!-- <form action= "<?php echo $_SERVER["PHP_SELF"]; ?>"  method="post">
                    Name : <input type="text" name="firstname">
                    <input type="submit">
        </form> -->




                    <!--Form for $_GET -->
        <!-- <form action="test_get.php" method="get">
                Name : <input type="text" name="name">
                <br>
                Email : <input type="text" name="email">
                <br>
                <input type="submit">

        </form> -->





                         <!--Form for $_POST -->
                <!-- <form action="test_post.php" method="post">
                Name : <input type="text" name="name">
                <br>
                Email : <input type="text" name="email">
                <br>
                <input type="submit"> -->


               <?php

                //! How to use $_REQUEST
                /* 

                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_REQUEST['firstname'];
                    if (empty($name)) {
                        echo "Name is empty";
                    }else {
                        echo $name;
                    }
               }
                
                */

            
       

               //! How to use $GLOBALS
               /*
               
                $x = 10;
                $y = 5;

                function addition() {
                   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                    
                }

                addition();
               
                echo "<h3>this is global variabal</h3> $z";
                */



                //! How to use $_SERVER
                /*
                echo $_SERVER['PHP_SELF'];
                echo "<br>";
                echo $_SERVER['SERVER_NAME'];
                echo "<br>";
                echo $_SERVER['HTTP_HOST'];
                echo "<br>";
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>";
                echo $_SERVER['SCRIPT_NAME'];
                echo "<br>";
                */


               












               ?>
</body>
</html>