<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jason
 * Date: 12/2/12
 * Time: 9:03 AM
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
                        <li><a href="#tabs-1">About Us</a></li>
                        <li><a href="#tabs-2">Warranty</a>
                        <li><a href="#tabs-4">Video</a> </li>
                        <li><a href="#tabs-3">Contact Us</a></li>


                    </ul>

                    <div class="panes">
	                    <!-- About -->
                        <div id="tabs-1">
                            <h1>About Permian Homes</h1>
                            <?php echo $page_content->page_content ?>
                        </div>

	                    <!-- Warranty -->
                        <div id="tabs-2">
                            <h1>The Permian Homes Warranty</h1>

                            <p>At Permian Homes, we realize that with new home construction there will be items that
                                naturally occur and require minor adjustments and corrections. In the event that you should
                                experience these occurrences, an extensive warranty is provided for each home. This warranty
                                consists of a one-year limited warranty on all components of your home, a two-year limited
                                warranty on the Plumbing, HVAC, and Electrical systems of your home, and a ten-year warranty
                                covering the structural components in your home.</p>

                            <p>In addition to this warranty package, we provide you with the Permian Homes Customer Care
                                Manual. This manual contains information on specific components of your home, the
                                occurrences that Permian will warrant, and supplemental details on maintenance and homeowner
                                responsibility.</p>

                            <h3>Warranty Request</h3>

                            <?php
                                if ($error != '') {
                                    echo '<div class="error clearfix" style="display:block"><p>' . $error . '</p></div>';
                                }
                            ?>

                            <?=form_open('/site/newcontact', 'class=nice id=warranty');?>

                            <?=form_fieldset('');?>
                            <input type="hidden" name="recipient" value="warranty">
                            <?=form_input('firstname', '', 'class="input-text required" placeholder="First Name"'); ?>
                            <?=form_input('lastname', '', 'class="input-text required" placeholder="Last Name"'); ?>
                            <?=form_input('email', '', 'class="input-text required" placeholder="Email Address"'); ?>
                            <?=form_input('street', '', 'class="input-text required" placeholder="Street Address"'); ?>
                            <?=form_input('city', '', 'class="input-text required" placeholder="City"'); ?>
                            <?=form_input('state', '', 'class="input-text required" placeholder="State"'); ?>
                            <?=form_input('zip', '', 'class="input-text required" placeholder="Zip"'); ?>
                            <?=form_input('telephone', '', 'class="input-text required" placeholder="Telephone"'); ?>
                            <?=form_textarea('message', '', 'placeholder="Services Requested..."'); ?>
                            <p>
                                <label for="human">
                                    Are You Human (YES)?:
                                </label><br/>
                                <input type="text" name="human" id="human" value="<?php echo set_value('human');?>">
                            </p>
                            <p>
                                <label for="human_again">
                                    Please type the same word again:
                                </label><br/>
                                <input type="text" name="human_again" id="human_again" value="<?php echo set_value('human_again');?>">
                            </p>

                            <?=form_submit('mysubmit', 'Submit', 'class="blue button radius"');?>
                            <?=form_fieldset_close();?>
                            <?=form_close();?>

                        </div>

	                    <!-- Video -->
                        <div id="tabs-4">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/FmpamfX0ipI" frameborder="0" allowfullscreen></iframe>

                        </div>

	                    <!-- Contact Us -->
                        <div id="tabs-3">
                            <h1>Contact Us</h1>

                            <?php
                            if ($error != '') {
                                echo '<div class="error clearfix" style="display:block"><p>' . $error . '</p></div>';
                            }
                            ?>

                            <section class="clearfix">
                                <article itemscope="" itemtype="http://schema.org/RealEstateAgent" class="contactus clearfix">
                                        <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/cindy_winfrey.jpg">
                                    <img src="/assets/images/site-images/cindy_winfrey.jpg">
                                    <aside>
                                        <p><strong><span itemprop="name">Cindy Winfrey</span></strong><br/>
                                        Broker / Sales Representative<br/>
                                        432.553.5265<br/> <a href="mailto:cindy@permianhomes.com">cindy@permianhomes.com</a>
                                        </p>
                                    </aside>

                                </article>
                                
                                <article itemscope="" itemtype="http://schema.org/RealEstateAgent" class="contactus clearfix">

                                        <meta itemprop="image" content="http://permianhomes.com/assets/images/site-images/kaete_hawkins.jpg">
                                    <img src="/assets/images/site-images/kaete_hawkins.jpg">
                                    <aside>
                                        <p><strong><span itemprop="name">Kaete Hawkins</span></strong><br/>
                                        Assistant Sales Representative<br/>
                                        432.260.4017<br/> <a href="mailto:kaete@permianhomes.com">kaete@permianhomes.com</a>
                                        </p>
                                    </aside>

                                </article>




                            </section>

                            <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                <meta itemprop="streetAddress" content="13020 HWY 191 Suite A"></meta>
                                <meta itemprop="addressLocality" content="Midland"></meta>
                                <meta itemprop="addressRegion" content="Texas"></meta>
                                <meta itemprop="postalCode" content="79707"></meta>
                                <meta itemprop="telephone" content="432-362-3436" /></meta>
                                <meta itemprop="faxNumber" content="866.497.6551" /></meta>
                            </div>



                            <p><label>Mailing Address</label><br/>
                                13020 HWY 191 Suite A<br/>
                                Midland, TX 79707<br/>
	                            Phone 432-362-3436<br/>
	                            Fax 866-497-6551</p>
                            <?php echo validation_errors(); ?>
                            <?php
                                if ($error != '') {
                                    echo '<div class="error">' . $error . '</div>';
                                }
                            ?>
                            <?=form_open('/site/newcontact', 'class=nice id=contact');?>
                            <?=form_fieldset('');?>
                            <input type="hidden" name="recipient" value="contactus">
                            <?=form_input('firstname', '', 'class="input-text required" placeholder="First Name"'); ?><br/>
                            <?=form_input('lastname', '', 'class="input-text required" placeholder="Last Name"'); ?><br/>
                            <?=form_input('email', '', 'class="input-text required" placeholder="Email Address"'); ?><br/>
                            <?=form_input('street', '', 'class="input-text required" placeholder="Street Address"'); ?><br/>
                            <?=form_input('city', '', 'class="input-text required" placeholder="City"'); ?><br/>
                            <?=form_input('state', '', 'class="input-text required" placeholder="State"'); ?><br/>
                            <?=form_input('zip', '', 'class="input-text required" placeholder="Zip"'); ?><br/>
                            <?=form_input('telephone', '', 'class="input-text required" placeholder="Telephone"'); ?><br/>
                            <?=form_textarea('message', '', 'placeholder="Need more information..."'); ?><br/>

                            <p>
                                <label for="human">
                                    Are You Human (YES)?:
                                </label><br/>
                                <input type="text" name="human" id="human" value="<?php echo set_value('human');?>">
                            </p>
                            <p>
                                <label for="human_again">
                                    Please type the same word again:
                                </label><br/>
                                <input type="text" name="human_again" id="human_again" value="<?php echo set_value('human_again');?>">
                            </p>

                            <?=form_submit('mysubmit', 'Submit', 'class="blue button radius"');?>
                            <?=form_fieldset_close();?>
                            <?=form_close();?>


                        </div>

                    </div>



                <p>&nbsp;</p>


            </section>

        </div>
        <!--begin: entryWrapper-->


    </div>
    <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


