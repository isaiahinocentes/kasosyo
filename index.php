<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>

        </title>
    </head>
    <body>

        <nav>
            <?php
                if(!isset($_SESSION["user_id"])){
                ?>
                    <ul style="display: inline">
                        <form action="./views/login.php">
                            <li>
                                    <input type="text" name="uname"/>
                            </li>
                            <li>
                                    <input type="password" name="pass">
                            </li>
                            <li>
                                    <button type="submit">Login</button>
                            </li>
                        </form>
                        <li>
                            <form action="./views/register.php">
                                <button type="submit">Register</button>
                            </form>
                        </li>
                    </ul>
                <?php
                } else {
                    echo "Welcome, ".$_SESSION["user_id"]."!";
                }
            ?>
        </nav>
        <form action="views/search.php" style="padding-top: 17px; padding-bottom: 15px;">
            <input type="text" name="key" class="form-control" style="border-radius: 0;" placeholder="What are you looking for?"/>
            <br/>
            <button type="submit" name="submit">Search</button>
            <button type="submit" name="browse">Lucky Me</button>
        </form>
    </body>
</html>