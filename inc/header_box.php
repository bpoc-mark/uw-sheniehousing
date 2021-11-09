<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="h_left">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
			}
		?>
	</div>
	

	<nav class="h_right">
		<ul class="top">
			<li>
				<a href=""><img src="/images/common/mail_icon_teak.svg" alt="">お問い合わせ</a>
			</li>
			<li>
				<a href=""><img src="/images/common/book_icon.svg" alt="">資料請求</a>
			</li>
			<li>
				<a href=""><img src="/images/common/tel_icon.svg" alt="">053-460-0211</a>
			</li>
		</ul>
		<ul class="bottom">
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>トップ</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>新栄住宅について</a>
			
				<div class="big_menu">
					<div class="row">
						<div class="col">
							<h4>ABOUT</h4>
							<p>新栄住宅について</p>
						</div>
						<div class="col">
							<ul>
								<li>
									<a href="">コンセプト</a>
								</li>
								<li>
									<a href="">ごあいさつ・会社概要</a>
								</li>
								<li>
									<a href="">住まいを作る7つの要素</a>
								</li>
								<li>
									<a href="">採用情報</a>
								</li>
								<li>
									<a href="">経営理念</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<img src="/images/common/img_1.jpg" alt="">
						</div>
					</div>
				</div>
			</li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>呼吸する住まい</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>住まい教室・見学会</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>施工事例</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>モデルハウス</a></li>
		</ul>
	</nav>

</div>
