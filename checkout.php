<?php include ("header.php");?>

    <div class="breadcrumb-area bg-cover text-center text-light" style="background-image: url(assets/img/breadcumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Special Food</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>Food</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <!-- Start Checkout 
    ============================================= -->
    <div class="checkout-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="checkout-form">

                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Billing details</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">First name *</label>
                                            <input class="form-control" id="f-name" name="f-name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Last name *</label>
                                            <input class="form-control" id="l-name" name="l-name" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="select">Country / Region *</label>
                                            <select id="select">
                                                <option value="1">Australia</option>
                                                <option value="2">Canada</option>
                                                <option value="4">China</option>
                                                <option value="5">Japan</option>
                                                <option value="6">Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Street address *</label>
                                            <input class="form-control" id="st-address" name="st-address" type="text" placeholder="House number and street name">
                                            <input class="form-control" id="st-address2" name="st-address2" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="t-city">Town / City *</label>
                                            <input class="form-control" id="t-city" name="t-city" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="st-country">State / County *</label>
                                            <input class="form-control" id="st-country" name="st-country" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="postcode">Postcode / ZIP *</label>
                                            <input class="form-control" id="postcode" name="postcode" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Phone (optional)</label>
                                            <input class="form-control" id="phone" name="phone" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email address *</label>
                                            <input class="form-control" id="email" name="email" type="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>Order notes (optional)</h3>
                                <div class="form-group comments">
                                    <label for="comments">Order Notes (Option)</label>
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop-cart-totals mt-50 mt-md-30 mt-xs-10">
                                    <h2>Your order</h2>
                                    <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Currency Counting Machine  × 1</th>
                                                    <td>$108</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Subtotal</th>
                                                    <td>$108</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Shipping</th>
                                                    <td>Free Shipping</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td>$108</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <p class="woocommerce-info">
                                    Sorry, it seems that there are no available payment methods. Please contact us if you require assistance or wish to make alternate arrangements.
                                </p>
                                <button type="submit" name="submit" id="submit">Place Order</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Checkout -->

  <?php include ("footer.php");?>