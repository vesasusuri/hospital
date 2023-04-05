<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paypal Donation Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <div class="jumbotron">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            @csrf
            
            <div class="row">
                
                <div class="col-md-4 offset-md-4">
                    <h4 class="text-center" >Paypal Donation Form</h4>
                </div>

                <div class="col-md-4 offset-md-4">
                    <label for="">CMD</label>
                    <input type="text" class="form-control" name="cmd" value="_donations" />

                    <label for="">business</label>
                    <input type="text" class="form-control" name="business" value="sb-cut488888@business.example.com" />

                    <label for="">Item Name</label>
                    <input type="text" class="form-control" name="item_name" value="Donation" />

                    <label for="">Currency Code</label>
                    <input type="text" class="form-control" name="currency_code" value="USD" />
                    
                    <label for="">Notify URL</label>
                    <input type='text' class="form-control" name='notify_url' value='{{ route("donation.notify") }}'>

                    <label for="">Cancel Return URL</label>
                    <input type='text' class="form-control" name='cancel_return' value='{{ route("donation.cancelled") }}'>

                    <label for="">Return</label>
                    <input type='text' class="form-control" name='return' value='{{ route("donation.success") }}'>

                    <label for="">Custom Text Field</label>
                    <textarea class="form-control" name="custom"></textarea>

                </div>

                <div class="col-md-4 offset-md-4">
                    <label for="">Donation Amount</label>
                    <input type="number" name="amount" class="form-control" value="100" >
                </div>

                <div class="col-md-4 offset-md-4">
                    <br>
                    <input type="submit" class="btn btn-info" value="Donation" >
                </div>
            </div>
        </form>
    </div> -->
</body>
</html>    