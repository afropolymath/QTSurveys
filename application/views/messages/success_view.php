<?php foreach ($messages as $message): ?>
	<div data-alert class="alert-box success radius">
		<?= $message ?>
		<a href="#" class="close">&times;</a>
	</div>
<?php endforeach ?>
