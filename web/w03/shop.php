<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./shop03.css">
    </head>
<body> 


<h1>Plant Shop</h1>

<form action="./shop03.php">
    <div class="items_container">
        <div class="item">
            <img 
                src="../images/bird_of_paradise.jpg" 
                alt="Bird of Paradise plant"
            >
            <p class="name">Bird of paradise</p>
            <div class="quantity_container">
                <label for="bird_of_paradise">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="bird_of_paradise"
                    name="cartBOP"
                >
            </div>
        </div>

        <div class="item">
            <img 
                src="../images/monstera.jpg" 
                alt="Monstera Deliciosa plant"
            >
            <p class="name">Monstera Deliciosa</p>
            <div class="quantity_container">
                <label for="monstera">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="monstera"
                    name="cartMonstera"
                >
            </div>
        </div>
        
        <div class="item">
            <img 
                src="../images/marble_queen_pothos.jpg" 
                alt="Marble Queen Pothos plant"
            >
            <p class="name">Marble Queen Pothos</p>
            <div class="quantity_container">
                <label for="marble_queen_pothos">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="marble_queen_pothos"
                    name="cartPothos"
                >
            </div>
        </div>

        <div class="item">
            <img 
                src="../images/fiddle_leaf.jpg" 
                alt="Fiddle Leaf Fig Tree"
            >
            <p class="name">Fiddle Leaf Fig</p>
            <div class="quantity_container">
                <label for="fiddle_leaf">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="fiddle_leaf"
                    name="cartFiddle"
                >
            </div>
        </div>

        <div class="item">
            <img 
                src="../images/rubbber.jpg" 
                alt="Ficus Elastica Burgundy tree"
            >
            <p class="name">Ficus Elastica Burgundy</p>
            <div class="quantity_container">
                <label for="rubbber">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="rubbber"
                    name="cartRubber"
                >
            </div>
        </div>

        <div class="item">
            <img 
                src="../images/snake.png" 
                alt="Snake plant"
            >
            <p class="name">Snake Plant</p>
            <div class="quantity_container">
                <label for="snake">Quantity: </label>
                <input 
                    type="number" 
                    value="0" 
                    min="0" 
                    max="6" 
                    id="snake"
                    name="cartSnake"
                >
            </div>
        </div>
        <?php
        // Set session variables
        $cartBOP = $_SESSION["cartBOP"];

         $_SESSION["cartBOP"] = $cartBOP;
        ?>

    </div>
    <input type="submit" value="Add to Cart">
</form>



</body>
</html>
