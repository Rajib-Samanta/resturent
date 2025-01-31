
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/sty.css">
    <link href="css/index.css" rel="stylesheet" />
</head>
<body class="sub_page">

<div class="hero_area">
    <!-- Header Section -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <span>ORBIT</span>
                </a>
            </nav>
        </div>
    </header>
    <!-- End Header Section -->
</div>

<!-- Booking Form Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Booking Table</h3>
            </div>
            <form action="booking_action.php" method="post" onsubmit="return formValidate();">
                <div class="row g-3">
                    <!-- First Name and Last Name -->
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                    </div>

                    <!-- Phone and Email -->
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name="number" placeholder="Phone Number" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>

                    <!-- Date and Time -->
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="col-md-6">
                        <input type="time" class="form-control" name="time" required>
                    </div>

                    <!-- Menu Selection -->
                    <div class="col-6">
                        <select class="form-select" name="menu" required>
                            <option value="" selected disabled>Choose Menu</option>
                            <option value="Biriyani">Biriyani</option>
                            <option value="Pizza">Pizza</option>
                            <option value="Water">Water</option>
                        </select>
                    </div>

                    <!-- Payment Method -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="payment-method">Select Payment Method</label><br>
                            <input type="radio" id="credit-card" name="payment_method" value="online" >
                            <label for="credit-card">Online</label><br>

                            <input type="radio" id="cash" name="payment_method" value="cash">
                            <label for="cash">Cash</label><br>
                        </div>
                    </div>

                    <!-- Online Payment Options (Hidden by Default) -->
                    <div id="online-payment-options" class="col-12" style="display: none;">
                        <div class="form-group">
                            <label for="payment-method-online">Select Online Payment Method</label>
                            <select class="form-select" name="online_payment_method">
                                <option value="" selected disabled>Choose Payment Method</option>
                                <option value="credit-card">Credit Card</option>
                                <option value="paypal">upi</option>
                                <option value="bank-transfer">Bank Transfer</option>
                            </select>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary float-end">Book Now</button>
                        <a href="menu.php" class="btn btn-outline-secondary float-end me-2">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<!-- JavaScript to Toggle Online Payment Options -->
<script>
    // Function to toggle the visibility of online payment options based on selected payment method
    document.querySelectorAll('input[name="payment_method"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (document.getElementById('credit-card').checked) {
                document.getElementById('online-payment-options').style.display = 'block'; // Show online payment options
            } else {
                document.getElementById('online-payment-options').style.display = 'none'; // Hide online payment options
            }
        });
    });
</script>

</body>
</html>

