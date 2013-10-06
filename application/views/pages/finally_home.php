<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jason
 * Date: 11/17/12
 * Time: 9:50 AM
 * To change this template use File | Settings | File Templates.
 */
?>


<div id="insideContentWrapper" class="clearFix"> <!-- begin: insideContentWrapper -->


    <div id="leftSidebar"> <!-- begin: leftSidebar -->

        <?php $this->load->view($sidebar); ?>

    </div>  <!-- end: leftSidebar -->

    <div id="insideRightContent"> <!--begin: insideRightContent-->


        <div class="entryWrapper" id="post-1"> <!--begin: entryWrapper-->

            <?php



            echo '<h2 class="postTitle">' . $page_content->page_headline . '</h2>';

            echo '';

            ?>

            <section class="entry">

                        <ul class="tabs clearfix">
                            <li><a href="#tabs-1">Cox Family</a></li>
                            <li><a href="#tabs-2">The Cox Family Home</a></li>
                            <li><a href="#tabs-3">Pictures</a></li>
                        </ul>

                        <div class="panes">
                            <div id="tabs-1">
                                <h1>The Cox Family</h1>
                                <p><a href="/assets/pdfs/Permian_Homes_Trifold_Updated.pdf"><strong>Download a Brochure</strong></a> </p>
                                <img width="500px" src="/assets/images/site-images/parade_of_homes_ad_finished_ezr.jpg">
                            </div>
                            <div id="tabs-2">
                                <h1>The Cox Family Mortgage Free Home
                                    "The Fabiana"</h1>
                                <img src="/assets/images/site-images/FabianaB_ezr.jpg">
                                <p>This beautiful 2780 square foot home is designed to give SGT Cox freedom to move around. With a family oriented open floor plan, this 4 bedroom 3 bath home is a product of builder associates, developers, individual contributors and volunteers in and around the Permian Basin to make a Mortgage free home for SGT Cox and his family!</p>
                                <img width="500px" src="/assets/images/site-images/FabianaBfloorb.jpg">
                            </div>
                            <div id="tabs-3" class="clearfix">
                                <h1>Pictures</h1>
                                <p>&nbsp;</p>

                                <section id="featureHolder" class="clearfix">
                                    <section class="scrollable" id="scrollable">

                                        <section class="items">
                                            <img src="/assets/images/site-images/finally-home/011.jpg">
                                            <img src="/assets/images/site-images/finally-home/016.jpg">
                                            <img src="/assets/images/site-images/finally-home/039.jpg">
                                            <img src="/assets/images/site-images/finally-home/045.jpg">
                                            <img src="/assets/images/site-images/finally-home/055.jpg">
                                            <img src="/assets/images/site-images/finally-home/057.jpg">
                                            <img src="/assets/images/site-images/finally-home/061.jpg">
                                            <img src="/assets/images/site-images/finally-home/063.jpg">
                                            <img src="/assets/images/site-images/finally-home/069.jpg">
                                            <img src="/assets/images/site-images/finally-home/070.jpg">
                                        </section>

                                    </section>
                                </section>
                            </div>

                        </div>

            </section>

        </div> <!--begin: entryWrapper-->



    </div>  <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


