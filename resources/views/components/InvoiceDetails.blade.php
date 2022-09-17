@extends('layouts.print')

@section('content')
    @foreach ($order as $i => $o)
        <div class="card card-body printableArea">
            <h3><b>INVOICE</b> <span class="pull-right">#{{ str_pad($o->id, 5, '0') }}</span></h3>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <address>
                            <h3>
                                &nbsp;<b class="text-danger">Alive Sanitary Pvt Ltd</b>
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
                                @foreach ($o->products as $orderProduct)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $orderProduct->productName }}</td>
                                        <td class="text-end">{{ $orderProduct->pivot->productQuantity }}</td>
                                        <td class="text-end">
                                            {{ number_format($orderProduct->productPrice, 2) }}</td>
                                        <td class="text-end">
                                            {{ number_format($orderProduct->pivot->totalAmount, 2) }}</td>
                                    </tr>
                                @endforeach
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

                </div>
            </div>
        </div>
    @endforeach

    <script>
        window.print();
    </script>
@endsection
