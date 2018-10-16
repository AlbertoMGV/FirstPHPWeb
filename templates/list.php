	<?php $title = 'Presentaciones' ?>

<?php ob_start() ?>

<div class="col-md-1">
</div>

<div class="col-md-5" style="text-align: left;">
	<h1>Presentaciones</h1>
	<ul>
		<?php foreach ($posts as $post): ?>
			<li>
				<a href="/show.php?id=<?php echo $post['id'] ?>">
					<?php
					echo '<div style="Color: black;font-size:18px;">'.$post['title'].'</div>';
					?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>	            
</div>

<div class="col-md-5" style="text-align: left;">
	<h1>Añadir Post</h1>
	<form action="add.php" method="post">
		<fieldset>            
			<label for="name" style="color: black;">Coche: </label>
		</fieldset>
		<input type="text" name="name" maxlength="30" id="name" size="28" style="color: black;"/>
		<fieldset>
			<label for="pw" style="color: black;">Información: </label>
		</fieldset>
		<input type="text" name="info" maxlength="1000" id="info" size="28" style="color: black;"/>
		<fieldset>
			<input class="button" type="submit" value="Post!" id="users" style="color: black;"/>
			<?php $kp ?>
		</fieldset>
    </form>

</div>

<div class="col-md-1">
</div>



<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>