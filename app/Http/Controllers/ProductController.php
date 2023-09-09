<?php

namespace App\Http\Controllers;

use App\Http\Requests\Updateprofilerequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Product::all();
        return view('munue',compact('books'));
    }

    public function singlebook($id)
    {
        $book=Product::find($id);
        $relatedBooks=Product::where('category',$book->category)->where('id','!=',$id)->take('4')->orderBy('id','desc')->get();
        return view('details',compact('book','relatedBooks'));
    }
    /**
     * Show the form for creating a new resource.
     */

     public function softdelete($id)
    {

            $book=Product::find($id);
            $book->delete();
            Auth::guard('web')->user()->borrowed_books++;
            Auth::user()->save();
            return Redirect::route('borrowedbooks');
    }

    public function about()
    {
        return view('about');
    }
    public function profile(){
        return view('profile');
    }
      public function show()
    {
       $books=Product::onlyTrashed()->get();
       return view('borrow',compact('books'));
    }

    public function restore($id){
        Product::withTrashed()->where('id',$id)->restore();
        Auth::guard('web')->user()->borrowed_books--;
        Auth::user()->save();
        return redirect()->back();
        }

    public function edit()
    {
        return view('profile')->with('user',auth()->user());
    }

    public function update(Updateprofilerequest $request)
    {
      $user=auth()->user();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->save();
     return redirect('home');
    }

}
