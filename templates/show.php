<?php $title = $post['title'] ?>

<?php ob_start() ?>

<div class="col-md-2">
</div>

<div class="col-md-8" style="text-align: left;">

	<h1><?php echo $post['title'] ?></h1>

	<div class="date"><?php echo $post['date'] ?></div>

	<div class="body">
		<?php echo $post['body'] ?>
	</div>
	
	

</div>
<div class="col-md-2">
</div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
