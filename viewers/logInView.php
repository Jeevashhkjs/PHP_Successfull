<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <form action="/logIn" method="post">
            <label>UserName</label>
            <input type="text" name="userName" class="userName" />
            <label>Password</label>
            <input type="text" name="password" class="password" />
            <button>Submit</button>
            <a href="/registerPage">Have no accout Create account</a>
        </form>
    </div>
</body>
</html>