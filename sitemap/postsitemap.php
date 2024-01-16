<?php
include_once('../database.php');
$obj = new database;
$result = $obj->xmlpostlist();
// Create a sitemap XML string
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Loop through the query results and add each post to the sitemap
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $xml .= '
  <url>
    <loc>https://yourwebsite.com/post/' . $row['slug'] . '</loc>
    <lastmod>' . $row['publication_date'] . '</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>';
    }
}

// Close the sitemap XML
$xml .= '
</urlset>';

// Save the sitemap to a file (you can change the file path as needed)
file_put_contents('sitemap.xml', $xml);

// Close the database connection
$obj->conn->close();

echo 'Sitemap generated successfully!';
?>
