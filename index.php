<head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<?php
// Get the current URL path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debug: Output the current path
// echo "Current path: " . $path;

// Remove the project folder if necessary
$path = str_replace('https://vansham-kamboj.github.io', '', $path);

// Simple routing logic based on URL path
switch ($path) {
    case '/':
        include 'view/home.php';  // Main homepage
        break;
        case '/home':
            include 'view/home.php';  // Main homepage
            break;
    case '/error':
        include 'view/HomePage/error.php';  // About page
        break;
    case '/consulting':
        include 'view/Services/ConsultationPage.php';  // Contact page
        break;
        case '/Application':
            include 'view/Services/ApplicationPage.php';  // Contact page
            break;
            case '/conslting':
                include 'view/Services/ConsultationPage.php';  // Contact page
                break;
    default:
        include 'view/404.php';  // 404 page not found
        break;
}
?>
