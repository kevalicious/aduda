<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo $imageurl; ?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread"><?php echo $title; ?></h1>
            </div>
        </div>
    </div>
</section>
<br>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ftco-animate">
                <h2 class="mb-3">Subtitle</h2>
                <p>
                    <img src="<?php echo $imageurl; ?>" alt="" class="img-fluid">
                </p>
                
                    
            </div>
            <div class="col-lg-6 ftco-animate">
                <p><?php echo $content; ?></p>

            </div>
        </div> 

    </div>
    
</section>


<?php include_once("./includes/footer.php"); ?>