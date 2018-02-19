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

            <h2> Edit your profile, <?php echo $userData['name']; ?> </h2>
            
            <form action="../controller/controller_userData.php" name="submit" method="post">
                                
                <input class="hideField" type="text" name="username" placeholder="<?php echo $userData['name'] ?>" required pattern="[a-zA-Z-\s]+" value="<?php echo $userData['username']; ?>" />
                
                <label> Name <span class="req">*</span> </label>
                <input type="text" name="name" placeholder="<?php echo $userData['name'] ?>" required pattern="[a-zA-Z-\s]+" />
                <label> Password <span class="req">*</span> </label>
                <input type="password" name="password" placeholder="******" />
                <label> Email address <span class="req">*</span> </label>
                <input type="email" name="email" placeholder="<?php echo $userData['email'] ?>" />
                <label> Telephone <span class="req">*</span> </label>
                <input type="text" name="phone" placeholder="<?php echo $userData['phone'] ?>" required pattern="[0-9]{9}" />
                <label> Adress <span class="req">*</span> </label>
                <input type="text" name="address" placeholder="<?php echo $userData['address'] ?>" required pattern="[A-Za-z0-9\s]{1,30}" />
                <label> City <span class="req">*</span> </label>
                <input type="text" name="city" placeholder="<?php echo $userData['city'] ?>" required pattern="[A-Za-z0-9\s]{1,30}" />
                <label> Postal code <span class="req">*</span> </label>
                <input type="text" name="postalcode" placeholder="<?php echo $userData['postalcode'] ?>" required pattern="[0-9]{5}" />
                <label> Bank card <span class="req">*</span> </label>
                <input type="text" name="card" placeholder="<?php echo $userData['card'] ?>" required pattern="[0-9]{16}" />
                
                <input type="button" name="cancel" value="Cancel" class="button button-block">
                <input type="submit" name="submit" value="Update" class="button button-block">
            </form>
            
            
        </div>
    </div>
    </div>

    <footer>
        <?php include("../controller/controller_footer.php"); ?>
    </footer>

</body>

</html>