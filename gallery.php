<?php 
include 'header.php';

$id = $_GET['id'];
$a = getGallery($id);
?>

<section id="fh5co-explore" class="container-2" data-section="explore">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span><?=$a['title']?></span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3><?=$a['date']?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-project">
			<div class="container-fluid">
				<div class="row gallery">
                    <?php foreach(glob('gallery/'.$a['id'].'/*') as $f){?>
                    <div class="col-sm-3">
                        <a data-fancybox="gallery" href="<?=$f?>">
                            <img src="<?=$f?>">
                        </a>
                    </div>
                    <?php }?>
				</div>
			</div>	
		</div>
	</section>

    <section id="fh5co-explore" data-section="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate-none"><span><?=la('Gallery', 'ギャラリー','រូបថត')?></span></h2>
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
						<div class="project-grid to-animate-none-2" style="background-image:  url(<?php $n = glob('gallery/'.$a['id'].'/*'); echo $n[0]?>);">
							<div class="desc">
								<h3><a href="gallery.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
								<span><?=$a['date']?></span>
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


<?php include 'footer.php'?>