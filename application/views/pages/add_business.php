<div class="row-fluid">
	<div class="span6">
		<?=form_open();?>
			<fieldset>
				<legend>Add your business</legend>
				<div class="control-group">
					<label class="control-label">Establishment Name</label>
					<div class="controls">
					<?=form_input(array('name'=>'Establishment','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Address 1</label>
					<div class="controls">
					<?=form_input(array('name'=>'Address1','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Address 2</label>
					<div class="controls">
					<?=form_input(array('name'=>'Address2','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">City</label>
					<div class="controls">
					<?=form_input(array('name'=>'City','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">State</label>
					<div class="controls">
					<?=form_input(array('name'=>'State','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Postal Code</label>
					<div class="controls">
					<?=form_input(array('name'=>'PostalCode','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<div class="span3">
						<?=form_submit(array('value'=>'Submit','class'=>'btn btn-block'));?>
					</div>
				</div>
			</fieldset>
		<?=form_close();?>
	</div>
</div>