<?php
   require "./dbConnect.php";
   $db = get_db();
   $stackid = $_GET['stackid'];
   $name = $_GET['name'];
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
                <label for="edit">Edit</label>
                <input class="input" type="text" id="edit" name="edit" value="<?php echo $name; ?>"/>
                <input class="add-button" type="submit" value="edit" />
            </div>
        </form>
</body>
</html>