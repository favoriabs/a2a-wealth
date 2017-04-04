<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Repositories\Company\CompanyContract;
	class CompanyController extends Controller
	{
			protected $repo;
			public function __construct(CompanyContract $companyContract) {
				$this->repo = $companyContract;
			}
	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index()
	    {
	        return view('company.index');
	    }
	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        return view('admin.create-company');
	    }
	    
	    public function registerCompany(){
	    	return view('company.create');
	    }
	    public function store(Request $request)
	    {
	        $this->validate($request, [
        	'contact_name' => 'required',
        	'contact_designation' => 'required',
        	'contact_mode_of_id' => 'required',
        	'contact_id_no' => 'required',
        	'company_name' => 'required',
        	'date_of_incoporation' => 'required',
        	'rc_no' => 'required',
        	'tax_id_no' => 'required',
        	'email' => 'required',
        	'phone_number' => 'required',
        	'office_address' => 'required',
        	'business_history' => 'required',
        	'date_business_commenced' => 'required',
        	'current_business' => 'required',
        	'date_commenced' => 'required',
        	'present_authorized_share_capital' => 'required',
        	'present_paidup_share_capital' => 'required',
        	'private_sector_membership' => 'required',
        	'yr1_turn_over' => 'required',
        	'yr1_gross_profit' => 'required',
        	'yr1_profit_after_tax' => 'required',
        	'account_name' => 'required',
        	'account_type' => 'required',
        	'sort_code' => 'required',
       	]);

	    	$company = $this->repo->create($request);
			if ($company->id) {
				return redirect()->back()
					->with('success', 'Company successfully Created');
			} else {
				return back()
					->withInput()
					->with('error', 'Could not add Company. Try again!');
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
