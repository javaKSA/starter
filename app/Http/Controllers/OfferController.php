<?php


namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function getOffer()
    {
        return Offer::select('id', 'name')->get();
    }

    /*   public function store()
       {
           Offer::create([
               'name' => 'Abdullah rabea',
               'price' => '1000',
               'details' => 'details offers',
           ]);
       }*/

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        // validate يجب عمل
        // قبل الحفظ في قاعدة الباينات
        $rules = $this->getRules();
        $msgs = $this->getMsgs();

        $valid = Validator::make($request->all(), $rules, $msgs);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }


        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
        ]);
        return redirect()->back()->with(['success' => trans('msg.hi1')]);
    }

    protected function getRules()
    {
        return $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
    }

    protected function getMsgs()
    {
        return $msgs = [
            'name.required' => 'name is required ',
            'name.max' => 'name muse be 100 char',
            'name.unique' => 'name is already exist',
        ];
    }


}
