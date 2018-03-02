<div class="episodios">
	
	<?php foreach($episodios as $episodio): ?>
		<div class="episodio">
			<a class="btn btn-episodio" href="<?php echo BASE_URL; ?>episodios/abrirSerie/<?php echo $episodio['id']?>/
				<?php echo $episodio['id_serie']?>/<?php echo $episodio['id_temporada'] ?>">
				<?php echo $episodio['nome']; ?>
			</a>
		</div>
	<?php endforeach; ?>

</div>
