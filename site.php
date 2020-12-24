<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my php test</title>
</head>
<body>
    <form action="site.php" method="get">
        <label for="input1">First Number</label>
        <input type="number" id="input1" name="num1" required="required">
        <br />
        <label for="input2">Second Number</label>
        <input type="number" id="input2" name="num2" required="required">
        <br />
        <input type="submit">
    </form>
    <hr />

    Answer: <?php echo $_GET["num1"] + $_GET["num2"];?>
</body>
</html>