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

                return redirect('planlar')->with("success", "Planınız Kayıt Edilmistir..");
        
    }

    public function plans(){
        $user = Auth::user();   
        $data['plans'] = [];
        $data['bolges'] = []; 
        $data['tree_types'] = []; 

        $treeages = ZeytinType::select('id','treeAge', 'place', 'treeType')->where('user_id','=', $user->id)->get()->toArray();

        if(!empty($treeages)){
            foreach($treeages as $key => $treeage){
                $data['plans'][] = Plan::where('age', $treeage['treeAge'] )->get();
                $data['bolges'][] = $treeage['place'];
                $data['tree_types'][]= $treeage['treeType'];
                $data['id'][]= $treeage['id'];
            }
        }
        

        return view('plan' ,$data);
    }

    public function sil($id){
        $zeytin = ZeytinType::destroy($id);
        if ($zeytin){
            return redirect('planlar')->with("danger", "Plan kaldırıldı..");
        }
    }
}
