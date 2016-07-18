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
