<?php
namespace App\Repositories\Company;
use App\Repositories\Company\CompanyContract;
use Sentinel;

use App\Company;

class EloquentCompanyRepository implements CompanyContract
{
	public function create($request){
	    $company = new Company;
	    $this->setCompanyProperties($company, $request);
	    $company->save();
	    return $company;
	}
	
	public function edit($companyId, $request){
	    $company = $this->findById($companyId);
	    $this->setCompanyProperties($company, $request);
	    $company->save();
	    return $company;
	}
	
	public function findById($companyId){
	    return Company::find($companyId);
	}
	
	public function findAll(){
	    return Company::all();
	}
	
	public function discard($companyId){
	    $company = $this->findById($companyId);
	    return $company->delete();
	}
	
	public function setCompanyProperties($company, $request){
	    $company->contact_name = $request->contact_name;
	    $company->contact_designation = $request->contact_designation;
	    $company->contact_mode_of_id = $request->contact_mode_of_id;
	    $company->contact_id_no = $request->contact_id_no;
	    $company->company_name = $request->company_name;
	    $company->date_of_incoporation = $request->date_of_incoporation;
	    $company->rc_no = $request->rc_no;
	    $company->tax_id_no = $request->tax_id_no;
	    $company->office_address = $request->office_address;
	    $company->factory_address = $request->factory_address;
	    $company->email = $request->email;
	    $company->phone_number = $request->phone_number;
	    $company->date_business_commenced = $request->date_business_commenced;
	    $company->business_history = $request->business_history;
	    $company->current_business = $request->current_business;
	    $company->date_commenced = $request->date_commenced;
	    $company->present_authorized_share_capital = $request->present_authorized_share_capital;
	    $company->present_paidup_share_capital = $request->present_paidup_share_capital;
	    $company->private_sector_membership = $request->private_sector_membership;
	    $company->yr1_turn_over = $request->yr1_turn_over;
	    $company->yr1_gross_profit = $request->yr1_gross_profit;
	    $company->yr1_profit_after_tax = $request->yr1_profit_after_tax;
	    $company->yr2_turn_over = $request->yr2_turn_over;
	    $company->yr2_gross_profit = $request->yr2_gross_profit;
	    $company->yr2_profit_after_tax = $request->yr2_profit_after_tax;
	    $company->yr3_turn_over = $request->yr3_turn_over;
	    $company->yr3_gross_profit = $request->yr3_gross_profit;
	    $company->yr3_profit_after_tax = $request->yr3_profit_after_tax;
	    $company->account_name = $request->account_name;
	    $company->account_number = $request->account_number;
	    $company->account_type = $request->account_type;
	    $company->sort_code = $request->sort_code;
	    $company->business_plan = $request->business_plan;
	    $company->date_prepared = $request->date_prepared;
	    $company->mobilization_of_funds = $request->mobilization_of_funds;
	    $company->date_prepared = $request->date_prepared;
	    
	    $destination = 'uploads/business_plans';
        $extension = $request->file('business_plan_path')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('business_plan_path')->move($destination, $fileName);
        $company->business_plan_path = '/'.$destination.'/'.$fileName;
        
        $user = Sentinel::getUser();
        $company->user_id = $user->id;

	}
}
