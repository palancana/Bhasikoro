<!DOCTYPE html>
<html>
    <!-- -->
    <head>
        <title>Bhasikoro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../resources/style.css">
        <script src="../resources/scripts.js"></script>
        <script src="../resources/jquery-3.1.1.js"></script>

    </head>
    
<body>  
    
<header>
    <?php include("../controller/controller_header.php"); ?>
    </div>
</header>
    


    
        <div class="row">
            
        <nav>
            <?php include("../controller/controller_navigation.php"); ?>
        </nav>
        <div id="ajax">
        <div class="col-8">


            <!-- Add an "active" class to the current link to let the user know which page he/she is on -->
            <div class= "ProductTable">

                
            <?php 
                if (!isset($products)) {
            ?>      <h2>Your shopping cart is empty. </h2>
            <?php
                } else { ?>
                
                <?php
                foreach ($products as $row) {
                ?>
                <a href="../controller/controller_product.php?product_id=<?php echo $row['product_id'] ?>"></a>
                    <div class="productSingleCart">
                        <img alt="image" src="../img/Product/<?php echo $row['image'] ?>" />
                        <h2><?php echo $row['model'] ?>, <?php echo $row['brand'] ?> </h2> 
                        <div>
                            <h2>, <?php echo $row['price'] ?>€ </h2>
                        </div>
                    </div>
                
                
                <?php
                    
                }
                ?>
    
                <div id="checkOut">
                

                <button id="checkOutButton" type="button" class="button button-block" onclick="location.href='../controller/controller_checkOut.php'">Check Out</button>

                
                <div id="checkOutPrice">
                    <h1>Total: <?php echo $totalPrice ?>€</h1> 
                </div>
                    </div>
                <?php
                    }
                ?>

            </div>
            </div>
            </div>
        </div>
    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>
    </body>
</html>