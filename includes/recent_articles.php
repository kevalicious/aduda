<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 ftco-animate">
                <h2 class='ftco-heading-2'>Recent articles</h2>
            </div>
        </div>
        <div class="row">

            <?php

            require_once("./database/connection.php");

            $sql = "SELECT * FROM articles order by id desc limit 3";
            $articles = mysqli_query($conn, $sql);
            if (mysqli_num_rows($articles) == 0) {
                echo "
                    <div class='col-md-6 col-lg-4 ftco-animate'>
                       <h3 class='heading'>No articles yet in the database!</h3>
                    </div>
                ";
            } else {
                while ($list = mysqli_fetch_array($articles)) {
                    $id = $list['id'];
                    $image = $list['imageurl'];
                    $uploadtime = $list['uploadtime'];
                    $title = $list['title'];
                    $content = $list['content'];



            ?>

                    <div class="col-md-6 col-lg-4 ftco-animate">

                        <div class="blog-entry">
                            <a href="?page=Articles&id=<?php echo $id; ?>" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo $image; ?>);">
                                <div class="meta-date text-center p-2">
                                    <!--  <span class="day">26</span>
                            <span class="mos">June</span> -->
                                    <span class="yr"><?php echo $uploadtime; ?></span>
                                </div>
                            </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="?page=article&id=<?php echo $id; ?>"><?php echo $title; ?></a></h3>
                                <p><?php echo $content; ?></p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="?page=Articles&id=<?php echo $id; ?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>

                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>


        </div>

    </div>
</section>