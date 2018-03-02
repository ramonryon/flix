<div class="itens">
	<?php foreach($desenhos as $desenho): ?>
		<div class="item">
			<a href="<?php echo BASE_URL; ?>desenho/<?php echo $desenho['slug']; ?>">
				<img src="<?php echo BASE_URL; ?>assets/img/desenhos/<?php echo $desenho['capa']; ?>" alt="" draggable="false" class="mx-auto d-block img-fluid">
				<h3 class="item-headline"><?php echo $desenho['nome']; ?></h3>
			</a>
		</div>
	<?php endforeach; ?>
</div>