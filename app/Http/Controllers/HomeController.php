<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Users;
use App\Traits\DataSets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use DataSets;
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
    	$cat = $this->getCategories();
    	return view('welcome')->with(['cat' => $cat]);
    }

    public function postAdForm(Request $request)
    {
        $cat = $this->getCategories();
        $arr = [];
        switch ($request->query('cat2')) {
            case 'Cars':
                $arr = $this->getCarModels();
                break;
            case 'Motorcycles':
                $arr = $this->getBikeModels();
                break;
            case 'Scooters':
                $arr = $this->getScooterModels();
                break;
        }
        $models = $arr?$arr[str_replace('|and|', '&', $request->query('cat3'))]:[];
    	return view('adpostform')->with([
            'cat' => $cat, 
            'cat1' => str_replace('|and|', '&', $request->query('cat1')),
            'cat2' => str_replace('|and|', '&', $request->query('cat2')),
            'cat3' => str_replace('|and|', '&', $request->query('cat3')),
            'title' => str_replace('|and|', '&', $request->query('title')),
            'models' => $models??[]
        ]);
    }

}
