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
        <nav>
            <?php include("../controller/controller_navigation.php"); ?>
        </nav>
        
        <div id="ajax">
        <div class="col-8">

            
            <h2>Register </h2>
            
            <form id="uploadProduct" method="post" enctype="multipart/form-data" action="../controller/controller_uploadProduct.php">
                
                <label>Brand<span class="req">*</span> </label>
                <input type="text" name="brand" autocomplete="off" required/>
                
                <label>Model<span class="req">*</span> </label>
                <input type="text" name="model" autocomplete="off" required />
                
                <label>Category<span class="req">*</span> </label>
                
                <select name="category_id" class="button button-block">
                    <?php foreach ($category as $row) { ?>
                    <option value="<?php echo $row['category_id'] ?>"><?php echo $row['name'] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <br>
                <label>Description<span class="req">*</span> </label>
                <input type="text" name="description" autocomplete="off" required/>
                <label>Price<span class="req">*</span> </label>
                <input type="text" name="price" autocomplete="off" required/>
                
                <label>Select image to upload:<span class="req">*</span> </label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="button button-block" required>
            <input type="submit" value="Upload product" name="submit" class="button button-block">
            </form>
        
                    <?php if (isset($msg)) { echo($msg); } ?>
            
        </div>
    </div>
    </div>

    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>
</body>

</html>