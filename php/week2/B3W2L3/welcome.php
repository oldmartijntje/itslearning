<!DOCTYPE html>
<html>
<body>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <?php
        echo '<h1>De ingevulde gegevens zijn:</h1>';
        echo 'Naam: ' . htmlspecialchars($_POST['name']);
        echo nl2br("\r\nEmailadres: " . htmlspecialchars($_POST['email']));
        ?>
    <?php } else { ?>
        <form method="post" action="">
        <label for="fname">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="lname">Mail:</label><br>
        <input type="email" id="email" name="email">
        <input type="submit">
    </form>
    <?php } ?>
    
    </body>
</html>
