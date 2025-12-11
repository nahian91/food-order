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

    <!-- Start Reservation 
    ============================================= -->
    <div class="reservation-style-one-area default-padding">
        <div class="container">
            <div class="reservation-style-one-items bg-dark text-light wow fadeInUp">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 reservation-thumb">
                        <img src="assets/img/thumb/3.html" alt="Image Not Found">
                        <div class="icon">
                            <img src="assets/img/icon/1.html" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 reservation-info">
                        <h4 class="sub-heading">Reserve For</h4>
                        <h2 class="title">Amazing Dining</h2>
                        <form class="reservation-form" action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="+4733378901" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Person</label>
                                        <select id="subject">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="4">3 Person</option>
                                            <option value="5">4 Person</option>
                                            <option value="6">5 Person</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group date date-picker-one">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <select id="time">
                                            <option value="1">10:00 AM</option>
                                            <option value="1">11:00 AM</option>
                                            <option value="1">12:00 AM</option>
                                            <option value="1">1:00 AM</option>
                                            <option value="1">2:00 AM</option>
                                            <option value="1">3:00 AM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Book A Table
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reservation Area -->

   <?php include ("footer.php");?>