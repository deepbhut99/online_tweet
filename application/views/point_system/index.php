
 <!-- https://www.flaticon.com/authors/freepik/15  icon use -->


<div class="view-wrapper">

    <div class="shop-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <div class="header-inner">
                    <h2>Point System</h2>
                    <div class="header-actions">

                    </div>
                </div>
            </div>

            
            <div class="cart-content">
                <div class="columns">
                    <div class="column is-8">
                        <!--Table-->
                        <div class="flex-table">
                            <!--Table header-->
                            <div class="flex-table-header">
                                <span class="product"><span>Method</span></span>
                                <span class="quantity">Quantity</span>
                                <span class="price">Single item value</span>
                                <span class="discount"></span>
                                <span class="total">Total</span>
                            </div>
                            <!--Table item-->
                            <div class="flex-table-item">
                                <div class="product">
                                    <img src="<?php echo base_url() ?>assets/img/products/2.svg">
                                    <span class="product-name">Like</span>
                                </div>
                                <div class="quantity has-spinner">
                                    <div class="spinner">
                                        <button class="remove">
                                            <i data-feather="minus"></i>
                                        </button>
                                       
                                        <span class="value"><?php echo $likes_co->likes ?></span>
                                        <button class="add">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <input class="spinner-input" type="hidden" value="1">
                                    </div>
                                </div>
                                <div class="price">
                                    <span ><?php echo $single_point_v?></span>
                                </div>
                                <div class="discount">
                                    <span class="has-price">0</span>
                                </div>
                                <div class="total">
                                    <span class="has-price"><?php echo $total_like ?></span>
                                </div>
                            </div>
                            <!--Table item-->
                            <div class="flex-table-item">
                                <div class="product">
                                    <img src="<?php echo base_url() ?>assets/img/products/3.svg">
                                    <span class="product-name">Comment</span>
                                </div>
                                <div class="quantity has-spinner">
                                    <div class="spinner">
                                        <button class="remove">
                                            <i data-feather="minus"></i>
                                        </button>
                                       
                                        <span class="value"><?php echo $comments_co->comments ?></span>
                                        <button class="add">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <input class="spinner-input" type="hidden" value="1">
                                    </div>
                                </div>
                                <div class="price">
                                    <span ><?php echo $single_point_v ?></span>
                                </div>
                                <div class="discount">
                                    <span class="has-price">0</span>
                                </div>
                             
                                <div class="total">
                                    <span class="has-price"><?php echo $total_comment ?></span>
                                </div>
                            </div>
                            <!--Table item-->
                            <div class="flex-table-item">
                                <div class="product">
                                <img src="<?php echo base_url() ?>assets/img/products/4.svg">
                                    <span class="product-name">Post</span>
                                </div>
                                <div class="quantity has-spinner">
                                    <div class="spinner">
                                        <button class="remove">
                                            <i data-feather="minus"></i>
                                        </button>
                                      
                                        <span class="value"><?php echo $posts_co ?></span>
                                        <button class="add">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <input class="spinner-input" type="hidden" value="1">
                                    </div>
                                </div>
                                <div class="price">
                                    <span ><?php echo $single_point_v?></span>
                                </div>
                                <div class="discount">
                                    <span class="has-price">0</span>
                                </div>
                              
                                <div class="total">
                                    <span class="has-price"><?php echo $total_posts ?></span>
                                </div>
                            </div>
                            <div class="flex-table-item">
                                <div class="product">
                                <img src="<?php echo base_url() ?>assets/img/products/5.svg">
                                    <span class="product-name">Images</span>
                                </div>
                                <div class="quantity has-spinner">
                                    <div class="spinner">
                                        <button class="remove">
                                            <i data-feather="minus"></i>
                                        </button>
                                       
                                        <span class="value"><?php echo $images_co ?></span>
                                        <button class="add">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <input class="spinner-input" type="hidden" value="1">
                                    </div>
                                </div>
                                <div class="price">
                                    <span ><?php echo $single_point_v?></span>
                                </div>
                                <div class="discount">
                                    <span class="has-price">0</span>
                                </div>
                             
                                <div class="total">
                                    <span class="has-price"><?php echo $total_image ?></span>
                                </div>
                            </div>
                            <div class="flex-table-item">
                                <div class="product">
                                   
                                <img src="<?php echo base_url() ?>assets/img/products/6.svg">
                                    <span class="product-name">Video</span>
                                </div>
                                <div class="quantity has-spinner">
                                    <div class="spinner">
                                        <button class="remove">
                                            <i data-feather="minus"></i>
                                        </button>
                                       
                                        <span class="value"><?php echo $video_co ?></span>
                                        <button class="add">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <input class="spinner-input" type="hidden" value="1">
                                    </div>
                                </div>
                                <div class="price">
                                    <span ><?php echo $single_point_v?></span>
                                </div>
                                <div class="discount">
                                    <span class="has-price">0</span>
                                </div>
                              
                                <div class="total">
                                    <span class="has-price"><?php echo $total_video ?></span>
                                </div>
                            </div>
                        </div>
    
                    
                        <div class="continue-shopping">
                            <a href="<?php echo base_url() ?>">Continue Social media experience </a>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="cart-summary">
                            <div class="summary-header">
                                <h3>Order Summary</h3>
                            </div>

                            <!--card-->
                            <div class="summary-card">
                                <div class="order-line">
                                    <span>Subtotal</span>
                                    <span><?php echo $grand_total ?></span>
                                </div>

                                <div class="order-line">
                                    <span>Admin given point</span>
                                    <span>0</span>
                                </div>
                                <div class="order-line">
                                    <span class="is-total">Total</span>
                                    <span class="is-total"><?php echo $grand_total ?></span class="is-total">
                                </div>
                            </div>

                            <!--card-->
                            <div class="summary-card">
                                <img class="light-image" src="assets/img/icons/questions/help.svg" alt="">
                                <img class="dark-image" src="assets/img/icons/questions/help-dark.svg" alt="">
                                <h4>Help center</h4>
                                <p>Having trouble? Please search our <a class="standard-link">Help Center</a> for a quick
                                    answer to your problem.<br>*This value is final </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
