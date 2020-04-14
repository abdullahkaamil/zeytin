<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZeytinType;
use \DateTime;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function save(Request $request){
        $inputs = $request->all();
        ZeytinType::insert(
                    [
                    'treeType' => $inputs['tree'] ,
                    'treeAge' => $inputs['age'] ,
                    'place' => $inputs['place'] ,
                    'city' => $inputs['city'] ,
                    'type' => $inputs['type'] ,
                    'altitude'=> $inputs['altitude'] ,
                    'created_at' =>  new DateTime()
                    ]
                );
        }
}
