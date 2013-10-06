
<div id="insideContentWrapper" class="clearFix"> <!-- begin: insideContentWrapper -->


    <div id="leftSidebar"> <!-- begin: leftSidebar -->

        <?php $this->load->view($sidebar); ?>

    </div>  <!-- end: leftSidebar -->

    <div id="insideRightContent"> <!--begin: insideRightContent-->

        <div class="entryWrapper" id="post-1"> <!--begin: entryWrapper-->

            <div id="featureHolder" style="margin-top: 15px;">

                <div id="featureSlide">

                    <div class="scrollable" id="scrollable">

                        <div class="items">
                            <img src="/assets/images/design_center/IMG_4246.JPG">
                            <img src="/assets/images/design_center/IMG_4250.JPG">
                            <img src="/assets/images/design_center/IMG_4260.JPG">
                            <img src="/assets/images/design_center/IMG_4274.JPG">
                            <img src="/assets/images/design_center/IMG_4275.JPG">
                            <img src="/assets/images/design_center/IMG_4279.JPG">
                            <img src="/assets/images/design_center/IMG_4284.JPG">
                            <img src="/assets/images/design_center/IMG_4312.JPG">
                            <img src="/assets/images/design_center/IMG_4317.JPG">
                            <img src="/assets/images/design_center/IMG_4323.JPG">
                            <img src="/assets/images/design_center/IMG_4325.JPG">
                        </div>

                    </div>

                </div>

            </div>

                <?php

                    echo '<h2 class="postTitle">' . $page_content->page_headline . '</h2>';

                    echo '<section class="entry">';

                    echo $page_content->page_content;

                    echo '</section>';

            ?>

        </div> <!--begin: entryWrapper-->

    </div>  <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->


