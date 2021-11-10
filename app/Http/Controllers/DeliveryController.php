<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::get();
        return view('beheerder.delivery', compact('deliveries'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "company_name" => 'required',
            'price' => 'required'
        ]);

        Delivery::create([
            "company_name" => $request->company_name,
            'price' => $request->price
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $delivery = Delivery::find($id);

        return view('beheerder.editDelivery', compact('delivery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "company_name" => 'required',
            'price' => 'required'
        ]);

        $delivery = Delivery::where('id', $id)->update([
            "company_name" => $request->company_name,
            'price' => $request->price
        ]);

        return redirect('delivery');
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return back();
    }
}
