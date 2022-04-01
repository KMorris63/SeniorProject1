<?php
/*
 * Autoloader.php
 * Kacey Morris
 * February 6, 2022
 * CST 451 Code Drop 2 - Organization
 *
 * The autoloader finds file locations for needed classes automatically.
 *
 * This is my own work, as influenced by class time and videos.
 */

spl_autoload_register(function($class) {
    // get the difference in folders between the location of autoloader and the file that called autoloader
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    
    // count the number of slashes (folder depth)
    $numberoflastdirectories = substr_count($lastdirectories, '/');
    
    // list of possible locations that classes are found in this application
    $directories = ['business', 'business/model', 'database', 'presentation', 'presentation/handlers',
        'presentation/views', 'utility'
    ];
    
    // look inside each directory for desired class
    foreach($directories as $d) {
        // echo "looking in directory " . $d . "<br>";
        $currentDirectory = $d;
        for ($x = 0; $x < $numberoflastdirectories; $x++) {
            $currentDirectory = "../" . $currentDirectory;
        }
        
        $classFile = $currentDirectory . '/' . $class . '.php';
        // echo "class file " . $classFile;
        
        if (is_readable($classFile)) {
            // echo "WAS READABLE " . $classFile . " <br>";
            if (require $d . '/' . $class . ".php") {
                break;
            }
        }
        else {
            // echo "Could not read " . $classFile . " <br>";
        }
    }
})
?>
