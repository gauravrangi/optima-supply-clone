<?php
/*
 * Template Name: Optima Supply Page
 * Template Post Type: page
 */

// Get the directory where this template file is located
$html_file = get_template_directory() . '/index.html';

if ( file_exists( $html_file ) ) {
      readfile( $html_file );
} else {
      echo '<p style="color:red;">Error: index.html not found.</p>';
}

exit;
?>
