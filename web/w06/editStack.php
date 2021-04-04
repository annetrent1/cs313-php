<?php
    $stackid = $_GET['stackid'];
    $name = $_GET['name'];
    require "./dbConnect.php";
    $db = get_db();

    if(isset($_POST['submit'])) {
        $name = $_POST['edit'];
        $id = $_POST['stackid'];
        if ($name != "" && $id != ""){
            $query = $db->prepare("UPDATE public.stack SET name=:name
            WHERE stackid=:stackid;");
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':stackid', $id, PDO::PARAM_INT);
            // $query->execute();
            // $location = "./notecards.php?stackid=$id";
            // header("Location: $location");
            // die();
        }
    }
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
                <input type="hidden" name="stackid" value="<?php echo $stackid?>" />
                <input class="input" type="text" id="edit" name="edit"/>
                <input class="add-button" type="submit" value="edit" />
            </div>
        </form>
</body>
</html>