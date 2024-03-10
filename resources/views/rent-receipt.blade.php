<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .invoice-section {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .head {
            color: #fff;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }

        .head img {
            max-width: 100px;
        }

        .head-info {
            text-align: right;
        }

        .dull-bg {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .from-to {
            margin-top: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .total-wrap {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .total h6 {
            font-size: 16px;
            font-weight: bold;
        }

        .total-price h6 span {
            color: #007bff;
        }

        .credit-amount,
        .total-amount {
            border-top: 1px solid #dee2e6;
            margin-top: 10px;
        }

        .payment-detail {
            margin-top: 20px;
        }

        .payment-detail h5 {
            color: #007bff;
        }

        .payment-detail p {
            margin: 5px 0;
        }

        .pay-online img {
            max-width: 100px;
        }

        /* Media Query for responsiveness */
        @media (max-width: 767px) {
            .head {
                flex-direction: column;
                text-align: center;
            }

            .head-info {
                margin-top: 20px;
            }

            .from-to,
            .total-wrap {
                padding: 10px;
            }

            .invoice-table th,
            .invoice-table td {
                padding: 8px;
            }

            .total-wrap {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <section class="invoice-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 offset-md-1 col-md-10 col-lg-10">
                        <div class="card">
                            <div class="head text-dark">
                                <a href="index.html" class="navbar-brand logo d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100" class="img-fluid" alt="Logo">
                                </a>
                                <div class="head-info text-end">
                                    <h4 class="text-uppercase">INVOICE</h4>
                                    <h5>NgongRentals</h5>
                                    <p>REG: 123000123000</p>
                                    <p class="mb-0"><a
                                            href="https://dreamsestate.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="84edeae2ebc4e1fce5e9f4e8e1aae7ebe9">[email&#160;protected]</a>
                                        | +64 123 1234 123</p>
                                </div>
                            </div>
                            <hr>
                            <div class="dull-bg from-to">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <h5>From </h5>
                                        <p>Joseph</p>
                                        <p>45, 5th Street Newyork, USA</p>
                                        <p>LX6457</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <h5>To </h5>
                                        <p>Yaseer</p>
                                        <p>778 Mittal street, Germany</p>
                                        <p>454787</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                        <table class="short-info w-100">
                                            <tr>
                                                <td>Invoice Number:</td>
                                                <td class="float-end"><span>INV-0002</span></td>
                                            </tr>
                                            <tr>
                                                <td>Invoice Date:</td>
                                                <td class="float-end"><span>02 Jan 2023</span></td>
                                            </tr>
                                            <tr>
                                                <td>Due:</td>
                                                <td class="float-end"><span>20 Jan 2023</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="invoice-table table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $payments->amount }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-7 col-xl-7 ms-auto">
                                    <div class="dull-bg total-wrap">
                                        <table class="table-responsive table total">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6>Sub Total (excl. GST)</h6>
                                                    </td>
                                                    <td class="total-price">
                                                        <h6><span>$6,000.00</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Total GST:</h6>
                                                    </td>
                                                    <td class="total-price">
                                                        <h6><span>$0.00</span></h6>
                                                    </td>
                                                </tr>
                                                <tr class="credit-amount">
                                                    <td>
                                                        <h6>Credit card fee (if using):</h6>
                                                    </td>
                                                    <td class="total-price">
                                                        <h6><span>$92.00</span></h6>
                                                    </td>
                                                </tr>
                                                <tr class="total-amount">
                                                    <td>
                                                        <h6>Amount due on 20 Jan 2023:</h6>
                                                    </td>
                                                    <td class="total-price">
                                                        <h6><span>6,000.00 USD</span></h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-detail d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-primary">PAYMENT INSTRUCTIONS</h6>
                                    <h5>DreamsEstate</h5>
                                    <p>Bank Name: ABC Bank limited</p>
                                    <p>SWIFT/IBAN: NZ0201230012</p>
                                    <p>Account Number: 12-1234-123456-12</p>
                                    <p class="mt-4">Please use as INV-0002 as a reference number</p>
                                    <p class="mb-0">For any questions please contact us at <a
                                            href="https://dreamsestate.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="5b32353d341b3e233a362b373e75383436">[email&#160;protected]</a>
                                    </p>
                                </div>
                                <div class="pay-online">
                                    <h5>Pay Online</h5>
                                    <a href="index.html" class="navbar-brand logo d-flex align-items-center">
                                        <img src="https://via.placeholder.com/100" class="img-fluid" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>