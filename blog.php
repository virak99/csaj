<?php 
include 'header.php';

$id = $_GET['id'];
$a = getBlog($id);
?>

<section id="fh5co-explore" class="container container-2" data-section="explore">
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
    
        <blockquote class="col-sm-12 blog-body">
            <?=($a['body_en']!= ''?$a['body_en'].'<hr>':'')?>
            <?=($a['body_kh']!= ''?$a['body_kh'].'<hr>':'')?>
            <?=($a['body_jp']!= ''?$a['body_jp'].'<hr>':'')?>
        </blockquote>
    
		<div class="fh5co-project">
			<div class="container-fluid">
				<div class="row gallery">
                    <div class="col-sm-12">
                        <?php 
        $b = getGallery($a['gallery']);
        foreach(glob('gallery/'.$b['id'].'/*') as $f){?>
                        <div class="col-sm-4">
                            <a data-fancybox="gallery" href="<?=$f?>">
                                <img src="<?=$f?>">
                            </a>
                        </div>
                        <?php }?>
                    </div>
				</div>
			</div>	
		</div>
    
        <div class="container-2">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span><?=la('Other Activity', '他の活動','សកម្មភាពផ្សេងទៀត')?></span></h2>
					
				</div>
			</div>
            <section id="fh5co-testimony" data-section="activity">
                <div class="container">
                    <?php include 'blog_row.php'?>
                </div>
            </section>
		</div>
	</section>


<?php include 'footer.php'?>