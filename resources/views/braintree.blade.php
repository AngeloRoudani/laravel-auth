<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://js.braintreegateway.com/web/dropin/1.24.0/js/dropin.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="py-12">
        @csrf
        <div id="dropin-container" style="display: flex;justify-content: center;align-items: center;"></div>
        <div style="display: flex;justify-content: center;align-items: center;">
            <a id="submit-button" class="btn btn-sm btn-danger">Submit payment</a>
        </div>
    </div>

        <script>
            //script del create
            let button = document.querySelector('#submit-button');

            braintree.dropin.create({
                authorization: '{{$token}}',
                container: '#dropin-container'
            }, function (createErr, instance) {
                button.addEventListener('click', function () {
                    instance.requestPaymentMethod(function (err, payload) {
                        (function($) {
                            $(function() {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type: "POST",
                                    url: "{{route('token')}}",
                                    data: {nonce : payload.nonce},
                                    success: function (data) {
                                        console.log('success',payload.nonce)
                                    },
                                    error: function (data) {
                                        console.log('error',payload.nonce)
                                    }
                                });
                            });
                        })(jQuery);
                    
                    });
                });
            });
    </script>

</body>
</html>