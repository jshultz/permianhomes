<div id="subHeader" class="clearFix"> <!-- begin: subheader -->

    <div id="bannerLeftWrapper">  <!-- begin: bannerLeftWrapper -->
        <h2><a href="#">Welcome to Permian Homes</a></h2>

        <p>&nbsp;</p>

        <div id="subBannerLeft">
            <h2><a href="/advantages/">The Advantage</a></h2>

            <p><strong>Permian Homes</strong> is dedicated to offering quality homes and lasting value for our
                customers. Our philosophy is simple: <em><a href="/advantages/">We focus on each customer to build one
                    dream at a time.</a></em></p>
        </div>
    </div>
    <!-- end: bannerLeftWrapper -->

    <div id="featureHolder"> <!-- begin: featureHolder -->

        <div id="featureMask">
            <div id="featureSlide">

                <div class="scrollable" id="scrollable">

                    <div class="items">
                        <img src="/assets/images/slides/Chris%20House-5-Star-2776.jpg">
                        <img src="/assets/images/slides/2.jpg">
                        <img src="/assets/images/slides/3.jpg">
                        <img src="/assets/images/slides/DSC_0013.jpg">
                        <img src="/assets/images/slides/Chris-House-5-Star-2805.jpg">
                        <img src="/assets/images/slides/Chris-House-5-Star-2885.jpg">
                        <img src="/assets/images/slides/5.jpg">
                        <img src="/assets/images/slides/7.jpg">
                        <img src="/assets/images/slides/8.jpg">
                        <img src="/assets/images/slides/DSC_0005.JPG">
                        <img src="/assets/images/slides/Model_Pictures_003.JPG">
                        <img src="/assets/images/slides/Model_Pictures_013.JPG">
                        <img src="/assets/images/slides/Chris%20House-5-Star-2851.jpg">

                    </div>

                </div>


            </div>
        </div>


    </div>
    <!-- end: featureHolder -->

</div>
<!-- end: subheader -->

<div id="homeContentWrapper" class="clearFix"> <!-- begin: homeContentWrapper -->

    <div id="homeContentLeft" class="clearFix"> <!-- begin: homeContentLeft -->

        <div id="postColumnLeft"> <!-- begin: postColumnLeft -->
            <h2>Current Communities</h2>

            <div id="homeTabs"> <!-- begin: homeTabs -->

                <ul class="tabs clearFix">

                    <li>
                        <a href="#thirdTab"><span>Old Course Estates</span></a>
                    </li>
                    <li>
                        <a href="#secondTab"><span>Desert Ridge</span></a>
                    </li>
	                <li>
		                <a href="#firstTab"><span>Daybreak</span></a>
	                </li>

                </ul>

                <div class="panes">

                    <!-- Old Course Estates -->
                    <div id="thirdTab" class="tabcontainer">
                        <h3><a href="/real_estate/#tabs-2">Welcome to Old Course Estates &ndash; Affordable Luxury</a></h3>
                        <img src="/assets/images/site-images/OldCourseEstates.jpg">

                        <p class="center"><strong>New Townhomes from the $180's</strong></p>

                        <p class="entry"> Old Course Estates is a master planned community located by Odessa Country Club and the 18th hole of the golf course!  These luxurious townhomes include many upgrades and amenities to bring you maintenance free living and affordable luxury.</p>

                        <p class="readMoreHolder">
                            <a href="/real_estate/#tabs-2"><span>Read More</span></a>
                        </p>
                    </div>

                    <!-- Desert Ridge -->
                    <div id="secondTab" class="tabcontainer">
                        <h3><a href="/real_estate/#tabs-1">Welcome to Desert Ridge Townhomes</a></h3>
                        <img src="/assets/images/site-images/floorplan/desert-ridge-townhomes.jpg">

                        <p class="center"><strong>New Townhomes from the $140's</strong></p>

                        <p class="entry">Situated near Odessa's premier shopping zone, this beautiful community offers
                            luxurious single story and two story townhomes with low maintenance living for less than
                            rent!</p>

                        <p class="readMoreHolder">
                            <a href="/real_estate/#tabs-1"><span>Read More</span></a>
                        </p>
                    </div>

	                <!-- Daybreak -->
	                <div id="firstTab" class="tabcontainer">
		                <h3><a href="/real_estate/#tabs-4">Welcome to Daybreak - A Place to Grow </a></h3>
		                <img src="/assets/images/site-images/floorplan/Daniela_20Rendering_20A_ezr.jpg">

		                <p class="center"><strong>New Single Family Homes from the $180's</strong></p>

		                <p class="entry">Situated across the street from the Midland Country Club, Daybreak Estates is Permian's newest development. This attractive community offers many included upgrades, large spacious lots, and lavish amenities with plenty of space for room to grow!</p>

		                <p class="readMoreHolder">
			                <a href="/real_estate/#tabs-4"><span>Read More</span></a>
		                </p>
	                </div>

                </div>

            </div>
            <!-- end: homeTabs -->




        </div>
        <!-- end: postColumnLeft -->

    </div>
    <!-- end: homeContentLeft -->

    <div id="homeContentRight">
        <!-- begin: homeContentRight -->

        <div id="homeSearchSection">
            <gcse:searchbox-only></gcse:searchbox-only>
        </div>

        <h2>Featured Homes</h2>

        <?php


        function cutString($str, $length = 130)
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

                if ($row->featured == '1') {
                    ?>

                    <div class="homePostContainer">
                        <h3>
                            <a href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><?php echo $row->location_street; ?></a>
                        </h3>

                        <p class="postInfo">
                            <span class="postInfoDate"><?php echo $row->created; ?></span>

                        </p>

                        <div class="postThumb">
                            <a href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><img width="208px"
                                                                                             height="101px;"
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
                        </p>

                        <p><?php echo cutString($row->description); ?></p>
                    </div>

                    <?php
                }

            }
        }
        ?>


        <!--        <p class="viewAllHolder"><a href="/pages/index/1/17/"><span>View All</span></a></p>-->
    </div>
    <!-- end: homeContentRight -->

</div> <!-- end: homeContentWrapper -->

<div id="homeWidgetContainer" class="clearFix">  <!-- begin: homeWidgetContainer -->
    <!-- Social Media -->
    <div id="home-widget-about" class="home-widget">
        <h2><a href="#">Follow Us</a></h2>

        <p>We're available on the following social media networks.</p>

        <ul class="social">
            <li><a href="https://www.facebook.com/pages/Permian-Homes/227849413954947"><img
                    src="/assets/images/icons/faceBook_48x48.png"></a></li>
            <li><a href="https://twitter.com/PermianHomes"><img src="/assets/images/icons/twitter_box_blue.png"></a></li>
            <li><a href="http://pinterest.com/permianhomes/"><img src="/assets/images/icons/pinterest-icon.png"></a></li>
        </ul>


    </div>

    <div id="home-widget-twitter" class="home-widget">
        <h2><a href="http://permianhomes.com/blog/">Testimonials and Blog</a></h2>

	    <div class="clearfix" style="width: 100px; height: 160px;">
		    <div id="quotes">
			    <div class="textItem">

				    <img src="/assets/images/testimonials/9.jpg">


			    </div>
			    <div class="textItem">

				    <img src="/assets/images/testimonials/10.jpg">


			    </div>
			    <div class="textItem">

				    <img src="/assets/images/testimonials/13.jpg">


			    </div>
			    <div class="textItem">

				    <img src="/assets/images/testimonials/12.jpg">


			    </div>
			    <div class="textItem">

				    <img src="/assets/images/testimonials/15.jpg">


			    </div>
			    <div class="textItem">

				    <img src="/assets/images/testimonials/14.jpg">


			    </div>
		    </div>
	    </div>


        <p class="readmore"><a href="http://permianhomes.com/blog/"><span>Blog and Testimonials</span></a></p>
    </div>
    <!-- Testimonials -->
    <div id="home-widget-flickr" class="home-widget">
        <h2><a href="http://permianhomes.com/blog/">In The News</a> </h2>

	    <p><strong><a href="http://permianhomes.com/blog/old-course-estates-breaking-ground-and-ready-to-sell/">Old Course Estates: Breaking Ground and Ready To Sell!</a></strong></p>

	    <p><strong><a href="http://permianhomes.com/blog/beauty-in-the-details-dreams-of-field-owner-and-permian-homes-contractor-brian-field/">Beauty in the Details: Dreams of Field owner and Permian Homes Contractor Brian Field</a></strong></p>

	    <p><strong><a href="http://permianhomes.com/blog/custom-home-owners-chris-and-angelique-vore/">Custom Home Owners: Chris and Angelique Vore</a></strong></p>


    </div>

</div> <!-- end: homeWidgetContainer -->

</div> <!-- end: wrapper -->