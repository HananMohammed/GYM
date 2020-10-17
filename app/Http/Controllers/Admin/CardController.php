<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CardRequest;
use App\Models\Admin\IconFont;
use App\Models\Admin\WhyChooseUs;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;

class CardController extends Controller
{
    use StoreTrait ,UpdateTrait;
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
         $cards = WhyChooseUs::all() ;

         return view('admin.about.cards.index' , compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        $card = new WhyChooseUs();

        $icons = IconFont::all();

        return view('admin.about.cards.create' , compact('card' ,'icons'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CardRequest  $request
     * @return redirect
     */
    public function store(CardRequest $request)
    {
        $model = new WhyChooseUs() ;

        $this->storeData($request , $model );

        return redirect(route('admin.cards.index'))->with('success' ,'Card Saved Successfully') ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param WhyChooseUs $card
     * @return view
     */
    public function edit(WhyChooseUs $card)
    {
        $icons = IconFont::all();

        return view('admin.about.cards.edit' , compact('card' ,'icons'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CardRequest $request
     * @param  WhyChooseUs $card
     * @return Response
     */
    public function update(CardRequest $request, WhyChooseUs $card)
    {
         $this->updateData($request , $card);

        return redirect(route('admin.cards.index'))->with('success' ,'Card Updated Successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WhyChooseUs  $card
     * @return back
     */
    public function destroy(WhyChooseUs $card)
    {
         $card->delete();
        return redirect(route('admin.cards.index'))->with('success' ,'Card Deleted Successfully') ;

    }
}
