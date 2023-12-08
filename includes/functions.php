<?php 
if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', '../');
}

# ---------- LOAD CONFS ----------
/**
 * Get the configuration
 *
 * @return array Array with the configuration
 */
function get_config() {
    // Get the configurations from the config.ini file
    $conf = parse_ini_file(ROOT_DIR.'confs/config.ini');
    return $conf;
}

# ---------- LOAD DB -------------
/**
 * Initialize the connection to the database
 *
 * @return object Connection to the database
 */
function initDB() {
    // Get the configuration from the config.ini file
    $config = get_config();
    
    // Establish the connection with the database
    $con = mysqli_connect($config['hostname'], $config['username'], $config['password'], $config['database']);
    return $con;
}

function test() {
    $con = initDB();
    $con -> query("SELECT * FROM test");
    
    while ($row = mysqli_fetch_array($con)) {
        echo $row['test'];
    }
}

test()

?>