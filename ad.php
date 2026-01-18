<?php
// Prevent Caching - Critical for Adsterra to load fresh every time
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad</title>
    <style>
        body { margin: 0; padding: 0; background: transparent; overflow: hidden; }
    </style>
</head>
<body>
    <script src="https://libtl.com/sdk.js" data-zone="10479823" data-sdk="show_10479823"></script>
    <script>
        if (typeof show_10479823 === 'function') {
            show_10479823({
                type: 'inApp',
                inAppSettings: {
                    frequency: 2,
                    capping: 0.1,
                    interval: 30,
                    timeout: 5,
                    everyPage: false
                }
            });
        }
    </script>
</body>
</html>
