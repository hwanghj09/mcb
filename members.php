<?php
// This file contains member data and functions

// Array of member data
$members = [
    [
        'id' => 1,
        'name' => '문화창작부',
        'image' => 'character1.png',
        'social' => [
            'instagram' => true,
            'youtube' => true,
            'twitter' => true
        ]
    ],
    [
        'id' => 2,
        'name' => '부장 / 상시',
        'image' => 'character2.png',
        'social' => [
            'instagram' => true,
            'youtube' => true,
            'twitter' => true
        ]
    ],
    [
        'id' => 3,
        'name' => '개발자 / 잔고기',
        'image' => 'character3.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => false
        ]
    ],
    [
        'id' => 4,
        'name' => '기획자 / 소고기',
        'image' => 'character4.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => true
        ]
    ],
    [
        'id' => 5,
        'name' => '작가 / 전계곡',
        'image' => 'character5.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => true
        ]
    ],
    [
        'id' => 6,
        'name' => '디자이너 / 램',
        'image' => 'character6.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => true
        ]
    ],
    [
        'id' => 7,
        'name' => '디자이너 / 토끼일',
        'image' => 'character7.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => true
        ]
    ],
    [
        'id' => 8,
        'name' => '매니저 / 레인건',
        'image' => 'character8.png',
        'social' => [
            'instagram' => true,
            'youtube' => false,
            'twitter' => false
        ]
    ],
];

// Function to display all members
function displayAllMembers() {
    global $members;
    
    echo '<div class="character-profiles">';
    foreach ($members as $member) {
        displayMember($member);
    }
    echo '</div>';
}

// Function to display a single member
function displayMember($member) {
    $image_path = 'images/' . $member['image'];
    
    echo '<div class="profile">';
    echo '<img src="' . $image_path . '" alt="' . $member['name'] . '">';
    echo '<h3>' . $member['name'] . '</h3>';
    echo '<div class="social-links">';
    
    if ($member['social']['instagram']) {
        echo '<a href="#"><img src="images/instagram.png" alt="Instagram"></a>';
    }
    
    if ($member['social']['youtube']) {
        echo '<a href="#"><img src="images/youtube.png" alt="YouTube"></a>';
    }
    
    if ($member['social']['twitter']) {
        echo '<a href="#"><img src="images/twitter.png" alt="Twitter"></a>';
    }
    
    echo '</div>';
    echo '</div>';
}

// Function to get a specific member by ID
function getMemberById($id) {
    global $members;
    
    foreach ($members as $member) {
        if ($member['id'] == $id) {
            return $member;
        }
    }
    
    return null;
}
?>