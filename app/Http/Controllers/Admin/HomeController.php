<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use yajra\Datatables\Services\DataTable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\banner_image_detail;
use App\Model\NewsCategory;
use App\Model\latest_new;
use App\Model\TrendingNews;

use \Carbon\Carbon;


//use App\Http\Controllers as Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.home');
    }

    public function dashboard(){
        // dd('efef');
        return view('Admin.dashboard');
    }

    public function imageForm(){
        // dd('df');

        return view('Admin.add_banner_image');
    }

    public function imageDetailSave(Request $request){
            $this->validate($request, [
            'img_title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|dimensions:min_width=250,min_height=500',
        ]); 

            $BanerImg= new banner_image_detail;
            $BanerImg->img_title = $request['img_title'];           
            $BanerImg->img_description = $request['description'];           
            $BanerImg->image_date = Carbon::parse($request['date'])->format('Y-m-d'); 

            if($file = $request->hasFile('image')) {

                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path('images') ;
                $imagePath = public_path('images/').$fileName ;
                $file->move($destinationPath,$fileName);
                $BanerImg->image_name = $fileName ;
                $BanerImg->image_path = $imagePath ;

             }

             $BanerImg->save();   
            session()->flash('message','Data Inserted Successfully.');
             return redirect()->back();
        
            // dd($request->all());
           
           
    }

    public function imageList(Request $request){

           /* $showdata = banner_image_detail::latest()->get();    

            return view('Admin.imageList',compact('showdata'));*/

            return view('Admin.imageList');
    }

    public function yajraList(Request $request){


       $allvalue = banner_image_detail::get();

        return Datatables::of($allvalue)
            ->addColumn('serial_no',function($data) {
                static $i=1;
                return $i++;
            })
            ->addColumn('action', function($data) {
                            //{{route(editdata,$allvalue->id)}}
                           $btn = '<a href= "'.route('editdata',$data->id).'"  class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn .= '<a href= "'.route('deletedata',$data->id).'" class="edit btn btn-danger btn-sm">delete</a>';
                            return $btn;
                    })
            ->rawColumns(['action','serial_no'])
            ->make(true);
    }

    public function editList(Request $request,$id){
    

        $editdata= banner_image_detail::where('id',$id)->first();
        return view('Admin.editList' ,compact('editdata'));
    }


    public function updatedata(Request $request,$id)
    {
        // dd($request->all());
        
       
        $this->validate($request, [
            'img_title' => 'required',
            'img_description' => 'required',
            'image_date' => 'required',
            'image' => 'required',
        ]); 
        


       if(isset($request['image']))
       {
            if($file = $request->hasFile('image'))
            {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path('images') ;
                $imagePath = public_path('images/').$fileName ;
                $oldImagePath=public_path($request['image']);
                @unlink($oldImagePath);
                $file->move($destinationPath,$fileName);

             }  
        }
        ////insert
        //$banner = new banner_image_detail;

        //////update
        $banner = banner_image_detail::find($request->id);
        $banner->img_title = $request->img_title;
        $banner->img_description = $request->img_description;
        $banner->image_date = Carbon::parse($request->image_date)->format('Y-m-d');
        if($request->hasFile('image'))
        {
            $banner->image_name = $fileName;
            $banner->image_path = $imagePath;
        }
        $banner->save();
        session()->flash('message','Data updated Successfully.');
        return redirect()->route('imageList');
       
    }



    public function deletedata(Request $request,$id){

            banner_image_detail::find($request->id)->delete();
            session()->flash('message','Data deleted Successfully.');
            return redirect()->back();

    }




    public function NewsCategory(Request $request){

        return view('Admin.latestnewcategory');
    }


     public function StoreLatestNewsCategory(Request $request){

            $this->validate($request, [
                'img_title' => 'required',
                'status' => 'required',

            ]); 

            $NewsCategory = new NewsCategory;
            $NewsCategory->category_title = $request->img_title;
            $NewsCategory->status = $request->status;
            $NewsCategory->save();
            session()->flash('message',' New category Updated Successfully.');
            return redirect()->back();
         
     }

    public function LatestNewsCategoryList(){

        return view('Admin.latestnewcategorylist');
    }
    
    public function LatestNewsCategoryListyajra(Request $request){
       
       $categorylist = NewsCategory::get();

       return Datatables::of($categorylist)
            ->addColumn('serial_no',function($data) {
                static $i=1;
                return $i++;
            })
            ->addColumn('action',function($data) {

                $btn = '<a href= "'.route('editcategorylistyajra',$data->id).'"  class="edit btn btn-primary btn-sm">Edit</a>';
                $btn .= '<a href= "'.route('deletecategory',$data->id).'" class="edit btn btn-danger btn-sm">delete</a>';

                if ($data->status== "active") {
                   // $btn .= '<a href= "'.route('categorystatus',$data->id,$data->status).'" class="edit btn btn-success btn-sm">InActive</a>';

                    $btn .= '<a href= "'.route('categorystatus', array($data->id,'inactive')).'" class="edit btn btn-success btn-sm">Inactive</a>';

                }else{

                    $btn .= '<a href= "'.route('categorystatus',array($data->id,'active')).'" class="edit btn btn-success btn-sm">Active</a>';
                }
                
                return $btn;
                
            })
            ->rawColumns(['action','serial_no'])
            ->make(true);


    }

            public function editNewsCategoryList(Request $request,$id){


                $editcategorynews= NewsCategory::where('id',$id)->first();
                return view('Admin.editnewscategory' ,compact('editcategorynews'));
            }

            public function UpdateNewsCategoryList(Request $request){

               $this->validate($request, [
                'category_title' => 'required',
                'status' => 'required',

            ]);

                $UpdateNewsCategoryList = NewsCategory::find($request->id);

                $UpdateNewsCategoryList->category_title = $request->category_title;
                $UpdateNewsCategoryList->status = $request->status;
                $UpdateNewsCategoryList->save();
                session()->flash('message','Data updated Successfully.');
                return redirect()->route('NewsCategoryList');

            }


            public function deleteNewsCategoryList(Request $request,$id){

                NewsCategory::find($request->id)->delete();
                session()->flash('message','Data deleted Successfully.');
                return redirect()->back();


            }


            public function categorystatus(Request $request,$id,$status){

                NewsCategory::where('id',$id)->update(['status'=>$status]);
                session()->flash('message','data updated sucessfully');
                return back();

            }



           public function latestNewsForm(){

            //$data['NewsCategory'] = NewsCategory::select('id','category_title')->where('status','=','active')->get();
            $data['NewsCategory'] = NewsCategory::where('status','=','active')->pluck('category_title', 'id');
            // $data['NewsCategory'] = NewsCategory::select('id','category_title')->where('status','=','active')->get()->toArray();

           // dd($data['NewsCategory']);
            //dd($data['NewsCategory']);
            // $category = array();
            // if(count($data['NewsCategory']) > 0){
            //     foreach ($data['NewsCategory'] as $key => $value) {
            //         $category[$value['id']] = $value['category_title'];
            //     }

            // }
            // $data['category'] = $category;
            //dd($category);
            return view("Admin.latestnews")->with($data);
           }

           public function latestNewsFormPost(Request $request){

            $this->validate($request, [
            'news_id' => 'required',
            'img_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
        ]); 

            $latestnews= new latest_new;
            $latestnews->news_id = $request->news_id;
            $latestnews->img_title = $request->img_title;         
            $latestnews->short_description = $request->short_description;         
            $latestnews->long_description = $request->long_description;     

             if($file = $request->hasFile('image')) {

                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = 'images' ;
                $imagePath = 'images/'.$fileName ;
                $file->move($destinationPath,$fileName);
                $latestnews->img_name = $imagePath ;
             }    

            $latestnews->save();   
            session()->flash('message','Data Inserted Successfully.');
             return redirect()->back();
        
           
           }

           public function categoryList(Request $request){

            return view('Admin.newscategorylist');
          }

          public function latestnewscategorylists(Request $request){

             $categorylist = latest_new::with('NewsCat')->get();
             // dd($categorylist->NewsCat);
            return Datatables::of($categorylist)
            ->addColumn('serial_no',function($data) {
                static $i=1;
                return $i++;
            })
            ->addColumn('action',function($data) {

                $btn = '<a href= "'.route('editlatestnewscategory',$data->id).'"  class="edit btn btn-primary btn-sm">Edit</a>';
                $btn .= '<a href= "'.route('deletecategorys',$data->id).'" class="edit btn btn-danger btn-sm">delete</a>';

                if ($data->status== "active") {
                   // $btn .= '<a href= "'.route('categorystatus',$data->id,$data->status).'" class="edit btn btn-success btn-sm">InActive</a>';

                    $btn .= '<a href= "'.route('categorystatuss', array($data->id,'inactive')).'" class="edit btn btn-success btn-sm">Inactive</a>';

                }else{

                    $btn .= '<a href= "'.route('categorystatuss',array($data->id,'active')).'" class="edit btn btn-success btn-sm">Active</a>';
                }

                if ($data->fetured_image== "0") {
                   // $btn .= '<a href= "'.route('categorystatus',$data->id,$data->status).'" class="edit btn btn-success btn-sm">InActive</a>';

                    $btn .= '<a href= "'.route('featuredimage', array($data->id,$data->news_id,'1')).'" class="edit btn btn-success btn-sm">featured</a>';

                }else{

                    $btn .= '<a href="javascript::void(0)" class="edit btn btn-success btn-sm">non featured</a>';
                }
                

                return $btn;
                
            })
            ->rawColumns(['action','serial_no'])
            ->editColumn('news_id',function($categorylist){
                return $categorylist->NewsCat->category_title;
            })
            ->make(true);

          }

          public function editnewcategoryList(Request $request,$id){

            $editdata= latest_new::where('id',$id)->first();
            $cat= NewsCategory::where('status','active')->pluck('category_title', 'id')->all();

            return view('Admin.editlatest' ,compact('editdata', 'cat'));

          }
    public function updatecategorylist(Request $request){


            $this->validate($request, [
            'news_id' => 'required',
            'img_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            // 'image' => 'required',
        ]); 

            $latestnews= latest_new::find($request->id);
            $latestnews->news_id = $request->news_id;
            $latestnews->img_title = $request->img_title;         
            $latestnews->short_description = $request->short_description;         
            $latestnews->long_description = $request->long_description;     

         if(isset($request['image'])){
            if($file = $request->hasFile('image'))
            {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName() ;

                $destinationPath = 'images' ;
                
                $imagePath = 'images/'.$fileName ;
                $oldImagePath=public_path($request['image']);
                @unlink($oldImagePath);
                $file->move($destinationPath,$fileName);
             }  
        } 

            if($request->hasFile('image'))
            {
                $latestnews->img_name = $imagePath;
            }

            $latestnews->save();   
            session()->flash('message','Data Inserted Successfully.');
            return redirect()->back();

           
    }

    public function deletecategoryss (Request $request,$id){

        $delete = latest_new::find($id)->delete();

        session()->flash('message','Data deleted Successfully.');
        return redirect()->back();


    }

    public function categorystatusss(Request $request,$id,$status){

        latest_new::find($id)->update(['status'=>$status]);
        session()->flash('message','status updated sucessfully');
        return back();
    }

    public function featuredimages(Request $request,$id,$news_id,$status){

        latest_new::where('news_id',$news_id)->update(['fetured_image'=>'0']);

        latest_new::find($id)->update(['fetured_image'=>$status]);


        // latestnews::find($id)->where('news_id',$news_id)

        session()->flash('message','featured updated sucessfully');
        return back();


    }



    public function trendingNewsForm(){

        return view('Admin.trendingnewsdetail');
    }

    public function trendingNewsSave(Request $request){
        $this->validate($request, [
            'img_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
            'date' => 'required',
            'image' => 'required',
        ]); 

        $Trendnews= new TrendingNews;
        $Trendnews->status = $request->status;
        $Trendnews->img_title = $request->img_title;         
        $Trendnews->short_description = $request->short_description;         
        $Trendnews->long_description = $request->long_description;
        $Trendnews->date = Carbon::parse($request['date'])->format('Y-m-d');

        if($file = $request->hasFile('image')) {

                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = 'images/Trendnews';
                $imagePath = 'images/Trendnews/'.$fileName ;

                $file->move($destinationPath,$fileName);
                $Trendnews->img_name = $imagePath ;
             }   

            $Trendnews->save();   
            session()->flash('message','Data Inserted Successfully.');
            return redirect()->back(); 
        }

        public function trendingNewsList(){

            return view('Admin.trendingnewslist');

        }

        public function trendingNewsListyajra(){

             $Trendnews = TrendingNews::get();

            return Datatables::of($Trendnews)
            ->addColumn('serial_no',function($data) {
                static $i=1;
                return $i++;
            })
            ->addColumn('action',function($data) {

                $btn = '<a href= "'.route('editTrendNews',$data->id).'"  class="edit btn btn-primary btn-sm">Edit</a>';
                $btn .= '<a href= "'.route('deleteTrendNews',$data->id).'" class="edit btn btn-danger btn-sm">delete</a>';

                if ($data->status== "active") {
                   // $btn .= '<a href= "'.route('categorystatus',$data->id,$data->status).'" class="edit btn btn-success btn-sm">InActive</a>';

                    $btn .= '<a href= "'.route('TrendStatus', array($data->id,'inactive')).'" class="edit btn btn-success btn-sm">Inactive</a>';

                }else{

                    $btn .= '<a href= "'.route('TrendStatus',array($data->id,'active')).'" class="edit btn btn-success btn-sm">Active</a>';
                }
                
                return $btn;
                
            })
            ->rawColumns(['action','serial_no'])
            ->make(true);

        }

        public function editTrendNewsform(Request $request,$id){

                $data['Trendnews'] = TrendingNews::where('id',$id)->first();
                $data['status']= TrendingNews::where('id',$id)->pluck('status','id');

                return view('Admin.editTrendNewsforms')->with($data);

        }

        public function trendNewsUpdate(Request $request,$id){

            $this->validate($request, [
            'img_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'date' => 'required',
        ]); 

            $trendNewsUpdate= TrendingNews::find($request->id);
            $trendNewsUpdate->date = $request->date;
            $trendNewsUpdate->img_title = $request->img_title;         
            $trendNewsUpdate->short_description = $request->short_description;         
            $trendNewsUpdate->long_description = $request->long_description;     

         if(isset($request['image'])){
            if($file = $request->hasFile('image'))
            {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName() ;

                $destinationPath = 'images/Trendnews' ;
                
                $imagePath = 'images/Trendnews/'.$fileName ;
                $oldImagePath=public_path($request['image']);
                @unlink($oldImagePath);
                $file->move($destinationPath,$fileName);
             }  
        } 

            if($request->hasFile('image'))
            {
                $trendNewsUpdate->img_name = $imagePath;
            }

            $trendNewsUpdate->save();   
            session()->flash('message','Data Inserted Successfully.');
            return redirect()->back();

        }


        public function deleteTrendNewss(Request $request,$id){

            $trendNewsUpdate= TrendingNews::find($request->id)->delete();
            session()->flash('message','Data deleted Successfully.');
            return redirect()->back();

        }

        public function trendStatuss(Request $request,$id,$status){

            TrendingNews::find($id)->update(['status'=>$status]);

             session()->flash('message','status updated Successfully.');
            return redirect()->back();


        }










}
