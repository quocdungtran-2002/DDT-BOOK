<?php require_once "header.php"; ?>
<!-- Start Side Menu -->
<div class="side">
    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
    <li class="cart-box">
        <ul class="cart-list">
            <li>
                <a href="#" class="photo"><img src="../view/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Delica omtantur </a></h6>
                <p>1x - <span class="price">$80.00</span></p>
            </li>
            <li>
                <a href="#" class="photo"><img src="../view/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Omnes ocurreret</a></h6>
                <p>1x - <span class="price">$60.00</span></p>
            </li>
            <li>
                <a href="#" class="photo"><img src="../view/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Agam facilisis</a></h6>
                <p>1x - <span class="price">$40.00</span></p>
            </li>
            <li class="total">
                <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                <span class="float-right"><strong>Total</strong>: $180.00</span>
            </li>
        </ul>
    </li>
</div>
<!-- End Side Menu -->
</nav>
<!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Shop Detail </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"> <img class="d-block w-100"
                                src="../view/images/big-img-01.jpg" alt="First slide"> </div>
                        <div class="carousel-item"> <img class="d-block w-100" src="../view/images/big-img-02.jpg"
                                alt="Second slide"> </div>
                        <div class="carousel-item"> <img class="d-block w-100" src="../view/images/big-img-03.jpg"
                                alt="Third slide"> </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                            <img class="d-block w-100 img-fluid" src="../view/images/smp-img-01.jpg" alt="" />
                        </li>
                        <li data-target="#carousel-example-1" data-slide-to="1">
                            <img class="d-block w-100 img-fluid" src="../view/images/smp-img-02.jpg" alt="" />
                        </li>
                        <li data-target="#carousel-example-1" data-slide-to="2">
                            <img class="d-block w-100 img-fluid" src="../view/images/smp-img-03.jpg" alt="" />
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2>Fachion Lorem ipsum dolor sit amet</h2>
                    <h5> <del>$ 60.00</del> $40.79</h5>
                    <p class="available-stock"><span> More than 20 available / <a href="#">8 sold </a></span>
                    <p>
                    <h4>Short Description:</h4>
                    <p>Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros
                        fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat
                        turpis, cursus in ipsum at,
                        tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium.
                        Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu. </p>
                    <ul>
                        <li>
                            <div class="form-group size-st">
                                <label class="size-label">Size</label>
                                <select id="basic" class="selectpicker show-tick form-control">
                                    <option value="0">Size</option>
                                    <option value="0">S</option>
                                    <option value="1">M</option>
                                    <option value="1">L</option>
                                    <option value="1">XL</option>
                                    <option value="1">XXL</option>
                                    <option value="1">3XL</option>
                                    <option value="1">4XL</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group quantity-box">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" value="0" min="0" max="20" type="number">
                            </div>
                        </li>
                    </ul>

                    <div class="price-box-bar">
                        <div class="cart-and-bay-btn">
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
                        </div>
                    </div>

                    <div class="add-to-btn">
                        <div class="add-comp">
                            <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>
                            <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Add to Compare</a>
                        </div>
                        <div class="share-bar">
                            <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
                <div class="featured-products-box owl-carousel owl-theme">
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="../view/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<?php require_once "footer.php"; ?>