
<div id="insideContentWrapper" class="clearFix"> <!-- begin: insideContentWrapper -->


    <div id="leftSidebar"> <!-- begin: leftSidebar -->

        <?php $this->load->view($sidebar); ?>

    </div>  <!-- end: leftSidebar -->

<div id="insideRightContent"> <!--begin: insideRightContent-->

	

    <?php
      if ((isset($location)) && (count($location) >= 1)) {
            foreach ($location->result() as $row) {

                if ($row->sold != '1') {

          ?>
              <div class="entryWrapper" id="post-1"  itemscope itemtype="http://schema.org/Product"> <!--begin: entryWrapper-->
                  <h2 class="postTitle" itemprop="name"><?php echo $row->location_name; ?></h2>
<p class="postInfo">
              <!-- <span class="postInfoAuthor">Author Name</span> -->
                <span class="postInfoDate"><?php echo $row->created; ?></span>
                    
                </p>
                  <div itemprop="image" class="image">
                      <img width="566px"  src="<?php echo $row->fullsize; ?>">
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
                  <span class="unitInfo"><?php echo $row->bedrooms; ?> Bed, <?php echo $row->bathrooms; ?> Bath, <?php echo $row->square_feet; ?> Sq Ft</span>
                  <span itemprop="address">
                          <span itemprop="streetAddress"><?php echo $row->location_street; ?></span>,
    <span itemprop="addressLocality"><?php echo $row->location_city; ?></span>,
    <span itemprop="addressRegion"><?php echo $row->location_state; ?></span>
                      </span><br/>
                    <span class="unitPrice" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><strong>Price : </strong>
                      <span itemprop="price">
                      <?php

                      if ($row->rent_price != '') {
                          echo '$' . $row->rent_price .  '/ Month</span></span>';
                      } else {
                          echo '$' . $row->sale_price . '</span></span>';
                      }

                      ?>


                </p>

                  <section class="social">
                      <!-- AddThis Button BEGIN -->
                      <div class="addthis_toolbox addthis_default_style ">
                          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                          <a class="addthis_button_tweet"></a>
                          <a class="addthis_button_pinterest_pinit"></a>
                          <a class="addthis_counter addthis_pill_style"></a>
                      </div>
                      <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-510d43f0052a1220"></script>
                      <!-- AddThis Button END -->
                  </section>
                  <section class="map">
                      <a itemprop="map" href="http://maps.google.com?q=<?php echo $row->location_street . ', ' . $row->location_city . ' , ' . $row->location_state; ?>" target="_blank">View This on Google Maps</a>

                  </section>
                <div class="entry" itemprop="description"><!--begin: entry-->
                  
                  <p><?php echo $row->description; ?></p>
	                <a class="button" href="/financing?price=<?php echo $row->sale_price; ?>"">Calculate My Payment</a>
                </div>
              </div> 
              <?php

                }
              
            }
          } else {
            echo '<h2 class="postTitle">There Are No Properties To Show</h2>';
          }
     ?>


</div>  <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


