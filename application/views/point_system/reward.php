<div class="view-wrapper">

    <!--Payment Wrapper-->
    <div class="shop-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <div class="header-inner">
                    <h2 id="checkout-step-title">1. Confirm your point</h2>
                    <div class="header-actions">
                        <div class="buttons">
                            <a id="checkout-back" class="button is-light" data-step="0">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Checkout content-->
            <div class="cart-content">
                <div class="columns">
                    <div class="column is-8">

                        <!--Checkout section 1-->
                        <div id="checkout-section-1" class="checkout-section is-active">
                            <!--Table-->
                            <div class="flex-table">
                                <!--Table header-->
                                <div class="flex-table-header">

                                    <span class="product">ID</span>
                                    <span class="product"><span>User (who win prize)</span></span>
                                    <span class="price">Number of point</span>
                                    <span class="price">Price</span>
                                    <span class="total">Total</span>
                                </div>
                                <!--Table item-->
                                <div class="flex-table-item">
                                <?php foreach($current->result() as $r) : ?>

                                    <div class="product" id="user_id_r">

                                        <span class="product-name"><?php echo $r->ID ?></span>
                                    </div>
                                    <div class="product">
                                    <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" data-demo-src="<?php echo base_url() ?>/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
				                    <span class="product-name"><?php echo $r->username ?></span>
                                    </div>
                                    <div class="price">
                                        <span class="has-price">29.00</span>
                                    </div>
                                    <div class="discount">
                                        <span class="has-price">0</span>
                                    </div>
                                    <div class="total">
                                        <span class="has-price">29.00</span>
                                    </div>

                                    <?php endforeach ?>
                                </div>

                            </div>
                        </div>



                        <!--Checkout section-->
                        <div id="checkout-section-2" class="checkout-section">
                            <div class="columns is-multiline">
                                <div class="column is-4">
                                    <div class="shipping-box">
                                        <input type="radio" name="shipping_method">
                                        <div class="shipping-box-inner">
                                            <img src="<?php echo base_url() ?>assets/img/products/payment-method.svg" alt="">
                                            <p>cash</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-4">
                                    <div class="shipping-box">
                                        <input type="radio" name="shipping_method">
                                        <div class="shipping-box-inner">
                                            <img src="<?php echo base_url() ?>assets/img/products/credit-card.svg" alt="">
                                            <p>💳</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-4">
                                    <div class="shipping-box">
                                        <input type="radio" name="shipping_method">
                                        <div class="shipping-box-inner">
                                            <img src="<?php echo base_url() ?>assets/img/1078694.png" alt="">
                                            <p>mobile 🔛 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Checkout section-->


                    </div>

                    <!--Right Side-->
                    <div class="column is-4">
                        <div class="cart-summary">
                            <div class="summary-header">
                                <h3>Point caculator</h3>
                            </div>

                            <!--card-->
                            <div id="shipping-placeholder-box" class="summary-card has-text-centered">

                                <div class="field">
                                    <span> <label>Current-point</label></span>

                                    <div class="control" id="current_p_m">
                                        <input type="text" class="input is-rounded" value="<?php echo $current_p->point_count ?>" id="current_p" readonly>
                                    </div>
                                </div>


                                <h1>Convert into real money</h1>
                                <div class="field">
                                    <label>Insert value</label>
                                    <div class="control" id="convert-point">
                                        <input type="text" class="input is-rounded" id="con_p1">
                                    </div>

                                    <label>Doller-price</label>
                                    <div class="control" id="convert-point">
                                        <input type="text" class="input is-rounded" value="<?php echo $single_point_v_c_f ?>" id="con_p2" readonly>
                                    </div>
                                </div>
                                <p>Please verify your point before proceeding with shipping.</p>
                            </div>

                            <!--card-->
                            <div id="shipping-address-box" class="summary-card is-hidden">
                                <img class="light-image shipping-logo" src="assets/img/icons/checkout/world.svg" alt="">
                                <img class="dark-image shipping-logo" src="assets/img/icons/checkout/world-dark.svg" alt="">
                                <h3>Shipping Address</h3>
                            </div>

                            <!--card-->
                            <div class="summary-card">
                                <div class="order-line">
                                    <span>Subtotal</span>
                                    <span id="total_v"></span>
                                </div>
                                <div id="shipping-amount" class="order-line">
                                    <!-- <span>Shipping</span>
                                        <span class="is-text">Not calculated</span> -->
                                </div>
                                <div class="order-line">
                                    <span>Taxes</span>
                                    <span>8.92</span>
                                </div>
                                <div id="total-amount" class="order-line">
                                    <span class="is-total">Total</span>
                                    <span id="total_v_f"></span>
                                </div>
                                <div class="button-wrap">
                                    <button id="checkout-button" class="button is-solid primary-button raised is-fullwidth" data-step="2">Convert</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#con_p1').on('input', function() {

            var input = $(this);
            if (input.val() > "<?php echo $current_p->point_count ?>") {
                toastr.error(' Your value is more than your Current');
                
            } else {
                
            }
        });
    });


    if ($("#checkout-button").length) {
        //Checkout next
        $("#checkout-button").on("click", function() {
            var $this = $(this);
            var title = $("#checkout-step-title");
            var backButton = $("#checkout-back");
            var nextStep = parseInt($this.attr("data-step"));
            var prevStep = parseInt($("#checkout-back").attr("data-step"));
            $this.addClass("is-loading");
            setTimeout(function() {
                $this.removeClass("is-loading");
                $(".checkout-section").removeClass("is-active");
                $("#checkout-section-" + nextStep).addClass("is-active");
                $this.attr("data-step", nextStep + 1);
                backButton.attr("data-step", prevStep + 1);

                if (nextStep === 2) {
                    title.html("2. Choose a shipping method");

                    if ($(".shipping-box input:checked").length === 0) {
                        $this.addClass("is-disabled");
                    } else {
                        $this.removeClass("is-disabled");
                    }
                    // } else if (nextStep === 3) {
                    //     $(".shipping-logo").addClass("is-active");
                    //     title.html("4. Choose a billing address");

                    //     if ($(".billing-address input:checked").length === 0) {
                    //         $this.addClass("is-disabled");
                    //     } else {
                    //         $this.removeClass("is-disabled");
                    //     }
                } else if (nextStep === 3) {
                    window.location.href = "<?php echo base_url() ?>";
                }
            }, 800);
        }); //Checkout back

        $("#checkout-back").on("click", function() {
            var $this = $(this);
            var title = $("#checkout-step-title");
            var backButton = $("#checkout-back");
            var prevStep = parseInt($("#checkout-back").attr("data-step"));
            $this.addClass("is-loading");
            setTimeout(function() {
                $this.removeClass("is-loading");
                $(".checkout-section").removeClass("is-active");
                $("#checkout-section-" + prevStep).addClass("is-active");
                $("#checkout-button").removeClass("is-disabled").attr("data-step", prevStep + 1);
                $this.attr("data-step", prevStep - 1);

                if (prevStep === 0) {
                    window.location.href = "<?php echo base_url() ?>";

                } else if (prevStep === 1) {
                    title.html("1. Confirm your order");
                } else if (prevStep === 2) {
                    title.html("2. Choose a shipping method");
                    $(".shipping-logo").addClass("is-active");
                }
            }, 800);
        }); //Steps validation

        $(".address-box input").on("change", function() {
            $("#checkout-button").removeClass("is-disabled");
            var address = $(this).closest(".address-box").find(".address-box-inner").html();
            $("#shipping-address-box p").remove();
            $("#shipping-address-box").append(address);
            $("#shipping-placeholder-box").addClass("is-hidden");
            $("#shipping-address-box").removeClass("is-hidden");
        });
        $(".shipping-box input").on("change", function() {
            var shipppingLogo = $(this).closest(".shipping-box").find("img").attr("src");
            $(".shipping-logo").attr("src", shipppingLogo).addClass("is-active");
            $("#shipping-amount").find(".is-text").removeClass("is-text").html("15.00");
            $("#total-amount span:nth-child(2)").html("216.92");
            $("#checkout-button").removeClass("is-disabled");
        });
    }
</script>


