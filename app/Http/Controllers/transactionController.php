<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionReq;
use App\Models\tran;
use Illuminate\Http\Request;

class transactionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionReq $request)
    {
        tran::create($request->validated());
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fields = tran::latest('updated_at')->get();
        $data = compact('fields');
        return view('listTrans')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tran::find($id);
        return view('updateTrans',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = tran::find($request->id);
        $data->title=$request->title;
        $data->date=$request->date;
        $data->paid_by_to=$request->paid_by_to;
        $data->amount=$request->amount;
        $data->quantity=$request->quantity;
        $data->unit=$request->unit;
        $data->type=$request->type;
        $data->status=$request->status;
        $data->utr=$request->utr;
        $data->project=$request->project;
        $data->comment=$request->comment;
        $data->save();
        return redirect()->route('listTrans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=tran::find($id);
        $data->delete();
        return redirect()->route('listTrans');
    }
}
