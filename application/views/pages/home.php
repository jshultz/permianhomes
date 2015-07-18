<div id="subHeader" class="clearFix"> <!-- begin: subheader -->
    <!-- end: bannerLeftWrapper -->

    <div id="featureHolder"> <!-- begin: featureHolder -->

        <div id="featureMask">
            <div id="featureSlide">

                <div class="scrollable" id="scrollable">

                    <div class="items">
	                    <img src="/assets/images/slides/home/IMG_6322-1280x720.jpg">
	                    <img src="/assets/images/slides/home/IMG_6352-1280x720.jpg">
	                    <img src="/assets/images/slides/home/IMG_6965-1280x720.jpg">
                    </div>

                </div>


            </div>
        </div>



    </div>
    <!-- end: featureHolder -->

</div>
<!-- end: subheader -->

<div id="homeContentWrapper" class="clearFix"> <!-- begin: homeContentWrapper -->

<div id="homeContentCenter">
    <h2>Welcome to Permian Homes.</h2>

    <p>
        Permian Homes is a local builder that provides quality, well-built homes at fair and competitive prices. Our homes meet not only our high expectations, but those of our discerning home buyers, as well. Our philosophy is simple:  We want you to be proud of your home.
    </p>

    <p>
        At Permian Homes, we want to stand out as the builder of choice, for those building their first home as well as their dream home.  Our attractively designed communities in Midland and Odessa offer amenities and options that will both meet and exceed our customers' expectations.  Our knowledgeable team will be on hand to assist you throughout the entire building process to ensure your home is tailored to fit your needs, with personalized features and thoughtful design elements.
    </p>

    <p>
        We strive to attain the level of excellence that our customers expect, then go a step above. This is what sets us apart.  We invite you to visit us at any of our communities' Model Homes or our Design Center to learn more about our homes and how we can serve you.
    </p>

    <hr/>
    <img src="/assets/images/site-images/permian-homes-property-map-home-page.jpg" width="960">
</div>

    <div id="homeContentRight">
        <!-- begin: homeContentRight -->

        <h2><a name="featured"></a>Featured Homes</h2>

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

        <p><strong><a target="_blank" href="http://permianhomes.com/blog/contractor-spotlight-jeff-mccurdy-with-jb-plumbing/">Contractor Spotlight: Jeff McCurdy with J&B Plumbing</a></strong></p>

        <p><strong><a target="_blank" href="http://permianhomes.com/blog/meet-justin-and-monica-proud-permian-home-owners/">Meet Justin and Monica, Proud Permian Home Owners</a> </strong></p>

        <p><strong><a target="_blank" href="http://www.newswest9.com/story/24792349/companies-volunteers-help-give-amputee-a-repaired-home">Companies, Volunteers Help Give Amputee a Repaired Home</a> </strong></p>

        <p><strong><a target="_blank" href="http://permianhomes.com/blog/permian-homes-and-operation-finally-home-welcome-home-the-busby-family/">Welcome Home Busby Family!</a></strong></p>


    </div>

</div> <!-- end: homeWidgetContainer -->

</div> <!-- end: wrapper -->
