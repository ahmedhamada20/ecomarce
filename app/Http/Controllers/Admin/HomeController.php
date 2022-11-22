<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        if($request->ajax())
        {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }

        return view('admin.index');
    }


    public function shop()
    {
        $row = Group::first();
        return view('admin.shop.index',compact('row'));
    }

    public function payment()
    {
        $row = Group::first();
        return view('admin.payment.index',compact('row'));
    }

    public function customer_support()
    {
        $row = Group::first();
        return view('admin.customer_support.index',compact('row'));
    }
    
    public function contact_Us()
    {
        $row = Group::first();
        return view('admin.contact_Us.index',compact('row'));
    }

    public function satisfaction_guarantee()
    {
        $row = Group::first();
        return view('admin.satisfaction_guarantee.index',compact('row'));
    }

    public function shipping()
    {
        $row = Group::first();
        return view('admin.shipping.index',compact('row'));
    }

    public function commercial_sales()
    {
        $row = Group::first();
        return view('admin.commercial_sales.index',compact('row'));
    }

    public function wishlist()
    {
        $row = Group::first();
        return view('admin.wishlist.index',compact('row'));
    }


    public function link_get()
    {
        return view('admin.link_get');
    }


    public function ajax(Request $request)
    {
        if($request->ajax())
        {
            if($request->type == 'add')
            {
                $event = Event::create([
                    'title'		=>	$request->title,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end
                ]);

                return response()->json($event);
            }

            if($request->type == 'update')
            {
                $event = Event::find($request->id)->update([
                    'title'		=>	$request->title,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end
                ]);

                return response()->json($event);
            }

            if($request->type == 'delete')
            {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
}
