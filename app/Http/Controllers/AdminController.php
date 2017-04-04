<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Admin\AdminContract;
use App\Repositories\Cooperative\CooperativeContract;
use App\Repositories\Company\CompanyContract;
use Sentinel;
use DB;

class AdminController extends Controller
	{
			protected $repo;
			protected $coopRepo;
			protected $compRepo;
			
			public function __construct(AdminContract $adminContract, CooperativeContract $coopContract, CompanyContract $companyContract) {
				$this->repo = $adminContract;
				$this->coopRepo = $coopContract;
				$this->compRepo = $companyContract;
			}
	    
	    
	    public function index() {
	    	$cooperatives = $this->repo->findCooperatives();
	    	$coops = $this->coopRepo->findAll();
	    	
	    	$states = DB::table('states')->get();
	    	$lgas = DB::table('lgas')->get();
        	return view('admin.index')->with('cooperatives', $cooperatives)
        							  ->with('coops', $coops)
        							  ->with('states', $states)
        							  ->with('lgas', $lgas);
	    }
	    
	    public function allAgents(){
	    	$agents = $this->repo->findAgents();
	    	return view('agent.index')->with('agents', $agents);
	    }
	   
	   
	    public function create()
	    {	
	    	$lgas = DB::table('lgas')->get();
	    	$states = DB::table('states')->get();
	        return view('cooperative.create')->with('lgas', $lgas)->with('states', $states);
	    }
	    
	    public function ajaxCall(Request $request)
	    {
	    	$state = DB::table('states')->where('id', $request->state)->first();
	        $lgas = DB::table("lgas")
	                    ->where("state_id",$state->id)->get();
	        return $lgas;
	    }

		public function createAgent()
	    {	
	        return view('agent.create');
	    }
	    
	    public function store(Request $request) {
	    	
	    	$this->validate($request, [
            	'user_name' => 'required',
            	'phone_number' => 'required',
            	'email' => 'required',
            	'state' => 'required',
            	'lga' => 'required',
        	]);
        	$cooperative = $this->repo->create($request);
				if ($cooperative->id) {
					return redirect()->back()
						->with('success', 'Cooperative successfully Created');
					} else {
						return back()
							->withInput()
							->with('error', 'Could not add Cooperative. Try again!');
							}
	    }
	    
	    public function storeAgent(Request $request) {
	    	
	    	$this->validate($request, [
            	'user_name' => 'required',
            	'phone_number' => 'required',
            	'email' => 'required',
            	'first_name' => 'required',
            	'last_name' => 'required',
        	]);
        	$agent = $this->repo->createAgent($request);
				if ($agent->id) {
					return redirect()->back()
						->with('success', 'Agent successfully Created');
					} else {
						return back()
							->withInput()
							->with('error', 'Could not add Agent. Try again!');
							}
	    }
	    
	    
	    public function storeCompany(Request $request){
	    	$this->validate($request, [
	    		'user_name' => 'required',
	    		'phone_number' => 'required',
	    		'email' => 'required',
	    		]);
	    		
	    		$company = $this->repo->createCompany($request);
	    			if($company->id) {
	    				return redirect()->back()
	    							->with('success', 'Company successfully created');
	    			}else {
	    				return back()
	    						->withInput()
	    						->with('error', 'Could not add the Company. Try again');
	    			}
	    }
	   
	 
	    public function showCompanies()
	    {
	        $companies = $this->repo->findCompanies();
	        $comps = $this->compRepo->findAll();
	        return view('admin.companies')->with('companies', $companies)->with('comps', $comps);
	    }
	   
	    public function editCooperative(Request $request, $id)
	    {
	        $this->validate($request, [
            	'user_name' => 'required',
            	'phone_number' => 'required',
            	'email' => 'required',
        	]);
        	$cooperative = $this->repo->editCooperative($request, $id);
        	if($cooperative) {
	    				return redirect()->back()
	    							->with('success', 'Cooperative successfully updated');
	    			}else {
	    				return back()
	    						->withInput()
	    						->with('error', 'Could not edit the Cooperative. Try again');
	    			}
	    }
	    
	    public function editCompany(Request $request, $id){
	    	$this->validate($request, [
            	'user_name' => 'required',
            	'phone_number' => 'required',
            	'email' => 'required',
        	]);
        	
        	$company = $this->repo->editCompany($request, $id);
        	if($company) {
	    				return redirect()->back()
	    							->with('success', 'Company successfully updated');
	    			}else {
	    				return back()
	    						->withInput()
	    						->with('error', 'Could not edit the Company. Try again');
	    			}
	    }
	   
	   
	    public function editAgent(Request $request, $id)
	    {
	        $this->validate($request, [
            	'user_name' => 'required',
            	'phone_number' => 'required',
            	'email' => 'required',
            	'first_name' => 'required',
            	'last_name' => 'required',
        	]);
        	$agent = $this->repo->editAgent($request, $id);
        	if($agent) {
	    		return redirect()->back()
	    				->with('success', 'Agent Credentials successfully updated');
	    		}else {
	    		return back()
	    				->withInput()
	    				->with('error', 'Could not edit the Agent. Try again');
	    		}
        	
	    }


	    public function remove($id)
	    {
	    	$cooperative = $this->repo->remove($id);
	    	if($cooperative){
	    		return redirect()->back()
	    						->with('success', 'Cooperative deleted successfully');
	    	}else{
	    		return back()
	    					->with('error', 'Could not delete this cooperative. Try again');
	    	}
	    }
	    
	    public function deleteAgent($id)
	    {
	    	$agent = $this->repo->remove($id);
	    	if($agent){
	    		return redirect()->back()
	    						->with('success', 'Agent deleted successfully');
	    	}else{
	    		return back()
	    					->with('error', 'Could not delete this agent. Try again');
	    	}
	    }
	}
