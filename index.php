<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>PHP Project 02</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
    <header>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <li><a href="blog.php">Find Blogs</a></li>
        </ul>
</nav>

<!--<section class="signup-form">
    <h2>Sign up</h2>
    <div class="signup">
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <button type="submit" name="submit">Sign up</button>
    </form>
    </div>
</section> -->

<section class="index-login">
    <div class="wrapper">
    <div class="index-login-signup">
    <h2>SIGN UP</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    </div>
   <div class="index-login-login">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
    </div>
   </div> 
</section>

</body>
</html>


