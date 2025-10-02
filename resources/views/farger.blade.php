<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Färger</title>
    <style>
        body {
            background-color:
                {{ $backColor ?? 'inherit' }}
            ;
            color:
                {{ $textColor ?? 'inherit' }}
            ;
        }
    </style>
</head>

<body>
    <h1>Välj Färger</h1>
    <form method="POST">
        Välj textfärg: <input name="textColor" value="{{ $textColor ?? '' }}"><br>
        Välj bakgrundsfärg: <input name="backColor" value="{{ $backColor ?? '' }}"><br>
        <input type="submit" value="Skicka">
        <input type="reset" value="Ångra">

    </form>
</body>

</html>