<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jason
 * Date: 12/2/12
 * Time: 9:03 AM
 * To change this template use File | Settings | File Templates.
 */
?>

<style>
	#amortization tr {
		border: solid black 1px;
	}
	#amortization td {
		padding: 0 20px !important;
		text-align: right !important;
	}
	#amortization th {
		background-color: grey;
		padding: 0 20px !important;
		text-align: right !important;
	}

	#mortgage-calc .row,
	#mortgage-payment .row {
		clear: both;
		margin-bottom: 10px;
	}

	#mortgage-calc fieldset {
		margin-bottom: 20px;
	}

	#mortgage-calc label {
		font: 12px/18px Arial, Helvetica, sans-serif;
		color: #666666;
	}
</style>


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



	            <h2>Permian's Preferred Lender</h2>

				<a style="display: block; background-color: #808080; width: 418px" href="http://buildersfinancial.com"><img src="/assets/images/site-images/builders-financial-logo.png"></a>

                <p>&nbsp;</p>
                <p><a style="background-color: red; color: white; border-color: #000000;" class="clearfix button red" target="_blank" href="/assets/pdfs/Permian-Homes-Builders-Financial-Flyer-web.pdf">Save $1,500</a>
                </p>

	            <h2>Use Our Mortgage Calculator</h2>

	            <p>Are you curious on what your monthly payment might be? Use our complimentary mortgage calculator to get an idea. <strong>Do Not Use Commas in the Loan Amount.</strong></p>

	            <div id="mortgage-calc">
		            <form>
			            <fieldset>
				            <div class="row">
					            <label>Select the start date:</label>
					            <select class="span3" id="month">
						            <option label="Jan" value="1" selected="selected">Jan</option>
						            <option label="Feb" value="2">Feb</option>
						            <option label="Mar" value="3">Mar</option>
						            <option label="Apr" value="4">Apr</option>
						            <option label="May" value="5">May</option>
						            <option label="Jun" value="6">Jun</option>
						            <option label="Jul" value="7">Jul</option>
						            <option label="Aug" value="8">Aug</option>
						            <option label="Sep" value="9">Sep</option>
						            <option label="Oct" value="10">Oct</option>
						            <option label="Nov" value="11">Nov</option>
						            <option label="Dec" value="12">Dec</option>
					            </select>
					            <select class="span3" id="year">
						            <option label="1990" value="1990">1990</option>
						            <option label="1991" value="1991">1991</option>
						            <option label="1992" value="1992">1992</option>
						            <option label="1993" value="1993">1993</option>
						            <option label="1994" value="1994">1994</option>
						            <option label="1995" value="1995">1995</option>
						            <option label="1996" value="1996">1996</option>
						            <option label="1997" value="1997">1997</option>
						            <option label="1998" value="1998">1998</option>
						            <option label="1999" value="1999">1999</option>
						            <option label="2000" value="2000">2000</option>
						            <option label="2001" value="2001">2001</option>
						            <option label="2002" value="2002">2002</option>
						            <option label="2003" value="2003">2003</option>
						            <option label="2004" value="2004">2004</option>
						            <option label="2005" value="2005">2005</option>
						            <option label="2006" value="2006">2006</option>
						            <option label="2007" value="2007">2007</option>
						            <option label="2008" value="2008">2008</option>
						            <option label="2009" value="2009">2009</option>
						            <option label="2010" value="2010">2010</option>
						            <option label="2011" value="2011">2011</option>
						            <option label="2012" value="2012">2012</option>
						            <option label="2013" value="2013" selected="selected">2013</option>
						            <option label="2014" value="2014">2014</option>
						            <option label="2015" value="2015">2015</option>
					            </select>
				            </div>

				            <div class="row">
					            <label>Enter the loan amount:</label>
					            <div class="input-prepend">
						            <span class="add-on">$</span>
						            <?php
						                if (isset($_GET['price']) && (strlen($_GET['price']) > 0)) {

							                $price = str_replace(",","",$_GET["price"]);

							                echo '<input class="span3" id="amount" type="text" value="' . $price . '" placeholder="Loan Amount">';

						                } elseif (isset($_POST['price']) && (strlen($_POST['price']) > 0)) {

							                $price = str_replace(",","",$_POST["price"]);

							                echo '<input class="span3" id="amount" type="text" value="' . $price . '" placeholder="Loan Amount">';

						                } else {
							                echo '<input class="span3" id="amount" type="text" value="" placeholder="Loan Amount">';
						                }
						            ?>

					            </div>
				            </div>

				            <div class="row">
					            <label>Enter the interest rate:</label>
					            <div class="input-append">
						            <input class="span3" id="interest" type="text" placeholder="Interest Rate">
						            <span class="add-on">%</span>
					            </div>
				            </div>

				            <div class="row">
					            <label>Enter the term years of the loan:</label>
					            <div class="input-append">
						            <input class="span3" id="term-years" type="text" placeholder="Term">
						            <span class="add-on">Years</span>
					            </div>
				            </div>
			            </fieldset>
		            </form>
	            </div>

	            <div id="mortgage-payment" class="span6">
		            <div class="row">
			            <h3>Monthly Payment</h3>
			            <div class="input-prepend">
				            <span class="add-on">$</span>
				            <input class="span4" id="total" readonly>
			            </div>
		            </div>
		            <div class="row">
			            <h3>Interest Paid</h3>
			            <div class="input-prepend">
				            <span class="add-on">$</span>
				            <input class="span4" id="total_interest" readonly>
			            </div>
		            </div>
	            </div>

	            <div id="results">
		            <h3 id="amortization-header"></h3>
		            <table id="amortization">
		            </table>
	            </div>





            </section>

        </div>
        <!--begin: entryWrapper-->


    </div>
    <!--end: insideRightContent-->

</div> <!-- end: insideContentWrapper -->

</div> <!-- end: wrapper -->