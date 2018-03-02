<div class="video">
	<h1 class="tit-ep" id="nowplaying"></h1>
	<div id="myElement" class="player">Loading the player...</div>
	<script type="text/javascript">
		var playerInstance = jwplayer("myElement")
		playerInstance.setup({
			playlist: [
			<?php foreach($episodios as $episodio): ?>{
				primary: "html5",
				title: "<?php echo $episodio['nome']; ?>",
				image: "<?php echo BASE_URL; ?>assets/img/<?php echo $episodio['capa']; ?>",
				file: "https://ramonryon.tk/flix/<?php echo $episodio['url']; ?>",
				sources: [{
					file: "<?php echo $episodio['url_d']; ?>",
					label: "D",
				},{
					file: "<?php echo $episodio['url_l']; ?>",
					label: "L",
				},{
					file: "https://ramonryon.tk/flix/<?php echo $episodio['url']; ?>",
					label: "P",
				}]	
			},
			<?php endforeach; ?>
			]
		});

		playerInstance.addButton(

			"http://www.redecanais.com/player3/baixar.png",

			"Download",

			function() {

				window.location.href = playerInstance.getPlaylistItem()['file'];

			},

			"download"

			);

		</script>
	</div>
