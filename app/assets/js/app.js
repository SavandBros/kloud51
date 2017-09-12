/**
 * By Kloud51.com
 * Copyright 2017, all rights reserved.
 */
function showDebugElements() {
  // Check if in debug mode
  if (localStorage.getItem("debug") !== "true") {
    return;
  }
  // Show hidden elements
  $("[hidden]").removeAttr("hidden");
}

$(function () {
  $("[tooltip]").tooltip();
  grid(".grid");
  showDebugElements();
});
