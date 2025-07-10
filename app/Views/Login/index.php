<!DOCTYPE html>
<html>
    <head>
    <script>
        window.onload = function() {
            <?php if (session()->getFlashdata('error')) : ?>
                alert('<?php echo session()->getFlashdata('error'); ?>');
            <?php endif; ?>
        }
    </script>
        <link rel="stylesheet" href="/main/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>LOGIN-SHOFIX</title>
        </head>
<body> 
    <img src="/logo/logo3.png" class="logo">
<div class="wrapper">
<form action="<?php base_url('login/authenticate') ?>" method="post">
<h1 class="signin">Sign in</h1>
<div class="input-box">
    <input class="field" type="text" id = "username" name = "username" placeholder="Username" required>
    <i class='bx bxs-user'></i>
    </div>
<div class="input-box">
    <input class="field" type = "password" id = "password" name = "password" placeholder="Password" required>
    <i class='bx bxs-lock-alt' ></i>
</div>
<div class="doyou">
    <p class="dotyou1">Don't have an account?<a href="/signup" class="createhref">Create account</a></p>
    <p class="doyou2">Login as an admin?<a href="/admin/login" class="resethref">Letsgo</a></p>
</div>
<div class="rem">
    <label class="remme"><input type="checkbox"  id="chck" > Remember me</label>
</div>
<div class="loginbtn"><input class="login" type="submit"></input></div>
</form>

</div>
</body>
</html>




