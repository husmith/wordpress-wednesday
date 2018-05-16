// vanilla JS
// init with element
var grid = document.querySelector('.section-wrapper');
var msnry = new Masonry(grid, {
  // options...
  itemSelector: '.post-wrapper',
  columnWidth: 50
});

// // init with selector
// var msnry = new Masonry('.grid', {
//   // options...
// });
