<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard" title="Dashboard"></i>
                </h1>
                <h6 class="text-white">Dashboard</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover" onClick='ajax("/productDetails","")'>
            <div class="box bg-success text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-cart" title="Products"></i>
                </h1>
                <h6 class="text-white">Products</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover" onClick='ajax("/createNewInvoice","data")'>
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-book-open" title="Invoices"></i>
                </h1>
                <h6 class="text-white">Invoices</h6>
            </div>
        </div>
    </div>

    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover" onClick='ajax("/buyerDetails","data")'>
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-face" title="Vendors"></i>
                </h1>
                <h6 class="text-white">Vendors</h6>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover" onClick='ajax("/customerDetails","data")'>
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-account-multiple" title="Customers"></i>
                </h1>
                <h6 class="text-white">Customers</h6>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover" onClick='ajax("/report","")'>
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-alert" title="Sales Report"></i>
                </h1>
                <h6 class="text-white">Sales Reports</h6>
            </div>
        </div>
    </div>


</div>
