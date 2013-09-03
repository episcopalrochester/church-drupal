var $ = jQuery;
// Manipulate toolbar
$(document).ready(function() {
  $("body.toolbar-drawer ul#toolbar-menu").prepend("<li><a href='/node/add'><strong>+</strong></a></li>");
  $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin/structure/menu/manage/main-menu'>Menu</a></li>");
  $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin/structure/block'>Blocks</a></li>");
  $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin'>Admin</a></li>");
});
