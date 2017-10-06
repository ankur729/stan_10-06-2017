<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\User;

use Illuminate\Support\Facades\Storage;
use Image;
class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data=Role::all();
       
        $arr=[];
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->access_name;
            
            # code...
        }
       
        
        //return $arr;    
        return view('pages.admin.adminuser.adduser',compact('myarr'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $has_image="false";

            $this->validate($request, [
            'username' => 'required',
            'password'         => 'required',
            'conf_password' => 'required|same:password',
            'email' => 'required|email',
            'contact'=>'required|min:10|numeric',
            'role' => 'required',
            'image'=>'required'
            ]);


        if($request->file('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path("images/$name");
            $file->move('images',time().$name);
             $has_image="true";
        }
     
        if($has_image=="false"){

            $user= new User;

            $user->name=$request->username;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->password=bcrypt($request->password);
            $user->desig=$request->desig;
            $user->role_id=$request->role;
            $user->status=$request->status;
            $user->profile_img=time().$name;
            $user->main_super_admin=0;
            
            $user->save();
            \DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$user->id, $request->role]);

             \Session::flash('message','User Successfully Added !');
            return \Redirect::back();
          
        }
         if($has_image=="true"){

            echo 'YES IT HAS IMAGE';
             $user= new User;

            $user->name=$request->username;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->password=bcrypt($request->password);
            $user->desig=$request->desig;
            $user->role_id=$request->role;
            $user->status=$request->status;
            $user->profile_img=time().$name;
            $user->main_super_admin=0;
            
            $user->save();

            \DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$user->id, $request->role]);

            \Session::flash('message','User Successfully Added !');
            return \Redirect('admin/user/list');
        }
      
       // }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

       // $users=User::where('main_super_admin','=',0)->with('roles')->get();
         $users=User::where('main_super_admin','=',0)->with('roles')->get();
        //return $data[3.];
        return view('pages.admin.adminuser.adminuserlist',compact('users'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         $data=Role::all();
       
        $arr=[];
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->access_name;
            
            # code...
        }

        $user=User::findOrFail($id);

        return view('pages.admin.adminuser.edituser',compact(['user','myarr']));
   //   return $user;


        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        //dd($request->all());
          $has_image="false";

        if($request->file('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path("images/$name");
            $file->move('images',time().$name);
             $has_image="true";
        }



        if($request->password=='' && $has_image=="false"){

             $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'contact'=>'required|min:10|numeric',
            'role' => 'required',
          
            ]);
           User::where('id', $request->user_id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                        'contact'=>$request->contact,
                        'desig'=>$request->desig,
                        'role_id'=>$request->role,
                        'status'=>$request->status,
                       
            ]);
           \Session::flash('message','User Successfully Updated !');
            return \Redirect('admin/user/list');
           
        }



        if($request->password=='' && $has_image=="true"){

             $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'contact'=>'required|min:10|numeric',
            'role' => 'required',
          
            ]);
           User::where('id', $request->user_id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                        'contact'=>$request->contact,
                        'desig'=>$request->desig,
                        'role_id'=>$request->role,
                        'status'=>$request->status,
                        'profile_img'=>time().$name
                       
            ]);
           \Session::flash('message','User Successfully Updated !');
            return \Redirect('admin/user/list');
           
        }

        if($request->password!='' && $has_image=="true"){

             $this->validate($request, [
            'username' => 'required',
            'password'         => 'required',
            'conf_password' => 'required|same:password',
            'email' => 'required|email',
            'contact'=>'required|min:10|numeric',
            'role' => 'required',
          
            ]);


           User::where('id', $request->user_id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                        'contact'=>$request->contact,
                        'desig'=>$request->desig,
                        'role_id'=>$request->role,
                        'status'=>$request->status,
                        'password'=>bcrypt($request->password),
                        'profile_img'=>time().$name
            ]);

            \Session::flash('message','User Successfully Updated !');
            return \Redirect('admin/user/list');
        }

        if($request->password!='' && $has_image=="false"){

             $this->validate($request, [
            'username' => 'required',
            'password'         => 'required',
            'conf_password' => 'required|same:password',
            'email' => 'required|email',
            'contact'=>'required|min:10|numeric',
            'role' => 'required',
          
            ]);


           User::where('id', $request->user_id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                        'contact'=>$request->contact,
                        'desig'=>$request->desig,
                        'role_id'=>$request->role,
                        'status'=>$request->status,
                        'password'=>bcrypt($request->password),
                       
            ]);

            \Session::flash('message','User Successfully Updated !');
            return \Redirect('admin/user/list');
        }
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
