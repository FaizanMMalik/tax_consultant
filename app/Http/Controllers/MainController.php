<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function storeContactDetails(Request $request)
    {
       
       $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'newClient' => 'required|string',
            'country' => 'required|string',
            'services' => 'required|string',
            'message' => 'required|string',
        ]);
        try {
            DB::beginTransaction();
            contactUs::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'phone' => $request->phone,
                'email' => $request->email,
                'newClient' => $request->newClient,
                'country' => $request->country,
                'services' => $request->services,
                'message' => $request->message,

            ]);
            DB::commit();
            return redirect()->route('home');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
    public function aboutUs()
    {
        return view("aboutUs");
    }
}
