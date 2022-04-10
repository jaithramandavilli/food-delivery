<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {
         $data=user::all();
       
       return view("admin.users",compact("data"));
    }
     
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
       return redirect()->back()->with('message','user has been deleted');
    }

    public function foodmenu()
    {
      $data=food::all();
       return view("admin.foodmenu",compact("data"));
    }

    public function uploadfood(Request $request)
    {
        $data=new food;

        $image=$request->Image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->Image->move('foodimage',$imagename);
        $data->Image = $imagename;
        $data->Title=$request->Title;
        $data->Price=$request->Price;
        $data->Description=$request->Description;
        $data->save();
        return redirect()->back()->with('message','New food item has been uploaded');
    }
    public function deleteitem($id)
    {
        $data=food::find($id);
        $data->delete();
       return redirect()->back()->withMessage('food item has been deleted successfully');
    }
   public function updateview($id)
   {
      $data=food::find($id);
      return view("admin.updateview",compact('data'));
   }
   public function update(Request $request,$id)
   {
      $data=food::find($id);
      $image=$request->Image;

      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->Image->move('foodimage',$imagename);
      $data->Image = $imagename;
      $data->Title=$request->Title;
      $data->Price=$request->Price;
      $data->Description=$request->Description;
      $data->save();
      return redirect()->back();

   }
   
   public function reservation(Request $request)
   {
       $data=new reservation;
     
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->guest=$request->guest;
       $data->date=$request->date;
       $data->time=$request->time;
       $data->message=$request->message;
       $data->save();
       return redirect()->back()->with('message','Table Reserved Successfully');
   }
   
   public function viewreservation()
   {
      if(Auth::id())
      {
      $data=reservation::all();
      return view("admin.adminreservation",compact("data"));
      }
      else
      {
         return redirect('login');
      }
   }
    
   public function viewchef()
   {
      $data=foodchef::all();
      return view("admin.adminchef",compact("data"))->with('message','Chef Deleted Successfully');
   }

  
   public function uploadchef(Request $request)
   {
      $data=new foodchef;
      $image=$request->image;

      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('chefimage',$imagename);
      $data->image=$imagename;
      $data->name=$request->name;
      $data->Speciality=$request->Speciality;
      $data->save();
      return redirect()->back()->with('message','Chef uploaded Successfully');
   }
   public function updatechef($id)
   {
      $data=foodchef::find($id);
   return view("admin.updatechef",compact("data"));

   }

   public function updatefoodchef(Request $request , $id)
   {
      $data=foodchef::find($id);
      $image=$request->image;
      if($image){
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('chefimage',$imagename);
      $data->image = $imagename;
      }
      $data->name=$request->name;
      $data->Speciality=$request->Speciality;
      $data->save();
      return redirect()->back()->with('message','Chef Updated Successfully');

   }
   public function deletechef($id)
   {
      $data=foodchef::find($id);
      $data->delete();
      return redirect()->back()->with('message','Chef Deleted Successfully');

   }

   public function orders()
   {
      $data=order::all();
      return view('admin.orders',compact('data'));
   }
   
   public function search(Request $request)
   {
      $search=$request->search;
      $data=order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like' ,'%'.$search.'%')->get();
      return view('admin.orders',compact('data'));
   }
   
   public function updatestatus($id)
   {
       $order=order::find($id);

       $order->status="Delivered";

       $order->save();

       return redirect()->back();
   }

}

