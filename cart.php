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

    <!-- Start Cart 
    ============================================= -->
    <div class="cart-page default-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-cart-info">
                        <form class="woocommerce-cart-form" action="#">
                            <table class="shop-cart-table">
                                <thead>
                                    <tr>
                                        <th>Remove</th>
                                        <th>Thumbnail</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="woocommerce-cart-form">
                                        <td class="product-remove"><a href="#" class="remove"><i class="fas fa-times"></i></a></td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/shop/1.png" alt="Image Not Found"></a>
                                        </td>
                                        <td><a href="#">Currency Counting Machine</a></td>
                                        <td class="product-price">$56</td>
                                        <td class="product-quantity">
                                            <input type="number"  value="1" title="Qty" min="0" step="1" placeholder="">
                                        </td>
                                        <td class="product-subtotal">48.00</td>
                                        </tr>
                                        <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <input type="text" placeholder="Coupon code">
                                                <button type="submit">Apply coupon</button>
                                            </div>
                                            <button type="submit">Update cart</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="shop-cart-totals mt-50">
                        <h2>Cart totals</h2>
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">$56</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Shipping</th>
                                        <td>
                                            <p>
                                                Free shipping
                                            </p>
                                            <p>
                                                Shipping to Australia.
                                            </p>
                                            <a href="#">Change address</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total</th>
                                        <td>$56</td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

  <?php include ("footer.php");?>