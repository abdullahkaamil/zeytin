<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\ZeytinType;
use App\Plan;
use \DateTime;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('home');
    }

    public function save(Request $request){
        $inputs = $request->all();
        
        $data['plans'] = Plan::where('age', $inputs['age'] )->get();
        $data['bolge'] = $inputs['place'];
        $data['tree_type'] = $inputs['tree_type'];

        ZeytinType::insert(
                    [
                    'type' => $inputs['type'],
                    'user_id' => $inputs['user_id'],
                    'treeType' => $inputs['tree_type'] ,
                    'treeAge' => $inputs['age'] ,
                    'place' => $inputs['place'] ,
                    'altitude'=> $inputs['altitude'] ,
                    'created_at' =>  new DateTime()
                    ]
                );

        return view('plan' ,$data);
        
    }

    public function plans(){
        $user = Auth::user();   
            
        $treeage = ZeytinType::select('treeAge', 'place', 'treeType')->where('user_id','=', $user->id)->first()->toArray();
        $data['plans'] = Plan::where('age', $treeage['treeAge'] )->get();

        $data['bolge'] = $treeage['place'];
        $data['tree_type'] = $treeage['treeType'];

        // dd($data);

        return view('plan' ,$data);
    }
}
