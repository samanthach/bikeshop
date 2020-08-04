<?php
// vvv DO NOT MODIFY/REMOVE vvv

// check current php version to ensure it meets 2300's requirements
function check_php_version()
{
  if (version_compare(phpversion(), '7.0', '<')) {
    define(VERSION_MESSAGE, "PHP version 7.0 or higher is required for 2300. Make sure you have installed PHP 7 on your computer and have set the correct PHP path in VS Code.");
    echo VERSION_MESSAGE;
    throw VERSION_MESSAGE;
  }
}
check_php_version();

function config_php_errors()
{
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
}
config_php_errors();

// open connection to database
function open_or_init_sqlite_db($db_filename, $init_sql_filename)
{
  if (!file_exists($db_filename)) {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (file_exists($init_sql_filename)) {
      $db_init_sql = file_get_contents($init_sql_filename);
      try {
        $result = $db->exec($db_init_sql);
        if ($result) {
          return $db;
        }
      } catch (PDOException $exception) {
        // If we had an error, then the DB did not initialize properly,
        // so let's delete it!
        unlink($db_filename);
        throw $exception;
      }
    } else {
      unlink($db_filename);
    }
  } else {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  return null;
}

function exec_sql_query($db, $sql, $params = array())
{
  $query = $db->prepare($sql);
  if ($query and $query->execute($params)) {
    return $query;
  }
  return null;
}

// ^^^ DO NOT MODIFY/REMOVE ^^^

// You may place any of your code here.

//open connection to database
$db = open_or_init_sqlite_db("secure/site.sqlite", "secure/init.sql");

//COOKIE HANDLING BEGINS
define('SESSION_COOKIE_DURATION', 86400*30); // 86400 (secs) = 1 (day). cookies last 1 month.

//If there is a cookie already, renew the session.
if (isset($_COOKIE["session"])) {
  $session = $_COOKIE["session"];
  $session_record = find_session($session);
  if ( isset($session_record) ) {
      // Renew the cookie
      setcookie("session", $session, time() + SESSION_COOKIE_DURATION);
  }
}else{
  // Generate session
  $session = session_create_id();
  // Store session ID in database
  $sql = "INSERT INTO sessions (session) VALUES (:session);";
  $params = array(':session' => $session);
  $result = exec_sql_query($db, $sql, $params);

  if ($result) {
    // Success, session stored in DB
    // Send a cookie back to the user.
    setcookie("session", $session, time() + SESSION_COOKIE_DURATION);
  }else {
    echo("<p>Should never reach here. Some unexpected error occured.</p>");
  }
}

//finds the session stored in the database. returns NULL if there is none.
function find_session($session) {
  global $db;
  if (isset($session)) {
    $sql = "SELECT * FROM sessions WHERE session = :session;";
    $records = exec_sql_query($db, $sql, array(':session' => $session))->fetchAll();
    if ($records) {
      // sessions are unique, so there should only be one record
      return $records[0];
    }
  }
  return NULL;
}



?>
