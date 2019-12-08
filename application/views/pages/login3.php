<!D0CTYPE html>
<html>
<head>
    <?php
        echo $js;
        echo $css;
    ?>
    <title>ELEVATE Indonesia: Belanja Fashion Online Terlengkap di Indonesia</title>
    <style type="text/css">
    .login__header {
        background: black;
        color: white;
        font-size: 24px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-left: 20px;
        height: 50px;
    }

    .login__body {
        width: 50%;
        margin: auto;
        margin-top: 35px;
    }

    a {
        color: white;
    }

    a:hover {
        color: white;
        text-decoration: none;
    }
    
    .login__footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    </style>
</head>
<body>
    <div class="login__header">
        Login Page
    </div>

    <div class="login__body">
        <form action="" method="post">
            <div class="form-group">
                <div>Username : </div>
                <input type="text" class="form-control" name="username" required />
            </div>
            <div class="form-group">
                <div>Password : </div>
                <input type="text" class="form-control" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary success">Login</button>
            <button type="cancel" class="btn btn-danger"><a href="http://localhost/elevate">Cancel</a></button>
        </form>
    </div>

    <div class="login__footer">
    <?php
        echo $footer;
    ?>
    </div>
</body>
</html>