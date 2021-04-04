<?php
    $stackid = $_GET['stackid'];
    $name = $_GET['name'];
   require "./dbConnect.php";
   $db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>
    <div class="logout-button"><a href='./logout.php'>Logout</a></div>
    <form method="post" action="">
            <div class="item">
                <label for="edit"><?php echo $name; ?><?php echo $stackid; ?></label>
                <input class="input" type="text" id="edit" name="edit"/>
                <input class="add-button" type="submit" value="edit" />
            </div>
        </form>
</body>
</html>