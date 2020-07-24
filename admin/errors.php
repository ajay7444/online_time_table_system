<?php  if (count($errors) > 0) : ?>
	<div class="w3-panel w3-red">
		<?php foreach ($errors as $error) : ?>
			 <p class="w3-text-white"><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
