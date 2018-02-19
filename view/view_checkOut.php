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
            <h2>Thank you for your purchase! <?php $user ?> We hope to see you soon.</h2>
            
        </div>
        </div>
    </div>
    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>
</body>

</html>