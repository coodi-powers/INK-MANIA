/**
 * Created by veerlekennes on 12/09/16.
 */

$(document).ready(function () {
    $( ".radio_billing" ).change(function() {
        var value = $(this).val();

        if (value == '1')
        {
            $( ".billing_information" ).hide();
        }
        if (value == '2')
        {
            $( ".billing_information" ).show();
        }

    });
});