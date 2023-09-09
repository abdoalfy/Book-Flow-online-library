<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Spatie\Backtrace\File;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller 
{
    public function login(){
     return view('admin.login');   
    }

        public function cheklogin(Request $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);   
    }

    public function index(){
        $books=Product::all()->count();

        // $borrowedbooks=DB::table('products')->select()->get();
        // $selectedRow = DB::table('products')->where('deleted_at', true);
        // $borrowedbooks=User::borrowed_books()->count;
        $results=DB::table('products')->select('id')->where('deleted_at', '!=' ,null)->get()->count();
        $users=User::all()->count();
        $admins=Admin::all()->count();
        return view('admin.index',compact('results','books','users','admins'));
    }
    public function alladmins(){
        $alladmins=Admin::all();
        return view('admin.alladmin',compact('alladmins'));
    }

    public function createadmin(){
        return view('admin.createadmin');
    }
    
    public function storeadmin(Request $request){
        $admin= new Admin();
        $admin->email = $request->email;
        $admin->name = $request->username;
        $admin->password = $request->password;
        $admin->save();
        return view('admin.alladmin');
       }
       public function allusers(){
        $allusers=User::all();
        return view('admin.allusers',compact('allusers'));
       }

       public function allbooks(){
        $allbooks=Product::all();
        return view('admin.allboks',compact('allbooks'));
    }
       public function createbok(){
        return view('admin.allboks');
    }
    // public function storebook(Request $request){
    //     $admin= new Product();
    //     $admin->email = $request->email;
    //     $admin->name = $request->username;
    //     $admin->password = $request->password;
    //     $admin->save();
    //     return response("data has been aded ");
    //    }
    public function borrowedbookss()
    {
       $books=Product::onlyTrashed()->get();
       return view('admin.borrwedbooks' , compact('books'));
    }
    public function addbook(){
        $cats=Product::select()->first()->get();
        return view('admin.addbook',compact('cats'));
    }
    public function storebook(Request $request)
    {
        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);
        $book= new Product();
        $book->name = $request->name;
        $book->description = $request->Description;
        $book->image = $myimage;
        $book->category = $request->category;
        $book->save();
        if($book){
         return Redirect::route('allboks')->with([ 'success' => "new book has been Add successfuly..!"]);
        }
       }

    //   public function deletebook($id){
    //     $book=Product::find($id);
    //     $book->delete();
    //     if($book){
    //         return Redirect::route('allboks')->with([ 'delete' => "Book has been Deleted successfuly..!"]);
    //        }
    //      }

      public function forceDelete($id){
        Product::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }

      public function editbook($id) {
        $book=Product::find($id);
        return view('admin.editbook',compact('book'));
      }


      public function updatebook(Request $request,$id) {
        $book=Product::find($id);
        $book->update($request->all());
        if($book){
            return Redirect::route('allboks')->with([ 'Updated' => "Book has been Updated successfuly..!"]);
           }
      }
      public function search (Request $request){
        $search = $request->search;
        $allusers =  User::where(function ($query) use ($search)
        {
        $query->where('id', 'like', "%$search%");})->get();
        return view('admin.allusers',compact('allusers', "search"));
     }
     public function adminprofile($id){
        $admin=Admin::find('id');
        return view('admin.adminbrofile',compact('admin'));
     }

     public function editeadmin($id) {
        $admin=Admin::find($id);
        return view('admin.editeadmin',compact('admin'));
      }

      public function updateadmin(Request $request,$id) {
        $admin=Admin::find($id);
        $admin->update($request->all());
        if($admin){
            return Redirect::route('alladmins')->with([ 'adminupdated' => "Admin profile has been Updated successfuly..!"]);
           }
        }
}