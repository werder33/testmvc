<?php require_once('public/view/templates/header.php');?>
<!-- Page Title -->
<div class="page-title-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeIn">
                <i class="fa fa-camera"></i>
                <h1>Portfolio /</h1>
                <p>Here is the work we've done so far</p>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="portfolio-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 portfolio-filters wow fadeInLeft">
                <a href="#" class="filter-all active">All</a> /
                <a href="#" class="filter-web-design">Web Design</a> /
                <a href="#" class="filter-logo-design">Logo Design</a> /
                <a href="#" class="filter-print-design">Print Design</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 portfolio-masonry">
                <?php
                    while($one = $port ->fetch()){
                        echo"
                        <div class='portfolio-box web-design'>
                    <div class='portfolio-box-container'>
                        <img src='public/media/assets/img/portfolio/".$one['image']."' alt='' data-at2x='public/media/assets/img/portfolio/".$one['image']."'>
                        <div class='portfolio-box-text'>
                            <h3>".$one['title']."ffff</h3>
                            <p>".$one['body']."</p>
                        </div>
                    </div>
                </div>
                        ";
                    }
                ?>

            </div>
        </div>
    </div>
</div>

<?php require_once('public/view/templates/footer.php');?>