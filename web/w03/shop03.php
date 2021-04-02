<!DOCTYPE html>
<?php
$BOP = htmlspecialchars($_GET["cartBOP"]);
$Monstera = htmlspecialchars($_GET["cartMonstera"]);
$Pothos = htmlspecialchars($_GET["cartPothos"]);
$Fiddle = htmlspecialchars($_GET["cartFiddle"]);
$Rubber = htmlspecialchars($_GET["cartRubber"]);
$Snake = htmlspecialchars($_GET["cartSnake"]);
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
                <label for="bird_of_paradise">Quantity: <?php echo $BOP?></label>
                
            </div>
        </div>

        <div class="item">
            <p class="name">Monstera Deliciosa</p>
            <div class="quantity_container">
                <label for="monstera">Quantity: <?php echo $Monstera?></label>
                
            </div>
        </div>
        
        <div class="item">
            <p class="name">Marble Queen Pothos</p>
            <div class="quantity_container">
                <label for="marble_queen_pothos">Quantity: <?php echo $Pothos?></label>
            </div>
        </div>

        <div class="item">
            
            <p class="name">Fiddle Leaf Fig</p>
            <div class="quantity_container">
                <label for="fiddle_leaf">Quantity: <?php echo $Fiddle?></label>
           
            </div>
        </div>

        <div class="item">
            
            <p class="name">Ficus Elastica Burgundy</p>
            <div class="quantity_container">
                <label for="rubbber">Quantity: <?php echo $Rubber?></label>
               
            </div>
        </div>

        <div class="item">
            
            <p class="name">Snake Plant</p>
            <div class="quantity_container">
                <label for="snake">Quantity: <?php echo $Snake?></label>
                
            </div>
        </div>

    </div>
    <input type="submit" value="Checkout">
</form>



</body>
</html>
