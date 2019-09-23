<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent as agent;

use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    public function __construct( agent $agent )
    {
        $this->agent = $agent;
    }

    public function view_agents(Request $request)
    {
        $data=[];
        $data['agents']= $this->agent::all();
        
        $last_updated = $request->session()->has('last_updated') ? $request->session()->pull('last_updated') : 'none';

        $data['last_updated']= $last_updated;
        return view('agents/view_agents', $data);
    } 

    public function add_agents(Request $request)
    {
        if( $request->isMethod('post') )
        {
            $this->validate(
                $request,
                [
                    'name' => 'required|min:5',
                    'email' => 'required',
                    'phone' => 'required',
                    'password' => 'required',

                ]
            );
            $new_data = [];
            $new_data['name'] = $request->input('name');
            $new_data['email'] = $request->input('email');
            $new_data['phone'] = $request->input('phone');
            $new_data['password'] = $request->input('password');
            $result=$this->agent->insert( $new_data);
            if($result)
            {
                return redirect('add_agents');
            }
        }
       
        return view('agents/add_agents');
    }
    public function edit_agents(Request $request,$agent_id)
    { 
        $agent_data = $this->agent->find($agent_id);
        if( $request->isMethod('post') )
        {
          
            $agent_data ->name = $request->input('name');
            $agent_data ->email = $request->input('email');
            $agent_data ->phone = $request->input('phone');
            $agent_data ->password =$request->input('password');
        
            $updated = DB::table('agents')
                                        ->where('id',$agent_id)
                                        ->update(['name' => $agent_data ->name , 'email' => $agent_data ->email,'phone'=> $agent_data ->phone,'password'=> $agent_data ->password ]);
            $request->session()->put('last_updated',$agent_data ->name);                         
            if($updated)
                return redirect()->route('edit_agents_view',['agent_id'=>$agent_id]);

        }
       
        return view('agents/edit_agent',$agent_data);
    }
    public function delete_agents(Request $request,$agent_id)
    { 
        $agent_data=$this->agent->find($agent_id);
        $agent_data->delete();
        return redirect()->route('get_agents');
    }
    
    public function export()
    {
        $data = [];

        $data['agents'] = $this->agent->all();
        header('Content-Disposition: attachment;filename=export.xls');
        return view('agents/export', $data);
    }
}
