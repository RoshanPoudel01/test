<?php

namespace App\Http\Controllers;

use App\Models\Digitalhealthplatform;
use Illuminate\Http\Request;

class DigitalhealthplatformController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Digitalhealthplatform();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.digitalhealthplatform.index',compact('data'));
    }

    public function create(){

        return  view('backend.digitalhealthplatform.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'digitalhealthplatform_name' => 'required',
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
        return redirect()->route('digitalhealthplatform.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalhealthplatform.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalhealthplatform.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'digitalhealthplatform_name' => 'required',
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

        return redirect()->route('digitalhealthplatform.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('digitalhealthplatform.index');

    }
    public function show_data(){
        $infra=[];
        $infra['rows']=Digitalhealthplatform::all();
        return view('frontend.appandservice',compact('infra'));
    }
}
