<?php
    require "./dbConnect.php";
    $db = get_db();

    if(isset($_POST['logout'])) {
            echo "HELLO";
    }
  
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./logout.css">
</head>
<body>

    <div class="section">
        <form method="post" action="" >
            <input class="logout-button" type="submit" name="logout" id="logout" value="Logout"/>
        </form>
    </div>


</body>
</html>