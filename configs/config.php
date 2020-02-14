<?php // Moodle configuration file
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'c10';
$CFG->dbuser    = 'postgres';
$CFG->dbpass    = 'passwd';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);
$is_web=http_response_code()!==FALSE;
if ($is_web) {
        $CFG->wwwroot   = 'https://'.$_SERVER["HTTP_HOST"].'/c10';
} else {
        $CFG->wwwroot   = 'https://ava.ifrr.edu.br/c10';
}
$CFG->dataroot  = '/var/moodledatac10';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;
require_once(__DIR__ . '/lib/setup.php');

