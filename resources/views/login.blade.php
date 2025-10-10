<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {}

        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bolder;

        }

        input {
            background-color: aqua;

        }

        .err {
            background-color: pink;
            color: darkred;
            font-weight: bold;
            font-size: 20px;
            width: 15%;
            text-align: center;

        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <label>
            Epost:
            <input type="email" name="epost" placeholder="Ange epost" required>
        </label>
        <label>
            Lösenord:
            <input type="password" name="losenord" placeholder="Ange lösenord" required>
        </label>
        <p class="err">{{ $message ?? '' }}</p>
        <input type="submit" value="Logga in">
    </form>
</body>

</html>