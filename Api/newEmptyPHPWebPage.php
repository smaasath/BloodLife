<?php
/* Creating Certificate Dynamically */

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('certificate.jpg');

// Check if image creation is successful
if (!$jpg_image) {
    die('Error: Unable to create image from JPEG.');
} else {
    // Allocate A Color For The Text
    $white = imagecolorallocate($jpg_image, 54, 12, 110);

    // Set Path to Font File
    $font_path = 'font.ttf';

    $name_text = "Chetan Rohilla";
    $date_text = date('jS F, Y');

    imagettftext($jpg_image, 26, 0, 480, 400, $white, $font_path, $name_text);
    imagettftext($jpg_image, 20, 0, 220, 670, $white, $font_path, $date_text);

    // Start output buffering
    ob_start();

    // Output the image
    imagejpeg($jpg_image);

    // Get the buffered output
    $output = ob_get_clean();

    // Display Image
    echo '<img src="data:image/jpeg;base64,' . base64_encode($output) . '" style="width:30%">';

    // Clear Memory
    imagedestroy($jpg_image);
}
?>
