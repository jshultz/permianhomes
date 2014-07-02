<div id="subHeader" class="clearFix"> <!-- begin: subheader -->

    <div id="bannerLeftWrapper">  <!-- begin: bannerLeftWrapper -->

        <div id="subBannerLeft">

            <h2>Current Communities</h2>
            <div id="homeTabs"> <!-- begin: homeTabs -->

                <ul class="communities clearFix">

                    <li>
                        <a href="/real_estate/#tabs-4">
                            <img src="/assets/images/site-images/DSC_0003.png">
                            <span class="propety">Daybreak</span> |
                            <span class="town">Midland</span> |
                            <span class="price">$200s</span>
                        </a>
                    </li>

                    <li>
                        <a href="/real_estate/#tabs-2">
                            <img src="/assets/images/site-images/IMG_5443a.png">
                            <span class="property">Old Course</span> |
                            <span class="town">Odessa</span> |
                            <span class="price">$180s</span>
                        </a>
                    </li>
                    <li>
                        <a href="/real_estate/#tabs-1">
                            <img width="" src="/assets/images/site-images/Savannah-A-Rendering.jpg">
                            <span class="property">Desert Ridge</span> |
                            <span class="town">Odessa</span> |
                            <span class="price">$190s</span>
                        </a>
                    </li>

                </ul>

            </div>
            <!-- end: homeTabs -->
        </div>
    </div>
    <!-- end: bannerLeftWrapper -->

    <div id="featureHolder"> <!-- begin: featureHolder -->

        <div id="featureMask">
            <div id="featureSlide">

                <div class="scrollable" id="scrollable">

                    <div class="items">
	                    <img src="/assets/images/slides/Chris-House-5-Star-1.png">
	                    <img src="/assets/images/slides/Bathroom.png">
	                    <img src="/assets/images/slides/Chris-House-5-Star-2907.png">
	                    <img src="/assets/images/slides/David-Internet-1535.png">
	                    <img src="/assets/images/slides/Living-Room.png">
	                    <img src="/assets/images/slides/Model-5---7929.png">
	                    <img src="/assets/images/slides/Model-5---7936.png">
	                    <img src="/assets/images/slides/Model-5---7943.png">
	                    <img src="/assets/images/slides/Model-5---7947.png">
                        <img src="/assets/images/slides/Chris%20House-5-Star-2776.jpg">
                        <img src="/assets/images/site-images/162.jpg">
                        <img src="/assets/images/slides/Model-Pictures-015.JPG">
                        <img src="/assets/images/slides/Model-Pictures-052.JPG">
                        <img src="/assets/images/slides/2.jpg">
                        <img src="/assets/images/slides/3.jpg">
                        <img src="/assets/images/slides/coffer-ceiling-7311-don.jpg">
                        <img src="/assets/images/slides/IMG_5570.JPG">
                        <img src="/assets/images/slides/IMG_5615.JPG">
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



    <div id="homeContentRight">
        <!-- begin: homeContentRight -->

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
            <li><a target="_blank" href="https://www.facebook.com/pages/Permian-Homes/227849413954947"><img
                    src="/assets/images/icons/faceBook_48x48.png"></a></li>
            <li><a target="_blank" href="https://twitter.com/PermianHomes"><img src="/assets/images/icons/twitter_box_blue.png"></a></li>
            <li><a target="_blank" href="http://pinterest.com/permianhomes/"><img src="/assets/images/icons/pinterest-icon.png"></a></li>
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


        <p class="readmore"><a target="_blank" href="http://permianhomes.com/blog/"><span>Blog and Testimonials</span></a></p>
    </div>
    <!-- Testimonials -->
    <div id="home-widget-flickr" class="home-widget">
        <h2><a href="http://permianhomes.com/blog/">In The News</a> </h2>

        <p><strong><a target="_blank" href="http://permianhomes.com/blog/meet-justin-and-monica-proud-permian-home-owners/">Meet Justin and Monica, Proud Permian Home Owners</a> </strong></p>

        <p><strong><a target="_blank" href="http://www.newswest9.com/story/24792349/companies-volunteers-help-give-amputee-a-repaired-home">Companies, Volunteers Help Give Amputee a Repaired Home</a> </strong></p>

        <p><strong><a target="_blank" href="http://permianhomes.com/blog/permian-homes-and-operation-finally-home-welcome-home-the-busby-family/">Welcome Home Busby Family!</a></strong></p>

	    <p><strong><a target="_blank" href="http://permianhomes.com/blog/homeowners-michael-and-mel/">Meet Homeowners Michael and Mel</a></strong></p>

    </div>

</div> <!-- end: homeWidgetContainer -->

</div> <!-- end: wrapper -->
