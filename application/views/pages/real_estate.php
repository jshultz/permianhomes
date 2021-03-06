
<div id="insideContentWrapper" class="clearFix"> <!-- begin: insideContentWrapper -->


<div id="leftSidebar"> <!-- begin: leftSidebar -->

    <?php $this->load->view($sidebar); ?>

</div>
<!-- end: leftSidebar -->

<div id="insideRightContent"> <!--begin: insideRightContent-->

<!--begin: entryWrapper-->

<div class="entryWrapper">

<?php

echo '<h2 class="postTitle">' . $page_content->page_headline . '</h2>';

?>

    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBdktHcRDenVHoq8lUIwObpNKyhk8b_QoI&sensor=false&extension=.js'></script>

    <script>
        google.maps.event.addDomListener(window, 'load', init);
        var map;
        function init() {
            var mapOptions = {
                center: new google.maps.LatLng(31.983035,-102.323457),
                zoom: 11,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.DEFAULT,
                },
                disableDoubleClickZoom: true,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                },
                scaleControl: true,
                scrollwheel: true,
                panControl: true,
                streetViewControl: true,
                draggable : true,
                overviewMapControl: true,
                overviewMapControlOptions: {
                    opened: false,
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                    { featureType: "administrative", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -100 }, { lightness: 20 } ] },
                    { featureType: "road", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -100 }, { lightness: 40 } ] },
                    { featureType: "water", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -10 }, { lightness: 30 } ] },
                    { featureType: "landscape.man_made", elementType: "all", stylers: [ { visibility: "simplified" }, { saturation: -60 }, { lightness: 10 } ] },
                    { featureType: "landscape.natural", elementType: "all", stylers: [ { visibility: "simplified" }, { saturation: -60 }, { lightness: 60 } ] },
                    { featureType: "poi", elementType: "all", stylers: [ { visibility: "off" }, { saturation: -100 }, { lightness: 60 } ] },
                    { featureType: "transit", elementType: "all", stylers: [ { visibility: "off" }, { saturation: -100 }, { lightness: 60 } ] }
                ],
            }
            var mapElement = document.getElementById('permian_estates');
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
                ['Desert Ridge', 'Homes from the $190s', 'undefined', 'undefined', 'undefined', 31.906416, -102.358543, 'https://mapbuildr.com/assets/img/markers/default.png'],['Old Course Estates', 'Homes from the $180s', 'undefined', 'undefined', 'undefined', 31.8927224, -102.2905824, 'https://mapbuildr.com/assets/img/markers/default.png'],['Enclave and Devon Court', 'Homes from the $250s', 'undefined', 'undefined', 'undefined', 31.9186867, -102.2743335, 'https://mapbuildr.com/assets/img/markers/default.png'],['Daybreak Estates', 'Homes from the $200s', 'undefined', 'undefined', 'undefined', 32.0636434, -102.0856454, 'https://mapbuildr.com/assets/img/markers/default.png']
            ];
            for (i = 0; i < locations.length; i++) {
                if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                marker = new google.maps.Marker({
                    icon: markericon,
                    position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                    map: map,
                    title: locations[i][0],
                    desc: description,
                    tel: telephone,
                    email: email,
                    web: web
                });
                link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
            }
            function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
                var infoWindowVisible = (function () {
                    var currentlyVisible = false;
                    return function (visible) {
                        if (visible !== undefined) {
                            currentlyVisible = visible;
                        }
                        return currentlyVisible;
                    };
                }());
                iw = new google.maps.InfoWindow();
                google.maps.event.addListener(marker, 'click', function() {
                    if (infoWindowVisible()) {
                        iw.close();
                        infoWindowVisible(false);
                    } else {
                        var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p></div>";
                        iw = new google.maps.InfoWindow({content:html});
                        iw.open(map,marker);
                        infoWindowVisible(true);
                    }
                });
                google.maps.event.addListener(iw, 'closeclick', function () {
                    infoWindowVisible(false);
                });
            }
        }
    </script>
    <style>
        #permian_estates {
            height:400px;
            width:800px;
        }
        .gm-style-iw * {
            display: block;
            width: 100%;
        }
        .gm-style-iw h4, .gm-style-iw p {
            margin: 0;
            padding: 0;
        }
        .gm-style-iw a {
            color: #4272db;
        }
    </style>

    <div id='permian_estates'></div>


<div class="clearfix"></div>

<?php echo '<section class="entry">' . $page_content->page_content . '</section>'; ?>



<section class="entry">


<div class="">
    <div id="tabwrap" class="clearfix">
        <ul class="tabs clearfix" style="height: auto">
            <li><a href="#tabs-4">Daybreak Estates</a></li>
            <li><a href="#tabs-1">Desert Ridge</a></li>
            <li><a href="#tabs-2">Old Course Estates</a></li>
            <li><a href="#tabs-5">Enclave at Mission</a></li>
            <li><a href="#tabs-6">Devon Court</a></li>
        </ul>
        <div class="clearfix"></div>

        <!-- Daybreak Estates -->
        <div id="tabs-4" class="pane clearfix">

            <h1>Daybreak Estates &ndash; A Place to Grow</h1>

            <section>
                <div id="featureHolder">
                    <div id="featureMask">
                        <div id="featureSlide">

                            <div class="scrollable" id="daybreak-slides">

                                <div class="items">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6322.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6347.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6352.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6360.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6377.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6386.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6395.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6415.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6424.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6439.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6459.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6467.jpg">
                                    <img src="/assets/images/slides/daybreak-slides/IMG_6473.jpg">
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </section>

            <h2>New Single Family Homes from the $200's</h2>

            <p class="entry">Situated across the street from the Midland Country Club, Daybreak Estates is Permian's newest
                development. This attractive community offers many included upgrades, large spacious lots, lavish amenities, and community parks all with plenty of space for room to grow!</p>

            <section class="clearfix" style="width: 100%; display: block">

                <aside class="floatleft clearfix">
                    <h3 style="margin-bottom: 0; padding-bottom: 0;">Sales Center</h3>

                    <p style="margin-top: 5px; ">
                        <a target="_blank" href="http://l.jshultz.co/1p5bLic" class="map">
                            6101 Sun Tea Way<br/>
                            Midland, TX 79707</p>
                    </a>

                    <p>Sales Center<br/>
                        Open Monday &ndash; Saturday 10-6pm,<br/>
                        Closed Sunday</p>

                </aside>
                <div class="floatright clearfix">
                    <a class=" button" href="/assets/pdfs/Daybreak-Phase-1-Sales-Rendering.pdf" target="_blank">
                        Download Site Plan</a>
                    <br>
                    <a class="button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb.pdf">Download
                        Brochure</a>
                </div>

            </section>


            <!-- Isabella -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Isabella_Rendering_400.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_4.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Isabella</h3>

                    <p>3 Bedroom / 2 Bathroom<br/>
                        1750 sq.ft. Living / 2460 sq. ft. Total<br/>
                        Priced at $221,990
                    </p>

                </section>
            </section>
            <!-- Daniella -->
            <section class="floorplan clearfix">

                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Daniela_20Rendering_20A_ezr.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_5.pdf">Download
                        Floor
                        Plan</a>
                </section>

                <section class="details">


                    <h3>The Daniela</h3>

                    <p>3 Bedroom / 2 Bathroom<br/>
                        1894 sq.ft. Living / 2584 sq. ft. Total<br/>
                        Priced at $231,990
                    </p>

                </section>
            </section>
            <!-- Mirella -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/MirellaB.jpg" width="399">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_6.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Mirella</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2004 sq.ft. Living / 2680 sq. ft. Total<br/>
                        Priced at $241,990
                    </p>

                </section>
            </section>
            <!-- Erminia -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Erminia_B.jpg" width="399">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_7.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Erminia</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2020 sq.ft. Living / 2680 sq. ft. Total<br/>
                        Priced at $244,990
                    </p>

                </section>
            </section>
            <!-- Fabiana -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Fabiana_Rendering_400.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_8.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Fabiana</h3>

                    <p>3 Bedroom / 2 Bathroom<br/>
                        2300 sq.ft. Living / 3150 sq. ft. Total<br/>
                        Priced at $261,990
                    </p>

                </section>
            </section>
            <!-- Francesca -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Francesca_Elevation_B.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_9.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Francesca</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2426 sq.ft. Living / 3161 sq. ft. Total<br/>
                        Priced at $271,990
                    </p>

                </section>
            </section>
            <!-- Gabriella -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Gabriella_Rendering_400.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_10.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Gabriella</h3>

                    <p>4 Bedroom / 3 Bathroom<br/>
                        3247 sq.ft. Living / 4110 sq. ft. Total<br/>
                        Priced at $315,990
                    </p>

                </section>
            </section>

            <!-- Chiara -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Chiara-Rendering.png">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank"  href="/assets/pdfs/Chiara.pdf">Download Floor Plan</a>
                </section>
                <section class="details">
                    <h3>The Chiara</h3>

                    <p>5 Bedroom / 3 Bathroom<br/>
                        3406 sq.ft. Living / 4393 sq. ft. Total<br/>
                        Priced at $341,990
                    </p>

                </section>
            </section>

        </div>

        <!-- Desert Ridge Townhomes -->
        <div id="tabs-1" class="pane">

            <h1>Desert Ridge &mdash; Maintenance Free Living</h1>




            <section class="">
                <img width="566" src="/assets/images/site-images/Savannah-A-Rendering.jpg">


            </section>

            <h2>New Single Family Homes from the $190's</h2>

            <p class="entry">Situated near Odessa's premier shopping zone, this beautiful community offers luxurious single family homes with low maintenance living for less than rent!</p>

            <section class="clearfix" style="width: 100%; display: block">
                <aside class="floatleft clearfix">
                    <h3 style="margin-bottom: 0; padding-bottom: 0;">Sales Center</h3>

                    <p style="margin-top: 5px; ">
                        <a target="_blank" href="http://l.jshultz.co/1edt7Yy">1201 Boise Drive,<br/> Odessa, TX</a>
                    </p>

                    <p>Sales Center <br/>
                        Open Monday &ndash; Saturday 10-6pm, <br/>
                        Closed Sunday</p>
                </aside>

                <div class="floatright clearfix">
                    <a class="button" target="_blank" href="/assets/pdfs/DesertRidgeIllustration-24x36.pdf">Download
                        Site Plan</a><br/>
                    <a class="button" target="_blank" href="/assets/pdfs/Permian_Homes_Desert_Ridge_Brochure.pdf">Download
                        Brochure</a>
                </div>
            </section>


            <section class="clearfix" style="width: 100%; display: block">

                <!-- Svannah -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/savannah_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/savannah_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The Savannah</h3>

                        <p>3 Bedroom / 2 Bathrooms<br/>
                            1,709 sq.ft. Living / 2,323 sq. ft. Total<br/>
                            Priced at $196,990</p>

                    </section>
                </section>


                <!-- Keili -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/keili_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/keili_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The Keili</h3>

                        <p>3 Bedroom / 2 Bathrooms<br/>
                            1,798 sq.ft. Living / 2,491 sq. ft. Total<br/>
                            Priced at $204,990</p>

                    </section>
                </section>

                <!-- Rylee -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/rylee_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/rylee_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The Rylee</h3>

                        <p>3 Bedroom / 2 Bathrooms<br/>
                            1,897 sq.ft. Living / 2,668 sq. ft. Total<br/>
                            Priced at $212,990</p>

                    </section>
                </section>

                <!-- Samantha -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/samantha_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/samantha_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The Samantha</h3>

                        <p>4 Bedroom / 2 Bathrooms<br/>
                            1,998 sq.ft. Living / 2,771 sq. ft. Total<br/>
                            Priced at $220,990</p>

                    </section>
                </section>

                <!-- McKenna -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/mckenna_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/mckenna_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The McKenna</h3>

                        <p>4 Bedroom / 2 Bathrooms<br/>
                            2,200 sq.ft. Living / 2,993 sq. ft. Total<br/>
                            Priced at $232,990</p>

                    </section>
                </section>

                <!-- Mercedes -->
                <section class="floorplan clearfix">
                    <section class="floatleft photo">
                        <img src="/assets/images/site-images/desertridge/mercedes_a_rendering.jpg">
                        <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/desertridge/mercedes_sales_plan.pdf">Download
                            Floor
                            Plan</a>
                    </section>
                    <section class="details">

                        <h3>The Mercedes</h3>

                        <p>5 Bedroom / 2.5 Bathrooms<br/>
                            2,624 sq.ft. Living / 3,662 sq. ft. Total<br/>
                            Priced at $272,990</p>

                    </section>
                </section>

            </section>

        </div>

        <!-- Old Course Estates -->
        <div id="tabs-2" class="pane">
            <h1>Old Course Estates &ndash; Affordable Luxury</h1>
            <section>
                <div id="featureHolder">
                    <div id="featureMask">
                        <div id="featureSlide">

                            <div class="scrollable" id="old-course-slides">

                                <div class="items">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6485.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6493.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6494.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6495.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6501.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6502.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6505.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6520.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6523.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6531.JPG">
                                    <img src="/assets/images/slides/old-course-slides/IMG_6544.JPG">
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <h2>New Townhomes from the $180's</h2>
            </section>

            <p class="entry">
                Old Course Estates is a master planned community located by Odessa Country Club and the 18<sup>th</sup> hole of
                the golf course! These luxurious townhomes include many upgrades and amenities to bring you maintenance free
                living and affordable luxury.
            </p>

            <section class="clearfix" style="width: 100%; display: block">

                <aside class="floatleft clearfix">
                    <h3 style="margin-bottom: 0; padding-bottom: 0;">Sales Center</h3>

                    <p style="margin-top: 5px; ">
                        <a target="_blank" class="map" href="http://l.jshultz.co/1mehMfC">1405 Old Course Road,<br/> Odessa, TX 79765</a>
                    </p>

                    <p>Sales Center <br/>
                        Open Monday &ndash; Saturday 10-6pm,<br/>
                        Closed Sunday</p>

                </aside>
                <div class="floatright clearfix">
                    <a class=" button" href="/assets/pdfs/OldCourseIllustration-24x36.pdf" target="_blank">
                        Download Site Plan</a>
                    <br>
                    <a class="button" target="_blank" href="/assets/pdfs/OC-Brochure-3-4-14.pdf">Download
                        Brochure</a>
                </div>

            </section>

            <!-- Kyler -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/oldcourse/067.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Kyler.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Kyler</h3>

                    <p>3 Bedroom / 2.5 Bathrooms<br/>
                        1,515 sq.ft. Living / 2,164 sq. ft. Total<br/>
                        Priced at $181,990</p>

                </section>
            </section>

            <!-- Tate -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/oldcourse/062.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Tate.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Tate</h3>

                    <p>3 Bedroom / 2.5 Bathrooms<br/>
                        1689 sq.ft. Living / 2359 sq. ft. Total<br/>
                        Priced at $191,990</p>

                </section>
            </section>

            <!-- Cohen -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/oldcourse/065.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Cohen.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Cohen</h3>

                    <p>3 Bedroom / 2.5 Bathrooms<br/>
                        1,852 sq.ft. Living / 2,407 sq. ft. Total<br/>
                        Priced at $201,990</p>

                </section>
            </section>

            <!-- Cara -->
            <section class="floorplan clearfix">

                <section class="floatleft photo">
                    <img src="/assets/images/site-images/oldcourse/067.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Cara.pdf">Download
                        Floor
                        Plan</a>
                </section>

                <section class="details">


                    <h3>The Cara</h3>

                    <p>4 Bedroom / 2.5 Bathroom<br/>
                        1,915 sq.ft. Living / 2,515 sq. ft. Total<br/>
                        Priced at 210,990</p>

                </section>
            </section>

            <!-- Callie -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/oldcourse/IMG_5452-542x360.png">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/Callie.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Callie</h3>

                    <p>4 Bedroom / 2.5 Bathroom<br/>
                        2,006 sq.ft. Living / 2,613 sq. ft. Total<br/>
                        Priced at $220,990</p>

                </section>
            </section>

        </div>

        <!-- Enclave Estates -->
        <div id="tabs-5" class="pane ">

            <h1>Enclave &ndash; Now You're Living!</h1>

            <section>
                <img src="/assets/images/site-images/enclave.png">
            </section>

            <h2>New Single Family Homes from the $250's</h2>

            <p class="entry">Welcome to Enclave at Mission Ranch, Odessa's premier community.
                Located next to Mission Estates and the Odessa Country Club Golf Course, these homes offer
                many amenities and upgrades, all next to shopping, dining, movie theaters, and so much more!
            </p>

            <section class="clearfix" style="width: 100%; display: block">

                <aside class="floatleft clearfix">
                    <h3 style="margin-bottom: 0; padding-bottom: 0;">Sales Center</h3>

                    <p style="margin-top: 5px; ">
                        <a target="_blank" href="http://l.jshultz.co/1DE1mEq" class="map">
                            76 Berkshire Circle, <br/>
                            Odessa TX 79765</p>
                    </a>

                    <p>Sales Center<br/>
                        Open Monday &ndash; Saturday 10-6pm,<br/>
                        Closed Sunday</p>

                </aside>
                <div class="floatright clearfix" style="margin-left:20px;">
                    <a class=" button" href="/assets/pdfs/Enclave-Phase-1-Sales-Rendering.pdf" target="_blank">
                        Download Site Plan</a>
                    <br>
                    <a class="button" target="_blank" href="/assets/pdfs/enclave/Permian-Homes-Enclave-Brochure_web.pdf">Download
                        Brochure</a>
                    </br>
                </div>

            </section>

            <!-- Mirella -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/MirellaB.jpg" width="399">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/enclave/Mirella-Sales-Plan.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Mirella</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2004 sq.ft. Living / 2680 sq. ft. Total<br/>
                        Priced at $254,990
                    </p>

                </section>
            </section>
            <!-- Erminia -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Erminia_B.jpg" width="399">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/enclave/Erminia-Sales-Plan.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Erminia</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2020 sq.ft. Living / 2680 sq. ft. Total<br/>
                        Priced at $256,990
                    </p>

                </section>
            </section>
            <!-- Fabiana -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Fabiana_Rendering_400.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/enclave/Fabiana-Sales-Plan.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">

                    <h3>The Fabiana</h3>

                    <p>3 Bedroom / 2 Bathroom<br/>
                        2300 sq.ft. Living / 3150 sq. ft. Total<br/>
                        Priced at $274,990
                    </p>

                </section>
            </section>
            <!-- Francesca -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Francesca_Elevation_B.jpg">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/enclave/Francesca-Sales-Plan.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Francesca</h3>

                    <p>4 Bedroom / 2 Bathroom<br/>
                        2426 sq.ft. Living / 3161 sq. ft. Total<br/>
                        Priced at $284,990
                    </p>

                </section>
            </section>
            <!-- Gabriella -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/Gabriella_Rendering_400.JPG">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/enclave/Gabriella-Sales-Plan.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Gabriella</h3>

                    <p>4 Bedroom / 3 Bathroom<br/>
                        3247 sq.ft. Living / 4110 sq. ft. Total<br/>
                        Priced at $324,990
                    </p>

                </section>
            </section>

        </div>

        <!-- Devon Court -->
        <div id="tabs-6" class="pane ">

            <h1>Devon Court &ndash; Luxury Living!</h1>

            <section>
                <img src="/assets/images/site-images/devon-court-banner.png">

            </section>

            <h2>New Single Story Townhomes from the $200's</h2>

            <p class="entry">Devon Court in Mission Ranch is a private cul-de-sac community made up of luxury single story townhomes.
                Enjoy open concept floor plans, maintenance free living, all next to shopping, dining, movie theaters, and so much more!</p>

            <section class="clearfix" style="width: 100%; display: block">

                <aside class="floatleft clearfix">
                    <h3 style="margin-bottom: 0; padding-bottom: 0;">Sales Center</h3>

                    <p style="margin-top: 5px; ">
                        <a target="_blank" href="http://l.jshultz.co/1DE1mEq" class="map">
                            76 Berkshire Circle, <br/>
                            Odessa TX 79765</p>
                    </a>

                    <p>Sales Center<br/>
                        Open Monday &ndash; Saturday 10-6pm,<br/>
                        Closed Sunday</p>

                </aside>
                <div class="floatright clearfix" style="margin-left:20px;">
                    <a class=" button" href="/assets/pdfs/Devon-Court.pdf" target="_blank">
                        Download Site Plan</a>
                    <br>
                    <a class="button" target="_blank" href="/assets/pdfs/devon/Permian_Homes_Devon_Court_Shari_brochure.pdf">Download
                        Brochure</a>
                    </br>
                </div>

            </section>

            <!-- Shari -->
            <section class="floorplan clearfix">
                <section class="floatleft photo">
                    <img src="/assets/images/site-images/floorplan/devon-court-shari.png">
                    <a style="margin-left: 35px" class="clearfix button" target="_blank" href="/assets/pdfs/devon/Permian_Homes_Devon_Court_Floorplan_Shari.pdf">Download
                        Floor
                        Plan</a>
                </section>
                <section class="details">
                    <h3>The Shari</h3>

                    <p>3 Bedroom / 2 Bathroom<br/>
                        1599 sq.ft. Living / 2179 sq. ft. Total<br/>
                        Priced at $209,990
                    </p>

                </section>
            </section>

            <br/>

            <br/>

        </div>

    </div>
</div>


</section>

</div>

<div class="archiveListItem clearfix" id="post-1"> <!--begin: entryWrapper-->



    <?php



    function cutString($str, $length = 270)
    {

        // if string is same length or shorter then send it back
        if (strlen($str) <= $length) {
            return $str;
        }

        // cut the string
        $str = substr($str, 0, $length);

        // make sure it isn't in the middle of a word
        $str = explode(' ', $str);
        array_pop($str);

        return implode(' ', $str) . '...';
    }

    if ((isset($locations)) && (count($locations) >= 1)) {
        foreach ($locations->result() as $row) {

            if ($row->featured != '1' || $row->featured == '1') {

                if ($row->sold != '1') {
                ?>

                <div class="archiveListItem clearfix">

                    <div class="postThumb modRightThumb">
                        <a href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><img width="208px" height="101px"
                                                                                         src="<?php echo $row->thumb; ?>"
                                                                                         alt=""
                                                                                         class="imgPostThumb"/></a>

                        <?php
                        if ($row->reduced == '1') {
                            echo '<img class="ribbon" alt="" src="/assets/images/theme/ribbon-reduced.png"/>';
                        }

                        if ($row->rented == '1') {
                            echo '<img class="ribbon" alt="" src="/assets/images/theme/ribbon-rented.png"/>';
                        }

                        if ($row->sold == '1') {
                            echo '<img class="ribbon" alt="" src="/assets/images/theme/ribbon-sold.png"/>';
                        }


                        ?>
                    </div>

                    <h2 class="postTitle"><a
                            href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><?php echo $row->location_street; ?></a>
                    </h2>

                    <p class="postInfo">
                        <span class="postInfoDate"><?php echo $row->created; ?></span>
                        <span class="postInfoComment">8</span>
                    </p>

                    <div class="entry">
                        <p><?php echo $row->description ?></p>
                    </div>

                    <p class="unitAndPrice">
                        <span class="unitInfo"><?php echo $row->bedrooms; ?> Bed, <?php echo $row->bathrooms; ?>
                            Bath, <?php echo $row->square_feet; ?> Sq Ft</span>
                        <span class="unitPrice"><strong>Price : </strong>

                            <?php

                            if ($row->rent_price != '') {
                                echo '$' . $row->rent_price . '/ Month</span>';
                            } else {
                                echo '$' . $row->sale_price . '</span>';
                            }

                            ?>

	                        <a class="button" href="/financing?price=<?php echo $row->sale_price; ?>">Calculate My Payment</a><br/>
                    </p>
                </div>

            <?php

                }
            }

        }
    }
    ?>

</div>



</div>
<!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->
