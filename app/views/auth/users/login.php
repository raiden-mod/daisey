<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $data['title']; ?></title>
    <meta name="description" content="<?= $data['description']; ?>">
    <meta name="keywords" content="<?= $data['keywords']; ?>">
    <link rel="shortcut icon" href="../images/daisey.jpg" type="icon">
    <link rel="stylesheet" href="../vendors/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="../resources/css/font.css">
    <link rel="stylesheet" href="../resources/css/app.css">
</head>

<body>
    <div class='cht-pan-hdr jul'>
        <div class='cht-pan-ctrl' style="display: flex;">
            <div onclick="history.back()">
                <i class='fa fa-angle-left jpac' style='font-size:25px'></i>
            </div>
            <span><i class='fa fa-shield-alt jpac'></i></span>
        </div>
    </div>
    <form id="login" action="../users/login" method="POST">
        <div class="login-box">
            <h3 style="font-size:25px;color:hsl(240, 22%, 25%);text-align:center;padding: 5px 0;font-weight: 700;">SIGN IN</h3>
            <div style="border-bottom: 1px solid black; padding: 10px">
                <div class="rate-error" align='center'>
                    <!-- message will be here -->
                </div>
                <div style='display:flex' align='center'>
                    <div class="input-field <?php if ($data['useremailError']) : ?>wrong<?php endif; ?>">
                        <input type="email" id="email1" name="useremail" class='input' placeholder="" value="<?= $data['useremail']; ?>" required>
                        <i class="icon fa <?php if ($data['useremailError']) : ?>fa-exclamation<?php endif; ?>"></i>
                        <label class="input-label" for="useremail">Email</label>
                    </div>
                </div>
                <span class="error"><?= $data['useremailError'];  ?></span>
                <div style='display:flex;margin-top: 10px;' align='center'>
                    <div class="input-field <?php if ($data['passwordError']) : ?>wrong<?php endif; ?>">
                        <input type="password" class='input pass' name="password" placeholder="" required>
                        <i class="icon fa"></i>
                        <label class="input-label" for="password">Password</label>
                    </div>
                </div>
                <span class="error"><?php echo $data['passwordError'];  ?></span>
                <div style="display: flex;width: 100%;">
                    <div class="group">
                        <input type="checkbox" class="check-box" name="remember" id="remember" />
                        <label for="remember" style="font-size: 13px">Remember Me</label>
                    </div>
                    <a href="../users/forgetpassword">
                        <span class='forget-pass'>
                            forgot password?
                        </span>
                    </a>
                </div>
                <button type="submit" class="submit-btn">Sign In</button>
            </div>
            <div style="margin-top: 10px">
                <p style="font-size: 13px; text-align: center">
                    You can also sign in via your social media.
                </p>
                <div style="display: flex">
                    <div style="background-color: blue" class="alt-sign-in">
                        <i class="fab fa-facebook-f"></i>
                        <p style="margin: 0 0 0 10px">Facebook</p>
                    </div>
                    <div class="alt-sign-in" style="background-color: red">
                        <i class="fab fa-google"></i>
                        <p style="margin: 0 0 0 5px">- Mail</p>
                    </div>
                </div>
            </div>
            <div>
                <p style="font-size: 13px; text-align: center">
                    Don't have an accoumt yet?
                </p>
                <a href="../users/register">
                    <p style="font-size: 13px; text-align: center;color:blue">
                        Create an account
                    </p>
                </a>
            </div>
        </div>
    </form>
    <script src="../resources/js/app.js"></script>
</body>

</html>