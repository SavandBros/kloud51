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

  // User friendly label
  public $label;

  // Extra footer content
  public $extra;

  // Belong to dropdown
  public $dropdown;

  // Only for header
  public $header;

  protected static $instances = array();

  private function __construct($name, $url, $title, $dropdown, $is_html, $header) {
    $this->name = $name;
    $this->url = $url;
    $this->title = $title;
    $this->is_html = $is_html;
    $this->dropdown = $dropdown;
    $this->header = $header;
    $this->label = ucwords($title);

    // Label is name if (if no title)
    if (!$title) {
      $this->label = ucwords($name);
    }

    // Add dash at the end of the title (if has title)
    if ($title) {
      $this->title = $title . " &bull; ";
    }
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
  public static function all_with_dropdown($header = true) {
    $links = [];
    $added_dropdowns = [];
    // Loop all routes
    foreach(static::all() as $route) {
      $link = [];
      // If dropdown already added, skip
      if (in_array($route->dropdown, $added_dropdowns) || $route->header !== true) {
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

  // Construct
  public static function add($name, $url = "/", $title = null, $dropdown = null, $is_html = true, $header = false) {
    return static::$instances[$name] = new static($name, $url, $title, $dropdown, $is_html, $header);
  }

  // Get the include url of the page
  public function get_include() {
    $ext = "php";

    if ($this->is_html) {
      $ext = "html";
    }

    $path = "pages/";

    if ($this->dropdown) {
      $path = $path . strtolower($this->dropdown) . "/";
    }

    return $path . $this->name . "." . $ext;
  }
}

// Let's add some routes
Route::add("home", "/", null, null, false, false);

Route::add("admin", "/admin");

Route::add("tos", "/legal/tos", "Terms Of Service", "Legal");
Route::add("aup", "/legal/acceptable-use-policy", "Acceptable Use Policy", "Legal");
Route::add("privacy", "/legal/privacy", "Privacy Policy", "Legal");
Route::add("refund", "/legal/refunds", "Refund Policy", "Legal");

Route::add("web", "/hosting/web-hosting", "Web Hosting", "Hosting", false, true, true);
Route::add("business", "/hosting/business-hosting", "Business Hosting", "Hosting", false, true, true);
Route::add("prestashop", "/hosting/prestashop", "PrestaShop", "Hosting", false, true, true);
Route::add("mybb", "/hosting/mybb", "MyBB", "Hosting", true, true, true);
Route::add("mariadb", "/hosting/mariadb", "MariaDB", "Hosting", true, true, true);
Route::add("bbpress", "/hosting/bbpress", "bbPress", "Hosting", true, true, true);
Route::add("wordpress", "/hosting/wordpress", "Wordpress", "Hosting", true, true, true);
Route::add("whmcs", "/hosting/whmcs", "WHMCS", "Hosting", true, true, true);
Route::add("joomla", "/hosting/joomla", "Joomla", "Hosting", true, true, true);
Route::add("softaculous", "/hosting/softaculous", "Softaculous", "Hosting", true, true, true);

Route::add("affiliate", "/program/affiliate-army", "Affiliate Army Program", "Program", true, true);
Route::add("sponsorship", "/program/sponsorship", "Sponsorship", "Program", true, true);
Route::add("grant", "/program/grant", "Grant", "Program", false, true);

Route::add("forum", "http://forum.kloud51.com/", "Forum", null, null, true);
Route::add("about", "/about", "About", null, true, true);

// Default route
$base = Route::find("home");

// Check current route to use in base and pages
foreach (Route::all() as $route) {
  if (strpos($route->url, strtok($_SERVER["REQUEST_URI"], "?")) !== false) {
        $base = $route;
        break;
    }
}
