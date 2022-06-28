<?php

namespace App\Http\Controllers;

use App\Models\Infrastructure;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Infrastructure();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.infrastructure.index',compact('data'));
    }

    public function create(){

        return  view('backend.infrastructure.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'infrastructure_name' => 'required',
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
        return redirect()->route('infrastructure.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.infrastructure.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.infrastructure.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'infrastructure_name' => 'required',
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

        return redirect()->route('infrastructure.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('infrastructure.index');

    }
    public function show_data(){
        $infra=[];
        $infra['rows']=Infrastructure::all();
        return view('frontend.infrastructure',compact('infra'));
    }
}
