<?php include 'header.php'?>
<div class="container container-2">
    <section id="fh5co-team" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span><?=la('CSAJ Committees 2018','2018年CSAJ協会員','សមាជិកCSAJ 2018')?></span></h2>
					</div>
				</div>
                
                <?php if (!$mobile){?>
                <div class="row">
                    <?php $as = mysqli_query($conn, "SELECT * FROM commitees WHERE id <= 8 AND year = '2018'");
                while ($a = mysqli_fetch_assoc($as)){
                    $src = "commitees/2018/".$a['id'].".jpg";
                        if (!file_exists($src)) $src = "images/user.jpg";?>
                    <div class="col-md-3 col-sm-12">
                        <div class="text-center yu">
                            <h3><?=$a['position']?></h3>
                        </div>
                        <div class="team-box team-box-1 text-center">
                            <div class="user"><img class="img-reponsive" src="<?=$src?>" alt="<?=$a['name']?>"></div>
                            <h3><?=$a['name']?></h3>
                            <p><?=$a['school']?><br><?=$a['major']?></p>
                            <span style="margin-bottom:0" class="position"><?=$a['email']?></span>
                        </div>
                    </div>
                    
                    <?php }?>
                </div>
                
                <?php }?>
                
                
				
                    <?php $as = mysqli_query($conn, "SELECT * FROM commitees WHERE id >= ".($mobile?1:9)." AND year = '2018'");
                    $p = '';
                    $flg = 0;
                    while ($a = mysqli_fetch_assoc($as)){
                        $flg ++;
                        if ($p != $a['position']) {
                            $p = $a['position'];
                            if ($flg > 1) {
                                echo '</div>';
                            }
                    ?>
                    <div class="row">
                        <div class="col-sm-12 yu text-center">
                            <h3><?=$a['position']?></h3>
                        </div>
                    </div>
                    <div class="row">
                    <?php }
                        $src = "commitees/2018/".$a['id'].".jpg";
                        if (!file_exists($src)) $src = "images/user.jpg";?>
                        <div class="col-md-3 col-xs-12" <?php if (!$mobile) {?>style="margin-left:<?php $n = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM commitees WHERE position = '".$a['position']."'")); if ($n == 1) echo '37.5%'; else if ($n == 2) echo '25%'; else if ($n == 3) echo '12.5%'?>" <?php }?>>
                            <div class="team-box text-center" style="margin-top: 120px">
                                <div class="user"><img class="img-reponsive" src="<?=$src?>" alt="<?=$a['name']?>"></div>
                                <h3><?=$a['name']?></h3>
                                <p><?=$a['school']?><br><?=$a['major']?></p>
                                <span style="margin-bottom:0" class="position"><?=$a['email']?></span>
                            </div>
                        </div>
                     
                    <?php }?>
                </div>
			</div>
		</div>
        <div class="v-all col-sm-12 text-center">
            <a href="http://www.csaj-khmer.org/newsite/index.php?option=com_content&view=category&id=34&Itemid=179"><?=la('View all member before 2018', '2018年以前のCSAJ協会員を表示', 'បង្ហាញសមាជិកមុនឆ្នាំ២០១៨')?></a>
        </div>
	</section>
</div>
<?php include 'footer.php'?>