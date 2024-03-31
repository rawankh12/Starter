<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;

class CrudController extends Controller
{

   

    //photo
    //update
    //delete
    //upload image
    //improve code

    public function __construct()
    {

    }

    public function getOffers()
    {
        return Offer::select('id', 'name')->get();
    }


    /* public function store()
     {

         Offer::create([
             'name' => 'Offer3',
             'price' => '5000',
             'details' => 'offer details',
         ]);
     }*/


    public function create()
    {
        return view('offers.create');
    }


    public function store(OfferRequest $request)
    {
        //validate data before insert to database
        //$rules = $this->getRules();
        //$messages = $this->getMessages();
        // $validator = Validator::make($request->all() ,$rules, $messages);
        // if ($validator->fails()) {
        //    return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }


        //insert
        Offer::create([
            'photo' => $file_name,
            'name_ar' => $request->name_ar,
            'name_en' =>   $request->name_en,
            'price' =>  $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
        ]);

        return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }


    /*
        protected function getMessages()
        {

            return $messages = [
                'name.required' => __('messages.offer name required'),
                'name.unique' => 'اسم العرض موجود ',
                'price.numeric' => 'سعر العرض يجب ان يكون ارقام',
                'price.required' => 'السعر مطلوب',
                'details.required' => 'ألتفاصيل مطلوبة ',
            ];
        }

        protected function getRules()
        {

            return $rules = [
                'name' => 'required|max:100|unique:offers,name',
                'price' => 'required|numeric',
                'details' => 'required',
            ];
        }*/

    public function getAllOffers()
    {
        $offers = Offer::select('id',
            'price',
            'name' ,
            'details'
        )->get(); // return collection of all result*/


        return view('offers.all');


        
    }




}