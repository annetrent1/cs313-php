<?php
    // $stackid = $_POST['stackid'];
    $stackid = 1;
    require "./dbConnect.php";
    $db = get_db();

    if(isset($_POST['submit'])) {
        $front = $_POST['front'];
        $back = $_POST['back'];
        if ($front != "" && $back != ""){
            $query = $db->prepare("INSERT INTO public.notecard (stackid, descriptionfront, descriptionback)
            VALUES ( ( SELECT stackid FROM public.stack 
            WHERE stackid=:stackid), 
            :front, :back);");
            $query->bindValue(':stackid', $stackid, PDO::PARAM_INT);
            $query->bindValue(':front', $front, PDO::PARAM_STR);
            $query->bindValue(':back', $back, PDO::PARAM_STR);
            $query->execute();
            $location = "./notecards.php?stackid=$stackid";
            header("Location: $location");
            die();
        }
    }
    
  
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Create New Notecard</h1>
    </div>

    <div class="section">
        <form method="post" action="" >
            <div class="input-container">
                <div class="input-section">
                    <label for="front">Front</label>
                    <input class="input" type="text" id="front" name="front"/>
                </div>
                <div class="input-section">
                    <label for="back">Back</label>
                    <input class="input" type="text" id="back" name="back"/>
                </div>
                <div class="button-section">
                    <input class="add-button" type="submit" value="Submit"/>
                </div>
            </div>
        </form>
    </div>


</body>
</html>