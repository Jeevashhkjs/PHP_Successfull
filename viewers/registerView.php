<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Your Love</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <form action="/register" method="post">
            <?php if(isset($_SESSION['user_already_exists'])): ?>
            <h2><?php echo $_SESSION['user_already_exists'] ?> </h2>
            <?php endif; ?>
            <label>Name</label>
            <input type="text" name="fname" class="fname" id="fname" />
            <label>Last Name</label>
            <input type="text" name="lname" class="fname" id="fname" />
            <label>Email</label>
            <input type="text" name="mail" class="fname" id="fname" />
            <label>UserName</label>
            <input type="text" name="userName" class="fname" id="fname" />
            <label>Password</label>
            <input type="text" name="password" class="fname" id="fname" />
            <button name="submit">Submit</button>
            <a href="/logInPage">Have Account Log In</a>
        </form>
    </div>
</body>
</html>