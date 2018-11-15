<?php include 'header.php'?>

	<section id="fh5co-home" data-section="home">
        <div class="owl-carousel owl-theme nk">
            <div class="item"><img class="img-responsive" src="images/full-<?=($mobile?'m-':'')?>1.jpg"></div>
            <div class="item"><img class="img-responsive" src="images/full-<?=($mobile?'m-':'')?>2.jpg"></div>
            <div class="item"><img class="img-responsive" src="images/full-<?=($mobile?'m-':'')?>3.jpg"></div>
            <div class="item"><img class="img-responsive" src="images/full-<?=($mobile?'m-':'')?>4.jpg"></div>
        </div>
		<div class="gradient"></div>
		<div class="container" style="top:0;position:absolute;width:100%">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-12 text-center bn">
                            <?php if (!$mobile){?>
                            <h1 class="to-animate-off"><div class="aa">សមាគមនិស្សិតខ្មែរនៅប្រទេសជប៉ុន</div><div class="a">在日カンボジア留学生協会</div><div class="b">Cambodian Students Association in Japan</div></h1>
							<?php } else {?>
                            <h1 class="to-animate-off"><div class="b"><?=la('Cambodian Students Association in Japan', '在日カンボジア留学生協会', 'សមាគមនិស្សិតខ្មែរនៅប្រទេសជប៉ុន')?></div></h1>
                            <?php }
/*
							<div class="call-to-action"><a href="register.php" class="download to-animate-off"><i class="far fa-user"></i> <?=la('Become a CSAJ Member','CSAJ会員になる','ក្លាយជាសមាជិករបស់ CSAJ')?></a>
							</div>*/
                    ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section id="fh5co-trusted" data-section="sponsor">
        <div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate-off"><span><?=la('Sponsor', 'スポンサー','អ្នកឧបត្ថម្ភ')?></span></h2>
					</div>
				</div>
				<div class="row">
                    <?php $as = mysqli_query($conn, "SELECT * FROM sponsors ORDER BY sort");
                                $count = 0;
while ($a = mysqli_fetch_assoc($as)){
    $count++;
                    $src = ($mobile && file_exists("sponsors/".$a['id']."-2.jpg")?"sponsors/".$a['id']."-2.jpg":"sponsors/".$a['id'].".jpg")?>
					<div class="col-md-3 col-xs-6 text-center">
						<div class="box-services">
							<div class="icon to-animate-off">
                                <a target="_blank" href="<?=$a['url']?>">
								    <img <?=($a['height']>0&&!$mobile?'height="'.$a['height'].'"':'')?> class="sponsor-img" src="<?=$src?>">
                                </a>
							</div>
						</div>
					</div>
<?php }?>
					
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-services" class="fh5co-bg-color" data-section="event">
		<div class="core-features">
			<div data-fancybox="gallery" href="images/charity.jpg" class="upc grid2 to-animate-off grid3" style="background-image: url(images/charity.jpg);">
			</div>
    <?php /*?>
      <div data-fancybox="gallery" href="images/Slide2.JPG" class="upc grid2 to-animate-off grid3" style="background-image: url(images/Slide2.JPG);">
			</div>
      <?php */?>
      
      <?php $a = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM event ORDER BY id DESC LIMIT 1"));
      ?>
			<div class="grid2 fh5co-bg-color grid3" style="border-top:3px solid #eee;">
				<div class="core-f">
					<h2 class="ev-h2" class="to-animate-off"><?=$a['title_'.$lang]?></h2>
					<div class="row">
				        <div class="core">
								<i class="fa fa-calendar-alt to-animate-off-2"></i>
								<div class="fh5co-post to-animate-off">
									<h3><?=la('Time','時間','ពេលវេលា')?></h3>
									<p><?=$a['time_'.$lang]?></p>
								</div>
							</div>
							<div class="core">
								<i class="fa fa-map-marker-alt to-animate-off-2"></i>
								<div class="fh5co-post to-animate-off">
									<h3><?=la('Place','場所','ទីកន្លែង')?></h3>
									<p><?=$a['place_'.$lang]?></p>
								</div>
							</div>
                            <div class="core">
								<i class="fa fa-money-bill-alt to-animate-off-2"></i>
								<div class="fh5co-post to-animate-off">
									<h3><?=la('Fee','会費','តម្លៃ')?></h3>
									<p><?=($a['fee']!=''?$a['fee'].la(' yen', ' 円', ' យ៉េន'):la('Free', '無料', 'Free'))?></p>
								</div>
							</div>
                        <?php if (!$mobile && $a['detail_'.$lang] != ''){?>
						    <div class="core">
								<i class="fa fa-check-circle to-animate-off-2"></i>
								<div class="fh5co-post to-animate-off">
                                    <p><?=$a['detail_'.$lang]?></p>
								</div>
							</div>
                        <?php }?>
					</div>
				</div>
			</div>
 
            <div class="grid2 fh5co-bg-color grid3" style="border-top:3px solid #eee;">
				<div class="core-f">
					<h2 class="ev-h2" class="to-animate-off"><?=la('Job Opportunity', '求人情報', 'ឱកាសការងារ')?></h2>
					<div class="row">
                        <?php $as = mysqli_query($conn, "SELECT * FROM jobs ORDER BY id DESC");
                 while ($a = mysqli_fetch_assoc($as)) {?>
				        <div class="core">
                            <i class="fa fa-align-justify to-animate-off-2"></i>
                            <div class="fh5co-post to-animate-off">
                                <?=$a['text']?>
                            </div>
                        </div>
                        <?php }?>
					</div>
				</div>
			</div>
      
		</div>
    <div style="margin-left:10%;margin-top:20px">
      <a style="" href="http://csaj-khmer.org/essaycontest/2015/index.html">CSAJ Essay Contest 2015</a>
    </div>
	</section>
<?php if (!$mobile) {?>
    <style>
        .grid3{
            width: 31.3% !important;
            margin: 0 1%;;
        }
    </style>
<?php }?>
	<section id="fh5co-testimony" class="fh5co-bg-color" data-section="activity">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate-off"><span><?=la('Activity', '活動','សកម្មភាព')?></span></h2>
				</div>
			</div>
			<?php include 'blog_row.php'?>
		</div>
	</section>

	
	
	<section id="fh5co-explore" data-section="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate-off"><span><?=la('Gallery', 'ギャラリー','រូបថត')?></span></h2>
				</div>
			</div>
		</div>
		<div class="fh5co-project">
			<div class="container-fluid">
				<div class="row">
                    <div <?=($mobile?'class="owl-carousel-fullwidth-1"':'')?>>
                    <?php $as = mysqli_query($conn, "SELECT * FROM gallery ORDER BY date DESC LIMIT 3");
                    while ($a = mysqli_fetch_assoc($as)){?>
                    
					<div class="col-md-4 text-center">
						<div class="project-grid to-animate-off-2" style="background-image:  url(<?php $n = glob('gallery/'.$a['id'].'/*'); echo $n[0]?>);">
							<div class="desc">
								<h3><a href="gallery.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
								<span><?=$a['date']?></span>
                                <p class="love"><a href="gallery.php?id=<?=$a['id']?>"><?=$a['img_cnt'].la(' Photo'.($a['img_cnt']>1?'s':''),' 枚',' សន្លឹក')?></a></p>
							</div>
						</div>
					</div>
                    <?php }?>
                    
                    </div>
                    <div class="col-sm-12 text-center v-all">
                        <a href="galleries.php"><?=la('View all galleries', 'すべてのギャラリーを表示','មើលរូបថតទាំងអស់')?></a>
                    </div>
				</div>
			</div>	
		</div>
	</section>

	<section id="fh5co-team" class="fh5co-bg-color" data-section="commitee">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="team-h2 to-animate-off"><span><?=la('CSAJ Committees 2018','2018年CSAJ協会員','សមាជិកCSAJ 2018')?></span></h2>
					</div>
				</div>
				<div class="row team-row">
                    <div <?=($mobile?'class="owl-carousel-fullwidth-1"':'')?>>
                    <?php $as = mysqli_query($conn, "SELECT * FROM commitees WHERE year = '2018' ORDER BY id ASC  LIMIT 5 ");
                    while ($a = mysqli_fetch_assoc($as)){?>
					<div class="col-md-3 col-md-5-item team-img-box">
						<div class="team-box text-center to-animate-off-2">
							<div class="user"><img class="img-reponsive" src="commitees/2018/<?=$a['id']?>.jpg" alt="<?=$a['name']?>"></div>
							<h3><?=$a['name']?></h3>
							<span class="position"><?=$a['position']?></span>
							<p><?=$a['school']?><br><?=$a['major']?></p>
						</div>
					</div>
                    <?php }?>
                    </div>
					<div class="v-all col-sm-12 text-center">
                        <a href="commitees.php"><?=la('View all Committees','すべてのCSAJ協会員を表示','បង្ហាញសមាជិកCSAJទាំងអស់')?></a>
                    </div>
				</div>
			</div>
		</div>
	</section>

	

	

	

	<section id="fh5co-faq" class="" data-section="archive">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate-off"><span><?=la('Archive', 'アーカイブ','ឯកសារ')?></span></h2>						
					</div>
				</div>
				<div class="row">
                    <?php $as = mysqli_query($conn, "SELECT * FROM links_ul  ORDER BY sort");
                    while ($a = mysqli_fetch_assoc($as)){?>
					<div class="col-md-4 col-xs-12" class="archive-item">
						<div class="box-faq to-animate-off-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3><?=$a[$NAME]?></h3>
                                <ul class="archive">
                                    <?php $bs = mysqli_query($conn, "SELECT * FROM links WHERE ul = '".$a['id']."'"." ORDER BY sort");
                                    while ($b = mysqli_fetch_assoc($bs)){?>
                                    <li<?=($mobile?' class="col-xs-6"':'')?>>
                                        <a target="_blank" href="<?=$b['url']?>"><?=$b[$NAME]?></a>
                                    </li>
                                    <?php }?>
                                </ul>
							</div>
						</div>
					</div>
                    <?php }?>
				</div>
			</div>
		</div>
        
        <div class="fh5co-trusted">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate-off"><span><?=la('Collaborators','コラボレーター
','ដៃគូសហការណ៍')?></span></h2>
					</div>
				</div>
				<div class="row">
				    <div class="col-sm-6">
					 	<div class="partner-logo to-animate-off-2">
                            <a href="http://aynj.org/">
                                <img src="images/collaborator-1.jpg" alt="Partners" class="img-responsive">
                            </a>
					 	</div>
				    </div>
				    <div class="col-sm-6">
					 	<div class="partner-logo to-animate-off-2">
                            <a href="http://jac-khmer.info/">
                                <img width="350" src="images/collaborator-2.jpg" alt="Partners" class="img-responsive">
                            </a>
					 	</div>
					 </div>
          <?php /*?>
          <div class="col-sm-4">
					 	<div class="partner-logo to-animate-off-2">
                            <a href="http://cyr.or.jp/">
                                <img src="images/donate.jpg" style="margin:20px 0 0 0" width="280px" alt="Partners" class="img-responsive">
                            </a>
					 	</div>
					 </div>
           <?php */?>
				</div>
        <?php /*?>
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
						<h2 class="to-animate-off"><span><?=la('Donation','寄付','ការបរិច្ចាគ')?></span></h2>
					</div>
                </div>
                <div class="row">
				    <div class="col-sm-12 text-center">
					 	<div class="partner-logo to-animate-off-2">
                            <a href="http://cyr.or.jp/">
                                <img src="images/donate.jpg" style="margin:0 auto" width="280px" alt="Partners" class="img-responsive">
                            </a>
					 	</div>
				    </div>
				</div>
        <?php */?>
			</div>
		</div>
	</section>

	<div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="fb-div col-md-4 to-animate-off">
                    <h3 class="section-title">Facebook Page</h3>
                    
                    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=853699941381905&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    
					<ul class="social-media">
						<div class="fb-page" data-href="https://www.facebook.com/csajpage" <?=(!$mobile?'data-tabs="timeline"':'')?> data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/csajpage" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/csajpage">Cambodian Student Association in Japan - CSAJ</a></blockquote></div>
					</ul>
				</div>

				<div class="col-md-4 to-animate-off">
					<h3 class="section-title"><?=la('Contact Us','お問い合わせ','ទំនាក់ទំនង')?></h3>
					<ul class="contact-info">
						<li><i class="icon-envelope"></i><a href="mailto:committee@csaj-khmer.org">committee@csaj-khmer.org</a></li>
						<li><i class="icon-globe2"></i><a href="http://www.csaj-khmer.org">http://www.csaj-khmer.org</a></li>
					</ul>
					<?php if (!$mobile){?>
					<h3 class="section-title"><?=la('About Us','CSAJ について','អំពីយើងខ្ញុំ')?></h3>
					<p>CSAJ, of course, organizes and attends various useful meetings or seminars when invited in order to archieve the above objectives. Further CSAJ raises kind fund or donations such as books, pens and other study materials from Cambodian students themselves, interested organisations, voluntary Japanese people and others.</p>
					<p class="copy-right">&copy; 2018 Twist Free Template. <br>All Rights Reserved. <br>
						Designed by <a href="https://www.facebook.com/vongvirakjp" target="_blank">VONG VIRAK</a>
						<br>電気通信大学
					</p>
                    <?php }?>
				</div>
                <?php if (!$mobile){?>
				<div class="col-md-4 to-animate-off">
					<h3 class="section-title"><?=la('Send us a Message','問い合わせフォーム','ផ្ញើសារមកកាន់យើងខ្ញុំ')?></h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only"><?=la('Name','名前','ឈ្មោះ')?></label>
							<input id="m_name" type="name" class="form-control" placeholder="<?=la('Name','名前','ឈ្មោះ')?>">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only"><?=la('Email','メール','អ៊ីមែល')?></label>
							<input id="m_email" type="text" class="form-control" placeholder="<?=la('Email','メール','អ៊ីមែល')?>">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only"><?=la('Message','内容','តួសេចក្តី')?></label>
							<textarea class="form-control" id="m_message" rows="7" placeholder="<?=la('Message','内容','តួសេចក្តី')?>"></textarea>
						</div>
						<div class="form-group">
							<input onclick="sendMessage()" id="btn-submit" class="btn btn-send-message btn-md" value="<?=la('Send Message','送信','បញ្ជូន')?>">
						</div>
					</form>
				</div>
                <?php }?>   
			</div>
		</div>
	</div>	

	<?php include 'footer.php'?>