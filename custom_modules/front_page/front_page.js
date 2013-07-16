var $ = jQuery;
$(document).ready(function() {
 $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin/structure/menu/manage/main-menu'>Menu</a></li>");
 $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin/structure/block'>Blocks</a></li>");
 $("body.toolbar-drawer ul#toolbar-menu").append("<li><a href='/admin'>Admin</a></li>");
});
