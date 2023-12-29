<?php
           if (count($errors) > 0) : ?>
           	 <div>
           	 	<?php foreach ($errors as $error) : ?>
           	 		<p style="margin: 0; text-align: center; color: red;"><?php echo $error ?></p>
                <?php endforeach ?>
           	 </div>
          
<?php endif	?>
