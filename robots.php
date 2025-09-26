<?php
header('Content-Type: text/plain; charset=utf-8');

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . $host;

echo <<<ROBOTS
User-agent: *
Allow: /
Sitemap: {$baseUrl}/sitemap.xml
ROBOTS;
?>

