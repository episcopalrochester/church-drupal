<div class="container">
    <div class="row header-row">
       <div id="header" class="span4">
         <div id="logo-floater"> 
         <?php if ($logo || $site_title): ?>
         <?php if ($title): ?>
           <div id="branding"><strong><a href="<?php print $front_page ?>">
             <?php if ($logo): ?>
             <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
             <?php endif; ?>
             <?php print $site_html ?>
             </a></strong>
             </div><!-- /#branding -->
           <?php else: /* Use h1 when the content title is empty */ ?>
             <h1 id="branding"><a href="<?php print $front_page ?>">
             <?php if ($logo): ?>
             <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
             <?php endif; ?>
             <?php print $site_html ?>
             </a></h1>
           <?php endif; ?>
         <?php endif; ?>
       </div><!-- /#logo-floater -->
     </div> <!-- /#header -->
  <div class="span5">
  </div>
  <div class=span3">
    <div class="header-text-box">
      <?php print variable_get("header_text_box",""); ?>
    </div>
  </div>

  </div><!-- /row -->
</div>
<div class="container main">
  <div class="row">
   <div class="span12">
       <div class="navbar"><div class="navbar-inner">
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
           <div class="menu-label">Menu</div>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>
         <div class="nav-collapse collapse">
           <div class="navbar-spacer">
              &nbsp;
            </div>
            <?php if ($primary_nav): print $primary_nav; endif; ?>
          </div>
        </div></div>
     </div>
  </div><!-- /row -->
  <?php if ($is_front): ?>
    <?php print render($page['front_slideshow']); ?> 
  <?php endif; ?>
  <div class="row content-row">
    <div class="span8" id="main-content">
      <div class="main-content-inner">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title && !$is_front): ?>
          <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
        <?php elseif ($is_front): ?>
          <h1 class="front-page-heading"><?php print variable_get("front_page_heading","Welcome"); ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($tabs2); ?>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      </div>
      <?php if ($is_front): ?>
        <?php if ($page['front_highlights']): ?>
          <?php print render($page['front_highlights']); ?>
        <?php endif; ?>
      <?php endif; ?>
      <div class="main-content-inner">
        <div class="clearfix">
          <?php print render($page['content']); ?>
        </div>
        <?php print $feed_icons ?>
      </div><!-- /.main-content-inner -->
    </div><!-- /.span8 -->
    <div class="span4 sidebar" id="sidebar">
      <div class="sidebar-inner">
        <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
        <?php endif; ?>
     </div><!-- /.sidebar-inner -->
   </div><!-- /.span4 -->
  </div><!-- /.row -->
  <div class="row footer-row" id="footer">
    <div class="span12 footer">
      <div class="footer-inner">
        <?php if ($footer_menu): ?>
          <div class="footer-menu">
            <?php print render($footer_menu); ?>
          </div>
        <?php endif; ?>
        <?php print render($page['footer']); ?>
        <p>&copy; <?php print date('Y')." ".variable_get("site_name",'').". ";
          global $user;
          if ($user->uid === 0) {
            print l("Administrator login.","user/login");
          } else {
            print l("Log off.","user/logout");
          } ?></p>
      </div>
    </div>
  </div><!-- /.row -->
</div> <!-- /#container -->
