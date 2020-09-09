<?php


namespace App\Http\Controllers;


use App\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Test::latest()->paginate(5);
        return view('tests.index',compact('test'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('tests.create');
    }


     public function edit(Test $test)
    {
        return view('tests.edit',compact('test'));
    }
    public function store(Request $request)
    {
        request()->validate([
            't1' => 'required',
            't2' => 'required',
            't3' => 'required',
            't4' => 'required',
        ]);


        Test::create($request->all());


        return redirect()->route('tests.index')
                        ->with('success','Product created successfully.');
    }

     public function update(Request $request)
    {
         request()->validate([
            't1' => 'required',
            't2' => 'required',
            't3' => 'required',
            't4' => 'required',
        ]);


        $tes->update($request->all());


        return redirect()->route('tests.index')
                        ->with('success','Product updated successfully');
    }


 
   
}