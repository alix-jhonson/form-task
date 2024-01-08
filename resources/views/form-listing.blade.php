<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('no-results'))
            <div class="alert alert-success">
                {{ session('no-results') }}
            </div>
        @endif
    <div class="container">
        <h1 class="mt-5">Registration Form</h1>

        <form method="POST" action="{{ url('form-task') }}">
            @csrf

            <div class="mb-3">
                <label>Type:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="companyRadio" name="type" value="company">
                    <label class="form-check-label" for="companyRadio">Company</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="privateRadio" name="type" value="private">
                    <label class="form-check-label" for="privateRadio">Private</label>
                </div>
            </div>

            <div id="companyForm" style="display: none;">
                <!-- Company Information Form Here -->
                <h2>Company Information</h2>
                <div class="col-xl-3">
                    <label for="companyName">Company Name:</label>
                    <input type="text" id="companyNameCompany" name="companyName" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="chamberOfCommerce">Chamber of Commerce:</label>
                    <input type="text" id="chamberOfCommerceCompany" name="chamberOfCommerce" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="vatId">VAT ID:</label>
                    <input type="text" id="vatIdCompany" name="vatId" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" id="phoneNumberCompany" name="phoneNumber" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="customerId">Customer ID:</label>
                    <input type="text" id="customerIdCompany" name="customerId" class="form-control">
                </div>

                <!-- Add other company fields here -->

                <h3>Contact Person</h3>
                <div class="col-xl-3">
                    <label for="contactFirstName">First Name:</label>
                    <input type="text" id="contactFirstNameCompany" name="contactFirstName" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="contactLastName">Last Name:</label>
                    <input type="text" id="contactLastNameCompany" name="contactLastName" class="form-control">
                </div>

                <h3>Address</h3>
                <div class="col-xl-3">
                    <label for="address">Address:</label>
                    <input type="text" id="addressCompany" name="address" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" id="zipcodeCompany" name="zipcode" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="city">City:</label>
                    <input type="text" id="cityCompany" name="city" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="country">Country:</label>
                    <select id="countryCompany" name="country" class="form-control">
                        <option value="pakistan">Pakistan</option>
                        <option value="india">India</option>
                        <option value="germany">Germany</option>
                        <option value="france">France</option>
                    </select>
                </div>

                <!-- Add address fields here -->

                <h3>Sending</h3>
                <div class="col-xl-3">
                    <label for="deliveryMethod">Delivery Method:</label>
                    <input type="text" id="deliveryMethodCompany" name="deliveryMethod" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="ublVoice">UBL Voice:</label>
                    <input type="text" id="ublVoiceCompany" name="ublVoice" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="attnForInvoices">Attn. for Invoices:</label>
                    <input type="text" id="attnForInvoicesCompany" name="attnForInvoices" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="emailForInvoice">Email Address for Invoice:</label>
                    <input type="email" id="emailForInvoiceCompany" name="emailForInvoice" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="sendingQuotes">Sending out Quotes:</label>
                    <input type="text" id="sendingQuotesCompany" name="sendingQuotes" class="form-control">
                </div>
                
                <!-- Add other sending fields here -->

                <h3>Payment</h3>
                <div class="col-xl-3">
                    <label for="iban">IBAN:</label>
                    <input type="text" id="ibanCompany" name="iban" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="accountName">Account Name:</label>
                    <input type="text" id="accountNameCompany" name="accountName" class="form-control">
                </div>

                <!-- Add other payment fields here -->
                
                <h3>Workflow</h3>
                <div class="col-xl-3">
                    <label for="invoicesWorkflow">For Invoices:</label>
                    <input type="text" id="invoicesWorkflowCompany" name="invoicesWorkflow" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="quotesWorkflow">For Quotes:</label>
                    <input type="text" id="quotesWorkflowCompany" name="quotesWorkflow" class="form-control">
                </div>

            </div>
                <!-- Private Information Form Here -->
            <div id="privateForm" style="display: none;">
                <h2>Private Information</h2>
                
                <div class="col-xl-3">
                    <label for="contactFirstName">First Name:</label>
                    <input type="text" id="contactFirstNamePrivate" name="contactFirstName" class="form-control">
                </div>
                
                <div class="col-xl-3">
                    <label for="contactLastName">Last Name:</label>
                    <input type="text" id="contactLastNamePrivate" name="contactLastName" class="form-control">
                </div>
                
                <div class="col-xl-3">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" id="phoneNumberPrivate" name="phoneNumber" class="form-control">
                </div>
                
                <div class="col-xl-3">
                    <label for="customerID">Customer ID:</label>
                    <input type="text" id="customerIDPrivate" name="customerID" class="form-control">
                </div>

                <h3>Address</h3>
                <div class="col-xl-3">
                    <label for="address">Address:</label>
                    <input type="text" id="addressPrivate" name="address" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" id="zipcodePrivate" name="zipcode" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="city">City:</label>
                    <input type="text" id="cityPrivate" name="city" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="country">Country:</label>
                    <select id="countryPrivate" name="country" class="form-control">
                        <option value="pakistan">Pakistan</option>
                        <option value="india">India</option>
                        <option value="germany">Germany</option>
                        <option value="france">France</option>
                    </select>
                </div>

                <!-- Add address fields here -->

                <h3>Sending</h3>
                <div class="col-xl-3">
                    <label for="deliveryMethod">Delivery Method:</label>
                    <input type="text" id="deliveryMethodPrivate" name="deliveryMethod" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="ublVoice">UBL Voice:</label>
                    <input type="text" id="ublVoicePrivate" name="ublVoice" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="attnForInvoices">Attn. for Invoices:</label>
                    <input type="text" id="attnForInvoicesPrivate" name="attnForInvoices" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="emailForInvoice">Email Address for Invoice:</label>
                    <input type="email" id="emailForInvoicePrivate" name="emailForInvoice" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="sendingQuotes">Sending out Quotes:</label>
                    <input type="text" id="sendingQuotesPrivate" name="sendingQuotes" class="form-control">
                </div>

                <!-- Add other sending fields here -->

                <h3>Payment</h3>
                <div class="col-xl-3">
                    <label for="iban">IBAN:</label>
                    <input type="text" id="ibanPrivate" name="iban" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="accountName">Account Name:</label>
                    <input type="text" id="accountNamePrivate" name="accountName" class="form-control">
                </div>

                <!-- Add other payment fields here -->
                
                <h3>Workflow</h3>
                <div class="col-xl-3">
                    <label for="invoicesWorkflow">For Invoices:</label>
                    <input type="text" id="invoicesWorkflowPrivate" name="invoicesWorkflow" class="form-control">
                </div>

                <div class="col-xl-3">
                    <label for="quotesWorkflow">For Quotes:</label>
                    <input type="text" id="quotesWorkflowPrivate" name="quotesWorkflow" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <button type="button" class="btn btn-secondary mt-3">Cancel</button>
        </form>
    </div>

    <script>
        const companyRadio = document.getElementById('companyRadio');
        const privateRadio = document.getElementById('privateRadio');
        const companyForm = document.getElementById('companyForm');
        const privateForm = document.getElementById('privateForm');

        companyRadio.addEventListener('change', function() {
            if (companyRadio.checked) {
                companyForm.style.display = 'block';
                privateForm.style.display = 'none';
            }
        });

        privateRadio.addEventListener('change', function() {
            if (privateRadio.checked) {
                privateForm.style.display = 'block';
                companyForm.style.display = 'none';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
