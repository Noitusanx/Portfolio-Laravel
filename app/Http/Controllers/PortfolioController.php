<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.portfolio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $project = $request->input('project');
        $message = $request->input('message');

        Portfolio::create([
            'name' => $name,
            'email' => $email,
            'project' => $project,
            'message' => $message,
        ]);

        return redirect('portfolio');
    }

    public function testimonial()
    {
        $testimonial = DB::table('testimonials')
            ->select('name', 'testimonial', 'rate')
            ->get();
        return view('portfolio.portfolio', compact('testimonial'));
    }

    public function storeRate(Request $request)
    {
        $name = $request->input('name');
        $testimonial = $request->input('testimonial');
        $rate = $request->input('rate');


        Testimonial::create([
            'name' => $name,
            'testimonial' => $testimonial,
            'rate' => $rate,
        ]);
        return redirect('portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
}