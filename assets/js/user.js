$(document).ready(function() {
    $('#progUser').DataTable();
    paypal.Button.render({
        env: 'sandbox',
        client: {
            sandbox: 'demo_sandbox_client_id'
        },
        payment: function (data, actions) {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: '0.01',
                        currency: 'USD'
                    }
                }]
            });
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute()
                .then(function () {
                    window.alert('Thank you for your purchase!');
                });
        }
    }, '#paypal-button');

    $('#modif').prop("disabled",true);
    $(':input').on("change keyup", function(){
        $('#modif').prop("disabled",false);
    });

});