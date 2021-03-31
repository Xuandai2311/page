
<?php

include_once 'app/controllers/home.php';
include 'db/Connection.php';
$result = mysqli_query($conn,"SELECT * FROM products");
// $edit = mysqli_query($conn,"SELECT * FROM product WHERE id='" . $_GET['id'] . "'");
// $row= mysqli_fetch_array($edit);


?>

<main>
    <div class="container">
        <div class="standard">
            <div class="row">
                <div class="col-xl-3">
                    <div class="item">
                        <div class="img"><img src="public/images/static-icons-1.png" alt=""></div>
                        <div class="info">
                            <span>Free Shipping</span><br>
                            On all orders over $75.00
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="item">
                        <div class="img"><img src="public/images/static-icons-2.png" alt=""></div>
                        <div class="info">
                            <span>Free Returns</span><br>
                            Returns are free within 9 days
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="item">
                        <div class="img"><img src="public/images/static-icons-3.png" alt=""></div>
                        <div class="info">
                            <span>100% Payment Secure</span><br>
                            Your payment are safe with us
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="item">
                        <div class="img"><img src="public/images/static-icons-4.png" alt=""></div>
                        <div class="info">
                            <span>Support 24/7</span><br>
                            Contact us 24 hours a day
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-product">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="intro-content">
                        <div class="image"><img src="public/images/01%20(1).png" alt=""></div>
                        <div class="info">
                            <h1>
                                Quality Organic Food & <span>Vegetables</span>
                            </h1>
                            <p>Sed perspiciatis unde omnis iste natus error voluptatem acc santium doloremque
                                laudantium, totam rem aperiam eaqipsa quaenventore veritatis quasi architecto beatae</p>
                            <ul>
                                <li><span>Quis nostrud exercitation ullamco laboris nisi aliquip</span></li>
                                <li><span>Duis aute irure dolor in reprehenderit in voluptate veles</span></li>
                                <li><span>Ullam corporis suscipit laboriosam nisi ut aliquid exea</span></li>
                                <li><span>Again is there anyone who loves or pursues desires</span></li>
                            </ul>
                            <a href="">read more</a>
                        </div>
                    </div>
                    <div class="title-primary">
                        <h1>Best Sellers</h1>
                        <h2>Add bestselling products to weekly line up</h2>
                    </div>
                    <div class="__slide-product">
                        <div class="row">
                        <?php
                                    while($row = mysqli_fetch_array($result))
                                    { ?>
                            <div class="col-6 col-xl-3" href="index.php?ctrl=product/product&id=<?php echo $row['id'] ?>">
                                <div class="product" >
                                    
                                    <div class="tag">New</div>

                                    <a data-toggle="modal" data-target="#modalBasket"><img src="public/images/<?php echo $row['picture'] ?>" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a><?php echo $row["name_product"]; ?></a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s><?php echo $row["discount"]; ?> %</s> <span><?php echo $row["price"]; ?> $</span></h4>
                                    <div class="add-to-link">
                                        <a href=""  onclick="addCart(<?php echo $row['id']; ?>)">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <?php
                                    } ?>
                            <?php
					// close connection database
										mysqli_close($conn);
                					?>
                        </div>
                    </div>
                    <div class="title-primary">
                        <h1>Popular Categories</h1>
                        <h2>Add bestselling products to weekly line up</h2>
                    </div>
                    <div class="popular-box">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-1.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-2.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-3.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-4.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-5.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/thumb-6.jpg" alt="">
                                    <div class="info">
                                        <div>
                                            <h1>Fresh Cream & Custard</h1>
                                            <h2>17 product</h2>
                                            <a href="">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-primary">
                        <h1>New Arrivals</h1>
                        <h2>Add new products to weekly line up</h2>
                    </div>
                    <div class="__slide-product">
                        <div class="row">
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-1.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Juicy Couture Juicy Quilted Terry Track Jacket</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-15.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Juicy Couture Juicy Quilted Terry Track Jacket 2</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-4.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Brixton Patrol All Terrain Anorak Jacket 2</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-5.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Juicy Couture Tricot Logo Stripe Jacket</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-6.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">New Balance Arishi Sport v1</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-9.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Water and Wind Resistant Insulated Jacket</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-2.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">Originals Kaval Windbreaker Winter Jacket 2</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="product">
                                    <div class="tag">New</div>
                                    <a href=""><img src="public/images/product-3.jpg" alt=""></a>
                                    <h3>graphic corner</h3>
                                    <h1><a href="">New Balance Fresh Foam Kaymin</a></h1>
                                    <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h2>
                                    <h4><s>€18.90</s> <span>€36.90</span></h4>
                                    <div class="add-to-link">
                                        <a href="">add to cart</a>
                                        <i class="fal fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ads-main">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="item">
                                    <a href=""><img src="public/images/1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="item">
                                    <a href=""><img src="public/images/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="item">
                                    <a href=""><img src="public/images/3.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-primary">
                        <h1>Special Features</h1>
                        <h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium totam rem aperiam eaque ipsa quae</h2>
                    </div>
                    <div class="special-list">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/01.png" alt="">
                                    <h3>
                                        Fresh Organic Food Provides
                                    </h3>
                                    <span>But must explain to you how all thismistaken idea of denouncingcomplete
                                        account</span>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/02.png" alt="">
                                    <h3>
                                        Fresh Organic Food Provides
                                    </h3>
                                    <span>But must explain to you how all thismistaken idea of denouncingcomplete
                                        account</span>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="item">
                                    <img src="public/images/03.png" alt="">
                                    <h3>
                                        Fresh Organic Food Provides
                                    </h3>
                                    <span>But must explain to you how all thismistaken idea of denouncingcomplete
                                        account</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ads-main">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="item">
                                    <a href=""><img src="public/images/4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="title-rating">
        Client Testimonials
    </div>
    <div class="rating">
        <div class="item">
            <div class="image"><img src="public/images/1.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur corporis dolorum error,
                et iusto odit pariatur quibusdam. Ad fugiat impedit neque nesciunt nisi. Qui rerum similique tenetur
                ullam vitae.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="image"><img src="public/images/2.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur corporis dolorum error,
                et iusto odit pariatur quibusdam. Ad fugiat impedit neque nesciunt nisi. Qui rerum similique tenetur
                ullam vitae.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="image"><img src="public/images/1.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="image"><img src="public/images/2.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur corporis dolorum error,
                et iusto odit pariatur quibusdam. Ad fugiat impedit neque nesciunt nisi. Qui rerum similique tenetur
                ullam vitae.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="image"><img src="public/images/1.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur corporis dolorum error,
                et iusto odit pariatur quibusdam. Ad fugiat impedit neque nesciunt nisi. Qui rerum similique tenetur
                ullam vitae.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="image"><img src="public/images/2.png" alt=""></div>
            <div class="info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur corporis dolorum error,
                et iusto odit pariatur quibusdam. Ad fugiat impedit neque nesciunt nisi. Qui rerum similique tenetur
                ullam vitae.
                <h1>
                    <i class="fas fa-comments-alt"></i>
                    <span>Orando Bloom</span><br>
                    orando@boom.com
                </h1>
            </div>
        </div>
    </div>
</main>
<div class="main-menu-mobile">
    <div class="__main-menu-mobile">
        <div class="item">
            <button data-toggle="modal" data-target="#menuModal"><i class="fas fa-bars"></i></button>
        </div>
        <div class="item">
            <button data-toggle="modal" data-target="#infoModal"><i class="fas fa-info"></i></button>
        </div>
        <div class="item">
            <button data-toggle="modal" data-target="#socialModal"><i class="fas fa-users"></i></button>
        </div>
    </div>
</div>
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contentModalMobile">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contentModalMobile">
                <ul>
                    <li><a href="">Compare</a></li>
                    <li><a href="">Wishlist</a></li>
                    <li><a href="">Settings</a></li>
                    <li><a href="">USD</a></li>
                    <li><a href="">English</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contentModalMobile">
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Google +</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Linkin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Pop Up Detail Product -->

<div class="modal fade" id="modalBasket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
   
        <div class="modal-content">
        
            <div class="modal-body mx-3 pt-4 pb-0">

                <!-- Grid column -->
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="public/images/product-2.jpg" /></div>
                        <div class="tab-pane" id="pic-2"><img src="public/images/product-2.jpg" /></div>
                        <div class="tab-pane" id="pic-3"><img src="public/images/product-1.jpg" /></div>
                        <div class="tab-pane" id="pic-4"><img src="public/images/product-1.jpg" /></div>
                        <div class="tab-pane" id="pic-5"><img src="public/images/product-1.jpg" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                    src="public/images/product-1.jpg" /></a></li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="public/images/product-2.jpg" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="public/images/product-1.jpg" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="public/images/product-1.jpg" /></a></li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img src="public/images/product-1.jpg" /></a></li>
                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Juicy Couture Juicy Quilted Terry Track Jacket</h3>
                    <!-- <div class="rating">
                        <h2><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i></h2>
                        <span class="review-no">41 reviews</span>
                    </div> -->
                    <p class="product-description">Score extra points when it comes to your sporty look with the Juicy
                        Couture™ Juicy Quilted Terry Track Jacket.
                        Soft terry construction in a quilted design.
                        Front zipper closure.</p>


                    <h4 class="price"><s>18.90%</s> <span>$36.90</span></h4>
                    <!-- <span>Size</span>
                    <select >
                        <option value="1" title="S" selected="selected">S</option>
                        <option value="2" title="M">M</option>
                        <option value="3" title="L">L</option>
                        <option value="4" titel="XL">XL</option>
                    </select> -->
                    <div class="spinner">
                        <div>
                            <input type="number" value="1" min="0" max="100" step="1">
                        </div>
                    </div>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                    </div>
                </div>

            </div>
            
        </div>
        
    </div>
</div>



<script>
        function addCart(id){
            $.post("shoppingcart.php",{'id':id}, function(data, status){

            });
        }
    </script>