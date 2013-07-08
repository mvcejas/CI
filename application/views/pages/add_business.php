<div class="row-fluid">
	<div class="span3">
		<div class="well">
			<h1><a href="<?=base_url();?>">Happy Trip</a></h1>
		</div>
		<div class="well">
			<ul class="nav">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
			</ul>
		</div>
	</div><!--/.span3-->

	<div class="span9">
		<div class="row-fluid">
			<?=form_open('',array('class'=>'form-horizontal'));?>
				<fieldset>
					<legend>Sign Up!</legend>
					<div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls">
						<?=form_input(array('name'=>'firstname','class'=>'span12'));?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Last Name</label>
						<div class="controls">
						<?=form_input(array('name'=>'lastname','class'=>'span12'));?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
						<?=form_input(array('name'=>'email','class'=>'span12'));?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Password</label>
						<div class="controls">
						<?=form_password(array('name'=>'password','class'=>'span12'));?>
						</div>
					</div>
					<div class="form-actions">
						<?=form_submit(array('value'=>'Sign Up!','class'=>'btn'));?>
					</div>
				</fieldset>
			<?=form_close();?>
		</div>
	</div><!--/.span9-->
</div><!--/.row-fluid-->