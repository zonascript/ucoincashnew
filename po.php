
<html>
    <head>
        <title>index</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <form method='post' action='po.php'>
            <input type='text' name='inp' /><br>
            <div class="g-recaptcha" data-sitekey="6LeWvDoUAAAAABjqgyJfgd7zlpJQRGuJqVXL3NtL"></div><br>
            <input type='submit' /><br>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        var_dump($_POST);
        $secret = "6LeWvDoUAAAAAMxsjA2uw8WYhODEZrYM0U06RKqp";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
            echo 'Done';
        }else{
            echo 'SPam';
			echo "======================================jdfkdjfkljkl";
        }
        
    }﻿
    ?>