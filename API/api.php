<?php
function getHomePageData()
{
    return CallApi("__call=webapi.getLaunchData");
}

function CallApi($para)
{
    // API endpoint
    $apiUrl = "https://www.jiosaavn.com/api.php?_format=json&_marker=0&api_version=4&ctx=web6dot0&$para";

    // Initialize cURL
    $ch = curl_init();

    // Set the URL for the cURL request
    curl_setopt($ch, CURLOPT_URL, $apiUrl);

    // Set the return transfer as a string instead of outputting directly
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Handle the API response (decode if JSON)
        $data = json_decode($response, true);
        //print_r($data);
    }

    // Close the cURL session
    curl_close($ch);

    return $data;
}
?>