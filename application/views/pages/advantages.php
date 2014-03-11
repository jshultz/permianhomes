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

</div>
<!-- end: leftSidebar -->

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
            <li><a href="#tabs-6">Design Center</a></li>
        </ul>

        <div class="panes">
        <!-- The Advantage -->
        <div id="tabs-1">

            <object data="/assets/pdfs/Permian_Homes_Insert_FINAL.pdf" type="application/pdf" width="100%" height="800px">
                <h1>Be Proud of Your Home</h1>
                <ul>
                    <li>
                        We build homes focused on high quality and energy efficiency, all at a fair price. From 16 inch spacing between studs, to Optima blown-in upgraded insulation, to energy star 14.5 SEER air conditioners, Permian offers homes with you and your pocket book in mind.
                    </li>
                    <li>
                        We are locally owned and operated and use the same local trade partners to consistently build quality homes and value for our customers.
                    </li>
                    <li>
                        We live in the communities we build and pride ourselves in our homes.  More than 75% of Permian employees live in a Permian home.
                    </li>
                    <li>
                        We partner with local architects to create large open floor plans with beautiful details in the home to make our homes take your breath away.
                    </li>
                    <li>
                        We are engaged with the customer on the construction of their homes. From weekly status updates to many onsite meetings, Permian is dedicated to making a great experience for our customers.
                    </li>
                    <li>
                        We provide many different options and choices for you to personalize your home. We recognize that each customer has different needs and allow customization to everyone. Permian is one of the only builders in the area to have a design center and allow each customer to personalize their home from laying out phone and cable outlets, to designing closets and flex space just how they want them!
                    </li>
                    <li>
                        We provide an extensive warranty. Permian Offers a warranty Package to keep your mind at ease (<a
                            href="#tabs-5">more information</a> ).
                    </li>
                    <li>
                        We provide excellent customer care after move in. Permian is recognized as a builder of choice and carries a 95% customer satisfaction rating for customers in the Permian Basin.
                    </li>
                </ul>
            </object>




        </div>
        <!-- Building Green -->
        <div id="tabs-2">
            <h1>Building Green</h1>
            <h2>Purchasing a Permian Home saved us $200 a Month on our Utility Bills!</h2>
            <img class="floatright" src="http://permianhomes.com/blog/wp-content/uploads/2013/08/048-300x199.jpg">

            <p>
                <strong><span class="underline">Save Money, Save Energy, Go Green!</span> </strong>Tired of paying too much on
                your utility bills?&nbsp; Permian Homes offer homes composed of a network of elements working together to reduce
                the overall amount of energy consumption, continually saving you money! Just to list a few:</p>
            <ul>
                <li>
                    Dual pane, Low-E, 366-Coated, insulated windows that keep heat in during the winter and out during the
                    summer
                </li>
                <li>
                    Demilec foamed sealed penetrations with Certain-Teeds Optima blow in upgraded insulation
                </li>
                <li>
                    Tyvex House Wrap
                </li>
                <li>
                    LP&#39;s Radiant Barrier foil roof decking that helps control home temperatures
                </li>
                <li>
                    Smart Home Technology to control systems in the home from remote locations
                </li>

                <li>
                    Energy Star GE Appliances
                </li>
                <li>
                    Properly sized 14.5 SEER AC with a high efficient 80% AFUE gas furnace
                </li>
                <li>
                    Solar Panels Available
                </li>
                <li>
                    Low flow water conserving plumbing fixtures
                </li>
                <li>
                    Energy saving compact fluorescent light (CFL) bulbs
                </li>
                <li>
                    Low VOC Paint (Volatile Organic Compounds)
                </li>

            </ul>
        </div>
        <!-- Made In America -->
        <div id="tabs-3">
            <h1>Made In America</h1>
            <h2>Permian Homes is committed to the <strong>American Dream</strong>, and we are proud to have one of their <strong>Quality Built Homes</strong>!</h2>
            <img class="floatright" src="http://permianhomes.com/blog/wp-content/uploads/2013/12/Christmasphoto1_edited-1-300x199.jpg">

            <p>
                <strong>Permian Homes</strong> is committed to the American Dream. Our homes are American Built with over 90% of
                the products and labor made by Hardworking Americans.</p>

            <p>
                Concrete - Texas<br/>
                Rebar - Texas<br/>
                Lumber - Montana, Idaho, Washington, and Oregon<br/>
                Decking - Texas, Alabama, and Louisiana<br/>
                Soffit and Fascia - North Carolina and Wisconsin<br/>
                Brick - Texas, Oklahoma, Colorado, and Arkansas<br/>
                Nails and Fasteners - Other<br/>
                Shingles - Texas<br/>
                Sheetrock - Texas<br/>
                Windows - Texas<br/>
                Doors - Texas<br/>
                Paint - California<br/>
                Flooring - Georgia and Surrounding States<br/>
                Cabinets - Texas<br/>
                Granite - South America<br/>
                Plumbing Fixtures - Other<br/>
                Light Fixtures - Other<br/>
                Appliances - Ohio and Georgia<br/>
                Labor - Texas</p>

        </div>
        <!-- Design Center -->
        <div id="tabs-6">
            <h1>Design Center</h1>

            <span id="featureSlide" style="display: block">

                <div class="scrollable" id="scrollable" style="display: block;">

                    <div class="items" style="display: block;">

                        <img src="/assets/images/design_center/IMG_4250.JPG">
                        <img src="/assets/images/design_center/IMG_4260.JPG">
                        <img src="/assets/images/design_center/IMG_4274.JPG">
                        <img src="/assets/images/design_center/IMG_4275.JPG">
                        <img src="/assets/images/design_center/IMG_4279.JPG">
                        <img src="/assets/images/design_center/IMG_4312.JPG">
                        <img src="/assets/images/design_center/IMG_4317.JPG">
                        <img src="/assets/images/slides/2.jpg">

                    </div>

                </div>
            </span>



                <p>
                    Permian is dedicated to making a great experience for our customers. We provide many different options and choices for you to personalize your home. We recognize that each customer has different needs and allow customization to everyone. Permian is one of the only builders in the area to have a spacious design center. When purchasing a Permian Home, each customer will meet with their personal design center consultant to assist in the selection of cabinets, counter tops, appliances, lighting, plumbing fixtures, hardware, and so much more. Permian Homes focuses on its core philosophy of <strong>Building One Dream at a Time.</strong></p>
                <p>
                    <strong>Design Center Address</strong><br>
                    13020 HWY 191 Suite A<br>
                    Midland, TX 79707</p>


        </div>


    </div>


    </section>

</div>
<!--begin: entryWrapper-->


</div>
<!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


