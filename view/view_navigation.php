<!-- Add an "active" class to the current link to let the user know which page he/she is on -->
<div class="col-3 menu">
    <ul>
        <li class="dropdown"> <a href="" class="dropbtn">Categories</a>
            <div class="dropdown-content">
                <?php
                            foreach ($category as $row) {
                            ?>
                    <a onclick="loadDocHome(<?php echo $row['category_id']; ?>)">
                        <?php echo $row['name']; ?>
                    </a>
                    <?php
                            }
                            ?>
            </div>
        </li>
        
        <li class="searchBox"><a onclick="showSearchBox();">Search</a></li>
        <li><a href="../view/view_about.php">About</a></li>
        
            <li> <a id="myAccount" onclick="toggleMyAccount();">My Account</a>
                <div class="myAccountSubmenu">
                    <?php

                            if (isset($adminSession)) {
                            ?> <a>Hello
                                        <?php 
                                        echo $adminSession;
                                        ?>
                                    </a> 
                                <a onclick="location.href='../controller/controller_uploadProduct.php'">Upload product</a>
                                <a onclick="locationController('../index.php')">View purchases</a>
                                <a onclick="logOut()">Log out</a>

                        <?php
                            } else if (isset($userSession)) {
                            ?> <a href="../controller/controller_userData.php">Hello
                                        <?php 
                                        echo $userSession;
                                        ?>
                                    </a> <a onclick="logOut()">Log out</a>
                            <?php
                            } else {
                            ?> <a href="../controller/controller_login.php">Login</a> <a href="../controller/controller_register.php">Register</a>
                                <?php
                            } 
                            ?>
                </div>
                </li>
        
        
    </ul>
</div>