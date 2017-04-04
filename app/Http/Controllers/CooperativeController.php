<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Cooperative\CooperativeContract;

class CooperativeController extends Controller
{
	protected $repo;
	
	public function __construct(CooperativeContract $cooperativeContract) {
		$this->repo = $cooperativeContract;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$farmers = $this->repo->findFarmers();
        return view('cooperative.index')->with('farmers', $farmers);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmer.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// dd($request->all());
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
}
