jQuery(document).ready(function ($) {

	$('li.has-flyout').hover(function() {
		$(this).addClass('hover')
	},function() {
		$(this).removeClass('hover')
	});

    $("#upper-tabs").tabs({

    });

    $("#odessa-tabs").tabs({

    });

    $( "#contact" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

    $( "#warranty" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

    Placeholders.init({
        live: true, //Apply to future and modified elements too
        hideOnFocus: true //Hide the placeholder when the element receives focus
    });

	if ($('#mortgage-calc').length > 0) {

		// jQuery Mortgage Calculator

		function convert_month(month) {
			if (month == 1) { month = "January"; }
			else if (month == 2) { month = "February"; }
			else if (month == 3) { month = "March"; }
			else if (month == 4) { month = "April"; }
			else if (month == 5) { month = "May"; }
			else if (month == 6) { month = "June"; }
			else if (month == 7) { month = "July"; }
			else if (month == 8) { month = "August"; }
			else if (month == 9) { month = "September"; }
			else if (month == 10) { month = "October"; }
			else if (month == 11) { month = "November"; }
			else if (month == 12) { month = "December"; }
			return month;
		}

		function calculate_monthly_payment() {
			// setting these as local variables...easier to read vs huge parse float equations.
			var loan_amount = parseFloat(jQuery('#amount').val());
			var interest_rate = parseFloat(jQuery('#interest').val())/100;
			var monthly_interest_rate = interest_rate/12;
			var length_of_mortgage = parseInt(jQuery('#term-years').val())*12;

			// begin the formula for calculate the fixed monthly payment
			// REFERENCE: P = L[c(1 + c)n]/[(1 + c)n - 1]
			var top_val = monthly_interest_rate * Math.pow((1+monthly_interest_rate),length_of_mortgage);
			var bot_val = Math.pow((1 + monthly_interest_rate),(length_of_mortgage))-1;
			var monthly_mortgage = parseFloat(loan_amount*(top_val/bot_val)).toFixed(2);

			calculate_amortization(loan_amount, monthly_mortgage, monthly_interest_rate, length_of_mortgage);
			jQuery('#total').val(monthly_mortgage);
		}

		function calculate_amortization(loan_amount, monthly_mortgage, monthly_interest_rate, length_of_mortgage) {
			var month = parseInt(jQuery('#month').val());
			var year = parseInt(jQuery('#year').val());

			var tableData = "<tr> \
                				 	<th>Month</th> \
                				 	<th>Balance</th> \
                				 	<th>Payment</th> \
                				 	<th>Principal</th> \
                				 	<th>Interest</th> \
                				 	</tr>";

			// Initializing the empty totals
			var total_mortgage = parseFloat(0);
			var total_principal = parseFloat(0);
			var total_interest = parseFloat(0);

			for(i=length_of_mortgage; i>0; i--) {
				var monthly_interest = parseFloat(loan_amount * monthly_interest_rate).toFixed(2);
				var monthly_principal = parseFloat(monthly_mortgage - monthly_interest).toFixed(2);
				total_mortgage = parseFloat(total_mortgage) + parseFloat(monthly_mortgage);
				total_principal = parseFloat(total_principal) + parseFloat(monthly_principal);
				total_interest = parseFloat(total_interest) + parseFloat(monthly_interest);
				var monthStr = convert_month(month);
				var tablerow = "<tr> \
										<td>" + monthStr + " " + year + "</td> \
										<td>$" + parseFloat(loan_amount).toFixed(2) + "</td> \
               							<td>$" + monthly_mortgage + "</td> \
										<td>$" + monthly_principal + "</td> \
               							<td>$" + monthly_interest + "</td> \
               						</tr>";
				tableData = tableData + tablerow;
				if(month==12) {
					month=1;
					year++;
				}
				else {
					month++;
				}
				loan_amount = parseFloat(loan_amount - monthly_principal).toFixed(2);
			}
			tablerow = "<tr> \
              			    	<td></td> \
                        		<td></td> \
								<td><strong>$" + parseFloat(total_mortgage).toFixed(2) + "</strong></td> \
								<td><strong>$" + parseFloat(total_principal).toFixed(2) + "</strong></td> \
								<td><strong>$" + parseFloat(total_interest).toFixed(2) + "</strong></td> \
        					</tr>";
			tableData = tableData + tablerow;
			jQuery('h3#amortization-header').html('Amortization Schedule');
			jQuery('#total_interest').val(parseFloat(total_interest).toFixed(2));
			jQuery('table#amortization').html(tableData);
		}

		jQuery('#start-date').keyup(calculate_monthly_payment);
		jQuery('#amount').keyup(calculate_monthly_payment);
		jQuery('#interest').keyup(calculate_monthly_payment);
		jQuery('#term-years').keyup(calculate_monthly_payment);

	}

});

	
