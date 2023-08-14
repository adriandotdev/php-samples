<?php

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);


    if (strtolower($name) == "adrian" && $age == 22) {
        setcookie('name', $name, time() + 3600 * 24 * 60);
        echo "CREDENTIALS MATCHED!";
    }
    echo $name;
}
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&course=CS">Click</a>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>