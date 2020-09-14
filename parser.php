<?php
require("simplepie.inc");

$feed = new SimplePie();
$feed->set_feed_url("http://blog.unijimpe.net/feed/");
$feed->set_cache_location("cache");
$feed->init();
$feed->handle_content_type();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SimplePie: Demo by unijimpe</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<strong><?php echo $feed->get_title(); ?></strong><br />
<em><?php echo $feed->get_description(); ?></em>
<ul>
	<?php foreach ($feed->get_items() as $item) { ?>
	<li>
		<a href="<?php echo $item->get_link(); ?>">
			<?php echo $item->get_title(); ?>
		</a>
		<br />
		<?php echo $item->get_description(); ?>
	</li>
	<?php } ?>
</ul>
</body>
</html>