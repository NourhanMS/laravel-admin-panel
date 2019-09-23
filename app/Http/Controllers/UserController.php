<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lead as lead;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function get_admin_page(Request $request)
    {
        return view('users/admin');
    }
    public function get_agent_page(Request $request ,$agent_id,lead $lead)
    {
        $data=[];
        $data['agent_id']=$agent_id;
        $related_leads=DB::table('allocated_leads')
                        ->where('agent_id',$agent_id)
                        ->get();
        $data['leads_info']=[];
        foreach($related_leads as $lead_info)
        {
            $lead_full_info= $lead->find($lead_info->lead_id);
            array_push($data['leads_info'], $lead_full_info);

        }
     
        return view('users/agent',$data);
    }

    public function submit($agent_id,$lead_id)
    {
        $inserted= DB::table('submitted_orders')->insert(['agent_id'=> $agent_id,"lead_id"=>$lead_id]);
    
        if($inserted)
        { 
            $deleted=DB::delete("delete from allocated_leads where agent_id = ? and lead_id = ?",[$agent_id,$lead_id]);
              
        }
        return redirect()->route('agent',['agent_id'=>$agent_id]);

    }

}
