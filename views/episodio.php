


<!-- 
<a class="btn btn-temporada" href="<?php echo BASE_URL; ?>">Inicio</a>
<div class="video">
	<video width="640" height="425" controls audioTracks videoTracks>
		<source src="<?php echo $episodio['url'] ?>">
	</video>
</div> -->
<div class="video">
	<h1 class="tit-ep"><?php echo $episodio['nome']; ?></h1>
	<div id="myElement" class="player">Loading the player...</div>
	<script type="text/javascript">
		var playerInstance = jwplayer("myElement")
		playerInstance.setup({
			playlist: [{
				primary: "html5",
				title:"<?php echo $episodio['nome']; ?>",
				image: "<?php echo BASE_URL; ?>assets/img/<?php echo $episodio['capa']; ?>",				
				sources: [{
					file: "<?php echo $episodio['url_d']; ?>",
					label: "D"
				},{
					file: "<?php echo $episodio['url_l']; ?>",
					label: "L"
				}]		
			}]
		});

	</script>

	<script type="text/javascript">
		var playerInstance = jwplayer("myElement")
		playerInstance.setup({
			playlist: [
			<?php foreach($episodios as $episodio): ?>{
				primary: "html5",
				title: "<?php echo $episodio['nome']; ?>",
				image: "<?php echo BASE_URL; ?>assets/img/<?php echo $episodio['capa']; ?>",
				file: "https://ramonryon.tk/flix/<?php echo $episodio['url']; ?>",
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

		<script type="text/javascript">


		// Start Playlist Shelf Example
		function initOutPlayer(playlistId) {
			var playerInstance = jwplayer('myElement')
			.setup({
				displaytitle: false,
				logo: false,
				autostart: false,
				width: '100%',
				aspectratio: '16:9',
				visualplaylist: false,
				playlist: [
			<?php foreach($episodios as $episodio): ?>{
				primary: "html5",
				title: "<?php echo $episodio['nome']; ?>",
				image: "<?php echo BASE_URL; ?>assets/img/<?php echo $episodio['capa']; ?>",
				file: "http://ramonryon.tk/<?php echo $episodio['url']; ?>"					
				sources: [{
					file: "<?php echo $episodio['url_d']; ?>",
					label: "D",
				},{
					file: "<?php echo $episodio['url_l']; ?>",
					label: "L"
				},{
					file: "<?php echo BASE_URL; echo $episodio['url']; ?>",
					label: "P",
				}],
			},
			<?php endforeach; ?>
			]
			});

			initPlaylist(playerInstance);
		}

		function initPlaylist(player) {
			$.ajax(player.getPlaylist()).then(function(data) {
				var playlistWrapper = $('.playlist-wrapper');
				var playlistTemplate = Handlebars.compile($('#out-player-playlist-template').html());
				playlistWrapper.html(playlistTemplate(data));

				playlistWrapper.on('click', '.playlist-item-link', setVideo.bind(this, data.playlist, player));
				player.on('playlistItem', setActive);
			});
		}

		function setVideo(playlist, player, e) {
			var currentVideo = $(e.target).closest('a').data('mediaid');
			var videoIndex = playlist.findIndex(function(video) {
				return currentVideo === video.mediaid;
			});

			e.preventDefault();

			player.playlistItem(videoIndex);
		}

		function setActive(e) {
			var id = e.item.mediaid;

			$('.playlist-item-link').removeClass('active')
			.filter(function(item) {
				return $(this).data('mediaid') === id;
			})
			.addClass('active');
		}

		initOutPlayer('6tYY3mSy');
		// End Playlist Shelf Example

		</script>
</div>


