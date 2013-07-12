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
    <div class="row-fluid">
      <div class="span12">
        <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption"><i class="icon-calendar"></i> Events</div>
              <div class="tools">
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body flip-scroll" style="display: block;">
              <table class="table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                  <tr>
                    <th>Code</th>
                    <th>Company</th>
                    <th class="numeric">Price</th>
                    <th class="numeric">Change</th>
                    <th class="numeric">Change %</th>
                    <th class="numeric">Open</th>
                    <th class="numeric">High</th>
                    <th class="numeric">Low</th>
                    <th class="numeric">Volume</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

  </div>   
  <!-- END PAGE CONTAINER-->