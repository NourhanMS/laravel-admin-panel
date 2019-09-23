<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lead as lead;
use App\agent as agent;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function view_leads(Request $request ,lead $lead)
    {
        $data=[];
        $data['leads']= $lead::all();

        return view('leads/view_leads', $data);
    } 
    public function allocate_leads(Request $request ,lead $lead,agent $agent)
    {
        $data=[];
        if( $request->isMethod('post') )
        {
            $new_data = [];
            $agent_id= $request->input('agent_id');
            $number_records = $request->input('number');

        
            //select n leads  from un allocated leads ordered by name
            $n_leads= $lead->where('allocated', 0)
                            ->orderBy('added_on', 'asc')
                            ->take($number_records)
                            ->get();
            //insert them as allocated leads , and update their case 
            foreach($n_leads as $lead_member)
            {
                 $lead_id=$lead_member->id;

                 $updated = DB::table('allocated_leads')
                                             ->insert(['lead_id' => $lead_id ,'agent_id'=>$agent_id]);

                 DB::table('leads')
                 ->where('id', $lead_member->id)
                 ->update(['allocated' => 1]);
                
            }

            $data['allocated']=1;

        }
        else
        {
            $data['allocated']=0;
        }
   
        $non_allocated= $lead->where('allocated', 0)->get();
        $data['non_allocated_number']=sizeof($non_allocated);
        $data['agents']=$agent->all();
       
       
        return view('leads/allocate_leads',$data);
    }
      
}
