  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->   
        <h3 class="page-title">
          <?=$page_title;?>
        </h3>
        <ul class="breadcrumb">
          <li>
            <i class="icon-home"></i>
            <a href="<?=base_url();?>">Home</a> 
            <span class="icon-angle-right"></span>
          </li>
          <li><a href="<?=current_url();?>"><?=$page_name;?></a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB--> 
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- CONTENT BODY GOES HERE >>>> -->
    <?php var_dump(strpos(current_url(),'access'));?>
  </div>   
  <!-- END PAGE CONTAINER-->