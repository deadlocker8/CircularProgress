<!doctype html>
<?php
$backgroundColor = "#FFFFFF";
$fontColor = "#444444";

$items = array(
	array("title" => "Codera", "percentage" => "100", "size" => "35", "progressColor" => "#81c784", "strokeWidth" => "8"),
	array("title" => "LicenseManagerWeb", "percentage" => "70", "size" => "35", "progressColor" => "#81c784", "strokeWidth" => "8"),
	array("title" => "LicenseManagerClient", "percentage" => "40", "size" => "35", "progressColor" => "#81c784", "strokeWidth" => "8"),
	array("title" => "VideoShowCase", "percentage" => "65", "size" => "35", "progressColor" => "#81c784", "strokeWidth" => "8")
);

function hex2rgb($hex)
{
	$hex = str_replace("#", "", $hex);

	if(strlen($hex) == 3)
	{
		$r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
		$g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
		$b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
	}
	else
	{
		$r = hexdec(substr($hex, 0, 2));
		$g = hexdec(substr($hex, 2, 2));
		$b = hexdec(substr($hex, 4, 2));
	}
	$rgb = array($r, $g, $b);
	return $rgb;
}

$rgb = hex2rgb($backgroundColor);
$progressBackgroundColor = 'rgba('.$rgb[0].', '.$rgb[1].', '.$rgb[2].', 0.8)';

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Progress</title>
	<link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: <?php echo $backgroundColor; ?>; color: <?php echo $fontColor; ?>;">
<table>
	<tr>
		<td class="headline">Current Projects</td>
	</tr>
	<tr>
		<td>
			<ul class="progress">
				<?php
					for($i = 0; $i < sizeof($items); $i++)
					{
						$item = $items[$i];

						echo '<li data-percent="' . $item["percentage"] . '%" id="item-'.$i.'">' .
							'<svg viewBox="-10 -10 220 220" style="width: ' . $item["size"] . 'vmin; height: ' . $item["size"] . 'vmin;">' .
							'<g fill="none" stroke-width="' . $item["strokeWidth"] . '" transform="translate(100,100)">' .
							'<path d="M 0,-100 A 100,100 0 0,1 0,100" stroke="' . $item["progressColor"] . '"/>' .
							'<path d="M 0,100 A 100,100 0 0,1 -0,-100" stroke="' . $item["progressColor"] . '"/>' .
							'</g>' .
							'</svg>' .
							'<svg viewBox="-10 -10 220 220" style="width: ' . $item["size"] . 'vmin; height: ' . $item["size"] . 'vmin; stroke: ' . $progressBackgroundColor . ';">' .
							'<path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" '.
							'stroke-dashoffset="' . ($item["percentage"] / 100) * 629 . '"></path>' .
							'</svg>' .
							'<style>' .
							'#item-'.$i.':after {' .
							'font-size: ' . ($item["size"] / 6) . 'vmin; top: ' . (($item["size"]) - ($item["size"] / 5)) / 2 . 'vmin;' .
							'}' .
							'</style>' .
							'<div class="progress-title" style="font-size: ' . ($item["size"] / 10) . 'vmin;">'.$item["title"].'</div>' .
							'</li>';
					}
				?>
			</ul>
		</td>
	</tr>
</table>
</body>
</html>