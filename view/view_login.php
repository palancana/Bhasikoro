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
            <h2>Login</h2>
            <form action="../controller/controller_login.php" method="post">
                <label>Username</label>
                <input name="username" placeholder="username" type="text" required autocomplete="off" pattern="\S+" title="User name can not contain spaces" />
                <label>Password</label>
                <input name="password" type="password"  placeholder="*********"/>
                <input name ="submit" type="submit" value="Enter" class="button button-block">
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