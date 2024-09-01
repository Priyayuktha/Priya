<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/pay.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="main">
            <h3 class="text-center">PAYMENT PAGE</h3>
            <!-- Payment Method Section -->
            <section class="payment_method mt-4">
                <div class="row">
                    <div class="col-lg-8 col-md-12 mb-4">
                        <h2 class="ship_head">Payment Method</h2>
                        <div class="card_info">
                            <div class="card_head">
                                <h2 class="card_title">Debit or Credit Card</h2>
                            </div>
                            <div class="card_types mb-3">
                                <img class="card_img mr-2" src="https://cdn-icons-png.flaticon.com/512/349/349221.png"
                                    alt="Visa" />
                                <img class="card_img mr-2" src="https://cdn-icons-png.flaticon.com/512/349/349230.png"
                                    alt="Mastercard" />
                                <img class="card_img mr-2"
                                    src="https://cdn-icons-png.flaticon.com/512/349/349228.png"
                                    alt="American Express" />
                                <img class="card_img mr-2" src="https://img.icons8.com/fluency/512/mastercard.png"
                                    alt="Discover" />
                            </div>
                            <form id="paymentForm" onsubmit="return validatePayment(event)">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Name" placeholder="Card Holder Names"
                                        maxlength="60" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Number" id="cardNumber"
                                        placeholder="Card Number" maxlength="19" required>
                                    <small id="cardNumberHelp" class="form-text text-muted">Enter 16-digit card number.</small>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="Expire" placeholder="Expire"
                                            maxlength="10" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="CVV" placeholder="CVV"
                                            maxlength="3" required>
                                    </div>
                                </div>
                                <button type="submit" class="confirm_btn btn btn-primary mt-4">Confirm</button>
                            </form>
                            <span class="save_card">Save Card</span>
                        </div>
                        <div class="e_payment mt-4">
                            <div class="d-flex justify-content-around">
                                <div class="pay">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6124/6124998.png"
                                        alt="PayPal" />
                                </div>
                                <div class="pay">
                                    <img src="https://cdn-icons-png.flaticon.com/512/5977/5977576.png"
                                        alt="Google Pay" />
                                </div>
                                <div class="pay">
                                    <img src="https://cdn-icons-png.flaticon.com/512/196/196565.png"
                                        alt="Apple Pay" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 text-center">
                        <img class="qr_code mb-3"
                            src="https://cdn-icons-png.flaticon.com/512/714/714390.png" alt="QR Code"
                            style="width: 200px; height: 200px;" />
                        <p class="condition">Pay and Confirm by QR Code Using <b>Mobile Application</b></p>
                        <button class="review_btn btn btn-secondary mt-3">Review and Confirm</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="js/pay.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validatePayment(event) {
            event.preventDefault(); // Prevent form submission for now

            var cardNumberInput = document.getElementById('cardNumber').value;
            // Remove all non-digit characters
            var cardNumber = cardNumberInput.replace(/\D/g, '');
            var cardNumberLength = cardNumber.length;

            if (cardNumberLength !== 16) {
                alert("Payment Failed.");
                return false;
            }

            // Perform additional validation as needed (e.g., Luhn algorithm)

            // Simulate payment success (for demonstration purposes)
            var isSuccess = Math.random() < 0.8; // Simulate 80% chance of success

            if (isSuccess) {
                alert("Payment successful!");
                window.location.href = "homepage.php"; // Redirect to homepage on success
            } else {
                alert("Payment failed. Please try again.");
            }
        }

        // Function to format card number with spaces
        function formatCardNumber(input) {
            var value = input.value.replace(/\D/g, '');
            var formattedValue = value.replace(/(\d{4})/g, '$1 ').trim();
            input.value = formattedValue;
        }

        // Event listener to format card number on input
        document.getElementById('cardNumber').addEventListener('input', function () {
            formatCardNumber(this);
        });
    </script>
</body>

</html>
