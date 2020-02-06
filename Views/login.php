<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/Views/css/style.css">
    </head>
    <body>
        <div class="flex-wrapper col center secondary-center full-height full-width">
            <div class="login-form window">
                <div class="flex-wrapper col space-around full-height full-width">
                    <div class="flex-wrapper row center secondary-center">
                        <div class="login-form title">Welcome</div>
                    </div>
                    <div class="flex-wrapper row center secondary-center">
                        <div class="flex-wrapper row">
                            <label class="login-form lbl" id="lbl_email" for="ipt_email">Email</label>
                            <input class="login-form ipt" id="ipt_email" type="email"/>
                        </div>
                    </div>
                    <div class="flex-wrapper row center secondary-center">
                        <div class="flex-wrapper row">
                            <label class="login-form lbl" id="lbl_password" for="ipt_password">Password</label>
                            <input class="login-form ipt" id="ipt_password" type="password"/>
                        </div>
                    </div>
                    <div class="flex-wrapper row center secondary-center">
                        <button class="login-form btn" id= "btn_login" type="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="/Views/js/login.js"></script>
    </body>
</html>
