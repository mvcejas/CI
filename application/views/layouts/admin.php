<?=$this->load->view('layouts/header');?>

  <div class="page-container">
    <?=$this->load->view('layouts/sidebar');?>
    <div class="page-content">
      <?=$this->load->view($template);?>
    </div><!--/.page-content-->
  </div><!--/.page-container-->
<?=$this->load->view('layouts/footer');?>