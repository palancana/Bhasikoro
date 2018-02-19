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
            <form action="../controller/controller_register.php" method="post">
                
                <label> User<span class="req">*</span> </label>
                <input type="text" name="username" autocomplete="off" required pattern="\S+" title="User name can not contain spaces" />
                
                <label> Name<span class="req">*</span> </label>
                <input type="text" name="name" autocomplete="off" required pattern="[a-zA-Z-\s]+" />
                <label> Set a password<span class="req">*</span> </label>
                <input type="password" name="password" required autocomplete="off" />
                <label> Email address<span class="req">*</span> </label>
                <input type="email" name="email" required autocomplete="off" />
                <label> Telephone<span class="req">*</span> </label>
                <input type="text" name="phone" autocomplete="off" required pattern="[0-9]{9}" />
                <label> Address<span class="req">*</span> </label>
                <input type="text" name="address" autocomplete="off" required pattern="[a-zA-Z0-9\s]{1,30}" />
                <label> City<span class="req">*</span> </label>
                <input type="text" name="city" autocomplete="off" required pattern="[a-zA-Z0-9\s]{1,30}" />
                <label> Postal code<span class="req">*</span> </label>
                <input type="text" name="postalcode" autocomplete="off" required pattern="[0-9]{5}" />
                <label> Bank card<span class="req">*</span> </label>
                <input type="text" name="card" autocomplete="off" required pattern="[0-9]{16}" />
                
                <input type="submit" name="submit" value="Register" class="button button-block">
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