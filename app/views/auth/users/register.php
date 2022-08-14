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
                <i class='fa fa-angle-left' style='font-size:25px'></i>
            </div>
            <span><i class='fa fa-shield-alt'></i></span>
        </div>
    </div>
    <form action="../users/register" id="register" method="POST">
        <div class="login-box" style="margin-top: 30px;">
            <h3 style="font-size:25px;color:hsl(240, 22%, 25%);text-align:center;padding: 5px 0;font-weight: 700;">SIGN UP</h3>
            <div style="border-bottom: 1px solid black; padding: 10px">
                <div class="input-field-blk" align='center'>
                    <div class="input-field <?php if ($data['nameError']) : ?>wrong<?php endif; ?>">
                        <input type="text" id="name" name="name" class='input first_name' placeholder="" value="<?= $data['name'];  ?>" required>
                        <i class="icon fa <?php if ($data['nameError']) : ?>fa-exclamation<?php endif; ?>"></i>
                        <label class="input-label" for="name">First Name</label>
                    </div>
                </div>
                <span class="error"><?= $data['nameError'];  ?></span>
                <div class="input-field-blk" align='center'>
                    <div class="input-field <?php if ($data['usernameError']) : ?>wrong<?php endif; ?>">
                        <input type="text" id="username" name="username" class='input last_name' placeholder="" value="<?= $data['username'];  ?>" required>
                        <i class="icon fa <?php if ($data['usernameError']) : ?>fa-exclamation<?php endif; ?>"></i>
                        <label class="input-label" for="username">Last Name</label>
                    </div>
                </div>
                <span class="error"><?= $data['usernameError'];  ?></span>
                <div class="input-field-blk" align='center'>
                    <div class="input-field <?php if ($data['useremailError']) : ?>wrong<?php endif; ?>">
                        <input type="email" id="email" name="useremail" class='input email' placeholder="" value="<?= $data['useremail'];  ?>" required><i class="icon fa <?php if ($data['useremailError']) : ?>fa-exclamation<?php endif; ?>"></i>
                        <label class="input-label" for="useremail">Email</label>
                    </div>
                </div>
                <span class="error"><?php echo $data['useremailError'];  ?></span>
                <div class="input-field-blk" align='center'>
                    <div class="input-field <?php if ($data['passwordError']) : ?>wrong<?php endif; ?>">
                        <input type="password" id="passwords" name="password" class='input password' placeholder="" required>
                        <i class="icon fa"></i>
                        <label class="input-label" for="password">Password</label>
                    </div>
                </div>
                <span class="error"><?php echo $data['passwordError'];  ?></span>
                <div style="display: flex">
                    <div class='group'>
                        <input type="checkbox" class="check-box" checked id='agree'>
                        <label for="agree" style='font-size:13px'>I Agree To The Terms & Condition</label>
                    </div>
                </div>
                <button id="btn" type="submit" class="register-btn submit-btn">Sign Up</button>
            </div>
    </form>
    <div style="margin-top: 10px">
        <p style="font-size: 13px; text-align: center">
            You can also register via your social media.
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
        <a href="../users/login">
            <p style="font-size: 13px;text-align: center;color:blue">I already have an account ? Login.</p>
        </a>
    </div>
    </div>
    <script src="../resources/js/app.js"></script>
</body>

</html>