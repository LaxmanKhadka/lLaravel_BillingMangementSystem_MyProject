<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div id="po"></div>
            @foreach ($order as $i => $o)
                <div class="card card-body printableArea">
                    <h3><b>INVOICE</b> <span class="pull-right">#{{ str_pad($o->id, 5, '0') }}</span></h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>
                                    <h3>
                                        &nbsp;<b class="text-danger">Alive Sanitary Pvt.Ltd</b>
                                    </h3>
                                    <p class="text-muted ms-1">
                                        Koteshwor-32, <br />
                                        Mahadev Sthan Marga,<br />
                                        Ring Road, <br />
                                        Kathmandu, Nepal
                                    </p>
                                </address>
                            </div>

                            <div class="pull-right text-end">
                                <address>
                                    <h3>To,</h3>
                                    <h4 class="font-bold">{{ $o->Customer_select }},</h4>
                                    <p class="text-muted ms-4">
                                        {{ $o->shippingAddress1 }}, <br />
                                        {{ $o->City }}, <br />
                                        {{ $o->State }}, {{ $o->Country }}

                                    </p>
                                    <p class="mt-4">
                                        <b>Order Date :</b>
                                        <i class="mdi mdi-calendar"></i> {{ date('d/m/y', strtotime($o->created_at)) }}
                                    </p>
                                    <p>
                                        <b>Delivery Date :</b>
                                        <i class="mdi mdi-calendar"></i>{{ date('d/m/y', strtotime($o->updated_at)) }}
                                    </p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive mt-5" style="clear: both">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="font-weight:bold;">S.N</th>
                                            <th style="font-weight:bold;">Description</th>
                                            <th class="text-end" style="font-weight:bold;"> Prdouct Quantity</th>
                                            <th class="text-end" style="font-weight:bold;">Product Price (NPR)</th>
                                            <th class="text-end" style="font-weight:bold;">Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $o->id }}</td>
                                            <td>{{ $o->productName }}</td>
                                            <td class="text-end">{{ $o->productQuantity }}</td>
                                            <td class="text-end">{{ number_format($o->productPrice, 2) }}</td>
                                            <td class="text-end">{{ number_format($o->subtotalAmount, 2) }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                                <p>Sub - Total amount(NPR): {{ number_format($o->subtotalAmount, 2) }}</p>
                                <p>Tax (13%) : {{ number_format($o->taxAmount, 2) }}</p>
                                <hr />
                                <h3 style="text_align:right"><b>Total Amoun(NPR) :</b>
                                    {{ number_format($o->totalAmount, 2) }}</h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                                <button class="btn btn-danger text-white print" type="submit"
                                    data-id="{{ $o->id }}">
                                    Print
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<script>
    $('.print').on('click', function() {
        // var v = $(this).attr("data-id");
        // var data = {
        //     id: v
        // };
        // let p = ajax("/invoiceDetails", data, "po", "get")
        window.print("/invoiceDetails");
    });
</script>
