<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\HousePlan;
use App\Models\User;

class AdminController extends Controller
{
    public function admin_dashboard()
    {

        $data = Property::all();
        $house_plan = HousePlan::all();
        $message =  ContactUs::all();
        $users = User::all();

        $total_properties = Property::count();
        $total_house_plan = HousePlan::count();
        $total_messages = ContactUs::count();

        $total_users = User::count();
        $total_properties_for_sale = Property::where('status', 'For Sale')->count();
        $total_properties_for_rent = Property::where('status', 'For Rent')->count();
        $total_properties_for_short_stay = Property::where('status', 'For Short Stay')->count();
        // dd($data);

        return view('admin.admin_dashboard', compact('data','users','house_plan','message', 'total_properties_for_sale', 'total_properties_for_rent', 'total_properties_for_short_stay', 'total_users'));
    }

    public function agent_dashboard()
    {

        $userId = auth()->id();
        $data = Property::where('created_by', $userId)->get();
       
        $total_properties = Property::where('created_by', $userId)->count();
        
        $total_properties_for_sale = Property::where('status', 'For Sale')
                                                ->where('created_by', $userId)
                                                ->count();
        $total_properties_for_rent = Property::where('status', 'For Rent')
                                                ->where('created_by', $userId)
                                                ->count();
        $total_properties_for_short_stay = Property::where('status', 'For Short Stay')
                                                ->where('created_by', $userId)
                                                ->count();
        // dd($data);

        return view('agent.agent_dashboard', compact('data', 'total_properties_for_sale', 'total_properties_for_rent', 'total_properties_for_short_stay', 'total_properties'));
    }
}
