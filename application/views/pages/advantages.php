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
                            <li><a href="#tabs-1">The Advantage</a></li>
                            <li><a href="#tabs-2">Building Green</a></li>
                            <li><a href="#tabs-3">Made In America</a></li>
                            <li><a href="#tabs-4">Added Features</a></li>
                            <li><a href="#tabs-5">Warranty</a></li>
                        </ul>

                        <div class="panes">
                            <!-- Philosophy -->
                            <div id="tabs-1">
                                <h1>Permian's Philosophy is simple : We focus on each customer to build one dream at a time</h1>
                                <ul>
                                    <li>
                                        We build homes focused on high quality and energy efficiency, all at a fair price. From 16" on center framing to Optima blown-in upgraded insulation, to energy star 14.5 SEER air conditioners,  Permian offers homes with you and your pocket book in mind. Our special attention to the details of the building process, from the development of the land, completion of a home, and follow up care after move-in is what sets us apart.
                                    </li>
                                    <li>
                                        We are locally owned and operated and use the same local trade partners to consistently build quality homes and value for our customers.
                                    </li>
                                    <li>
                                        We partner with local architects to design and have large open floor plans with beautiful details in the home to make our homes take your breath away.
                                    </li>
                                    <li>
                                        We are engaged with the customer on the construction of their homes. From weekly status updates to many onsite meetings, Permian is dedicated to making a great experience for our customers.
                                    </li>
                                    <li>
                                        We provide many different options and choices for you to personalize your home.  We recognize that each customer has different needs and allow customization to everyone.  Permian is one of the only builders in the area to have a design center and allow each customer to personalize their home from laying out phone and cable outlets, to designing closets and flex space just how they want them.
                                    </li>
                                    <li>
                                        We provide an extensive warranty. Permian Offers a warranty Package to keep your mind at ease (<a href="#tabs-5">more information</a> ).
                                    </li>
                                    <li>
                                        We provide excellent customer care after move in. Permian is recognized as one of the only builders to do a complete walk thru of your home 1 year from closing.
                                    </li>
                                </ul>
                            </div>
                            <!-- Building Green -->
                            <div id="tabs-2">
                                <h1>Building Green</h1>
                                <img class="floatright" src="/assets/images/site-images/green-tips-gifts-lg.jpg">
                                <p>
                                    <strong><span class="underline">Save Money, Save Energy, Go Green!</span> </strong>Tired of paying too much on your utility bills?&nbsp; Permian Homes offer homes composed of a network of elements working together to reduce the overall amount of energy consumption, continually saving you money! Just to list a few:</p>
                                <ul>
                                    <li>
                                        Dual pane, Low-E, 366-Coated, insulated windows that keep heat in during the winter and out during the summer</li>
                                    <li>
                                        Demilec foamed sealed penetrations with Certain-Teeds Optima blow in upgraded insulation</li>
                                    <li>
                                        Tyvex House Wrap</li>
                                    <li>
                                        LP&#39;s Radiant Barrier foil roof decking that helps control home temperatures</li>
                                    <li>
                                        Smart Home Technology to control systems in the home from remote locations</li>
                                    <li>
                                        Water Conserving Xeriscaped Yards</li>
                                    <li>
                                        Energy Star Whirlpool Appliances</li>
                                    <li>
                                        Properly sized 14.5 SEER AC with a high efficient 80% AFUE gas furnace</li>
                                    <li>
                                        Solar Panels Available</li>
                                    <li>
                                        Low flow water conserving plumbing fixtures</li>
                                    <li>
                                        Energy saving compact fluorescent light (CFL) bulbs</li>
                                    <li>
                                        Low VOC Paint (Volatile Organic Compounds)</li>
                                    <li>
                                        30 year architectural shingles</li>
                                </ul>
                            </div>
                            <!-- Made In America -->
                            <div id="tabs-3">
                                <h1>Made In America</h1>
                                <img class="floatright" src="/assets/images/site-images/patriotism.jpeg">

                                <p>
                                    <strong>Permian Homes</strong> is committed to the American Dream. Our homes are American Built with over 90% of the products and labor made by Hardworking Americans.</p>

                                <p>
                                    Concrete - Texas<br />
                                    Rebar - Texas<br />
                                    Lumber - Montana, Idaho, Washington, and Oregon<br />
                                    Decking - Texas, Alabama, and Louisiana<br />
                                    Soffit and Fascia - North Carolina and Wisconsin<br />
                                    Brick - Texas, Oklahoma, Colorado, and Arkansas<br />
                                    Nails and Fasteners - Other<br />
                                    Shingles - Texas<br />
                                    Sheetrock - Texas<br />
                                    Windows - Texas<br />
                                    Doors - Texas<br />
                                    Paint - California<br />
                                    Flooring - Georgia and Surrounding States<br />
                                    Cabinets - Texas<br />
                                    Granite - South America<br />
                                    Plumbing Fixtures - Other<br />
                                    Light Fixtures - Other<br />
                                    Appliances - Ohio and Georgia<br />
                                    Labor - Texas</p>

                            </div>
                            <!-- Added Features -->
                            <div id="tabs-4">
                                <h1>Added Features</h1>
                                <p><strong>Personalization</strong></p>
                                <p>Permian Homes offers many different options and choices for you to personalize your home along with being a custom home builder to ensure your home is everything you dreamed. </p>
                                <p><strong>Warranties</strong> </p>
                                <p>Permian Homes offers an extensive warranty package to keep your mind at ease: </p>
                                <ul>
                                    <li>One year on workmanship and materials </li>
                                    <li>Two year on mechanical systems (Plumbing, HVAC, and Electrical) </li>
                                    <li>Ten year on structural components </li>
                                </ul>
                                <p><strong>Privacy</strong> </p>
                                <p>Just drive through our community and you will see that our homes are spaced well between each other situated on large lots. With privacy fencing surrounding your side and back yards you are sure to have the privacy you want. </p>
                                
                                    <p><img border="0" alt="" src="/assets/images/site-images/Now_You_re_Living.jpg"></p>
                                
                                <p align="left"><strong>Exteriors</strong> </p>
                                <ul>
                                    <li>Low maintenance exteriors </li>
                                    <li>Architectural grade 30 year shingles </li>
                                    <li>Large, dual paned, Low-E, 366 vinyl windows </li>
                                    <li>Insulated fiberglass entry door with deadbolt lock </li>
                                    <li>Decorative security lighting </li>
                                    <li>Weatherproof exterior outlets and hose bibs </li>
                                    <li>Privacy fence around back and side yards </li>
                                    <li>Water Conserving Xeriscaped Front Yards </li>
                                    <li>Large covered patios and porches </li>
                                </ul>
                                <p><strong>Interiors</strong> </p>
                                <ul>
                                    <li>Central air conditioning with 14.5 seer AC units </li>
                                    <li>80% high efficiency furnace </li>
                                    <li>Demilec foam sealed penetrations with Certain-Teed's Optima blow in upgraded insulation </li>
                                    <li>Tyvex house wrap </li>
                                    <li>Energy saving compact florescent light (CFL) bulbs </li>
                                    <li>Tray ceilings with 9' and 10' volume ceilings throughout </li>
                                    <li>Decorative crown molding in living areas </li>
                                    <li>Maintenance free Granite Countertops</li>
                                    <li>Undermount Sinks</li>
                                    <li>Recessed lighting in tray ceilings </li>
                                    <li>Decorative orange peel textured walls and ceilings with rounded corners </li>
                                    <li>2 tone low VOC (Volatile Organic Compound) paint </li>
                                    <li>Beautiful oak flat panel cabinetry with crown molding and elegant pull hardware </li>
                                    <li>Upgraded energy star appliances with smooth top ceramic range </li>
                                    <li>Pre-plumbed water line to refrigerator </li>
                                    <li>Quality Delta faucets </li>
                                    <li>Premium elongated toilets </li>
                                    <li>Pre-wired for internet, TV, and telephone </li>
                                    <li>Large 18" to 20" tile at entrance, kitchens, utility rooms, and bathrooms </li>
                                    <li>Sequestered grand master bedroom </li>
                                    <li>Large garden soaker tub at master bathroom with double vanities </li>
                                </ul>
                            </div>
                            <!-- Warranty -->
                            <div id="tabs-5">
                                <h1>The Permian Homes Warranty</h1>

                                <p>At Permian Homes, we realize that with new home construction there will be items that naturally occur and require
                                    minor adjustments and corrections. In the event that you should experience these occurrences, an extensive
                                    warranty is provided for each home. This warranty consists of a one-year limited warranty on all components of
                                    your home, a two-year limited warranty on the Plumbing, HVAC, and Electrical systems of your home, and a
                                    ten-year warranty covering the structural components in your home.</p>

                                <p>In addition to this warranty package, we provide you with the Permian Homes Customer Care Manual. This manual
                                    contains information on specific components of your home, the occurrences that Permian will warrant, and
                                    supplemental details on maintenance and homeowner responsibility.</p>
                                <p ><a class="underline" href="/about/#tabs-2"><strong>Fill out a Warranty Request</strong></a> </p>


                            </div>

                        </div>






            </section>

        </div> <!--begin: entryWrapper-->



    </div>  <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


