/**
 * By Kloud51.com
 * Copyright 2018, all rights reserved.
 */

/**
 * @returns {boolean}
 */
function isInUrl(path) {
  return location.href.indexOf(path) !== -1;
}

function updateAnnouncements() {
  // Check address
  if (!isInUrl("/announcements/")) {
    return;
  }
  // Is in a announcement detail
  if ($(".announcement-single").length) {
    return;
  }
  // Update template
  $(".main-content").children().wrapAll("<div class='announcement-single'/>");
}

function updateClientArea() {
  // Check address
  if (!isInUrl("/clientarea.php")) {
    return;
  }
  // Update tiles
  $(".tiles .tile .highlight").remove();
  $(".tiles .tile").removeClass().addClass("col-sm-6").children().wrap("<div class='tile'/>");
  // Remove panel footers
  $(".client-home-panels .panel-footer").remove();
  // White smoke body
  $("#main-body").addClass("bg-smoke");
}

function noHomeAccess() {
  // Is in home page
  if ($("title").text() === "Portal Home - Kloud51") {
    // Go to main homepage
    location.href = "https://kloud51.com";
  }
}

$(function() {
  // updateAnnouncements();
  // updateClientArea();
  noHomeAccess();
});
