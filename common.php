<?php
include 'header.php';
include 'footer.php';

function header()
{
  return $header;
}

function printr($msg) {
    echo '<pre>'. print_r($msg, true).'</pre>';
}

spl_autoload_register(function ($class) {

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/../lib/';

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
?>
