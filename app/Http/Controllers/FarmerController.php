<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Farmer\FarmerContract;
use Sentinel;
use DB;
class FarmerController extends Controller
{
		protected $repo;
		public function __construct(FarmerContract $farmerContract) {
				$this->repo = $farmerContract;
			}
	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index()
	    {
	    	$user = Sentinel::getUser();
	    	$farmers = $this->repo->findAll();
	    	$lgas = DB::table('lgas')->get();
	    	$states = DB::table('states')->get();
	    	// $a = null;
	    	// foreach($farmers as $farmer){
	    	// 	$a = $farmer->where('farmer->user_id', $user->id)->first();
	    	// }
	        return view('farmer.index')->with('user', $user)->with('farmers', $farmers)->with('lgas', $lgas)->with('states', $states);
	    }
	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function register()
	    {
	    	$lgas = DB::table('lgas')->get();
	    	$states = DB::table('states')->get();
	        return view('farmer.register')->with('lgas', $lgas)->with('states', $states);
	    }
	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
	    	
	        $this->validate($request, [
            	'state' => 'required',
            	'lga' => 'required',
            	'ward' => 'required',
            	'village' => 'required',
            	'bvn' => 'required',
            	'dob' => 'required',
            	'gender' => 'required',
            	'highest_education_lvl' => 'required',
            	'comp_literate' => 'required',
            	'need_training' => 'required',
            	'next_of_kin' => 'required',
            	'relationship'=> 'required',
            	'id_next_of_kin'=>'required',
            	'rc_no' => 'required',
            	'reg_date' => 'required',
            	'account_name' => 'required',
            	'account_number' => 'required',
            	'account_type' => 'required',
            	'corporate_name' => 'required',
            	'organisation' => 'required',
    			'longitude' => 'required',
    			'latitude' => 'required',
    			'altitude' => 'required',
    			'identity_presented' => 'required',
    			'id_number' => 'required',
    			'farmer_photo' => 'required',
    			'farmer_category' => 'required',
        	]);
        	
        	$farmerDetail = $this->repo->create($request);
				if ($farmerDetail->id) {
					return redirect()->back()
						->with('success', 'Farmer Detail successfully Created');
				} else {
					return back()
						->withInput()
						->with('error', 'Could not add Farmer Detail. Try again!');
				}
	    }
	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }
	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
	    }
	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }
	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
	    }
	    
	    public function allProducts(){
	    	
	    }
	    
}
