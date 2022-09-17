<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\productsOrder;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Dashbord Controller Route
    public function index()
    {
        return view('page.dashboard');
    }

    public function dashboard()
    {
        return view('components.dashboard');
    }

    //Adding new product and store it
    public function AddNewProduct()
    {
        $vendor = Vendor::where("type", "Vendor")->get();

        return view('components.addNewProduct', compact('vendor'));
    }
    // product store/ insertig data
    public function productstore(Request $req)
    {

        $data = $req->except(['_token']);
        Product::create($data);
    }

    // Prdoduct details and fetching data 
    public function productDetails()
    {
        $product = Product::orderBy("id", "desc")->get();
        return view('components.productDetails', compact('product'));
    }

    // productededited
    public function productEdit(Request $req)
    {
        $p = Product::find($req->id);
        return view('components.productEdit', compact('p'));
    }

    // product EditedSave
    public function productedited(Request $req)
    {
        $p = Product::find($req->id);
        $p->productCategory = $req->productCategory;
        $p->productName = $req->productName;
        $p->productCode = $req->productCode;
        $p->productQuantity = $req->productQuantity;
        $p->productPrice = $req->productPrice;
        $p->productDescription = $req->productDescription;
        $p->save();
        return $p;
    }
    // delete the choosen product
    public function productdelete(Request $req)
    {
        $p = Product::find($req->id);
        return view('components.productDelete', compact('p'));
    }
    //Deleted
    public function productDeleted(Request $req)
    {
        $p = Product::find($req->id);
        $p->delete();
        return $p;
    }

    // Create new Invoices and store it
    public function createNewInvoice(Request $request)
    {
        $order = Order::orderBy("id", "desc")
            ->when($request->search, function ($query, $search) {
                $query->where('Customer_select', 'like', "%$search%");
            })
            ->when($request->start_date, function ($query, $start_date) {
                $query->where('created_at', '>=', $start_date);
            })
            ->when($request->end_date, function ($query, $end_date) {
                $query->where('created_at', '<=', $end_date);
            })
            ->get();
        return view('components.createNewInvoice', compact('order'));
    }

    //create Order
    // public function createorder(Request $req)
    // {
    //     $vendor = Vendor::where("type","Customer")->get();
    //     $product= Product::get();   
    //   return view('components.createOrder', compact(['vendor','product']));
    // }


    public function orderdeleted(Request $req)
    {
       $o = Order::find($req->id);
       $o->delete();
       return$o;

    }
    public function multiorder(Request $req)
    {
        $vendor = Vendor::where("type", "Customer")->get();
        $product = Product::get();
        return view('components.multiOrder', compact(['vendor', 'product']));
    }

    public function productcategory(Request $req)
    {

        $product = Product::where("productCategory", $req->cat)->get();

        return $product;
    }
    // order store
    public function orderstore(Request $req)
    {

        $data = $req->except(['_token']);

        DB::beginTransaction();

        $orderData = $req->only([
            'Customer_select', 'customerPhone', 'shippingAddress1', 'shippingAddress2',
            'State', 'City', 'Country'
        ]);
        $orderData['subtotalAmount'] = 0;
        $orderData['totalAmount'] = 0;
        $order = Order::create($orderData);

        $amount = 0;
        foreach ($req->input('product_id') as $index => $product_id) {
            $product = Product::query()->find($product_id);

            if ($product->productQuantity < $req->input("product_qty.$index")) {
                throw new Exception("Max quantity limit for {$product->productName} is {$product->productQuantity}");
            }

            productsOrder::query()->create([
                'order_id' => $order->id,
                'product_id' => $product_id,
                'productName' => $product->productName,
                'productQuantity' => $qty = $req->input("product_qty.$index"),
                'productPrice' => $product->productPrice,
                'totalAmount' => $amt = $product->productPrice * $qty
            ]);
            $amount += $amt;

            $product->productQuantity -= $qty;
            $product->save();
        }

        $order->subtotalAmount = $amount;
        $order->taxAmount = $amount * 0.13;
        $order->totalAmount = $amount + $order->taxAmount;
        $order->save();

        DB::commit();
    }
    // products_order store
    public function products_order(Request $req)
    {
        $data = $req->except(['_token']);
        productsOrder::create($data);
    }
    // Invoice Format
    public function invoiceformat(Request $req)
    {
        $order = Order::where("id", $req->id)->get();
        return view('components.invoiceFormat', compact('order'));
    }
    // fetch data into invoice 


    // Invoice details
    public function invoiceDetails(Request $req)
    {
        $order = Order::where("id", $req->id)->get();
        return view('components.invoiceDetails', compact('order'));
    }

    // add new Vendors and store it 
    public function addNewBuyer()
    {
        return view('components.addNewVendor');
    }
    // vendor storing and creating data
    public function buyerstore(Request $req)
    {
        $req->merge(['type' => "Vendor"]);
        $data = $req->except("_token");
        Vendor::create($data);
    }
    // Vendores details
    public function buyerDetails()
    {
        $vendor = Vendor::where("type", "Vendor")->orderBy("id", "desc")->get();
        return view('components.vendorDetails', compact('vendor'));
    }
    // vendorEdited
    public function vendoredit(Request $req)
    {
        $v = Vendor::find($req->id);
        return view('components.vendorEdit', compact('v'));
    }
    //Vendor Edited/save
    public function vendoredited(Request $req)
    {
        $v = Vendor::find($req->id);
        $v->Name = $req->Name;
        $v->Email = $req->Email;
        $v->Phone = $req->Phone;
        $v->Address1 = $req->Address1;
        $v->Address2 = $req->Address2;
        $v->State = $req->State;
        $v->City = $req->City;
        $v->Country = $req->Country;
        $v->save();
        return $v;
    }
    // vendor delete
    public function vendordelete(Request $req)
    {
        $v = Vendor::find($req->id);
        return view('components.vendorDelete', compact('v'));
    }
    //Vendor Deleted
    public function vendordeleted(Request $req)
    {
        $v = Vendor::find($req->id);
        $v->delete();
        return $v;
    }


    // add new customers
    public function addnewcustomer()
    {
        return view('components.addNewCustomer');
    }
    
    // customer create
    public function customerstore(Request $req)
    {
        $req->merge(['type' => "Customer"]);
        $data = $req->except("_token");
        Vendor::create($data);
    }
    //Customers details and tables 
    public function customerdetails()
    {
        $vendor = Vendor::where("type", "Customer")->orderBy("id", "desc")->get();
        return view('components.customerDetails', compact('vendor'));
    }
    //customer edit for save
    public function customeredit(Request $req)
    {
        $v = Vendor::find($req->id);
        return view('components.customerEdit', compact('v'));
    }

    //customer Edited/save
    public function customeredited(Request $req)
    {
        $v = Vendor::find($req->id);
        $v->Name = $req->Name;
        $v->Email = $req->Email;
        $v->Phone = $req->Phone;
        $v->Address1 = $req->Address1;
        $v->Address2 = $req->Address2;
        $v->State = $req->State;
        $v->City = $req->City;
        $v->Country = $req->Country;
        $v->save();
        return $v;
    }
    // Customer delete    
    public function customerdelete(Request $req)
    {
        $v = Vendor::find($req->id);
        return view('components.customerDelete', compact('v'));
    }
    //Customer Deleted
    public function customerdeleted(Request $req)
    {
        $v = Vendor::find($req->id);
        $v->delete();
        return $v;
    }


    // Create and store sales report
    public function salesReport()
    {
        return view('components.salesReport');
    }
}
