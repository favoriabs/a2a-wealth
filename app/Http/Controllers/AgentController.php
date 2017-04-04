<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Agent\AgentContract;
class AgentController extends Controller
{
	protected $repo;
	public function __construct(AgentContract $agentContract) {
		$this->repo = $agentContract;
}
	    
	    
    public function index()
    {
        $farmers = $this->repo->findFarmers();
    	return view('agent.farmers_index')->with('farmers', $farmers);
    }
    
    
    public function create()
    {
        return view('farmer.create');
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
    	'first_name' => 'required',
    	'last_name' => 'required',
    	'email' => 'required',
    	'phone_number' => 'required',
    	'user_name' => 'required',
	]);

	$farmer = $this->repo->create($request);
	if ($farmer->id) {
		return redirect()->back()
			->with('success', 'Farmer successfully Created');
	} else {
		return back()
			->withInput()
			->with('error', 'Could not add Farmer. Try again!');
		}
    }
    
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        
    }
    
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
    	'first_name' => 'required',
    	'last_name' => 'required',
    	'email' => 'required',
    	'phone_number' => 'required',
    	'user_name' => 'required',
	]);

	$farmer = $this->repo->edit($request, $id);
	if ($farmer) {
		return redirect()->back()
			->with('success', 'Farmer successfully Updated');
	} else {
		return back()
			->withInput()
			->with('error', 'Could not Update Farmer. Try again!');
		}

    }
    
    public function remove($id)
    {
        $farmer = $this->repo->remove($id);
	    	if($farmer){
	    		return redirect()->back()
	    						->with('success', 'Farmer deleted successfully');
	    	}else{
	    		return back()
	    			->with('error', 'Could not delete this farmer. Try again');
	    	}
    }
}
