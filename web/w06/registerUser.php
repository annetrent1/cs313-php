<?php
    require "./dbConnect.php";
    $db = get_db();

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($firstname != "" && $lastname != "" && $email != "" && $password != ""){
            $query = $db->prepare("INSERT INTO public.user (firstname, lastname, email, password)
            VALUES (:firstname, :lastname, :email, :password);");
            $query->bindValue(':firstname', $firstname, PDO::PARAM_INT);
            $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':password', $password, PDO::PARAM_STR);
            $query->execute();
        //     $location = "./notecards.php?stackid=$id";
        //     header("Location: $location");
        //     die();
    } if (isset($_POST['cancel'])) {
        header("Location: ./login.php");
    }
    
  
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Register New User</h1>
    </div>

    <div class="section">
        <form method="post" action="" >
            <div class="input-container">
                <div class="input-section">
                    <label for="firstname">First Name: </label>
                    <input class="input" type="text" id="firstname" name="firstname"/>
                </div>
                <div class="input-section">
                    <label for="lastname">Last Name: </label>
                    <input class="input" type="text" id="lastname" name="lastname"/>
                </div>
                <div class="input-section">
                    <label for="email">Email: </label>
                    <input class="input" type="text" id="email" name="email"/>
                </div>
                <div class="input-section">
                    <label for="password">Password: </label>
                    <input class="input" type="text" id="password" name="password"/>
                </div>
                <div class="button-section">
                    <input class="add-button" type="submit" name="submit" id="submit" value="Submit"/>
                    <input class="add-button" type="submit" name="cancel" id="cancel" value="Cancel"/>
                </div>
            </div>
        </form>
    </div>


</body>
</html>