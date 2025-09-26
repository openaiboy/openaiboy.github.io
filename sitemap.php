<?php
header("Content-Type: application/xml; charset=utf-8");
 

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . $host;

$urls = [
    ['loc' => '/', 'lastmod' => '2025-07-24', 'changefreq' => 'daily', 'priority' => '1.0'],
    ['loc' => '/download/', 'lastmod' => '2025-07-24', 'changefreq' => 'daily', 'priority' => '0.9'],
    ['loc' => '/app/', 'lastmod' => '2025-07-24', 'changefreq' => 'daily', 'priority' => '0.9'],
    ['loc' => '/okx/', 'lastmod' => '2025-07-24', 'changefreq' => 'daily', 'priority' => '0.9'],
    ['loc' => '/pc/', 'lastmod' => '2025-07-24', 'changefreq' => 'daily', 'priority' => '0.9'],
    ['loc' => '/apk/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/ios/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/win/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/ouyi/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/ouyi/ios/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/ouyi/reg/', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/subtitles/okx-app.vtt', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/subtitles/okx-ios.vtt', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => '/subtitles/okx-windows.vtt', 'lastmod' => '2025-07-24', 'changefreq' => 'weekly', 'priority' => '0.8'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset 
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
  http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?= htmlspecialchars($baseUrl . $url['loc']) ?></loc>
    <lastmod><?= $url['lastmod'] ?></lastmod>
    <changefreq><?= $url['changefreq'] ?></changefreq>
    <priority><?= $url['priority'] ?></priority>
  </url>
<?php endforeach; ?>
</urlset>