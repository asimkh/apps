    
<?php $__env->startSection('content'); ?>


<h1>Give Shout!</h1>

<p>
We are always excited to talk to new people. Feel free to give us a shout.
</p>





<?php if($errors->any()): ?>
    <div class="alert alert-danger">
     <h3>Uh Oh!</h3>
      <ul>
    <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; ?>
</ul>
    </div>
<?php endif; ?>



<?php echo e(Form::open(array('route' => 'submit_shout', 'class' => 'form'))); ?>


<div class="form-group">
<?php echo e(Form::label('contactName','Name:')); ?>

<?php echo e(Form::text('contactName', null, 
			   array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name'))); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('contactEmail','Email:')); ?>

<?php echo e(Form::text('contactEmail', null,  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your email address'))); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('contactMessage','Message:')); ?>

<?php echo e(Form::textarea('contactMessage', null,  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message'))); ?>

</div>

<div class="form-group">
<?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary' ])); ?>

</div>

<?php echo e(Form::close()); ?>


<p>
Please keep these guidelines in mind:
</p>



<dl>
  <dt>Explain yourself. </dt>
  <dd>What were you doing when you encountered a problem? If you’re confused or unhappy about something, please explain why.</dd>
</dl>

<dl>
  <dt>Be specific.</dt>
  <dd>Provide a URL, a very detailed description, or a screenshot of the error so we know exactly what you’re talking about and don’t have to ask for clarification.</dd>
</dl>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>