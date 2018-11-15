<?php include 'header.php'?>
<section id="fh5co-explore" class="container-2" data-section="explore">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate-none"><span><?=la('All Gallaries','すべてのギャラリー','រូបថតទាំងអស់')?></span></h2>
            </div>
        </div>
    </div>
    <div class="fh5co-project">
			<div class="container-fluid">
				<div class="row">
                    <?php $as = mysqli_query($conn, "SELECT * FROM gallery ORDER BY date DESC");
                    while ($a = mysqli_fetch_assoc($as)){?>
                    
					<div class="col-md-4 text-center">
						<div class="project-grid" style="background-image:  url(<?php $n =glob('gallery/'.$a['id'].'/*'); echo $n[0]?>);">
							<div class="desc">
								<h3><a href="gallery.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
								<span><?=$a['date']?></span>
								<p class="love"><a href="gallery.php?id=<?=$a['id']?>"><?=$a['img_cnt'].la(' Photo'.($a['img_cnt']>1?'s':''),' 枚',' សន្លឹក')?></a></p>
							</div>
						</div>
					</div>
                    <?php }?>
                    
				</div>
			</div>	
		</div>
</section>
<?php include 'footer.php'?>