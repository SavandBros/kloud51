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

  // Belong to dropdown
  public $dropdown;

  protected static $instances = array();

  private function __construct($name, $url, $title, $dropdown, $is_html) {
    $this->name = $name;
    $this->url = $url;
    $this->title = $title;
    $this->is_html = $is_html;
    $this->include = $name . ".php";
    $this->dropdown = $dropdown;
    
    if ($this->is_html) {
      $this->include = $name . ".html";
    }
    
    $this->label = ucwords($title);
  }

  public static function find($name) {
    return static::$instances[$name];
  }

  public static function all() {
    return static::$instances;
  }

  // Get all links that belong to a dropdown  
  public static function all_by_dropdown($dropdown) {
    $routes = [];
    foreach (static::all() as $route) {
      // Matches dropdown
      if ($route->dropdown == $dropdown) {
        array_push($routes, $route);
      }
    }
    return $routes;
  }

  // Get all routes as links and dropdowns
  public static function all_with_dropdown() {
    $links = [];
    $added_dropdowns = [];
    // Loop all routes
    foreach(static::all() as $route) {
      $link = [];
      // If dropdown already added, skip
      if (in_array($route->dropdown, $added_dropdowns)) {
        continue;
      }
      // For dropdowns
      if ($route->dropdown) {
        // Link is a dropdown with routes in it
        $link = ["dropdown" => $route->dropdown, "links" => static::all_by_dropdown($route->dropdown)];
        // Save dropdown to not to add again
        array_push($added_dropdowns, $route->dropdown);
      }
      // For links
      else {
        $link = ["route" => $route, "dropdown" => null];
      }
      array_push($links, $link);
    }
    return $links;
  }

  public static function add($name, $url = "/", $title = null, $dropdown = null, $is_html = false) {
    return static::$instances[$name] = new static($name, $url, $title, $dropdown, $is_html);
  }
}


// Let's add some routes
Route::add("home", "/", "Home");
Route::add("affiliate", "/program/affiliate-army", "Afflicate Army Program", "Program", true);
Route::add("sponsorship", "/program/sponsorship", "Sponsorship", "Program", true);
Route::add("aup", "/acceptable-use-policy", "Acceptable Use Policy", null, true);

// Default route
$base = Route::find("home");

// Check current route to use in base and pages
foreach (Route::all() as $route) {
  if ($_SERVER["REQUEST_URI"] == $route->url) {
        $base = $route;
        break;
    }
}
