<h3><?php echo $info['nome']; ?></h3>
<p><?php echo $info['descricao']; ?></p>

<div class="temporadas">
	<?php foreach ($temporadas as $temporada): ?>
		<a href="<?php echo BASE_URL; ?>desenho/<?php echo $info['slug'] ?>/<?php echo $info['id'] ?>/<?php echo $temporada['id'] ?>" class="btn btn-temporada"><?php echo $temporada['nome']; ?></a>
	<?php endforeach; ?>
</div>


