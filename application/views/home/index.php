<?php
    include 'header.php';
?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url();?>assets/images/icon/testindo_logo.png" alt="Testindo">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url(); ?>home/login" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p style="color: red;">
                                    <?php 
                                        if (isset($_POST['submit'])) {
                                            echo $salah; 
                                        }else{}
                                        

                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    include 'footer.php';
?>