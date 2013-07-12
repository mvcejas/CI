<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
  <!-- BEGIN SIDEBAR MENU -->        
  <ul class="page-sidebar-menu">
    <li>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      <div class="sidebar-toggler hidden-phone"></div>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="hidden">
      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
      <form class="sidebar-search">
        <div class="input-box">
          <a href="javascript:;" class="remove"></a>
          <input type="text" placeholder="Search..." />
          <input type="button" class="submit" value=" " />
        </div>
      </form>
      <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li <?=current_url()==site_url('admin/home') ? 'class="active"' : null;?>>
      <a href="<?=base_url('admin/home');?>">
      <i class="icon-home"></i> 
      <span class="title">Dashboard</span>
      <span class="selected"></span>
      </a>
    </li>
    <li <?=strpos(current_url(),'access')!=FALSE ? 'class="active"' : null;?>>
      <a href="javascript:;">
      <i class="icon-sitemap"></i> 
      <span class="title">Access Levels</span>
      <span class="arrow "></span>
      </a>
      <ul class="sub-menu" <?=strpos(current_url(),'admin/access')!==FALSE ? 'style="display:block"' : null;?>>
        <li <?=current_url()==site_url('admin/access_admin') ? 'class="active"' : null;?>>
          <a href="<?=base_url('admin/access_admin');?>">Admin</a>
        </li>
        <li <?=current_url()==site_url('admin/access_venue') ? 'class="active"' : null;?>>
          <a href="<?=base_url('admin/access_venue');?>">Venue</a>
        </li>
        <li <?=current_url()==site_url('admin/access_promoter') ? 'class="active"' : null;?>>
          <a href="<?=base_url('admin/access_promoter');?>">Promoter</a>
        </li>
      </ul>
    </li>
    <li <?=strpos(current_url(),'report')!=FALSE ? 'class="active"' : null;?>>
      <a href="javascript:;">
        <i class="icon-bar-chart"></i> 
        <span class="title">Reports</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub-menu" <?=strpos(current_url(),'admin/report')!==FALSE ? 'style="display:block"' : null;?>>
        <li <?=current_url()==site_url('admin/report_events') ? 'class="active"' : null;?>>
          <a href="<?=base_url('admin/report_events');?>">Events</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->