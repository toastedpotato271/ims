<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GRP3. - Incident Management Systems</title>

    <!-- File Links -->
	<link rel="icon" href="src/img/favicon/favicon-32x32.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Fira+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="src/css/Login/login.css">

</head>
<body>
    <div class="logo">Help Center</div>
    
    <img src="src/img/login-background-image.jpg" alt="Background Image" class="background-image">

    <div class="form-container">
        <form action="" method="">
            <h3> Help Center </h3>
            <h2> Enter your Information to register </h2>
            <input type="text" name="first name" required placeholder="First Name">
            <input type="text" name="last name" required placeholder="Last Name">
            <input type="email" name="email" required placeholder="Email Address">
            <input type="passsword" name="password" required placeholder="Password">
            <select name="user_type">
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>
            <!-- Insert register system -->
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p> Already have an account? <a href="login.php"> Login now </a></p>
        </form>
    </div>
</body>
</html>