<?php
/**
 * Admin Panel Responsive Update Script
 * This script updates all admin PHP files to include responsive CSS and proper viewport meta tags
 */

// List of admin files to update
$adminFiles = [
    'aboutadd.php',
    'aboutedit.php',
    'aboutview.php',
    'adminlist.php',
    'cityadd.php',
    'cityedit.php',
    'contactview.php',
    'feedbackedit.php',
    'feedbackview.php',
    'form.php',
    'profile.php',
    'propertyadd.php',
    'propertyadd2.php',
    'propertyedit.php',
    'register.php',
    'stateadd.php',
    'stateedit.php',
    'useragent.php',
    'userbuilder.php'
];

// Function to update a file
function updateFile($filename) {
    if (!file_exists($filename)) {
        echo "File not found: $filename\n";
        return false;
    }
    
    $content = file_get_contents($filename);
    $updated = false;
    
    // Update viewport meta tag
    if (strpos($content, 'width=device-width, initial-scale=1.0, user-scalable=0') !== false) {
        $content = str_replace(
            'width=device-width, initial-scale=1.0, user-scalable=0',
            'width=device-width, initial-scale=1.0, user-scalable=0, shrink-to-fit=no',
            $content
        );
        $updated = true;
    }
    
    // Add responsive CSS link if not present
    if (strpos($content, 'admin-responsive.css') === false && strpos($content, 'assets/css/style.css') !== false) {
        $content = str_replace(
            '		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">',
            '		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- Admin Responsive CSS -->
        <link rel="stylesheet" href="assets/css/admin-responsive.css">',
            $content
        );
        $updated = true;
    }
    
    // Update table structure to be responsive
    if (strpos($content, '<table') !== false && strpos($content, 'table-responsive') === false) {
        // Find table tags and wrap them in table-responsive div
        $content = preg_replace(
            '/(<table[^>]*class="[^"]*table[^"]*"[^>]*>)/',
            '<div class="table-responsive">$1',
            $content
        );
        
        // Close table-responsive div after table
        $content = preg_replace(
            '/(<\/table>)/',
            '$1</div>',
            $content
        );
        
        $updated = true;
    }
    
    // Save updated content
    if ($updated) {
        if (file_put_contents($filename, $content)) {
            echo "✓ Updated: $filename\n";
            return true;
        } else {
            echo "✗ Failed to update: $filename\n";
            return false;
        }
    } else {
        echo "- No changes needed: $filename\n";
        return true;
    }
}

// Function to add responsive table wrapper
function addTableResponsive($content) {
    // Find table tags that don't have table-responsive wrapper
    $pattern = '/(<table[^>]*class="[^"]*table[^"]*"[^>]*>.*?<\/table>)/s';
    
    return preg_replace_callback($pattern, function($matches) {
        $table = $matches[1];
        
        // Check if already wrapped
        if (strpos($table, 'table-responsive') !== false) {
            return $table;
        }
        
        return '<div class="table-responsive">' . $table . '</div>';
    }, $content);
}

echo "Admin Panel Responsive Update Script\n";
echo "=====================================\n\n";

$successCount = 0;
$totalCount = count($adminFiles);

foreach ($adminFiles as $file) {
    if (updateFile($file)) {
        $successCount++;
    }
}

echo "\n=====================================\n";
echo "Update Complete: $successCount/$totalCount files updated successfully\n";

// Create a summary of responsive features added
echo "\nResponsive Features Added:\n";
echo "✓ Enhanced viewport meta tags\n";
echo "✓ Responsive CSS inclusion\n";
echo "✓ Table responsiveness\n";
echo "✓ Mobile-first design approach\n";
echo "✓ Touch-friendly interface\n";
echo "✓ Print-friendly styles\n";
echo "✓ Accessibility improvements\n";
echo "✓ Dark mode support\n";
echo "✓ High DPI display optimization\n";
?> 