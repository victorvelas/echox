<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escaped - data</title>
</head>
<body>
    <form>
        <label for="foo">Enter some Html tags in the next input:</label>
        <input type="text" id="foo" name="foo" value="<?= self::esc($_GET['foo'] ?? '') ?>" />
        <input type="submit" value="Send form">
        <hr>
        <div>
            <b>Escaped data:</b><br>
            <?= self::esc($_GET['foo'] ?? '') ?>
        </div>
        <br><br>
        <div>
            <b>Unescaped data:</b><br>
            <?= self::noEsc($_GET['foo'] ?? '') ?>
        </div>
    </form>
</body>
</html>