<?php
// This file handles navigation between pages

// List of valid pages
$valid_pages = ['home', 'members', 'museum', 'notice'];

// Get the requested page from URL
$requested_page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Validate the page
if (!in_array($requested_page, $valid_pages)) {
    $requested_page = 'home'; // Default to home if invalid page
}

// Function to generate navigation links
function generateNavLinks($current_page) {
    $pages = [
        'home' => '홈',
        'members' => '멤버',
        'museum' => '박물관',
        'notice' => '공지'
    ];
    
    echo '<div class="nav">';
    foreach ($pages as $page => $label) {
        $active = ($page == $current_page) ? 'active' : '';
        echo '<a href="index.php?page=' . $page . '" class="' . $active . '">' . $label . '</a>';
    }
    echo '</div>';
}

// Function to determine which content to load
function loadContent($page) {
    include 'pages/' . $page . '.php';
}
?>