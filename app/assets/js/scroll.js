var x, y, top, left, down, drag = {};

$("[scroll]").mousedown(function(e) {
  e.preventDefault();
  down = true;
  x = e.pageX;
  y = e.pageY;
  top = $(this).scrollTop();
  left = $(this).scrollLeft();
});

$("body").mousemove(function(e) {
  if (down) {
    var newX = e.pageX;
    var newY = e.pageY;
    var oldX = $("[scroll]").scrollLeft();
    var oldY = $("[scroll]").scrollTop();

    $("[scroll]").scrollTop(top - newY + y);
    $("[scroll]").scrollLeft(left - newX + x);

    drag = {
      x: $("[scroll]").scrollLeft() - oldX,
      y: $("[scroll]").scrollTop() - oldY
    };
  }
});

$("body").mouseup(function(e) {
  down = false;
  to = drag.x >= 0 ? 1 : -1;
  $("[scroll]").stop().animate({
    scrollLeft: $("[scroll]").scrollLeft() + 500 * to
  });
});
