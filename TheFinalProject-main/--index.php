<?php
function listDirectoryContents($path) {
    $items = scandir($path);
    echo '<ul class="file-browser">';
    
    foreach ($items as $item) {
        if ($item != "." && $item != "..") {
            $fullPath = $path . '/' . $item;
            $relativePath = str_replace(__DIR__, '', $fullPath);
            $isDir = is_dir($fullPath);
            $isIndex = (stripos($item, 'index.') === 0);
            
            echo '<li class="' . ($isDir ? 'directory' : 'file') . ($isIndex ? ' index-file' : '') . '">';
            
            if ($isDir) {
                echo '<i class="fas fa-folder"></i> ';
                echo '<a href="?path=' . urlencode($relativePath) . '">' . $item . '</a>';
            } else {
                echo '<i class="fas fa-file"></i> ';
                echo '<a href="' . $relativePath . '" target="_blank">' . $item . '</a>';
            }
            
            echo '</li>';
        }
    }
    echo '</ul>';
}

function getBreadcrumbs($path) {
    $basePath = __DIR__;
    $relativePath = str_replace($basePath, '', $path);
    $parts = explode('/', trim($relativePath, '/'));
    
    echo '<div class="breadcrumbs">';
    echo '<a href="?"><i class="fas fa-home"></i> Home</a>';
    
    $currentPath = '';
    foreach ($parts as $part) {
        if ($part !== '') {
            $currentPath .= '/' . $part;
            echo ' / <a href="?path=' . urlencode($currentPath) . '">' . $part . '</a>';
        }
    }
    echo '</div>';
}

function displayFileContent($path) {
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $relativePath = str_replace(__DIR__, '', $path);
    
    echo '<div class="file-actions">';
    echo '<a href="' . $relativePath . '" target="_blank" class="btn"><i class="fas fa-external-link-alt"></i> Open in Browser</a>';
    echo '<a href="?path=' . urlencode($relativePath) . '&view=code" class="btn"><i class="fas fa-code"></i> View Code</a>';
    echo '</div>';

    echo '<div class="file-content">';
    
    if (isset($_GET['view']) && $_GET['view'] === 'code') {
        echo '<pre class="code-preview">';
        echo htmlspecialchars(file_get_contents($path));
        echo '</pre>';
    } else if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo '<img src="' . $relativePath . '" alt="Image preview">';
    } else {
        echo '<pre class="code-preview">';
        echo htmlspecialchars(file_get_contents($path));
        echo '</pre>';
    }
    
    echo '</div>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Browser</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .file-browser {
            list-style: none;
            padding-left: 20px;
            margin-top: 20px;
        }
        .directory {
            color: #007bff;
        }
        .file {
            color: #333;
        }
        .index-file {
            font-weight: bold;
            color: #28a745;
        }
        .fa-folder {
            color: #ffd700;
        }
        .fa-file {
            color: #6c757d;
        }
        .fa-home {
            color: #007bff;
        }
        a {
            text-decoration: none;
            color: inherit;
            margin-left: 5px;
        }
        li {
            margin: 5px 0;
        }
        .breadcrumbs {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .breadcrumbs a {
            color: #007bff;
        }
        .breadcrumbs a:hover {
            text-decoration: underline;
        }
        .file-content {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 4px;
            margin-top: 20px;
        }
        .code-preview {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            overflow-x: auto;
            font-family: monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .file-actions {
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background: #007bff;
            color: white !important;
            border-radius: 4px;
            margin-right: 10px;
        }
        .btn:hover {
            background: #0056b3;
            text-decoration: none;
        }
        .btn i {
            margin-right: 5px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>File Browser</h1>
    <?php
    $currentPath = __DIR__;
    if (isset($_GET['path'])) {
        $requestedPath = realpath(__DIR__ . $_GET['path']);
        if ($requestedPath && strpos($requestedPath, __DIR__) === 0) {
            $currentPath = $requestedPath;
        }
    }
    
    getBreadcrumbs($currentPath);
    
    if (is_file($currentPath)) {
        displayFileContent($currentPath);
    } else {
        listDirectoryContents($currentPath);
    }
    ?>
</body>
</html>