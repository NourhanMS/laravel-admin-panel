<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lead as lead;
use App\agent as agent;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    
    public function view_submitted_orders(lead $lead , agent $agent) 
    {
        $orders=DB::table('submitted_orders')->select('lead_id','agent_id')->get();
        $data=[];
        $data['order_leads']=[];
        $data['order_agents']=[];
        foreach($orders as $order)
        {
            $lead_data=$lead->find($order->lead_id);
            $agent_data= $agent->find($order->agent_id);
            array_push($data['order_leads'],$lead_data);
            array_push($data['order_agents'],$agent_data);
        }
        return view('orders/submitted_orders',$data);

    }
}
