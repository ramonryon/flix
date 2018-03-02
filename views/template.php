<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Flix - Cinema na sua casa</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/materialize.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" media="screen,projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://content.jwplatform.com/libraries/B0jgHhOE.js" ></script>
	<script>jwplayer.key="/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";</script>
</head>

<body>
	
	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.js"></script>
</body>

</html>