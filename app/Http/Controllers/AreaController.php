<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaRequest;
use App\Models\EstablishmentArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     dd($request);
    //     try {

    //         if ($request->has('term')) {
    //             $areas = EstablishmentArea::where('name', 'LIKE', "%$request->term%")

    //                 ->get();
    //         }
    //         return $areas;
    //     } catch (\Throwable $th) {
    //         return response()->json([
    //             'success' => false,
    //             'mensaje' => $th->getMessage(),
    //         ]);
    //     }

    // }
    public function index(Request $request)
    {

       $term = trim($request->q);
       if(empty($term)){
           return \Response::json([]);
       }

       $tags=Tag::EstablishmentArea($term)->get();
       $formatted_tags=[];
       foreach($tags as $tags){
        $formatted_tags[]= ['id'=>$tag->id,'text'=>$tag->name];
       }
       return \Response::json( $formatted_tags);
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
    public function store(AreaRequest $request)
    {
        try {
            $area = new EstablishmentArea();
            $area->name = $request->name;
            $area->user_created_at = Auth::user()->id;
            $area->save();
            return redirect()->route('index_areas')->with('success', 'Se ha registrado una nueva area');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
            // return back()->with('error', 'Contacte al administrador');
        }
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
        //
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
    public function search()
    {

    }

}
