<?php
include_once '../view/header.php';
include_once 'navigasi-berita.php';
?>

<!-- conten berita -->
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top d-flex p-2 justify-content-center">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Second slide-->

        <!--Indicators-->
        <ol class="carousel-indicators position-absolute fixed-bottom">
            <li  data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li  data-target="#multi-item-example" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<?php
include_once '../view/footer.php';
