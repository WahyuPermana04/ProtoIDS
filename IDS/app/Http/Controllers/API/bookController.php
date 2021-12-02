<?php

namespace App\Http\Controllers\API;

use App\books;
use App\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = books::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data',
            'data'    => $book  
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $book = new books;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->save();

        return response()->json([
            "messange" => "Book record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = books::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data',
            'data'    => $book 
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // $validator = Validator::make($request->all(), [
        //     'name'   => 'required',
        //     'author' => 'required'
        // ]);
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }
        $books = books::findOrfail($id);
        if($books){
            $books->update([
                'name' => $request->name,
                'author' => $request->author
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Data Updated',
                'data' => $books
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found To Updated',
                
            ],404);
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
        $book = books::findOrfail($id);
        if($book){
            $book->delete();
            return response()->json([
                'success' => true,
                'message' => 'Book Deleted',
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Book Not Found To Destroy',
                
            ],404);
        }
    }
}
