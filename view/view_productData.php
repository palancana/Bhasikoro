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
        <!-- Add an "active" class to the current link to let the user know which page he/she is on -->
            <!-- Add an "active" class to the current link to let the user know which page he/she is on -->
        <nav>
            <?php include("../controller/controller_navigation.php"); ?>
        </nav>
        
        <div id="ajax">
        <div class="col-8">

            <h2> Edit <?php echo $productData['model']; ?>, from <?php echo $productData['brand']; ?> </h2>
            
            <form id="updateProduct" method="post" enctype="multipart/form-data" action="../controller/controller_productData.php">
                
                <label>Brand<span class="req">*</span> </label>
                <input type="text" name="brand" value="<?php echo $productData['brand']; ?>" required/>
                
                <label>Model<span class="req">*</span> </label>
                <input type="text" name="model" value="<?php echo $productData['model']; ?>" required />
                
                <label>Category<span class="req">*</span> </label>
                <select name="category_id" class="button button-block">
                    
                    <?php foreach ($categoryUpload as $row) { 
                    ?>
                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                        }
                    ?>
                </select>
                <br>
                <label>Description<span class="req">*</span> </label>
                <input type="text" name="description" value="<?php echo $productData['description']; ?>" required/>
                <label>Price<span class="req">*</span> </label>
                <input type="text" name="price" value="<?php echo $productData['price']; ?>" required/>
                
                <label>Select image to upload:<span class="req">*</span> </label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="button button-block" required> 
                
                <input type="button" name="cancel" value="Cancel" onclick="location.href='../index.php'" class="button button-block"> 
                <input type="submit" value="Update product" name="update" class="button button-block">
                
            </form>
            
            
        </div>
    </div>
    </div>

    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>

</body>

</html>