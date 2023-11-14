<?php
require_once "header.php";

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/children.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/job.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/puppy.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>News Section</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="./images/coffe.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our first News</h5>
                    <p class="card-text">Let's browse to read our first news of the portal.</p>
                    <a href="news-details.php" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./images/bird2.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our Second News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="news-details.php" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./images/bird1.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our Third News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="news-details.php" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./images/she.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our Fourth News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./images/2.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our Fifth News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="./images/brainstroming.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Our Sixth News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Click this to read more</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
require_once "footer.php";
?>