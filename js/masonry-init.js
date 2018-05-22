// vanilla JS
// init with element
var grid = document.querySelector('.grid');
var msnry = new Masonry(grid, {
  // options...
  percentPosition: true,
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer'
});
