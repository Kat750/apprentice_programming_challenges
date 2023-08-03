<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Printing Programming Challenge</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="centered-container">
        <h1>
            <?php
            $pages = array(
                "home" => "Welcome home",
                "anout-us" => "Learn more about what we do",
                "contact-us" => "Feel free to get in touch with us"
            );

            if (isset($_GET['slug'])) {
                $slug = $_GET['slug'];

                if (array_key_exists($slug, $pages)) {
                    echo $pages[$slug];
                } else {
                    echo "Page Not Found";    
                }                
            } else {
                echo "No Page specified";
            }
        </h1>
    </div>
</body>
</html>