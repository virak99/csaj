<div class="row">
    <div class="col-md-12 to-animate-none">
        <div class="wrap-testimony">
            <div class="owl-carousel-fullwidth<?=($mobile?'-1':'')?>">
                <?php $as = mysqli_query($conn, "SELECT * FROM blogs ORDER BY DATE DESC LIMIT 4");
                while ($a = mysqli_fetch_assoc($as)){?>
                <div class="item">
                    <div class="testimony-slide active text-center">
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
                <?php }?>
            </div>
            
            <div class="col-sm-12 text-center v-all">
                <a href="blogs.php"><?=la('View all activities', 'すべての活動を表示','មើលសកម្មភាពទាំងអស់')?></a>
            </div>
        </div>
    </div>
</div>
