<div class="well">
	<h3>Discover your nearest trip!</h3>
	<div class="row-fluid">
		<?=form_open(base_url('search'),array('method'=>'get','class'=>'form-inline'));?>
			<?=form_input(array('name'=>'q','placeholder'=>'Search ...','class'=>'span10'));?>
			<?=form_submit(array('value'=>'Explore!','class'=>'btn span2'));?>
		<?=form_close();?>
	</div>
</div>

<div class="row-fluid">
	<div id="map_canvas" class="span12">
	</div>			
</div>