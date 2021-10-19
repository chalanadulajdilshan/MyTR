<!DOCTYPE html>
<?php
$id = '';
$id = $this->product_id;
$encode_id = base64_decode($id);
$PRODUCT = new Product($encode_id);
$PRODUCT_TYPE = new ProductType($PRODUCT->type);
$PRODUCT_CATEGORY = new ProductCategory($PRODUCT_TYPE->category);
$PRODUCT_PHOTO = new ProductPhoto(NULL);
?>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><?php echo $PRODUCT->title ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active"><?php echo $PRODUCT->title ?> Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row p-t">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image">

                        <div class="exzoom hidden" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <?php
                                    foreach ($PRODUCT_PHOTO->getProductPhotosById($encode_id) as $key => $product_photo) {
                                        ?>
                                        <li><img src="<?php echo URL ?>upload/product/gallery/<?php echo $product_photo['image_name'] ?>"/></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pr_detail">
                        <div class="product_description">
                            <h4 class="product_title"><a href="#"><?php echo ucwords($PRODUCT->title) ?></a></h4>
                            <div class="product_price">
                                <?php
                                $price_amount = 0;
                                $discount = 0;

                                $discount = $PRODUCT->discount;
                                $price_amount = $PRODUCT->price;

                                $discount = ($price_amount * $discount) / 100;
                                $discount_price = $PRODUCT->price - $discount;
                                ?>

                                <span class="price"> <?php echo number_format($discount_price, 2) ?></span>

                                <?php
                                if ($PRODUCT->discount != 0) {
                                    ?>
                                    <del><?php echo number_format($price_amount, 2) ?></del>
                                    <div class="on_sale">
                                        <span><?php echo $PRODUCT->discount ?>% Off</span>
                                    </div>
                                <?php } ?>
                                <input type="hidden" id="price<?php echo $PRODUCT->id ?>" class="price-format total_price_amount" value="<?php echo $discount_price ?>"/>



                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num">(21)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="product_sort_info">
                                <ul>
                                    <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                    <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                    <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                </ul>
                            </div>
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">Color</span>
                                <div class="product_color_switch">
                                    <span class="active" data-color="#87554B"></span>
                                    <span data-color="#333333"></span>
                                    <span data-color="#DA323F"></span>
                                </div>
                            </div>
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">Size</span>
                                <div class="product_size_switch">
                                    <span>xs</span>
                                    <span>s</span>
                                    <span>m</span>
                                    <span>l</span>
                                    <span>xl</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="cart_extra">
                            <div class="cart-product-quantity">
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text"  value="1" title="Qty" class="qty" size="4" name="quantity" id="quantity<?php echo $PRODUCT->id ?>" >
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                            <input type="hidden" id="discount" value="<?php echo $PRODUCT->discount ?>"/>
                            <input type="hidden" id="quantity<?php echo $PRODUCT->id ?>" value="1"/> 
                            <input   type="hidden" name="name"  id="name<?php echo $PRODUCT->id ?>" value="<?php echo $PRODUCT->title ?>" />

                            <div class="cart_btn">
                                <button class="btn btn-fill-out btn-addtocart add_to_cart"  type="button"  name="add_to_cart"  id="<?php echo $PRODUCT->id ?>"  min-qty="<?php echo $PRODUCT->quantity; ?>"><i class="icon-basket-loaded"></i> Add to cart</button>
                                <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul class="product-meta">
                            <li>Product Id: <a href="#"><?php echo $PRODUCT->product_code ?></a></li>
                            <li>Category: <a href="#"><?php echo $PRODUCT_CATEGORY->title ?></a></li>
                            <li>Type: <a href="#" rel="tag"><?php echo $PRODUCT_TYPE->title ?></a> </li>
                        </ul>

                        <div class="product_share">
                            <span>Share:</span>
                            <ul class="social_icons">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="large_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab">
                            <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                            <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Capacity</td>
                                        <td>5 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black, Brown, Red,</td>
                                    </tr>
                                    <tr>
                                        <td>Water Resistant</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Artificial Leather</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                <div class="comments">
                                    <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                    <ul class="list_none comment_list mt-4">
                                        <li>
                                            <div class="comment_img">
                                                <img src="<?php echo URL ?>assets/images/user1.jpg" alt="user1">
                                            </div>
                                            <div class="comment_block">
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                </div>
                                                <p class="customer_meta">
                                                    <span class="review_author">Alea Brooks</span>
                                                    <span class="comment-date">March 5, 2018</span>
                                                </p>
                                                <div class="description">
                                                    <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment_img">
                                                <img src="<?php echo URL ?>assets/images/user2.jpg" alt="user2">
                                            </div>
                                            <div class="comment_block">
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <p class="customer_meta">
                                                    <span class="review_author">Grace Wong</span>
                                                    <span class="comment-date">June 17, 2018</span>
                                                </p>
                                                <div class="description">
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review_form field_form">
                                    <h5>Add a review</h5>
                                    <form class="row mt-3">
                                        <div class="form-group col-12">
                                            <div class="star_rating">
                                                <span data-value="1"><i class="far fa-star"></i></span>
                                                <span data-value="2"><i class="far fa-star"></i></span> 
                                                <span data-value="3"><i class="far fa-star"></i></span>
                                                <span data-value="4"><i class="far fa-star"></i></span>
                                                <span data-value="5"><i class="far fa-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                        </div>

                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Submit Review</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider"></div>
                    <div class="divider"></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="heading_s1">
                        <h3>Releted Products</h3>
                    </div>
                    <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="<?php echo URL ?>assets/images/product_img1.jpg" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="<?php echo URL ?>assets/images/product_img2.jpg" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#847764"></span>
                                            <span data-color="#0393B5"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="<?php echo URL ?>assets/images/product_img3.jpg" alt="product_img3">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#7C502F"></span>
                                            <span data-color="#2F366C"></span>
                                            <span data-color="#874A3D"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="<?php echo URL ?>assets/images/product_img4.jpg" alt="product_img4">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#A92534"></span>
                                            <span data-color="#B9C2DF"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="<?php echo URL ?>assets/images/product_img5.jpg" alt="product_img5">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">blue dress for woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#5FB7D4"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<!-- END MAIN CONTENT -->


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="<?php echo URL ?>assets/js/jquery-1.12.4.min.js"></script> 
<!-- jquery-ui --> 
<script src="<?php echo URL ?>assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="<?php echo URL ?>assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="<?php echo URL ?>assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="<?php echo URL ?>assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="<?php echo URL ?>assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="<?php echo URL ?>assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="<?php echo URL ?>assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="<?php echo URL ?>assets/js/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="<?php echo URL ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="<?php echo URL ?>assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="<?php echo URL ?>assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="<?php echo URL ?>assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="<?php echo URL ?>assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js --> 
<script src="<?php echo URL ?>assets/js/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/scripts.js"></script>
<script src="<?php echo URL ?>ajax/js/add_to_cart.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/jquery.exzoom.js" type="text/javascript"></script>

<script type="text/javascript">

    $('.container').imagesLoaded(function () {
        $("#exzoom").exzoom({
            autoPlay: false,
        });
        $("#exzoom").removeClass('hidden')
    });

</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>