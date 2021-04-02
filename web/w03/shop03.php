<!DOCTYPE html>
<?php
$name = htmlspecialchars($_GET["cartBOP"]);
$email = htmlspecialchars($_GET["cartMonstera"]);
$major = htmlspecialchars($_GET["cartPothos"]);
$comments = htmlspecialchars($_GET["cartFiddle"]);
$comments = htmlspecialchars($_GET["cartRubber"]);
$comments = htmlspecialchars($_GET["cartSnake"]);
?>
<html>
    <head>
        <link rel="stylesheet" href="./shop03.css">
    </head>
<body> 

<h1>Plant Shop</h1>
    <div class="items_container">
        <div class="item">
            <p class="name">Bird of paradise</p>
            <div class="quantity_container">
                <label for="bird_of_paradise">Quantity: <?php echo $cartBOP?></label>
                
            </div>
        </div>

        <div class="item">
            <p class="name">Monstera Deliciosa</p>
            <div class="quantity_container">
                <label for="monstera">Quantity: <?php echo $cartMonstera?></label>
                
            </div>
        </div>
        
        <div class="item">
            <p class="name">Marble Queen Pothos</p>
            <div class="quantity_container">
                <label for="marble_queen_pothos">Quantity: <?php echo $cartPothos?></label>
            </div>
        </div>

        <div class="item">
            
            <p class="name">Fiddle Leaf Fig</p>
            <div class="quantity_container">
                <label for="fiddle_leaf">Quantity: <?php echo $cacartFiddlertBOP?></label>
           
            </div>
        </div>

        <div class="item">
            
            <p class="name">Ficus Elastica Burgundy</p>
            <div class="quantity_container">
                <label for="rubbber">Quantity: <?php echo $cartRubber?></label>
               
            </div>
        </div>

        <div class="item">
            
            <p class="name">Snake Plant</p>
            <div class="quantity_container">
                <label for="snake">Quantity: <?php echo $cartSnake?></label>
                
            </div>
        </div>

    </div>
    <input type="submit" value="Checkout">
</form>



</body>
</html>
