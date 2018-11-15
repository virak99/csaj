<?php include 'header.php'?>
<section id="fh5co-testimony" class="container-2" data-section="explore">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate-none"><span><?=la('All Activities','すべての活動','សកម្មភាពទាំងអស់')?></span></h2>
            </div>
        </div>
    </div>
    <div class="fh5co-testimony fh5co-bg-color" >
			<div class="container">
				<div class="row">
                    
                    <?php $as = mysqli_query($conn, "SELECT * FROM blogs ORDER BY DATE DESC");
                        while ($a = mysqli_fetch_assoc($as)){?>
                    <div class="col-sm-6 col-xs-12 to-animate-none">
                        <div class="wrap-testimony">
                            
                                <div class="item">
                                    <div class="testimony-slide text-center">
                                        <div class="blog-img" style="background-image:url(<?php $h = glob("gallery/".$a['gallery']."/*"); echo $h[0]?>)">
                                            <div class="date">
                                                <span><?=date('d', strtotime($a['date']))?></span>
                                                <small><?=date('M', strtotime($a['date']))?></small>
                                            </div>
                                        </div>


                                        <span>
                                        <a href="blog.php?id=<?=$a['id']?>"><?=$a
                                    ['title']?></a></span>
                                        <blockquote><?php
                                    echo getBody($a).'<a class="read-more" href="blog.php?id='.$a['id'].'">'.la('Read more','もっと読む','អានបន្ថែម').' ...</a>'?>
                                        </blockquote>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <?php }?>
                </div>

			</div>	
		</div>
</section>
<?php include 'footer.php'?>