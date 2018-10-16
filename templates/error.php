	<?php $title = '404 Not Found' ?>

<?php ob_start() ?>

<div class="col-md-4">
</div>

<div class="col-md-4" style="text-align: center;">
		<H1>ERROR #404</H1>
		<P>Esta pagina no existe.</P>
</div>

<div class="col-md-4">
</div>



<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>