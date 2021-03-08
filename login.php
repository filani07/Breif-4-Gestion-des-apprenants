<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== BOX ICONS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="sass/login.css" />

    <title>Academy Code - login</title>
</head>

<body id="body-pd">

    <?php# include('header.php'); ?>

    <!-- start login -->


    <div class="login-bg-display">
    <a href="index.php"><img src="img/logo/logo1.png" alt=""></a>
    </div>
    <div class="login-bg">
        <img src="img/background/loginbackground.png" alt="">
    </div>

    <section class="form-container">

    <div class="space">

    </div>
    <div  class="logo-form" >
        <div class="logo">
       <a href="index.php"><img src="img/logo/logo1.png" alt=""></a> 
    </div>
        <div class="login-form">
            <form action="">
                <h2>Login</h2>
                <hr>
                <label for="user">Username</label>
                <input class="" name="user" placeholder="Username" type="text" />

                <label for="pass">Password</label>
                <input class="" name="pass" placeholder="Password" type="password" />

                <input name="submit" type="submit" value="login" />
            </form>
        </div>
    </div>

    </section>

    <!-- end login -->

    <?php# include('footer.php'); ?>
    <!--===== MAIN JS =====-->
    <script src="js/main.js"></script>
</body>

</html>