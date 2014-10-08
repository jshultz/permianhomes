<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jason
 * Date: 12/2/12
 * Time: 9:32 AM
 * To change this template use File | Settings | File Templates.
 */?>


<br/>
<p><a class="button" style="color: white;" target="_blank" href="/assets/pdfs/Permian_Homes_Insert_FINAL.pdf">Take the Test!</a>
	<br/>
	<a target="_blank" class="button" style="color: white;" href="http://permianhomes.com/blog">Testimonials</a></p>


<ul id="widgetHolder">  <!-- begin: widgetHolder -->

    <li class="clearFix widget widget_recent_entries">

        <h3 class="widgettitle">Available Homes</h3>

        <ul>

            <?php

            if ((isset($locations)) && (count($locations) >= 1)) {
                foreach ($locations->result() as $row) {

                    if ($row->sold != '1') {

                    ?>

                    <li>
                        <a href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><?php echo $row->location_street; ?></a>
                    </li>

                    <?php
                    }

                }
            }

            ?>
        </ul>

    </li>
    <li class="clearFix widget widget_recent_entries"">
    <h3 class="widgettitle">Contact Us</h3>
    <ul class="contacts">
        <li>
            <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <meta itemprop="streetAddress" content="13020 HWY 191 Suite A"></meta>
                <meta itemprop="addressLocality" content="Midland"></meta>
                <meta itemprop="addressRegion" content="Texas"></meta>
                <meta itemprop="postalCode" content="79707"></meta>
                <meta itemprop="telephone" content="432-362-3436" /></meta>
                <meta itemprop="faxNumber" content="866.497.6551" /></meta>
            </div>
            13020 HWY 191 Suite A<br/>
            Midland, TX 79707<br/>
            Phone 432-362-3436<br/>
            Fax 866.497.6551

        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
            <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/cindy_winfrey.png">
                <img src="/assets/images/site-images/cindy_winfrey.png">

             <aside>
                 <strong><span itemprop="name">Cindy Winfrey</span></strong><br/>
                 Broker / Sales Representative<br/>
                 432.553.5265<br/> <a href="mailto:cindy@permianhomes.com">cindy@permianhomes.com</a>
             </aside>
            </div>
        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
            <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/kaete_hawkins.png">
                <img src="/assets/images/site-images/kaete_hawkins.png">
            <aside>
                <strong><span itemprop="name">Kaete Hawkins</span></strong><br/>
                Sales Manager<br/>
                432.260.4017<br/> <a href="mailto:kaete@permianhomes.com">kaete@permianhomes.com</a>
            </aside>
                </div>
        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
                <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/angie_kraft.png">
                <img src="/assets/images/site-images/angie_kraft.png" alt="" />
                <aside>
                    <strong><span itemprop="name">Angie Kraft</span></strong><br/>
                    Assistant Sales Representative<br/>
                    432.631.5580<br/> <a href="mailto:angie@permianhomes.com">angie@permianhomes.com</a>
                </aside>
            </div>
        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
                <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/laurel_king.png">
                <img src="/assets/images/site-images/laurel_king.png" alt="" />
                <aside>
                    <strong><span itemprop="name">Laurel King</span></strong><br/>
                    Assistant Sales Representative<br/>
                    432.210.6589<br/> <a href="mailto:laurel@permianhomes.com">laurel@permianhomes.com</a>
                </aside>
            </div>
        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
                <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/nicole_rocha.png">
                <img src="/assets/images/site-images/nicole_rocha.png" alt="" />
                <aside>
                    <strong><span itemprop="name">Nicole Rocha</span></strong><br/>
                    Assistant Sales Representative<br/>
                    432.853.4530<br/> <a href="mailto:nicole@permianhomes.com">nicole@permianhomes.com</a>
                </aside>
            </div>
        </li>



    </ul>
    </li>


</ul>  <!-- end: widgetHolder -->