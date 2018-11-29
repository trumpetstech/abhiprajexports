<?php
include('header.php');
?>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBeFHBMW9OHLG3CbDdnOTrseC4a3UxQxqg&amp;language=en'></script>

<link rel='dns-prefetch' href='http://maps.googleapis.com/' />

<section class="page-top page-header-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs-wrap">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="index.php" title="Go to Home Page">
                                <span>Home</span>
                            </a>
                            <i class="delimiter"></i>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="">
                    <h1 class="page-title">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="main" class="column1 wide clearfix"><!-- main -->
    <div class="container-fluid">
        <div class="row main-content-wrap">
            <!-- main content -->
            <div class="main-content col-md-12">
                <div id="content" role="main">
                    <article class="post-73 page type-page status-publish hentry">
                        <div class="page-content">
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="wpb_wrapper vc_column-inner">
                                        <div id='wrap_map' class='porto-map-wrapper porto-adjust-bottom-margin ' style=' height:400px;'>
                                            <div id='map' data-map_override='0' class='porto_google_map wpb_content_element ' style='width:100%;height:400px;'>
                                            </div>
                                        </div>
                                        <script type='text/javascript'>
                                            (function($) {
                                                'use strict';
                                                if (typeof google != 'undefined') {
                                                    var map_map = null;
                                                    var coordinate_map;
                                                    var isDraggable = $(document).width() > 640 ? true : true;
                                                    try
                                                    {
                                                        var map_map = null;
                                                        var coordinate_map;
                                                        coordinate_map=new google.maps.LatLng(20.0069273,  73.7712884);
                                                        var mapOptions=
                                                        {
                                                            zoom: 16,
                                                            center: coordinate_map,
                                                            scaleControl: true,
                                                            streetViewControl: true,
                                                            mapTypeControl: true,
                                                            panControl: true,
                                                            zoomControl: true,
                                                            scrollwheel: false,
                                                            draggable: isDraggable,
                                                            zoomControlOptions: {
                                                                position: google.maps.ControlPosition.RIGHT_BOTTOM
                                                            },mapTypeId: google.maps.MapTypeId.TERRAIN,};
                                                            var map_map = new google.maps.Map(document.getElementById('map'),mapOptions);
                                                            var x = 'off';
                                                            var marker_map = new google.maps.Marker({
                                                                position: new google.maps.LatLng(20.0069273,  73.7712884),
                                                                animation:  google.maps.Animation.DROP,
                                                                map: map_map,
                                                                icon: ''
                                                            });
                                                            google.maps.event.addListener(marker_map, 'click', toggleBounce);
                                                            var infowindow = new google.maps.InfoWindow();
                                                            infowindow.setContent('<div class="map_info_text" style=\'color:#000;\'><strong>Abhipraj Exports</strong></p> <div>Nashik, Maharashtra</div> <p></div>');infowindow.open(map_map,marker_map);google.maps.event.addListener(marker_map, 'click', function() {
                                                                infowindow.open(map_map,marker_map);
                                                            });}
                                                            catch(e){};
                                                            jQuery(document).ready(function($){
                                                                google.maps.event.trigger(map_map, 'resize');
                                                                $(window).resize(function(){
                                                                    google.maps.event.trigger(map_map, 'resize');
                                                                    if(map_map!=null) {
                                                                        map_map.setCenter(coordinate_map);
                                                                    }
                                                                });
                                                                $('.ui-tabs').bind('tabsactivate', function(event, ui) {
                                                                    if($(this).find('.porto-map-wrapper').length > 0)
                                                                    {
                                                                        setTimeout(function(){
                                                                            $(window).trigger('resize');
                                                                        },200);
                                                                    }
                                                                });
                                                                $('.ui-accordion').bind('accordionactivate', function(event, ui) {
                                                                    if($(this).find('.porto-map-wrapper').length > 0) {
                                                                        setTimeout(function(){
                                                                            $(window).trigger('resize');
                                                                        },200);
                                                                    }
                                                                });
                                                                $(window).load(function() {
                                                                    setTimeout(function() {
                                                                        $(window).trigger('resize');
                                                                    },200);
                                                                });
                                                                $(document).on('onPortoModalPopupOpen', function(){
                                                                    if($(map_map).parents('.porto_modal-content')) {
                                                                        setTimeout(function(){
                                                                            $(window).trigger('resize');
                                                                        },200);
                                                                    }
                                                                });
                                                            });
                                                            function toggleBounce() {
                                                                if (marker_map.getAnimation() != null) {
                                                                    marker_map.setAnimation(null);
                                                                } else {
                                                                    marker_map.setAnimation(google.maps.Animation.BOUNCE);
                                                                }
                                                            }
                                                        }
                                                    })(jQuery);
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix">
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid m-b-xl">
                                        <div class="porto-wrap-container container">
                                            <div class="row">
                                                <div class="vc_column_container vc_col-sm-6">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <div class="wpcf7" id="wpcf7-f821-p73-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response">
                                                            </div>
                                                            <form action="send_mail.php" method="post" class="wpcf7-form">
                                                                <h2 class="short"><strong>Contact</strong> Us</h2>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-name">Your name *</label><br />
                                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                                <input type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="contact-name" required />
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-email">Your email address *</label><br />
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="contact-email" required />
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="contact-subject">Subject</label><br />
                                                                            <span class="wpcf7-form-control-wrap your-subject">
                                                                                <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="contact-subject"/>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="contact-message">Your Message</label><br />
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" id="contact-message"></textarea>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary btn-lg" >Send Message</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_column_container vc_col-sm-6">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <h4  class="vc_custom_heading m-t align-left heading-primary">Get in <strong>touch</strong></h4>
                                                        <div class="wpb_text_column wpb_content_element " >
                                                            <div class="wpb_wrapper">
                                                                <h5>Get in touch with Abhipraj Exports at the provided location or contact number.</h5>
                                                            </div>
                                                        </div>
                                                        <div class="porto-separator  ">
                                                            <hr class="separator-line  align_center">
                                                        </div>
                                                        <h4  class="vc_custom_heading align-left heading-primary">The <strong>Office</strong></h4>
                                                        <div class="porto-sicon-wrapper style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-2950774105bfe4e179a2d5" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon circle "  style="color:#ffffff;background:#0088cc;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-map-marker"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Address:</strong> Niwas Regency, Canada Corner, Nashik,Maharashtra,India- 422002</h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div><div class="porto-sicon-wrapper m-t-n style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-13960159645bfe4e179d13b" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon circle "  style="color:#ffffff;background:#0088cc;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Phone:</strong> (+91)98222-66007</h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div><div class="porto-sicon-wrapper m-t-n style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-150531625bfe4e179d907" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon circle "  style="color:#ffffff;background:#0088cc;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Email:</strong>
                                                                        <a href="mailto:info@abhiprajexports.com" class="__cf_email__">info@abhiprajexports.com</a>
                                                                    </h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div>
                                                        <div class="porto-separator  ">
                                                            <hr class="separator-line  align_center">
                                                        </div>
                                                        <h4  class="vc_custom_heading align-left heading-primary">Business <strong>Hours</strong></h4>
                                                        <div class="porto-sicon-wrapper style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-12393474205bfe4e17a0bd0" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon none "  style="color:#333;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-clock-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;">Monday - Friday 9am to 5pm</h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div><div class="porto-sicon-wrapper m-t-n style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-12771828665bfe4e17a134c" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon none "  style="color:#333;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-clock-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;">Saturday - 9am to 2pm</h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div>
                                                        <div class="porto-sicon-wrapper m-t-n style_1">
                                                            <div class="porto-sicon-box default-icon" style=""  >
                                                                <div class="porto-sicon-default">
                                                                    <div id="porto-icon-13429985295bfe4e17a19fc" class="porto-just-icon-wrapper  ">
                                                                        <div class="align-icon" style="text-align:center;">
                                                                            <div class="porto-icon none "  style="color:#333;font-size:14px;display:inline-block;">
                                                                                <i class="fa fa-clock-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="porto-sicon-header" >
                                                                    <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;">Sunday - Closed</h3>
                                                                </div> <!-- header -->
                                                            </div> <!-- porto-sicon-box -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="">
                            </div>
                        </div>
                    </div><!-- end main content -->
                </div>
            </div>
        </div><!-- end main -->

        <?php
        include('footer.php');
        ?>
        <script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min5243.js?ver=5.4.5'></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('.menu-contactus').addClass('active');
            });
        </script>