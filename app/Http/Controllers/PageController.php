<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HousePlan;
use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $properties = Property::all();
        return view('welcome',compact('properties'));
    }
    public function index()
    {

        $properties = Property::all();
        return view('pages.realestate',compact('properties'));
    }

    public function product()
    {
        return view('pages.product');
    }

    public function property_details()
    {
        return view('property_details');
    }

    public function for_sale()
    {
        $properties = Property::where('status','For Sale')->get();
        
        return view('pages.for_sale',compact('properties'));
    }

    public function for_rent()
    {
        $properties = Property::where('status','For Rent')->get();
        return view('pages.for_rent',compact('properties'));
    }

    public function service()
    {
        return view('pages.service');
    }

    public function contact_us(){
        return view('pages.contact_us');
    }

    public function about_us(){
        return view('pages.about_us');
    }






    public function house(){

        $properties = Property::where('type','house')->get();
        return view('pages.realestate',compact('properties'));
   
    }

    public function land(){
        $properties = Property::where('type','land')->get();
        return view('pages.realestate',compact('properties'));
   
    }

    public function apartment(){
        $properties = Property::where('type','apartment')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function room(){
        $properties = Property::where('type','room')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function villa(){
        $properties = Property::where('type','villa')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function airbnb(){
        $properties = Property::where('type','airbnb')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function short_stay(){
        $properties = Property::where('type','short_saty')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function studio_room(){
        $properties = Property::where('type','studio_room')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function plot(){
        $properties = Property::where('type','plot')->get();
        return view('pages.realestate',compact('properties'));
   
        
    }

    public function login(){
        $properties = Property::where('type','plot')->get();
        return view('pages.login',compact('properties'));
   
        
    }

    public function register(){
        $properties = Property::where('type','plot')->get();
        return view('pages.register',compact('properties'));
   
        
    }

    
}
