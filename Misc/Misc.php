<?php 

function convertToMinutes($seconds) {
    $minutes = floor($seconds / 60);
    $remainingSeconds = $seconds % 60;
    return $minutes . " : " . $remainingSeconds;
}

?>