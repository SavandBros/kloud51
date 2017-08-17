<?php

/**
 * Route
 *
 * Route class for all routes and states
 */
class Route {

  // Unique route name
  public $name;

  // Unique route url
  public $url;

  // Page title
  public $title;

  // Is html or php file
  public $is_html;

  // File name to include
  public $include;

  // User friendly label
  public $label;

  // Extra footer content
  public $extra;

  protected static $instances = array();

  private function __construct($name, $url, $title, $is_html) {
    $this->name = $name;
    $this->url = $url;
    $this->title = $title;
    $this->is_html = $is_html;
    $this->include = $name . ".php";

    if ($this->is_html) {
      $this->include = $name . ".html";
    }
    
    $this->label = ucwords($name);
  }

  public static function get_current_path() {
    $path = explode("/", $_SERVER["REQUEST_URI"]);
    array_shift($path);
    return $path;
  }

  public static function find($name) {
    return static::$instances[$name];
  }

  public static function all() {
    return static::$instances;
  }

  public static function add($name, $url = "", $title = null, $is_html = false) {
    return static::$instances[$name] = new static($name, $url, $title, $is_html);
  }
}

// Let's add some routes
Route::add("home");
Route::add("affiliate", "affiliate-army-program", "Afflicate Army Program", true);

// Default route
$base = Route::find("home");

// Check current route to use in base and pages
foreach (Route::all() as $route) {
    if (Route::get_current_path()[0] == $route->url) {
        $base = $route;
        break;
    }
}
