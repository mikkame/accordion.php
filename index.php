<?php
$max_animate_count = 10;

function e($s)
{
    echo htmlspecialchars($s);
}

?>
<html>
	<head>
		<?php if(isset($_GET['frame']) && $_GET['frame'] < $max_animate_count && 0 < $_GET['frame'] ): ?><meta http-equiv="refresh" content="0.1;URL=http://<?php e($_SERVER["HTTP_HOST"] . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH).'?'.http_build_query(array_merge($_GET,['frame' => $_GET['frame']+ (isset($_GET['d']) && $_GET['d'] === 'close' ? -1 : 1) ])));?>" />
		<?php endif; ?>
	</head>
	<body>
		<div style="border: solid 1px black; height:">
			<?php if(!isset($_GET['frame']) || $_GET['frame'] === '0'): ?>
			<a href="?d=open&frame=1" style="">開く</a>
			<?php else: ?>
			<a href="?d=close&frame=9" style="">閉じる</a>
			<?php endif; ?>
			 
			<ul style="height: <?php e(($_GET['frame'] ?? 0 )*10); ?>px;overflow: hidden;background: lightgray;margin: 0">
				<li>トップ</li>
				<li>アバウト</li>
				<li>プライバシーポリシー</li>
				<li>クソアプ</li>
			</ul>
		</div>
	</body>

</html>