<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form get</title>
</head>
<body>
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name" placeholder="name">
            <br>
            Email: <input type="email" name="email" placeholder="Email"><br>
            Date of birth: <input type="date_of_birth" name="date_of_birth"><br>
            Gender: <input type="gender" name="gender"><br>
            Country: <input type="country" name="country"><br>
            <button>submit</button>
        </label>
    </form>
</body>
</html>