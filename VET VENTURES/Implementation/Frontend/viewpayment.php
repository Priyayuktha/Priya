<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #fce4ec; /* Light pink background color for the entire page */
        }
        .custom-card {
            background-color: #fff; /* White background color for cards */
            border: 1px solid #f48fb1; /* Pink border color for cards */
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .custom-card .card-title {
            color: #d81b60; /* Title color */
        }
        .custom-card .card-text {
            color: #880e4f; /* Text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa fa-check-circle text-success"></i>Payment was Successful</h2>
                        <p class="card-text">Thank you for your payment. We will be in contact with more details shortly.</p>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fa fa-times-circle text-danger"></i>Payment Failed</h2>
                        <p class="card-text">Please try again later.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
