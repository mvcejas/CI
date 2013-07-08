<div class="row-fluid">
	<div class="span6">
		<?=form_open();?>
			<fieldset>
				<legend>Login</legend>
				<div class="control-group">
					<label class="control-label">Email</label>
					<div class="controls">
					<?=form_input(array('name'=>'firstname','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Password</label>
					<div class="controls">
					<?=form_password(array('name'=>'password','class'=>'span12'));?>
					</div>
				</div>
				<div class="control-group">
					<div class="span3">
						<?=form_submit(array('value'=>'Login','class'=>'btn btn-block'));?>
					</div>
				</div>
			</fieldset>
		<?=form_close();?>
	</div>
</div>