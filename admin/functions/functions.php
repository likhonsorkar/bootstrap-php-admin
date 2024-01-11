<?php
    function generateSlug($title, $delimiter = '-') {
        // Convert the title to lowercase
        $slug = strtolower($title);
    
        // Replace spaces with the specified delimiter
        $slug = str_replace(' ', $delimiter, $slug);
    
        // Remove special characters, leaving only alphanumeric characters and the delimiter
        $slug = preg_replace('/[^a-z0-9' . preg_quote($delimiter) . ']/', '', $slug);
    
        // Trim any leading or trailing delimiter characters
        $slug = trim($slug, $delimiter);
        return $slug;
    }   
?>