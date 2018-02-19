<!-- Add an "active" class to the current link to let the user know which page he/she is on -->
<div class="col-9 right ProductTable">
        <?php
                foreach ($product as $row) {
                ?> <a href="../controller/controller_product.php?product_id=<?php echo $row[ 'product_id'] ?>">
                    <div class="col-2 productSingle">
                        <img alt="Product Image" src="../img/Product/<?php echo $row['image'] ?>" />
                        <h2><?php echo $row['model'] ?>, <?php echo $row['brand'] ?> </h2> 
                        <div class="price">
                            <p> <?php echo $row['price'] ?>€ </p>
                        </div>
                        </a>
                        
                        <?php if($admin) { ?>
                        <div class="updateOrDelete">
                            <form action="../controller/controller_category.php" method="post">
                                <input type="hidden" name="category_id" value="<?php echo $row['category_id']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                
                                <input type="submit" value="Update" name="updateProduct" class="button button-block">
                                <input type="submit" value="Delete" name="deleteProduct" class="button button-block">
                            </form>

                        </div>
                        <?php } ?>
                    </div>
        <?php
                }
                ?>
</div>
