<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<!--form for create,edit created with scaffold-->

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($sensor) ? $sensor->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Unit', 'unit', array('class'=>'control-label')); ?>

				<?php echo Form::input('unit', Input::post('unit', isset($sensor) ? $sensor->unit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Unit')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
