<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jason
 * Date: 12/2/12
 * Time: 9:32 AM
 * To change this template use File | Settings | File Templates.
 */?>

<div id="insideSearchSection">
    <gcse:searchbox-only></gcse:searchbox-only>
</div>



<ul id="widgetHolder">  <!-- begin: widgetHolder -->

    <li class="clearFix widget widget_recent_entries">

        <h3 class="widgettitle">Recent Listings</h3>

        <ul>

            <?php

            if ((isset($locations)) && (count($locations) >= 1)) {
                foreach ($locations->result() as $row) {

                    ?>

                    <li>
                        <a href="/pages/index/1/18/<?php echo $row->idlocation; ?>"><?php echo $row->location_street; ?></a>
                    </li>

                    <?php

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
            <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/cindy_winfrey.jpg">
                <img src="/assets/images/site-images/cindy_winfrey.jpg">

             <aside>
                 <strong><span itemprop="name">Cindy Winfrey</span></strong><br/>
                 Broker / Sales Representative<br/>
                 432.553.5265<br/> <a href="mailto:cindy@permianhomes.com">cindy@permianhomes.com</a>
             </aside>
            </div>
        </li>
        <li><div itemscope="" itemtype="http://schema.org/RealEstateAgent">
            <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/kaete_hawkins.jpg">
                <img src="/assets/images/site-images/kaete_hawkins.jpg">
            <aside>
                <strong><span itemprop="name">Kaete Hawkins</span></strong><br/>
                Assistant Sales Representative<br/>
                432.260.4017<br/> <a href="mailto:kaete@permianhomes.com">kaete@permianhomes.com</a>
            </aside>
                </div>
        </li>

    </ul>
    </li>


</ul>  <!-- end: widgetHolder -->