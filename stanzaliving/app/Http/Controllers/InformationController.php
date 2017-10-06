<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Informationpage;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // return 'info';
        $infos=Informationpage::all();

       // return $info;
        return view('pages.admin.information.informationlist',compact('infos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.information.informationadd');
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

       // return 'test';
       
        if($request->seourl == ''){


                   $var=Informationpage::where('title',$request->title)->first();

                    if($var != ''){

                          \Session::flash('duplicate','Title  ( '.$request->title.' ) Already Exists !.. Please Try Different One');
                           return \Redirect::back()->withInput();
                    }

                     if($var == ''){

                            $urlstr=\Helper::urlmaker($request->title);

                             $info=new Informationpage;

                            $info->title=$request->title;
                            $info->desc=$request->desc;
                            $info->content=$request->content;
                            $info->metatitle=$request->metatitle;
                            $info->metadesc=$request->metadesc;
                            $info->metakeywords=$request->metakeywords;
                            $info->seourl=$urlstr;
       


                            $info->save();

                             \Session::flash('message','Page Successfully Added !');
                                return \Redirect('admin/information/list');

                    }

           
           
        }   
         if($request->seourl != ''){


          
            
                $var=Informationpage::where('seourl',$request->seourl)->first();

                    if($var != ''){

                          \Session::flash('duplicate','SEO URL  ( '.$request->seourl.' ) Already Exists !.. Please Try Different One');
                           return \Redirect::back()->withInput();
                    }

                     if($var == ''){

                            $urlstr=\Helper::urlmaker($request->seourl);
                            $info=new Informationpage;

                            $info->title=$request->title;
                            $info->desc=$request->desc;
                            $info->content=$request->content;
                            $info->metatitle=$request->metatitle;
                            $info->metadesc=$request->metadesc;
                            $info->metakeywords=$request->metakeywords;
                            $info->seourl=$urlstr;
       


                            $info->save();

                             \Session::flash('message','Page Successfully Added !');
                                return \Redirect('admin/information/list');

                     }
        } 

       
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        //return $id;
     //   return $request->all();

        $info=Informationpage::findOrFail($request->id);

      //  return $info;
       //dd($request->all());
        return view('pages.admin.information.informationedit',compact('info'));
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

        //return $id;
      //  dd($request->all());


          if($request->seourl == ''){


                   $var=Informationpage::where('title',$request->title)->first();

                    if($var != '' && $var->id!=$request->info_id){

                          \Session::flash('duplicate','Title  ( '.$request->title.' ) Already Exists !.. Please Try Different One');
                           return \Redirect::back()->withInput();
                    }

                     if($var == '' ||  $var->id==$request->info_id){


                                if($request->info_id ==1 || $request->info_id == "1"){

                                    $urlstr=\Helper::urlmaker($request->title);

                            Informationpage::where('id', $request->info_id)
        
                              ->update(

                                [
                                'title' => $request->title,
                                 'desc' => $request->desc,
                                  'content' => $request->content,
                                  'subcontent' => $request->subcontent,
                                   'metatitle' => $request->metatitle,
                                    'metadesc' => $request->metadesc,
                                     'metakeywords' => $request->metakeywords,
                                     'seourl' => $urlstr,
                               

                                ]);
                                \Session::flash('message','Info Page Successfully Updated !');
                                return \Redirect('admin/information/list');

                                }
                                else{

                                          $urlstr=\Helper::urlmaker($request->title);

                            Informationpage::where('id', $request->info_id)
        
                              ->update(

                                [
                                'title' => $request->title,
                                 'desc' => $request->desc,
                                  'content' => $request->content,
                                   'metatitle' => $request->metatitle,
                                    'metadesc' => $request->metadesc,
                                     'metakeywords' => $request->metakeywords,
                                     'seourl' => $urlstr,
                               

                                ]);
                                \Session::flash('message','Info Page Successfully Updated !');
                                return \Redirect('admin/information/list');
                                }

                          
                    }

           
           
        }   
         if($request->seourl != ''){


          
            
                $var=Informationpage::where('seourl',$request->seourl)->first();

                    if($var != '' &&  $var->id!=$request->info_id){

                      
                          \Session::flash('duplicate','SEO URL  ( '.$request->seourl.' ) Already Exists !.. Please Try Different One');
                           return \Redirect::back()->withInput();
                    }

                     if($var == '' || $var->id==$request->info_id){
                       

                        if($request->info_id ==1 || $request->info_id == "1"){


                            
                              $urlstr=\Helper::urlmaker($request->seourl);

                            Informationpage::where('id', $request->info_id)
        
                              ->update(

                                [
                                'title' => $request->title,
                                 'desc' => $request->desc,
                                  'content' => $request->content,
                                  'subcontent' => $request->subcontent,
                                   'metatitle' => $request->metatitle,
                                    'metadesc' => $request->metadesc,
                                     'metakeywords' => $request->metakeywords,
                                     'seourl' => $urlstr,
                               

                                ]);
                                \Session::flash('message','Info Page Successfully Updated !');
                                return \Redirect('admin/information/list');

                        }
                        else{

                              $urlstr=\Helper::urlmaker($request->seourl);

                            Informationpage::where('id', $request->info_id)
        
                              ->update(

                                [
                                'title' => $request->title,
                                 'desc' => $request->desc,
                                  'content' => $request->content,
                                   'metatitle' => $request->metatitle,
                                    'metadesc' => $request->metadesc,
                                     'metakeywords' => $request->metakeywords,
                                     'seourl' => $urlstr,
                               

                                ]);
                                \Session::flash('message','Info Page Successfully Updated !');
                                return \Redirect('admin/information/list');

                        }

                         

                     }
        } 





       
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        //dd($request->all());

        if($request->id ==1 || $request->id =="1" ){

              \Session::flash('duplicate','Home Page Cannot Be Delete!');
            return \Redirect::back();

        }
        else{

                Informationpage::destroy($request->id);
         \Session::flash('message','Info Page Successfully Deleted !');
            return \Redirect::back();

        }
     
    
        //
    }

//     public function seoUrlMaker($urls,$edit=0,$page_id){

// if($edit==1){
// $this->db->where('page_id!=',$page_id);
// }

// $this->db->where('seo_url',$urls);
// $count=$this->db->get('tbl_pages')->num_rows();

// if($count>0){
// return $urls.'-'.rand(1,99).'-'.rand(1,999);
// }else{
// return $urls;
// }



// }
}
