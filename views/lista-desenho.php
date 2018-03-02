<div class="episodios">
	<?php foreach($episodios as $episodio): ?>
		<div class="episodio">
			<a class="btn btn-episodio" href="<?php echo BASE_URL; ?>episodios/abrirDesenho/<?php echo $episodio['slug']?>/
				<?php echo $episodio['id_desenho']?>/<?php echo $episodio['id_temporada'] ?>">
				<?php echo $episodio['nome']; ?>
			</a>
		</div>
	<?php endforeach; ?>
</div>




