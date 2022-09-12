<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDS Secure Payment</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">

</head>
<style>
    .error {

        color: red !important;
        font-size: 12px;
        font-style: italic;

        padding: 5px;
    }
</style>

<body onload="autoPop();">
    <div class="container">
        <div class="jumbotron">
            <h2>BDS Secure Payment</h2>
        </div>
        <div class="row marketing">
            <!-- action="https://bdsserv.com/VPC/merchant_do.php" -->
            <form class="form-horizontal" method="post" id="payment_gateway_form">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="hidden" name="merchantIdentifier" value="9b13362685634e0b8680cd736a5e623a" />
                        <!-- <input type="hidden" name="merchantIdentifier" value="6a7622577b7b48778d6ce821bcba26b7" />-->
                        <input type="hidden" name="mode" value="1" />
                        <input type="hidden" name="returnUrl" value="https://bdsserv.com/BVPS/response.php" />
                        <input type="hidden" name="urlfile" value="https://bdslegalserv.com">
                        <input type="hidden" name="txnType" value="1" />
                        <input type="hidden" name="txnDate" id="txnDate" />
                        <input type="hidden" name="merchantIpAddress" value="127.0.0.1" />
                        <input type="hidden" name="zpPayOption" value="1" />
                        <input type="hidden" name="purpose" value="1" />
                        <input type="hidden" name="insertid_row" />
                        <label for="fullname" class="col-sm-9">Full Name:</label>

                        <div class="col-sm-11" style="display:flex;">
                            <input type="text" class="form-control" id="firstname" name="buyerFirstName" placeholder="Your First Name" style="width:50%;display:inline-flex;" required>
                            &nbsp;
                            <input type="text" class="form-control" id="lastname" name="buyerLastName" placeholder="Your Last Name" style="width:50%;display:inline-flex;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fulladdress" class="col-sm-9">Full Address:</label>
                        <div class="col-sm-11">
                            <textarea class="form-control" id="fulladdress" name="buyerAddress" placeholder="Your Full Address"><?= isset($_POST['fulladdress']) ? $_POST['fulladdress'] : "" ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nationality" class="col-sm-9">Country:</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="nationality" name="buyerCountry" placeholder="Your Nationality" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : "" ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contactno" class="col-sm-9">Contact No:</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="contactno" name="buyerPhoneNumber" placeholder="Contact Number" value="<?= isset($_POST['contactno']) ? $_POST['contactno'] : "" ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailaddress" class="col-sm-9">Your Email Address:</label>
                        <div class="col-sm-11">
                            <input type="email" class="form-control" id="emailaddress" name="buyerEmail" placeholder="Email Address" value="<?= isset($_POST['emailaddress']) ? $_POST['emailaddress'] : "" ?>" required>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <!-- 
                    value="<?php //isset($_POST['vpc_OrderInfo']) ?$_POST['vpc_OrderInfo'] : "" 
                            ?>"
                    -->

                    <div class="form-group">
                        <label for="vpc_OrderInfo" class="col-sm-9">Order Information:</label>
                        <div class="col-sm-11">

                            <input type="text" class="form-control" id="orderId" name="orderId" placeholder="Order Information" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="vpc_MerchTxnRef" class="col-sm-9">Transaction Reference Code:</label>

                        <input type="hidden" name="merchantIpAddress" value="127.0.0.1" />
                        <div class="col-sm-11">
                            <input value="BDS-<?= date('dmy') ?>-<?= rand(786786, 786786786) ?>" type="text" class="form-control" id="vpc_MerchTxnRef" name="vpc_MerchTxnRef" placeholder="Transaction Reference Code" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vpc_DCCAmount" class="col-sm-9">Amount:</label>
                        <div class="col-sm-11">
                            <input type="number" class="form-control" id="vpc_DCCAmount" name="amount" placeholder="Amount" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vpc_Currency" class="col-sm-9">Select Currency:</label>
                        <div class="col-sm-11">
                            <select name="currency" id="vpc_Currency" class="form-control">
                                <option value="USD">USD</option>
                                <option value="CAD">CAD</option>
                                <option value="GBP">GBP</option>
                                <option value="EUR">EUR</option>
                                <option value="SGD">SGD</option>
                                <option value="AUD">AUD</option>
                                <option value="AED">AED</option>
                                <option value="NZD">NZD</option>
                                <option value="CHF">CHF</option>
                                <option value="INR" selected>INR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vpc_Currency" class="col-sm-9">Description</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Description" required />

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11">
                            <input type="submit" class="btn btn-sm btn-success" name="SubButL" value="Pay Now!" />
                            <input type="reset" class="btn btn-sm btn-danger" name="Reset" value="Reset" />
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <footer class="footer">
            <p>© BDS Services PVT LTD | All Rights Reserved.</p>
        </footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script src="ie10-viewport-bug-workaround.js"></script>

    <script>
        function autoPop() {
            document.getElementById("orderId").value = "ZPLive" + String(new Date().getTime()); //	Autopopulating orderId
            var today = new Date();
            var dateString = String(today.getFullYear()).concat("-").concat(String(today.getMonth() + 1)).concat("-").concat(String(today.getDate()));
            document.getElementById("txnDate").value = dateString;
        };

        $('#payment_gateway_form').validate({
            rules: {
                firstname: 'required',
                lastname: 'required',
                contactno: 'required',
                vpc_DCCAmount: 'required',
                orderid: 'required',
                vpc_Currency: 'required',
                nationality: 'required',
                emailaddress: {
                    required: true,
                    email: true,
                },

            },
            messages: {
                orderid: '* Order Id required',
                firstname: '* First Name required',
                lastname: '* Last Name required',
                contactno: '* Conact No required',
                vpc_DCCAmount: '* Enter the Amount',
                vpc_Currency: '* Select Currency',
                nationality: '* Country required',
                emailaddress: '* Enter a valid email'

            },
            submitHandler: function(form) {

                var form = document.forms[0];
                form.action = "posttozaakpay.php";
                form.submit();
            }
        });

        /*function submitForm(){
			var form = document.forms[0];
			form.action = "posttozaakpay.php";
			form.submit();
			}*/
    </script>
</body>

</html>