<?php
namespace App\Repositories\Farmer;
use App\Repositories\Farmer\FarmerContract;
use App\Farmer;
use Session;

class EloquentFarmerRepository implements FarmerContract
{
	public function create($request){
	    $farmer = new Farmer;
	    $this->setFarmerProperties($request, $farmer);
	    $farmer->save();
	    return $farmer;
	}
	
	public function edit($request, $farmerid){
	    $farmer = $this->findById($farmerid);
	    $this->setFarmerProperties($request, $farmer);
	    $farmer->save();
	    return $farmer;
	}
	
	public function findById($farmerid){
	    return Farmer::find($farmerid);
	}
	
	public function findAll(){
	    return Farmer::all();
	}
	
	public function remove($farmerid){
	    $farmer = $this->findById($farmerid);
	    return $farmer->delete();
	}
	
	public function setFarmerProperties($request, $farmer){
	    $farmer->state = $request->state;
	    $farmer->lga = $request->lga;
	    $farmer->ward = $request->ward;
	    $farmer->village = $request->village;
	    $farmer->bvn = $request->bvn;
	    $farmer->dob = $request->dob;
	    $farmer->gender = $request->gender;
	    $farmer->highest_education_lvl = $request->highest_education_lvl;
	    $farmer->comp_literate = $request->comp_literate;
	    $farmer->need_training = $request->need_training;
	    $farmer->next_of_kin = $request->next_of_kin;
	    $farmer->rc_no = $request->rc_no;
	    $farmer->reg_date = $request->reg_date;
	    $farmer->account_name = $request->account_name;
	    $farmer->account_number = $request->account_number;
	    $farmer->account_type = $request->account_type;
	    $farmer->farmer_category = $request->farmer_category;
	    $farmer->farm_size = $request->farm_size;
	    //corporate name = cac biz
	    $farmer->corporate_name = $request->corporate_name;
	    $farmer->relationship = $request->relationship;
	    $farmer->id_next_of_kin = $request->id_next_of_kin;
	    $farmer->ownership = $request->ownership;
	    $farmer->land_reg = $request->land_reg;
	    $farmer->contact_add = $request->contact_add;
	    $farmer->reg_authority = $request->reg_authority;
	    $farmer->organisation = $request->organisation;
	    $farmer->id_number = $request->id_number;
	    $farmer->longitude = $request->longitude;
	    $farmer->latitude = $request->latitude;
	    $farmer->altitude = $request->altitude;
	    $farmer->crop_packages = $request->crop_packages;
	    $farmer->non_crop_packages = $request->non_crop_packages;
	    $farmer->factory_location = $request->factory_location;
	    $farmer->product_type = $request->product_type;
	    $farmer->mode_of_storage = $request->mode_of_storage;
	    $farmer->area_of_coverage = $request->area_of_coverage;
	    $farmer->mode_of_registration = $request->mode_of_registration;
	    $farmer->input_types = $request->input_types;
	    $farmer->mode_of_transporation = $request->mode_of_transporation;
	    $farmer->equipment = $request->equipment;
	    $farmer->area_of_operation = $request->area_of_operation;
	    $farmer->cooperative_name = $request->cooperative_name;
	    $farmer->status = $request->status;
	    $farmer->coop_reg_number = $request->coop_reg_number;
	    $farmer->cooperative_reg_date = $request->cooperative_reg_date;
	    $farmer->agency = $request->agency;
	    $farmer->contact_person = $request->contact_person;
	    $farmer->contact_number = $request->contact_number;
	    $farmer->cooperative_address = $request->cooperative_address;
	    $farmer->fertilization = $request->fertilization;
	    
		//webcam
	    /*$binary_data = base64_decode($request->farmer_pix);
	    $fileName = rand(1111111, 9999999).'.'.'png';
	    $result = file_put_contents( './uploads/photo/' .$fileName, $binary_data );
        $farmer->farmer_webcam_path = $fileName;*/
        //ID
        $destination = 'uploads/IDs';
        $extension = $request->file('identity_presented')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('identity_presented')->move($destination, $fileName);
        $farmer->id_presented_path = '/'.$destination.'/'.$fileName;
        
        $destination = 'uploads/photo';
        $extension = $request->file('farmer_photo')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('farmer_photo')->move($destination, $fileName);
        $farmer->farmer_scan_path = '/'.$destination.'/'.$fileName;
        
	    $userId = Session::get('currentUserId');
	    
	    $farmer->user_id = $userId;
	    
	}
}
