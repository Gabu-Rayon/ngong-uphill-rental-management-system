<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Rent INVOICE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .p-1 {
            padding: 1rem;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .m-auto {
            margin: auto;
        }

        .nav-link:hover {
            background-color: #120d72 !important;
            border-color: #0b0568 !important;
        }
    </style>
</head>
</head>

<body>
     <div class="p-1 mt-20 m-auto">
      <ul class="nav justify-content-end">
      <li class="nav-item">
               <button type="button" id="print" class="btn btn-primary mt-3 nav-link active"
                   aria-current="page" onclick="printReceipt()">Print Receipt</button>
          </li>
      </ul>
    </div>

    <div id="receipt" class="container m-5">
        <div class="main-wrapper">
            <section class="invoice-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 offset-md-1 col-md-10 col-lg-10">
                            <div class="card">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="col-sm-6 col-md-5 col-lg-6 p-1">
                                        <a href="/" class="navbar-brand logo d-flex align-items-center">
                                            <img src="https://via.placeholder.com/100"class="img-fluid" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 ">
                                        <div class="head-info text-end ">
                                            <h4 class="text-uppercase">INVOICE</h4>
                                            <h5>NGONGUPHILLSRENTALS</h5>
                                            <p>REG: {{ $registrationNumber }}</p>
                                            <p class="mb-0"> <a href="#">info@ngonguphillsrental.co.ke</a>
                                                | +254 123 1234 123</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="dull-bg from-to m-1">
                                    <div class="d-flex flex-row bd-highlight mb-3">
                                        <div class="col-sm-6 col-md-5 col-lg-6">
                                            <h5>To </h5>
                                            <p>{{ $payment->name }}</p>
                                            <p>{{ $payment->house_no }}</p>
                                            <p>{{ $payment->category }}</p>
                                        </div>
                                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 ">
                                            <table class="short-info w-95">
                                                <tr>
                                                    <td>Invoice No: </td>
                                                    <td class="float-end"><span>{{ $payment->invoice }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Invoice Date:</td>
                                                    <td class="float-end">
                                                        <span>{{ $payment->created_at }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Due:</td>
                                                    <td class="float-end">
                                                        <span>{{ $payment->created_at }}</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="invoice-table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>House No</th>
                                                <th>Category</th>
                                                <th>Payment Method</th>
                                                <th>Amount</th>
                                                <th>GST</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $payment->house_no }}</td>
                                                <td>2 Storey</td>
                                                <td>{{ $payment->payment_method }}</td>
                                                <td>{{ $payment->amount }}</td>
                                                <td>0.00</td>
                                                <td>{{ $payment->amount }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-7 col-xl-7 ms-auto">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5 col-lg-6"></div>
                                            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 ">
                                                <div class="dull-bg total-wrap m-auto">
                                                    <table class="table-responsive table total">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h6>Sub Total (excl. GST)</h6>
                                                                </td>
                                                                <td class="total-price">
                                                                    <h6><span>{{ $payment->amount }}</span></h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6>Total GST:</h6>
                                                                </td>
                                                                <td class="total-price">
                                                                    <h6><span>0.00</span></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="credit-amount">
                                                                <td>
                                                                    <h6>Credit card fee (if using):</h6>
                                                                </td>
                                                                <td class="total-price">
                                                                    <h6><span>92.00</span></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="total-amount">
                                                                <td>
                                                                    <h6>Amount due on {{ $payment->created_at }}:
                                                                    </h6>
                                                                </td>
                                                                <td class="total-price">
                                                                    <h6><span>25000.00</span></h6>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="payment-detail d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-uppercase text-primary">PAYMENT INSTRUCTIONS</h6>
                                        <h5>NGONGUPHILLSRENTALS</h5>
                                        <p>Bank Name: ABC Bank limited</p>
                                        <p>SWIFT/IBAN: NZ0201230012</p>
                                        <p>Account Number: 12-1234-123456-12</p>
                                        <p class="mt-4">Please use as {{ $payment->invoice }} as a reference
                                            number</p>
                                        <p class="mb-0">For any questions please contact us at <a
                                                href="#">info@ngonguphillsrental.co.ke</a>
                                        </p>
                                    </div>
                                    <div class="pay-online">
                                        <h5>Pay Online</h5>
                                        <a href="/" class="navbar-brand logo d-flex align-items-center">
                                            <img src="https://via.placeholder.com/100" class="img-fluid" alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script><!-- Add the printReceipt function -->
    <script>
        function printReceipt() {
            // Open the browser's print dialog
            window.print();
        }
    </script>

</body>

</html>
