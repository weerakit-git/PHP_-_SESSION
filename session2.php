<?php

session_start();

echo $_SESSION['NAME'];
echo "<br>";
echo $_SESSION['ROUND'];

// ! can you unset data of session by
// session_unset();
// session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br>
<a href="session1.php">Go to page session1</a>
</body>
</html>