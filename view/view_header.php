<div class="header"> 
    
    <a id="headerTitle" href="../index.php" target="_self"><h1>Bhasikoro</h1></a>
    
    
    <div class="cartImage">
    <a href="../controller/controller_shoppingCart.php"> 
        <img id="cartIcon" src="../img/shopping-cart.png" alt="Shoping-cart"> </a>
    
    
    <?php 
    if(isset($cartCounter) && ($cartCounter != 0)) {
        ?>
    
    <div class="cartNumber"><?php echo $cartCounter; } ?> 
        </div>
    </div>




