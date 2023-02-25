<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\Expertise;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Mission;
use App\Models\Organization;
use App\Models\Plan;
use App\Models\Product;
use App\Models\Service;
use App\Models\Timeline;
use App\Models\Vision;
use App\Models\Member;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'timeline' => Timeline::first(),
            'organizations' => Organization::get(['image']),
            'services' => Service::get(),
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first(),
            'heroes' => Hero::get(),
            'expertises' => Expertise::get(),
            'members' => Member::get(),
            'experts' => Expert::get(),
            'galleries' => Gallery::orderBy('id', 'DESC')->take(6)->get(),
            'products' => Product::orderBy('id', 'DESC')->take(6)->get(),
            'locations' => [
                [23.794606320003115,  90.3556018284282],
            ]

        ];


        return view('frontend.layouts.main', $data);
    }
    public function about()
    {
        $data = [
            'about' => About::first(),
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first(),
            'timeline' => Timeline::first(),
        ];

        return view('frontend.layouts.about', $data);
    }
    public function service()
    {
        $data = [
            'services' => Service::get(),
        ];
        return view('frontend.layouts.service', $data);
    }

    public function product()
    {
        $data = [
            'products' => Product::get(),
        ];
        return view('frontend.layouts.product', $data);
    }
    public function expertise()
    {
        $data = [
            'expertises' => Expertise::get(),
        ];
        return view('frontend.layouts.expertise', $data);
    }
    public function mission()
    {
        $data = [
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first()
        ];
        return view('frontend.layouts.mission', $data);
    }
    public function contact()
    {
//        $locations = [
//            [ 12.9716,  77.5946],
//        ];

//        return view('frontend.layouts.contact', ['locations'=>$locations]);

        return view('frontend.layouts.contact');
    }

    public function organization()
    {
        $data = [
            'organizations' => Organization::get(['image']),
            'members' => Member::get(),
        ];

        return view('frontend.layouts.organization', $data);
    }

    public function gallery()
    {
        $data = [
            'galleries' => Gallery::get(),
        ];
        return view('frontend.layouts.gallery', $data);
    }
    public function contactStore(Request $request)
    {
        $data = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message
        ]);
        $data = [
            'rows' => Contact::get()->toQuery()->paginate(5),
        ];
        Alert::success('Message Submitted', 'You Message has been sent successfully');
        return redirect()->back();
    }


}
