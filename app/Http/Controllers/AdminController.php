<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Repositories\Admin\AdminContract;
	use Sentinel;
	class AdminController extends Controller
	{
			protected $repo;
			public function __construct(AdminContract $adminContract) {
				$this->repo = $adminContract;
			}
	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index() {
	        
        	
        	// $users = $this->repo->findAll();
        	return view('admin.index');
	    }
	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        return view('cooperative.create');
	    }
	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request) {
	    	// dd($request->all());
	    	
	    	$this->validate($request, [
            	'first_name' => 'required',
            	'last_name' => 'required',
            	'email' => 'required',
        	]);
        	try {
            	$admin = $this->repo->create($request);
        		
            	if ($admin->id) {
             
            		return redirect()->back()
                	->with('success', 'Cooperative successfully added');
            	} else {
                	return back()
                    ->withInput()
                    ->with('error', 'Could not add Cooperative. Try again!');
            	}
        	
        		
        	} catch (QueryException $e) {
            	if ($e->errorInfo[1] == 1062) {
                	return back()
                    ->withInput()
                    ->with('error', 'User exists!');
            	}
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
