<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Homecontent;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexe()
    {
        return view('home');
    }
    public function view_activity()
    {
// $menu=[];
// $menu['rows']=MenuCategory::all();
$home=[];
$home['row']=Homecontent::all();
// $submenu['rows']=MenuSubCategory::whereNotNull('menu_category_id');
// dd($submenu['rows']->menu_category_id);


        $data['rows'] = Activity::paginate(5);

        return  view('welcome',compact('data','home'));

    }
    private $model;

    public function __construct()
    {
        $this->model = new Homecontent();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.homecontent.index',compact('data'));
    }

    public function create(){

        return  view('backend.homecontent.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'homecontent_name' => 'required',
        //     'description' => 'required',
        // ]);

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
                $this->model->create($request->all());
                session()->flash('success_message','Data Inserted Successfully');
            }
            catch(\Exception $e){
                session()->flash('error_message','Something Went Wrong!!');
            }
        return redirect()->route('homecontent.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.homecontent.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.homecontent.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'homecontent_name' => 'required',
        //     'description' => 'required',
        // ]);

        try{
            $data['row'] = $this->model->find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('homecontent.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('homecontent.index');

    }
    public function view_details($id){
        $activity_details = [];

        $activity_details = Activity::where('id',$id)->first();
        return view('frontend.activitydescription',compact('activity_details'));

    }

}
