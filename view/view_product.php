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
        </header>
        
        <div class="row">
        <nav>
            <?php include("../controller/controller_navigation.php"); ?>
        </nav>

        <div id="ajax">
            <div class="col-8">
            
            
            <?php
                foreach ($product as $row) {
            ?>
                      
            <img src="../img/Product/<?php echo $row['image'] ?>" alt="Product image"/>
                      
                <h2><?php echo $row['model'] ?>, <?php echo $row['brand'] ?> </h2>
                    <div class="description">
                        <p> <?php echo $row['description'] ?> </p>
                    </div>
                    <div class="price">
                        <p> <?php echo $row['price'] ?>€ </p>
                    </div>
            <?php
                }
            ?>
                
            <?php 
                if (isset($user)) {
            ?>   
                
                
                <form id="addToCard" action="../controller/controller_product.php?product_id=<?php echo $row['product_id']; ?>" method="post" name="addToCart">
                    
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"></input>
                <input type="hidden" name="model" value="<?php echo $row['model']; ?>"></input>
                <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>"></input>
                <input type="hidden" name="price" value="<?php echo $row['price']; ?>"></input>
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>"></input>

                <input id="addButton" type="submit" value="Add to cart" class="button button-block"></input>
                </form>
            <?php
            } else {
                    
            ?>    
                <button id="addButton" class="button button-block" onclick="locationController('../controller/controller_login.php')" > Add to cart</button>
                
            <?php
                }
            ?>
            
            
            </div>
        </div>
        </div>
        

    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>

    </body>
</html>