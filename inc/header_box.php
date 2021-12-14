<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="h_left">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="まごころの住まいづくり新栄住宅株式会社"></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="まごころの住まいづくり新栄住宅株式会社"></a></p>';
			}
		?>
	</div>
	

	<nav class="h_right">
		<div class="nav_wrap">
			<ul class="top">
				<li>
					<a href="">
						<img src="/images/common/mail_icon_teak.svg" class="pc" alt="">
						<img src="/images/common/mail_icon_white.svg" class="sp" alt="">
						お問い合わせ
						<svg class="sp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#fff;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
					</a>
				</li>
				<li>
					<a href=""><img src="/images/common/book_icon.svg" class="pc" alt="">資料請求<span class="sp">はこちら</span>
						<svg class="sp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#fff;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
					</a>
				</li>
				<li>
					<p class="sp">家づくりについて<br>何でもお気軽にご相談ください</p>
					<a href="tel:053-460-0211"><img src="/images/common/tel_icon.svg" alt="">053-460-0211</a>
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
										<a href="">会社案内</a>
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
		</div>
	</nav>

	<div class="menu" id="nav_menu">
		<span class="line line-t"></span>
		<span class="line line-m"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>

</div>

<div class="float_btm_menu sp">
	<div class="row">
		<div class="col">
			<a href="">
				<img src="/images/common/mail_icon_all_white.svg" alt="">お問い合わせ
			</a>
		</div>
		<div class="col">
			<a href="">
				<img src="/images/common/book_icon_white.svg" alt="">資料請求
			</a>
		</div>
		<div class="col">
			<a href="tel:053-460-0211">
				<img src="/images/common/tel_icon_white.svg" alt="">お電話
			</a>
		</div>
	</div>
</div>