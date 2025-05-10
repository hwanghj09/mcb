<?php
// This file handles the museum page functionality

// Array of museum exhibits (currently placeholder with question marks)
$exhibits = [
    [
        'id' => 1,
        'title' => '미공개 전시 1',
        'image' => null, // Will be replaced with actual image
        'description' => '곧 공개됩니다!'
    ],
    [
        'id' => 2,
        'title' => '미공개 전시 2',
        'image' => null,
        'description' => '곧 공개됩니다!'
    ],
    [
        'id' => 3,
        'title' => '미공개 전시 3',
        'image' => null,
        'description' => '곧 공개됩니다!'
    ]
];

// Function to display museum exhibits
function displayExhibits() {
    global $exhibits;
    
    echo '<div class="question-mark-container">';
    foreach ($exhibits as $exhibit) {
        displayExhibitBox($exhibit);
    }
    echo '</div>';
}

// Function to display a single exhibit box
function displayExhibitBox($exhibit) {
    echo '<div class="question-box" data-id="' . $exhibit['id'] . '">';
    
    if ($exhibit['image']) {
        echo '<img src="images/exhibits/' . $exhibit['image'] . '" alt="' . $exhibit['title'] . '">';
    } else {
        echo '?';
    }
    
    echo '</div>';
}

// Function to get exhibit details - would be used in an AJAX call
function getExhibitDetails($id) {
    global $exhibits;
    
    foreach ($exhibits as $exhibit) {
        if ($exhibit['id'] == $id) {
            return $exhibit;
        }
    }
    
    return null;
}

// JavaScript for interactive exhibit display (would normally be in a separate file)
function outputMuseumJavaScript() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add click events to exhibit boxes
        const boxes = document.querySelectorAll('.question-box');
        boxes.forEach(box => {
            box.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                alert('전시 #' + id + '에 대한 정보는 곧 공개됩니다!');
                // In a real application, this would make an AJAX call to get exhibit details
            });
        });
    });
    </script>
    <?php
}
?>