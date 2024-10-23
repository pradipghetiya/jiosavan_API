<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DES Decryption Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>DES Decryption Example</h1>
    <form method="post">
        <input type="text" name="encryptedInput" placeholder="Enter encrypted string" style="width: 300px;">
        <button type="submit">Decrypt</button>
    </form>

    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['encryptedInput'];
            echo "Result: " . htmlspecialchars(decode($input));
        }

        function decode($input) {
            $key = '38346591'; // The key must be 8 bytes for DES
            $encrypted = base64_decode($input);
            
            if ($encrypted === false) {
                return "Base64 decoding failed.";
            }

            // Decrypt using DES
            $decrypted = openssl_decrypt($encrypted, 'DES-ECB', $key, OPENSSL_RAW_DATA);
            
            if ($decrypted === false) {
                return "Decryption failed. Error: " . openssl_error_string();
            }

            // Adjust the decoded string
            $decoded = preg_replace('/\.mp4.*/', '.mp4', $decrypted);
            return str_replace('http:', 'https:', $decoded);
        }
        ?>
    </div>

</body>
</html>
