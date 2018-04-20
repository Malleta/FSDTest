<?php get_header(); ?>
 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/css/img/slide-img.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/css/img/slide-img.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/css/img/slide-img.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md tab mr-4">
            <div class="tab-icon"><i class="far fa-thumbs-up"></i></div>
            <div class="tab-title">
                <h5>SUSPENDISSE</h5></div>
            <div class="tab-details">
                <p>gibberish gibb erish gibb erishgibb erishgibberish gibbe rish gib beri sh</p>
            </div>
            <div class="tab-btn">
                <button class="btn">Button</button>
            </div>
        </div>
        <div class="col-md tab mr-4">
            <div class="tab-icon"><i class="fas fa-key"></i></div>
            <div class="tab-title">
                <h5>MAECENAS</h5></div>
            <div class="tab-details">
                <p>gibberishgibb erish gi bberishgibb eris hg ibberish giib beri sh</p>
            </div>
            <div class="tab-btn">
                <button class="btn">Button</button>
            </div>
        </div>
        <div class="col-md tab mr-4">
            <div class="tab-icon"><i class="fas fa-flag"></i></div>
            <div class="tab-title">
                <h5>ALIQUAM</h5></div>
            <div class="tab-details">
                <p>gibberish gibberish gibb erishgibb erishgibberish gibbe riberish</p>
            </div>
            <div class="tab-btn">
                <button class="btn">Button</button>
            </div>
        </div>
        <div class="col-md tab mr-4">
            <div class="tab-icon"><i class="fas fa-flask"></i></div>
            <div class="tab-title">
                <h5>HABITASSE</h5></div>
            <div class="tab-details">
                <p>gibberish gibb erishgibb erishgibb eris hgibberish gibbeis</p>
            </div>
            <div class="tab-btn">
                <button class="btn">Button</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>