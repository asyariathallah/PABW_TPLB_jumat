<html>

<body>
    <?php
        var_dump($_POST);
    ?>
    <hr>
    welcome <?php echo $_POST["name"]; ?><br>
    your email address is:<?php echo $_POST["email"]; ?><br>
    your initial password is: <?php echo $_POST["pwd"]; ?><br>
</body>
</html>