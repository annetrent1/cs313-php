<?php
    $stackid = $_GET['stackid'];
    $front = $_GET['descriptionfront'];
    $notecardid = $_GET['notecardid'];

    require "./dbConnect.php";
    $db = get_db();

    if ($front != "") {
        foreach ($db->query("SELECT descriptionfront, descriptionback FROM public.notecard 
        WHERE notecardid='$notecardid';") as $row)
        {
            $back = $row['descriptionback'];
        }
    }

    if(isset($_POST['submit'])) {
        $front = $_POST['front'];
        $back = $_POST['back'];
        $id = $_POST['stackid'];
        $notecardid = $_POST['notecardid'];
        if ($front != "" && $back != ""){
            $query = $db->prepare("UPDATE public.notecard SET descriptionfront=:front, descriptionback=:back
            WHERE notcardid=:notecardid;");
            $query->bindValue(':notecardid', $notecardid, PDO::PARAM_INT);
            $query->bindValue(':front', $front, PDO::PARAM_STR);
            $query->bindValue(':back', $back, PDO::PARAM_STR);
            $query->execute();
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
        <h1>Edit Notecard</h1>
    </div>

    <div class="section">
        <form method="post" action="" >
            <div class="input-container">
                <div class="input-section">
                    <input type="hidden" name="stackid" value="<?php echo $stackid ?>"/>
                    <input type="hidden" name="stackid" value="<?php echo $notecardid ?>"/>
                    <label for="front">Front</label>
                    <input class="input" type="text" name="front" value="<?php echo $front ?>"/>
                </div>
                <div class="input-section">
                    <label for="back">Back</label>
                    <input class="input" type="text" name="back" value="<?php echo $back ?>"/>
                </div>
                <div class="button-section">
                    <input class="add-button" type="submit" name="submit" id="submit" value="Submit"/>
                </div>
            </div>
        </form>
    </div>


</body>
</html>