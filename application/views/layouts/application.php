<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Welcome to BrandAway</title>
		<link rel="stylesheet" href="<?= $normalize_css; ?>" />
		<link rel="stylesheet" href="<?= $foundation_css; ?>" />
		<link rel="stylesheet" href="<?= $jcrop_css; ?>" type="text/css" />
    	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= $app_css; ?>" />
		<script src="<?= $modernizr_js; ?>"></script>
	</head>
	<body>
		<div id="header">
		</div>
		<div id="content">
	    	<?= $yield; ?>
	    </div>
		<div id="footer">
			<div class="row">
	            2014 WILDFUSION
	        </div>
		</div>
	    <script src="<?= $jquery; ?>"></script>
	    <script src="<?= $foundation_js; ?>"></script>
		<script src="<?= $jcrop_js; ?>"></script>
	    <script type="text/javascript">
	    	$(document).foundation();
	    	$(function() {
	    		
	    	});
	    </script>
	</body>
</html>
