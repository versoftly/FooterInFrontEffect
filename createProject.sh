#!/bin/bash

# Define the project name and root directory
PROJECT_NAME="MyPHPProject"
ROOT_DIR="/var/www" # Change this to your root server directory

# Full path of the new project
PROJECT_PATH="${ROOT_DIR}/${PROJECT_NAME}"

# Create project directories
mkdir -p "${PROJECT_PATH}/app/controller"
mkdir -p "${PROJECT_PATH}/app/model"
mkdir -p "${PROJECT_PATH}/app/view"
mkdir -p "${PROJECT_PATH}/public/css"
mkdir -p "${PROJECT_PATH}/public/js"
mkdir -p "${PROJECT_PATH}/public/images"

# Create index.php
cat << EOF > "${PROJECT_PATH}/index.php"
<?php
require_once 'config.php';
require_once 'app/controller/MainController.php';

\$controller = new MainController();
\$controller->index();
EOF

# Create config.php
cat << EOF > "${PROJECT_PATH}/config.php"
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'database_name');
define('DB_USER', 'username');
define('DB_PASS', 'password');
EOF

# Create MainController.php
cat << EOF > "${PROJECT_PATH}/app/controller/MainController.php"
<?php
class MainController {
    public function index() {
        require_once 'app/view/home.php';
    }
}
EOF

# Create home.php in the view folder
cat << EOF > "${PROJECT_PATH}/app/view/home.php"
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
    <h1>Welcome to our website</h1>
    <!-- Content here -->
</body>
</html>
EOF

# Create .htaccess for URL rewriting (if using Apache)
cat << EOF > "${PROJECT_PATH}/.htaccess"
RewriteEngine On
RewriteRule ^([^\.]+)\$ index.php [NC,L]
EOF

echo "PHP project structure created at ${PROJECT_PATH}"