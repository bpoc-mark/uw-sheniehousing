<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<!-- Slider main container -->
					<div class="swiper sect1_swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide slide-img-1"></div>
							<div class="swiper-slide slide-img-2"></div>
							<div class="swiper-slide slide-img-3"></div>
							<div class="swiper-slide slide-img-4"></div>
						</div>
					</div>
					<div class="container">
						<h2>呼吸する<br>住まい</h2>
						<p>豊かで幸せに暮らせる家</p>
					</div>
					<div class="banner pc">
						<a class="close"></a>
						<a href="" class="link">
							<img src="/images/top/sect_1/banner.jpg" alt="家を建てる前に知ってほしい、新栄住宅の | 住まい教室 | 基本情報やローンの事、構造・素材など 住まいづくりの前に知りたい情報が満載！">
						</a>
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<h3 class="c-anim-up">
							<p>家を建てるまえに知ってほしい。</p>
							新栄住宅の住まい教室&<br class="sp">家づくりイベント
						</h3>
						<ul class="post-wrap">
							<li class="post_row c-anim-up">
								<a href="" class="post">
									<figure>
										<img src="/images/top/sect_2/img_1.jpg" alt="床下エアコン体感会開催します！">
									</figure>
									<div class="post_info">
										<h4 class="post_info_title">床下エアコン体感会開催します！</h4>
										<p class="post_info_excerpt">家中がどこでも快適に暮らせる「床下エアコン」をご体感して<br>頂けます。</p>
										<p class="post_info_date">開催日：2021年8月29日（日）</p>
									</div>
								</a>
							</li>
							<li class="post_row c-anim-up">
								<a href="" class="post">
									<figure>
										<img src="/images/top/sect_2/img_2.jpg" alt="住まい教室・見学会">
									</figure>
									<div class="post_info">
										<h4 class="post_info_title">住まい教室・見学会</h4>
										<p class="post_info_excerpt">家中がどこでも快適に暮らせる「床下エアコン」をご<br>体感して頂けます。</p>
										<p class="post_info_date">開催日：2021年8月29日（日）</p>
									</div>
								</a>
							</li>
							<li class="post_row c-anim-up">
								<a href="" class="post">
									<figure>
										<img src="/images/top/sect_2/img_3.jpg" alt="住まい教室・見学会">
									</figure>
									<div class="post_info">
										<h4 class="post_info_title">住まい教室・見学会</h4>
										<p class="post_info_excerpt">家中がどこでも快適に暮らせる「床下エアコン」をご<br>体感して頂けます。</p>
										<p class="post_info_date">開催日：2021年8月29日（日）</p>
									</div>
								</a>
							</li>
						</ul>
						<div class="post_viewmore c-anim-up">
							<a href="" >VIEW<br>MORE</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="container">
						<div class="p_header c-anim-up">
							<h3 class="p_header--title white">INFORMATION</h3>
							<p class="p_header--desc white">お知らせ</p>
						</div>
						<div class="post_wrap row">
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_3/img_1.jpg" alt="完成見学会が終了しました。">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">完成見学会が終了しました。</h4>
											<p class="post_info--date">2021.06.28</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_3/img_2.jpg" alt="完成見学会が終了しました。">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">完成見学会が終了しました。</h4>
											<p class="post_info--date">2021.06.28</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_3/img_3.jpg" alt="完成見学会が終了しました。">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">完成見学会が終了しました。</h4>
											<p class="post_info--date">2021.06.28</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_3/img_4.jpg" alt="完成見学会が終了しました。">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">完成見学会が終了しました。</h4>
											<p class="post_info--date">2021.06.28</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="post_viewmore c-anim-up">
							<a href="" >VIEW<br>MORE</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<img src="/images/top/sect_4/img_1.jpg" class="sp c-anim-up" alt="人生が豊かで幸せであるために、安心な暮らしを創造する。">
							</div>
							<div class="col">
								<div class="txt_cont">
									<h3 class="c-anim-up">人生が豊かで<br class="sp">幸せであるために、<br>安心な暮らしを創造する。</h3>
									<p class="c-anim-up">家づくりとは「家」を購入することではありません。豊かで幸せな暮らしを叶えてくれる住宅会社への「信頼」を購入することです。<br>新栄住宅な、半世紀に及ぶ豊富な経験で培った設計力と技術力、そして自然素材の力を駆使し、お客様からの「信頼」に期待以上の仕上がりでお応えします。</p>
									<ul class="list_btn c-anim-up">
										<li>
											<a href="" class="btn_link">新栄住宅の<br class="pc">コンセプト
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
										</a>
										</li>
										<li>
											<a href="" class="btn_link">住まいを作る<br class="pc">7つの要素
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
										</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="img_cont pc c-anim-up">
							<img src="/images/top/sect_4/img_1.jpg" alt="人生が豊かで幸せであるために、安心な暮らしを創造する。">
						</div>
					</div>
				</div>
			</section>
			<section class="sect_5">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="txt_cont">
									<h3 class="c-anim-up">呼吸する<br>住まい</h3>
									<h4 class="c-anim-up">「断熱」と「調湿」を両立した快適で<br>長持ちする住まいづくり。</h4>
									<p class="c-anim-up">あなたはどんな家に住みたいですか？デザイン、構造、間取り、収納など、どれも重要な要素ですが新栄住宅が最もこだわって提案しているのが「断熱」と「調湿」の両立を可能にした“呼吸する住まい”です。</p>
									<ul class="list_btn c-anim-up">
										<li>
											<a href="" class="btn_link">呼吸する住まいとは？
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
											</a>
										</li>
									</ul>
								</div>
								<div class="img_cont sp">
									<div class="row">
										<div class="col c-anim-up">
											<img src="/images/top/sect_5/img_1.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
										</div>
										<div class="col c-anim-up">
											<img src="/images/top/sect_5/img_2.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
										</div>
										<div class="col c-anim-up">
											<img src="/images/top/sect_5/img_3.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
										</div>
									</div>
								</div>
							</div>
							<div class="col"></div>
						</div>
						<div class="img_cont pc">
							<div class="row">
								<div class="col c-anim-up">
									<img src="/images/top/sect_5/img_1.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
								</div>
								<div class="col c-anim-up">
									<img src="/images/top/sect_5/img_2.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
								</div>
								<div class="col c-anim-up">
									<img src="/images/top/sect_5/img_3.jpg" alt="「断熱」と「調湿」を両立した快適で 長持ちする住まいづくり。">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_6">
				<div class="wrapper">
					<div class="container c-anim-up">
						<a href="">
							<!-- <img src="/images/top/sect_6/img_1.png" class="sect_6_img pc" alt="JR天竜川駅から 徒歩5分！ | 呼吸する住まいみらい | 日本の住まいの持つ美しさと 木のぬくもりの中で永く快適に暮らせる住まいを。 | SBSマイホームセンター | 浜松展示場 | 浜松市南区青谷町400 | 予約不要！| ご自由にお越し下さい | モデルハウス">
							<img src="/images/top/sect_6/sp/img_1.png" class="sect_6_img sp" alt="JR天竜川駅から 徒歩5分！ | 呼吸する住まいみらい | 日本の住まいの持つ美しさと 木のぬくもりの中で永く快適に暮らせる住まいを。 | SBSマイホームセンター | 浜松展示場 | 浜松市南区青谷町400 | 予約不要！| ご自由にお越し下さい | モデルハウス"> -->
							<picture class="img_1">
								<source srcset="/images/top/sect_6/img_1.png" media="(min-width: 900px)">
								<img src="/images/top/sect_6/sp/img_1.png" alt="JR天竜川駅から 徒歩5分！ | 呼吸する住まいみらい | 日本の住まいの持つ美しさと 木のぬくもりの中で永く快適に暮らせる住まいを。 | SBSマイホームセンター | 浜松展示場 | 浜松市南区青谷町400 | 予約不要！| ご自由にお越し下さい | モデルハウス">
							</picture>
							<picture class="img_1_hover pc">
								<source srcset="/images/top/sect_6/img_1_hover.png" media="(min-width: 900px)">
								<img src="/images/top/sect_6/sp/img_1.png" alt="JR天竜川駅から 徒歩5分！ | 呼吸する住まいみらい | 日本の住まいの持つ美しさと 木のぬくもりの中で永く快適に暮らせる住まいを。 | SBSマイホームセンター | 浜松展示場 | 浜松市南区青谷町400 | 予約不要！| ご自由にお越し下さい | モデルハウス">
							</picture>
						</a>
					</div>
				</div>
			</section>
			<section class="sect_7">
				<div class="wrapper">
					<div class="container">
						<div class="p_header c-anim-up">
							<h3 class="p_header--title teak">WORKS</h3>
							<p class="p_header--desc">施工事例</p>
						</div>
						<div class="post_wrap row">
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_7/img_1.jpg" alt="東区半田町 彩良の家">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">東区半田町 彩良の家</h4>
											<p class="post_info--excerpt">子育て家族を優しく包む 無垢の温もりに心がなごむ家</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_7/img_2.jpg" alt="東区半田町 彩良の家">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">南区若林町 心癒の家</h4>
											<p class="post_info--excerpt">住まうほどに味わいが増す、快適さとリラックス出来る空間に心も体も癒される家</p>
										</div>
									</div>
								</a>
							</div>
							<div class="col c-anim-up">
								<a href="">
									<div class="post">
										<figure class="post_img">
											<img src="/images/top/sect_7/img_3.jpg" alt="東区半田町 彩良の家">
										</figure>
										<div class="post_info">
											<h4 class="post_info--title">中区高丘北 楽々の家</h4>
											<p class="post_info--excerpt">家族と程良い距離で繋がる、1人の時間も家族の時間もゆったりと楽しめる家事も楽々な家</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="post_viewmore c-anim-up">
							<a href="" >VIEW<br>MORE</a>
						</div>
						<ul class="list_btn c-anim-up">
							<li>
								<a href="" class="btn_link">ごあいさつ・会社概要
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
								</a>
							</li>
							<li>
								<a href="" class="btn_link">経営理念
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="sect_8">
				<div class="wrapper">
					<div class="container sp c-anim-up">
						<img src="/images/top/sect_8/banner.jpg" alt="家を建てる前に知ってほしい、新栄住宅の | 住まい教室 | 基本情報やローンの事、構造・素材など 住まいづくりの前に知りたい情報が満載！">
					</div>
					<div class="container">
						<div class="row">
							<div class="col">
								<img src="/images/top/sect_8/img_1.png" class=" c-anim-up" alt="新栄住宅の想いがギュッとつまったカタログをご用意しております！">
								<p class="c-anim-up">新栄住宅の想いが<br class="sp">ギュッとつまった<br>カタログをご用意しております！</p>
								<a href="" class="c-anim-up">
									資料請求はこちら
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg>
								</a>
							</div>
							<div class="col">
								<h3 class="c-anim-up">家づくりについて<br class="pc">何でも<br class="sp">お気軽にご相談ください</h3>
								<a href="tel:053-460-0211" class="tel c-anim-up"><img src="/images/common/tel_icon.svg" alt="">053-460-0211</a>
								<a href="" class="btn_inquiry c-anim-up"><img src="/images/common/mail_icon_white.svg" alt="">お問い合わせ <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.35 10.08"><defs><style>.cls-1{fill:none;stroke-width:1.23px;}.cls-1,.cls-2{stroke:#dd7e22;stroke-linecap:round;stroke-linejoin:round;}.cls-2{fill:#dd7e22;stroke-width:0.87px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="0.61" y1="5.04" x2="10.14" y2="5.04"/><polygon class="cls-2" points="16.91 5.04 10.6 0.44 10.6 9.64 16.91 5.04"/></g></g></svg></a>
								<h4 class="c-anim-up">新栄住宅株式会社</h4>
								<p class="c-anim-up">［本社］<br class="sp"> 〒432-8058 静岡県浜松市南区新橋町410-6<br>［事務所］<br class="sp"> 〒432-8051 静岡県浜松市南区若林町22<br>［モデルハウス］<br class="sp"> 〒435-0037 静岡県浜松市南区青屋町400</p>
							</div>
						</div>
					</div>
					<img class="border_btm c-anim-up" src="/images/top/sect_8/border_img.svg" alt="">
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

	<script>
		const swiper = new Swiper('.sect1_swiper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 2000,
			autoplay: {
				delay: 3000,
			},
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
		});
	</script>

	<script>
		$('.banner a').click(function(){
			$('.banner').hide()
		})
		
		// $('.sect_6_img').hover(
		// 	function(){
		// 		var src = '/images/top/sect_6/img_1_hover.png';
		// 		$(this).fadeTo(300,0.9, function() {
		// 			$(this).attr("src",src);
		// 		}).fadeTo(300,1);
		// 	},
		// 	function(){
		// 		var src = '/images/top/sect_6/img_1.png';
		// 		$(this).fadeTo(300,0.9, function() {
		// 			$(this).attr("src",src);
		// 		}).fadeTo(300,1);
		// 	},
		// )
	</script>

</body>

</html>
