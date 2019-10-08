
var stripe = Stripe('pk_test_77V9uBKSZEiIv3nYC9AYegYh00nvxemSIk');

var $form = $('#checkout-form');
$form.submit(function (event) {
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    stripe.card.createToken({
        number: $('#cart-number').var(),
        cvc: $('#cart-cvc').var(),
        exp_mount: $('#cart-expiry-mount').var(),
        exp_year: $('#cart-expiry-year').var(),
        name: $('#cart-name').var()
    },stripeResponseHandler);
    return false;
});

function spriteResponseHandler(status, response) {
    if (response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disable', false);
    }else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        $form.get(0).submit();
    }

}

