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
    <div class="title">
        <h1>Edit name for <?php echo $name; ?> stack</h1>
    </div>
    <form method="post" action="">
            <div class="item">
                <input class="input" type="text" id="edit" name="edit"/>
                <input class="add-button" type="submit" value="edit" />
            </div>
        </form>
</body>
</html>