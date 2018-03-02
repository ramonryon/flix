<div class="itens">
	<?php foreach($series as $serie): ?>
		<div class="item">
			<a href="<?php echo BASE_URL; ?>serie/<?php echo $serie['slug']; ?>">
				<img src="<?php echo BASE_URL; ?>assets/img/series/<?php echo $serie['capa']; ?>" alt="" draggable="false" class="mx-auto d-block img-fluid">
				<h3 class="item-headline"><?php echo $serie['nome']; ?></h3>
			</a>
		</div>
	<?php endforeach; ?>
</div>

