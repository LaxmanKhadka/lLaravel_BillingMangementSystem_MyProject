<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Billing Report</h4>
                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center" onClick="ajax('/customerDetails')">
                                        <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">3</h5>
                                        <small class="font-light">Total Users</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center" onclick="ajax('/buyerDetails')">
                                        <i class="mdi mdi-account fs-3 font-16"></i>
                                        <h5 class="mb-0 mt-1">2</h5>
                                        <small class="font-light">Total Vendors </small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center" onclick="ajax('/productDetails')">
                                        <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">3</h5>
                                        <small class="font-light">Total Products</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="bg-dark p-10 text-white text-center"
                                        onclick="ajax('/createNewInvoice')">
                                        <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                                        <h5 class="mb-0 mt-1">9540</h5>
                                        <small class="font-light">Total Orders</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
