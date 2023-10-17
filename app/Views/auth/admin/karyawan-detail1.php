<div id="smartwizard-2-step-1" class="card animated fadeIn tab-pane step-content mt-3" style="display: block;">
<div class="cards-body">
  <div class="card overflow-hidden">
    <div class="row no-gutters row-bordered row-border-light">
    
      <div class="col-md-3 pt-0">
        <div class="list-group list-group-flush account-settings-links">
          
          <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-basic_info"> <i class="lnr lnr-user text-lightest"></i> &nbsp; Profile</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-profile_picture"> <i class="lnr lnr-picture text-lightest"></i> &nbsp; Photo</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-immigration"> <i class="lnr lnr-rocket text-lightest"></i> &nbsp; immigrasi</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-contacts"> <i class="lnr lnr-phone-handset text-lightest"></i> &nbsp; kontak</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social"> <i class="lnr lnr-earth text-lightest"></i> &nbsp; social</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-document"> <i class="lnr lnr-file-add text-lightest"></i> &nbsp; dokumen</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-qualification"> <i class="lnr lnr-file-empty text-lightest"></i> &nbsp; kualifikasi</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-experience"> <i class="lnr lnr-hourglass text-lightest"></i> &nbsp; pengalaman kerja</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-baccount"> <i class="lnr lnr-apartment text-lightest"></i> &nbsp; bank</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-cpassword"> <i class="lnr lnr-lock text-lightest"></i> &nbsp; password</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-security_level"> <i class="lnr lnr-link text-lightest"></i> &nbsp; security level</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-contract"> <i class="lnr lnr-pencil text-lightest"></i> &nbsp; kontrak</a>
      
        </div>
      </div>

      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="account-basic_info">
            <div class="card-body media align-items-center">
              <img src="<?php echo base_url().'file_upload/photo/'.$photo;?>" class="d-block ui-w-80" id="u_file">
                <div class="text-light  mt-1"><?php echo $nama;?></div>
            </div>
          </div>
            <hr class="border-light m-0">
            <div class="card-body">
              <?php $attributes = array('name' => 'basic_info', 'id' => 'basic_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('user_id' => $user_id, 'u_basic_info' => 'UPDATE');?>
              <?php echo form_open_multipart('admin/employees/basic_info', $attributes, $hidden);?>
              <div class="bg-white">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first_name"><?php echo $this->lang->line('xin_employee_first_name');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_employee_first_name');?>" name="first_name" type="text" value="<?php echo $first_name;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last_name" class="control-label"><?php echo $this->lang->line('xin_employee_last_name');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_employee_last_name');?>" name="last_name" type="text" value="<?php echo $last_name;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employee_id"><?php echo $this->lang->line('dashboard_employee_id');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('dashboard_employee_id');?>" name="employee_id" type="text" value="<?php echo $employee_id;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="username"><?php echo $this->lang->line('dashboard_username');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('dashboard_username');?>" name="username" type="text" value="<?php echo $username;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email" class="control-label"><?php echo $this->lang->line('dashboard_email');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('dashboard_email');?>" name="email" type="text" value="<?php echo $email;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php if($user_info[0]->user_role_id==1){ ?>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="first_name"><?php echo $this->lang->line('left_company');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="company_id" id="aj_company" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('left_company');?>">
                        <option value=""></option>
                        <?php foreach($get_all_companies as $company) {?>
                        <option value="<?php echo $company->company_id?>" <?php if($company_id==$company->company_id):?> selected="selected"<?php endif;?>><?php echo $company->name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php } else {?>
                  <?php $ecompany_id = $user_info[0]->company_id;?>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="first_name"><?php echo $this->lang->line('left_company');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="company_id" id="aj_company" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('left_company');?>">
                        <option value=""></option>
                        <?php foreach($get_all_companies as $company) {?>
                        <?php if($ecompany_id == $company->company_id):?>
                        <option value="<?php echo $company->company_id?>" <?php if($company_id==$company->company_id):?> selected="selected"<?php endif;?>><?php echo $company->name?></option>
                        <?php endif; ?>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php } ?>
                  <?php $colmd=4;
        if($system[0]->is_active_sub_departments=='yes'){
          $colmd=4;
          $is_id= 'aj_subdepartments';
        } else {
          $colmd=4;
          $is_id= 'is_aj_subdepartments';
        }?>
                  <?php //$eall_departments = $this->Company_model->ajax_company_departments_info($company_id);?>
                  <?php $el_result = $this->Department_model->ajax_company_location_information($company_id);?>
                  <?php $eall_departments = $this->Department_model->ajax_location_departments_information($location_id);?>
                  <div class="col-md-4" id="location_ajax">
                    <div class="form-group">
                      <label for="name"><?php echo $this->lang->line('left_location');?><i class="hrsale-asterisk">*</i></label>
                      <select name="location_id" id="location_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('left_location');?>">
                        <?php foreach($el_result as $location) {?>
                        <option value="<?php echo $location->location_id?>" <?php if($location_id == $location->location_id):?> selected="selected"<?php endif;?>><?php echo $location->location_name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-<?php echo $colmd;?>">
                    <div class="form-group" id="department_ajax">
                      <label for="department"><?php echo $this->lang->line('xin_employee_department');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="department_id" id="<?php echo $is_id;?>" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_department');?>">
                        <option value=""></option>
                        <?php foreach($eall_departments as $department) {?>
                        <option value="<?php echo $department->department_id?>" <?php if($department_id==$department->department_id):?> selected <?php endif;?>><?php echo $department->department_name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <?php if($system[0]->is_active_sub_departments=='yes'){?>
                <?php $eall_designations = $this->Designation_model->ajax_designation_information($sub_department_id);?>
                <?php } else {?>
                <?php $eall_designations = $this->Designation_model->ajax_is_designation_information($department_id);?>
                <?php } ?>
                <div class="row">
                  <?php $colmd=3; if($system[0]->is_active_sub_departments=='yes'){ $ncolmd = 3; } else { $ncolmd = 4;}?>
                  <?php if($system[0]->is_active_sub_departments=='yes'){?>
                  <div class="col-md-<?php echo $ncolmd;?>" id="subdepartment_ajax">
                    <?php $depid = $eresult[0]->department_id; ?>
                    <?php if(!isset($depid)): $depid = 1; else: $depid = $depid; endif;?>
                    <?php $subresult = get_sub_departments($depid);?>
                    <div class="form-group">
                      <label for="designation"><?php echo $this->lang->line('xin_hr_sub_department');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="subdepartment_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_department');?>" id="aj_subdepartment">
                        <option value=""></option>
                        <?php foreach($subresult as $sbdeparment) {?>
                        <option value="<?php echo $sbdeparment->sub_department_id;?>" <?php if($sub_department_id==$sbdeparment->sub_department_id):?> selected <?php endif;?>><?php echo $sbdeparment->department_name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php } else {?>
                  <input type="hidden" name="subdepartment_id" value="0" />
                  <?php } ?>
                  <div class="col-md-<?php echo $ncolmd;?>">
                    <div class="form-group" id="designation_ajax">
                      <label for="designation"><?php echo $this->lang->line('xin_designation');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="designation_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_designation');?>">
                        <option value=""></option>
                        <?php foreach($eall_designations as $designation) {?>
                        <option value="<?php echo $designation->designation_id?>" <?php if($designation_id==$designation->designation_id):?> selected <?php endif;?>><?php echo $designation->designation_name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-<?php echo $ncolmd;?>">
                    <div class="form-group">
                      <label for="date_of_joining" class="control-label"><?php echo $this->lang->line('xin_employee_doj');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control date" readonly placeholder="<?php echo $this->lang->line('xin_employee_doj');?>" name="date_of_joining" type="text" value="<?php echo $date_of_joining;?>">
                    </div>
                  </div>
                  <div class="col-md-<?php echo $ncolmd;?>">
                    <div class="form-group">
                      <label for="date_of_leaving" class="control-label"><?php echo $this->lang->line('xin_employee_dol');?></label>
                      <input class="form-control date" readonly placeholder="<?php echo $this->lang->line('xin_employee_dol');?>" name="date_of_leaving" type="text" value="<?php echo $date_of_leaving;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="role"><?php echo $this->lang->line('xin_employee_role');?><i class="hrsale-asterisk">*</i></label>
                      <select class="form-control" name="role" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_role');?>">
                        <option value=""></option>
                        <?php foreach($all_user_roles as $role) {?>
                        <?php if($user_info[0]->user_role_id==1){?>
                        <option value="<?php echo $role->role_id?>" <?php if($user_role_id==$role->role_id):?> selected <?php endif;?>><?php echo $role->role_name?></option>
                        <?php } else {?>
                        <?php if($role->role_id!=1){?>
                        <option value="<?php echo $role->role_id?>" <?php if($user_role_id==$role->role_id):?> selected <?php endif;?>><?php echo $role->role_name?></option>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gender" class="control-label"><?php echo $this->lang->line('xin_employee_gender');?></label>
                      <select class="form-control" name="gender" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_gender');?>">
                        <option value="Male" <?php if($gender=='Male'):?> selected <?php endif; ?>>Male</option>
                        <option value="Female" <?php if($gender=='Female'):?> selected <?php endif; ?>>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="marital_status" class="control-label"><?php echo $this->lang->line('xin_employee_mstatus');?></label>
                      <select class="form-control" name="marital_status" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_mstatus');?>">
                        <option value="Single" <?php if($marital_status=='Single'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_status_single');?></option>
                        <option value="Married" <?php if($marital_status=='Married'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_status_married');?></option>
                        <option value="Widowed" <?php if($marital_status=='Widowed'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_status_widowed');?></option>
                        <option value="Divorced or Separated" <?php if($marital_status=='Divorced or Separated'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_status_divorced_separated');?></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_no" class="control-label"><?php echo $this->lang->line('xin_contact_number');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_contact_number');?>" name="contact_no" type="text" value="<?php echo $contact_no;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status" class="control-label"><?php echo $this->lang->line('dashboard_xin_status');?></label>
                      <select class="form-control" name="status" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('dashboard_xin_status');?>">
                        <option value="0" <?php if($is_active=='0'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_employees_inactive');?></option>
                        <option value="1" <?php if($is_active=='1'):?> selected <?php endif; ?>><?php echo $this->lang->line('xin_employees_active');?></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" id="ajax_office_shift">
                      <?php $e_office_shifts = $this->Employees_model->ajax_company_officeshift_information($company_id);?>
                      <label for="office_shift_id" class="control-label"><?php echo $this->lang->line('xin_employee_office_shift');?></label>
                      <select class="form-control" name="office_shift_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_employee_office_shift');?>">
                        <?php foreach($e_office_shifts as $shift) {?>
                        <option value="<?php echo $shift->office_shift_id?>" <?php if($office_shift_id == $shift->office_shift_id):?> selected="selected" <?php endif; ?>><?php echo $shift->shift_name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date_of_birth"><?php echo $this->lang->line('xin_employee_dob');?><i class="hrsale-asterisk">*</i></label>
                      <input class="form-control date" readonly placeholder="<?php echo $this->lang->line('xin_employee_dob');?>" name="date_of_birth" type="text" value="<?php echo $date_of_birth;?>">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="xin_hr_leave_cat"><?php echo $this->lang->line('xin_hr_leave_cat');?></label>
                      <input type="hidden" name="leave_categories[]" value="0" />
                      <select multiple="multiple" class="form-control" name="leave_categories[]" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_hr_leave_cat');?>">
                        <?php foreach($all_leave_types as $leave_type) {?>
                        <option value="<?php echo $leave_type->leave_type_id?>" <?php if(isset($_GET)) { if(in_array($leave_type->leave_type_id,$leave_categories_ids)):?> selected <?php endif; }?>><?php echo $leave_type->type_name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="reports_to"><?php echo $this->lang->line('xin_reports_to');?></label>
                      <select name="reports_to" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_reports_to');?>">
                        <option value=""></option>
                        <?php foreach(get_reports_to() as $reports_to) {?>
                        <option value="<?php echo $reports_to->user_id?>" <?php if($reports_to->user_id==$ereports_to):?> selected="selected"<?php endif;?>><?php echo $reports_to->first_name.' '.$reports_to->last_name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="hidden" value="0" name="view_companies_id[]" />
                      <label for="first_name"><?php echo $this->lang->line('xin_view_companies_data');?></label>
                      <select multiple="multiple" class="form-control" name="view_companies_id[]" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_view_companies_data');?>">
                        <option value=""></option>
                        <?php foreach($get_all_companies as $company) {?>
                        <option value="<?php echo $company->company_id?>" <?php if(isset($_GET)) { if(in_array($company->company_id,$view_companies_ids)):?> selected <?php endif; }?>><?php echo $company->name?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="estate"><?php echo $this->lang->line('xin_state');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_state');?>" name="estate" type="text" value="<?php echo $state;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="ecity"><?php echo $this->lang->line('xin_city');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_city');?>" name="ecity" type="text" value="<?php echo $city;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="ezipcode" class="control-label"><?php echo $this->lang->line('xin_zipcode');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_zipcode');?>" name="ezipcode" type="text" value="<?php echo $zipcode;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php $ethnicity_type = $this->Xin_model->get_ethnicity_type();?>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email" class="control-label"><?php echo $this->lang->line('xin_ethnicity_type_title');?></label>
                      <select class="form-control" name="ethnicity_type" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_ethnicity_type_title');?>">
                        <option value=""></option>
                        <?php foreach($ethnicity_type->result() as $itype) {?>
                        <option value="<?php echo $itype->ethnicity_type_id?>" <?php if($itype->ethnicity_type_id==$iethnicity_type):?> selected="selected"<?php endif;?>><?php echo $itype->type?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="address"><?php echo $this->lang->line('xin_employee_address');?></label>
                      <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('xin_employee_address');?>" name="address" value="<?php echo $address;?>" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="blood_group"><?php echo $this->lang->line('xin_blood_group');?></label>
                      <select class="form-control" name="blood_group" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_blood_group');?>">
                        <option value=""></option>
                        <option value="A+" <?php if($blood_group == 'A+'):?> selected="selected"<?php endif;?>>A+</option>
                        <option value="A-" <?php if($blood_group == 'A-'):?> selected="selected"<?php endif;?>>A-</option>
                        <option value="B+" <?php if($blood_group == 'B+'):?> selected="selected"<?php endif;?>>B+</option>
                        <option value="B-" <?php if($blood_group == 'B-'):?> selected="selected"<?php endif;?>>B-</option>
                        <option value="AB+" <?php if($blood_group == 'AB+'):?> selected="selected"<?php endif;?>>AB+</option>
                        <option value="AB-" <?php if($blood_group == 'AB-'):?> selected="selected"<?php endif;?>>AB-</option>
                        <option value="O+" <?php if($blood_group == 'O+'):?> selected="selected"<?php endif;?>>O+</option>
                        <option value="O-" <?php if($blood_group == 'O-'):?> selected="selected"<?php endif;?>>O-</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nationality_id"><?php echo $this->lang->line('xin_nationality');?></label>
                      <select class="form-control" name="nationality_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_nationality');?>">
                        <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                        <?php foreach($all_countries as $country) {?>
                        <option value="<?php echo $country->country_id;?>" <?php if($country->country_id == $nationality_id):?> selected="selected"<?php endif;?>> <?php echo $country->country_name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="citizenship_id" class="control-label"><?php echo $this->lang->line('xin_citizenship');?></label>
                      <select class="form-control" name="citizenship_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_citizenship');?>">
                        <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                        <?php foreach($all_countries as $country) {?>
                        <option value="<?php echo $country->country_id;?>" <?php if($country->country_id == $citizenship_id):?> selected="selected"<?php endif;?>> <?php echo $country->country_name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <?php $module_attributes = $this->Custom_fields_model->all_hrsale_module_attributes();?>
              <div class="row">
                <?php foreach($module_attributes as $mattribute):?>
                <?php $attribute_info = $this->Custom_fields_model->get_employee_custom_data($user_id,$mattribute->custom_field_id);?>
                <?php
        if(!is_null($attribute_info)){
          $attr_val = $attribute_info->attribute_value;
        } else {
          $attr_val = '';
        }
      ?>
                <?php if($mattribute->attribute_type == 'date'){?>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?></label>
                    <input class="form-control date" placeholder="<?php echo $mattribute->attribute_label;?>" name="<?php echo $mattribute->attribute;?>" type="text" value="<?php echo $attr_val;?>">
                  </div>
                </div>
                <?php } else if($mattribute->attribute_type == 'select'){?>
                <div class="col-md-4">
                  <?php $iselc_val = $this->Custom_fields_model->get_attribute_selection_values($mattribute->custom_field_id);?>
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?></label>
                    <select class="form-control" name="<?php echo $mattribute->attribute;?>" data-plugin="select_hrm" data-placeholder="<?php echo $mattribute->attribute_label;?>">
                      <?php foreach($iselc_val as $selc_val) {?>
                      <option value="<?php echo $selc_val->attributes_select_value_id?>" <?php if(isset($attribute_info->attribute_value)) {if($attribute_info->attribute_value==$selc_val->attributes_select_value_id):?> selected="selected"<?php endif; }?>><?php echo $selc_val->select_label?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <?php } else if($mattribute->attribute_type == 'multiselect'){?>
                <?php $multiselect_values = explode(',',$attribute_info->attribute_value);?>
                <div class="col-md-4">
                  <?php $imulti_selc_val = $this->Custom_fields_model->get_attribute_selection_values($mattribute->custom_field_id);?>
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?></label>
                    <select multiple="multiple" class="form-control" name="<?php echo $mattribute->attribute;?>[]" data-plugin="select_hrm" data-placeholder="<?php echo $mattribute->attribute_label;?>">
                      <?php foreach($imulti_selc_val as $multi_selc_val) {?>
                      <option value="<?php echo $multi_selc_val->attributes_select_value_id?>" <?php if(in_array($multi_selc_val->attributes_select_value_id,$multiselect_values)):?> selected <?php endif;?>><?php echo $multi_selc_val->select_label?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <?php } else if($mattribute->attribute_type == 'textarea'){?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?></label>
                    <input class="form-control" placeholder="<?php echo $mattribute->attribute_label;?>" name="<?php echo $mattribute->attribute;?>" type="text" value="<?php echo $attr_val;?>">
                  </div>
                </div>
                <?php } else if($mattribute->attribute_type == 'fileupload'){?>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?>
                      <?php if($attr_val!=''):?>
                      <a href="<?php echo site_url('admin/download');?>?type=custom_files&filename=<?php echo $attr_val;?>"><?php echo $this->lang->line('xin_download');?></a>
                      <?php endif;?>
                    </label>
                    <input class="form-control-file" name="<?php echo $mattribute->attribute;?>" type="file">
                  </div>
                </div>
                <?php } else { ?>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="<?php echo $mattribute->attribute;?>"><?php echo $mattribute->attribute_label;?></label>
                    <input class="form-control" placeholder="<?php echo $mattribute->attribute_label;?>" name="<?php echo $mattribute->attribute;?>" type="text" value="<?php echo $attr_val;?>">
                  </div>
                </div>
                <?php }	?>
                <?php endforeach;?>
              </div>
              <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-profile_picture">
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'profile_picture', 'id' => 'f_profile_picture', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_profile_picture' => 'UPDATE');?>
              <?php echo form_open_multipart('admin/employees/profile_picture', $attributes, $hidden);?>
              <?php
      $data_usr = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'id'    => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr);
    ?>
              <?php
      $data_usr = array(
        'type'  => 'hidden',
        'name'  => 'session_id',
        'id'    => 'session_id',
        'value' => $session['user_id'],
      );
    echo form_input($data_usr);
    ?>
              <div class="bg-white">
                <div class="row">
                  <div class="col-md-12">
                    <div class='form-group'>
                      <fieldset class="form-group">
                        <label for="logo"><?php echo $this->lang->line('xin_browse');?><i class="hrsale-asterisk">*</i></label>
                        <input type="file" class="form-control-file" id="p_file" name="p_file">
                        <small><?php echo $this->lang->line('xin_e_details_picture_type');?></small>
                      </fieldset>
                      <?php if($profile_picture!='' && $profile_picture!='no file') {?>
                      <img src="<?php echo base_url().'uploads/profile/'.$profile_picture;?>" width="50px" style="margin-left:20px;" id="u_file">
                      <?php } else {?>
                      <?php if($gender=='Male') { ?>
                      <?php $de_file = base_url().'uploads/profile/default_male.jpg';?>
                      <?php } else { ?>
                      <?php $de_file = base_url().'uploads/profile/default_female.jpg';?>
                      <?php } ?>
                      <img src="<?php echo $de_file;?>" width="50px" style="margin-left:20px;" id="u_file">
                      <?php } ?>
                      <?php if($profile_picture!='' && $profile_picture!='no file') {?>
                      <br />
                      <label>
                        <input type="checkbox" class="minimal" value="1" id="remove_profile_picture" name="remove_profile_picture">
                        <?php echo $this->lang->line('xin_e_details_remove_pic');?></span> </label>
                      <?php } else {?>
                      <div id="remove_file" style="display:none;">
                        <label>
                          <input type="checkbox" class="minimal" value="1" id="remove_profile_picture" name="remove_profile_picture">
                          <?php echo $this->lang->line('xin_e_details_remove_pic');?></span> </label>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="form-action box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-immigration">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong><?php echo $this->lang->line('xin_assigned_immigration');?></strong> <?php echo $this->lang->line('xin_records');?></span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_imgdocument" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_document');?></th>
                        <th><?php echo $this->lang->line('xin_issue_date');?></th>
                        <th><?php echo $this->lang->line('xin_expiry_date');?></th>
                        <th><?php echo $this->lang->line('xin_issued_by');?></th>
                        <th><?php echo $this->lang->line('xin_eligible_review_date');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong><?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_employee_immigration');?></span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'immigration_info', 'id' => 'immigration_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('user_id' => $user_id, 'u_document_info' => 'UPDATE');?>
              <?php echo form_open_multipart('admin/employees/immigration_info', $attributes, $hidden);?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="relation"><?php echo $this->lang->line('xin_e_details_document');?><i class="hrsale-asterisk">*</i></label>
                    <select name="document_type_id" id="document_type_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_e_details_choose_dtype');?>">
                      <option value=""></option>
                      <?php foreach($all_document_types as $document_type) {?>
                      <option value="<?php echo $document_type->document_type_id;?>"> <?php echo $document_type->document_type;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="document_number" class="control-label"><?php echo $this->lang->line('xin_employee_document_number');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_employee_document_number');?>" name="document_number" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="issue_date" class="control-label"><?php echo $this->lang->line('xin_issue_date');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control date" readonly="readonly" placeholder="Issue Date" name="issue_date" type="text">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="expiry_date" class="control-label"><?php echo $this->lang->line('xin_e_details_doe');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('xin_e_details_doe');?>" name="expiry_date" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset class="form-group">
                      <label for="logo"><?php echo $this->lang->line('xin_e_details_document_file');?><i class="hrsale-asterisk">*</i></label>
                      <input type="file" class="form-control-file" id="p_file2" name="document_file">
                      <small><?php echo $this->lang->line('xin_e_details_d_type_file');?></small>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="eligible_review_date" class="control-label"><?php echo $this->lang->line('xin_eligible_review_date');?></label>
                    <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('xin_eligible_review_date');?>" name="eligible_review_date" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="send_mail"><?php echo $this->lang->line('xin_country');?></label>
                    <select class="form-control" name="country" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_country');?>">
                      <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                      <?php foreach($all_countries as $scountry) {?>
                      <option value="<?php echo $scountry->country_id;?>"> <?php echo $scountry->country_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-contacts">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_contacts');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_contact" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_employees_full_name');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_relation');?></th>
                        <th><?php echo $this->lang->line('dashboard_email');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_mobile');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_contact');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'contact_info', 'id' => 'contact_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'ADD');?>
              <?php echo form_open('admin/employees/contact_info', $attributes, $hidden);?>
              <?php
      $data_usr1 = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'id'    => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr1);
    ?>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="relation"><?php echo $this->lang->line('xin_e_details_relation');?><i class="hrsale-asterisk">*</i></label>
                    <select class="form-control" name="relation" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_select_one');?>">
                      <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                      <option value="Self"><?php echo $this->lang->line('xin_self');?></option>
                      <option value="Parent"><?php echo $this->lang->line('xin_parent');?></option>
                      <option value="Spouse"><?php echo $this->lang->line('xin_spouse');?></option>
                      <option value="Child"><?php echo $this->lang->line('xin_child');?></option>
                      <option value="Sibling"><?php echo $this->lang->line('xin_sibling');?></option>
                      <option value="In Laws"><?php echo $this->lang->line('xin_in_laws');?></option>
                    </select>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="work_email" class="control-label"><?php echo $this->lang->line('dashboard_email');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_work');?>" name="work_email" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="is_primary" value="1" name="is_primary">
                          <span class="custom-control-label"><?php echo $this->lang->line('xin_e_details_pcontact');?></span> </label>
                      </div></div>
                      <div class="col-md-6">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="is_dependent" value="2" name="is_dependent">
                          <span class="custom-control-label"><?php echo $this->lang->line('xin_e_details_dependent');?></span> </label>
                      </div>
                    
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_personal');?>" name="personal_email" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="name" class="control-label"><?php echo $this->lang->line('xin_name');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_name');?>" name="contact_name" type="text">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group" id="designation_ajax">
                    <label for="address_1" class="control-label"><?php echo $this->lang->line('xin_address');?></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_address_1');?>" name="address_1" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="work_phone"><?php echo $this->lang->line('xin_phone');?><i class="hrsale-asterisk">*</i></label>
                    <div class="row">
                      <div class="col-md-8">
                        <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_work');?>" name="work_phone" type="text">
                      </div>
                      <div class="col-md-4">
                        <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_phone_ext');?>" name="work_phone_extension" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_address_2');?>" name="address_2" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_mobile');?>" name="mobile_phone" type="text">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-5">
                        <input class="form-control" placeholder="<?php echo $this->lang->line('xin_city');?>" name="city" type="text">
                      </div>
                      <div class="col-md-4">
                        <input class="form-control" placeholder="<?php echo $this->lang->line('xin_state');?>" name="state" type="text">
                      </div>
                      <div class="col-md-3">
                        <input class="form-control" placeholder="<?php echo $this->lang->line('xin_zipcode');?>" name="zipcode" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_home');?>" name="home_phone" type="text">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <select name="country" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_country');?>">
                      <option value=""></option>
                      <?php foreach($all_countries as $country) {?>
                      <option value="<?php echo $country->country_id;?>"> <?php echo $country->country_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-social">
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'social_networking', 'id' => 'f_social_networking', 'autocomplete' => 'off');?>
              <?php $hidden = array('user_id' => $user_id, 'u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/social_info', $attributes, $hidden);?>
              <div class="bg-white">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="facebook_profile"><?php echo $this->lang->line('xin_e_details_fb_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_fb_profile');?>" name="facebook_link" type="text" value="<?php echo $facebook_link;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="facebook_profile"><?php echo $this->lang->line('xin_e_details_twit_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_twit_profile');?>" name="twitter_link" type="text" value="<?php echo $twitter_link;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="twitter_profile"><?php echo $this->lang->line('xin_e_details_blogr_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_blogr_profile');?>" name="blogger_link" type="text" value="<?php echo $blogger_link;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="blogger_profile"><?php echo $this->lang->line('xin_e_details_linkd_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_linkd_profile');?>" name="linkdedin_link" type="text" value="<?php echo $linkdedin_link;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="blogger_profile"><?php echo $this->lang->line('xin_e_details_gplus_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_gplus_profile');?>" name="google_plus_link" type="text" value="<?php echo $google_plus_link;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="linkdedin_profile"><?php echo $this->lang->line('xin_e_details_insta_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_insta_profile');?>" name="instagram_link" type="text" value="<?php echo $instagram_link;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="linkdedin_profile"><?php echo $this->lang->line('xin_e_details_pintrst_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_pintrst_profile');?>" name="pinterest_link" type="text" value="<?php echo $pinterest_link;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="linkdedin_profile"><?php echo $this->lang->line('xin_e_details_utube_profile');?></label>
                      <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_utube_profile');?>" name="youtube_link" type="text" value="<?php echo $youtube_link;?>">
                    </div>
                  </div>
                </div>
                <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-qualification">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_qualification');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_qualification" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_inst_name');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_timeperiod');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_edu_level');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_qualification');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'qualification_info', 'id' => 'qualification_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/qualification_info', $attributes, $hidden);?>
              <?php
      $data_usr3 = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr3);
    ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name"><?php echo $this->lang->line('xin_e_details_inst_name');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_inst_name');?>" name="name" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="education_level" class="control-label"><?php echo $this->lang->line('xin_e_details_edu_level');?></label>
                    <select class="form-control" name="education_level" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_e_details_edu_level');?>">
                      <?php foreach($all_education_level as $education_level) {?>
                      <option value="<?php echo $education_level->education_level_id?>"><?php echo $education_level->name?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="from_year" class="control-label"><?php echo $this->lang->line('xin_e_details_timeperiod');?><i class="hrsale-asterisk">*</i></label>
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('xin_e_details_from');?>" name="from_year" type="text">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('dashboard_to');?>" name="to_year" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="language" class="control-label"><?php echo $this->lang->line('xin_e_details_authority');?></label>
                    <select class="form-control" name="language" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_e_details_authority');?>">
                      <?php foreach($all_qualification_language as $qualification_language) {?>
                      <option value="<?php echo $qualification_language->language_id?>"><?php echo $qualification_language->name?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="skill" class="control-label"><?php echo $this->lang->line('xin_e_details_skill');?></label>
                    <select class="form-control" name="skill" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_e_details_skill');?>">
                      <option value=""></option>
                      <?php foreach($all_qualification_skill as $qualification_skill) {?>
                      <option value="<?php echo $qualification_skill->skill_id?>"><?php echo $qualification_skill->name?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="to_year" class="control-label"><?php echo $this->lang->line('xin_description');?></label>
                    <textarea class="form-control" placeholder="<?php echo $this->lang->line('xin_description');?>" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="d_description"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-experience">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_w_experience');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_work_experience" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_company_name');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_frm_date');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_to_date');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_post');?></th>
                        <th><?php echo $this->lang->line('xin_description');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_w_experience');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'work_experience_info', 'id' => 'work_experience_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/work_experience_info', $attributes, $hidden);?>
              <?php
        $data_usr4 = array(
          'type'  => 'hidden',
          'name'  => 'user_id',
          'value' => $user_id,
        );
      echo form_input($data_usr4);
      ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company_name"><?php echo $this->lang->line('xin_company_name');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_company_name');?>" name="company_name" type="text" value="" id="company_name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="post"><?php echo $this->lang->line('xin_e_details_post');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_post');?>" name="post" type="text" value="" id="post">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="from_year" class="control-label"><?php echo $this->lang->line('xin_e_details_timeperiod');?><i class="hrsale-asterisk">*</i></label>
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('xin_e_details_from');?>" name="from_date" type="text">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('dashboard_to');?>" name="to_date" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description"><?php echo $this->lang->line('xin_description');?></label>
                    <textarea class="form-control" placeholder="<?php echo $this->lang->line('xin_description');?>" data-show-counter="1" data-limit="300" name="description" cols="30" rows="4" id="description"></textarea>
                    <span class="countdown"></span> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-document">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_documents');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_document" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_dtype');?></th>
                        <th><?php echo $this->lang->line('dashboard_xin_title');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_doe');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_document');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'document_info', 'id' => 'document_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_document_info' => 'UPDATE');?>
              <?php echo form_open_multipart('admin/employees/document_info', $attributes, $hidden);?>
              <?php
      $data_usr2 = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr2);
    ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="relation"><?php echo $this->lang->line('xin_e_details_dtype');?><i class="hrsale-asterisk">*</i></label>
                    <select name="document_type_id" id="document_type_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_e_details_choose_dtype');?>">
                      <option value=""></option>
                      <?php foreach($all_document_types as $document_type) {?>
                      <option value="<?php echo $document_type->document_type_id;?>"> <?php echo $document_type->document_type;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date_of_expiry" class="control-label"><?php echo $this->lang->line('xin_e_details_doe');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control date" readonly placeholder="<?php echo $this->lang->line('xin_e_details_doe');?>" name="date_of_expiry" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="title" class="control-label"><?php echo $this->lang->line('xin_e_details_dtitle');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_dtitle');?>" name="title" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="description" class="control-label"><?php echo $this->lang->line('xin_description');?></label>
                    <textarea class="form-control" placeholder="<?php echo $this->lang->line('xin_description');?>" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="d_description"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset class="form-group">
                      <label for="logo"><?php echo $this->lang->line('xin_e_details_document_file');?></label>
                      <input type="file" class="form-control-file" id="document_file" name="document_file">
                      <small><?php echo $this->lang->line('xin_e_details_d_type_file');?></small>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-baccount">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_baccount');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_bank_account" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_acc_title');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_acc_number');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_bank_name');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_bank_code');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_bank_branch');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_baccount');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'bank_account_info', 'id' => 'bank_account_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/bank_account_info', $attributes, $hidden);?>
              <?php
      $data_usr4 = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr4);
    ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="account_title"><?php echo $this->lang->line('xin_e_details_acc_title');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_acc_title');?>" name="account_title" type="text" value="" id="account_name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="account_number"><?php echo $this->lang->line('xin_e_details_acc_number');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_acc_number');?>" name="account_number" type="text" value="" id="account_number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bank_name"><?php echo $this->lang->line('xin_e_details_bank_name');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_bank_name');?>" name="bank_name" type="text" value="" id="bank_name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bank_code"><?php echo $this->lang->line('xin_e_details_bank_code');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_bank_code');?>" name="bank_code" type="text" value="" id="bank_code">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bank_branch"><?php echo $this->lang->line('xin_e_details_bank_branch');?></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_bank_branch');?>" name="bank_branch" type="text" value="" id="bank_branch">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-cpassword">
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'e_change_password', 'id' => 'e_change_password', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/change_password', $attributes, $hidden);?>
              <?php
      $data_usr5 = array(
        'type'  => 'hidden',
        'name'  => 'user_id',
        'value' => $user_id,
      );
    echo form_input($data_usr5);
    ?>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="old_password"><?php echo $this->lang->line('xin_old_password');?></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_old_password');?>" name="old_password" type="password">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="new_password"><?php echo $this->lang->line('xin_e_details_enpassword');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_enpassword');?>" name="new_password" type="password">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="new_password_confirm" class="control-label"><?php echo $this->lang->line('xin_e_details_ecnpassword');?><i class="hrsale-asterisk">*</i></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_ecnpassword');?>" name="new_password_confirm" type="password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-security_level">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_esecurity_level_title');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_security_level" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_esecurity_level_title');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_doe');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_do_clearance');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_esecurity_level_title');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'security_level_info', 'id' => 'security_level_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/add_security_level', $attributes, $hidden);?>
              <?php
      $data_usr4 = array(
      'type'  => 'hidden',
      'name'  => 'user_id',
      'value' => $user_id,
      );
    echo form_input($data_usr4);
    ?>
              <?php $security_level_list = $this->Xin_model->get_security_level_type();?>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="account_title"><?php echo $this->lang->line('xin_esecurity_level_title');?><i class="hrsale-asterisk">*</i></label>
                    <select class="form-control" name="security_level" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_esecurity_level_title');?>">
                      <option value=""><?php echo $this->lang->line('xin_esecurity_level_title');?></option>
                      <?php foreach($security_level_list->result() as $sc_level) {?>
                      <option value="<?php echo $sc_level->type_id?>"><?php echo $sc_level->name?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="account_number"><?php echo $this->lang->line('xin_e_details_doe');?></label>
                    <input class="form-control date" placeholder="<?php echo $this->lang->line('xin_e_details_doe');?>" name="expiry_date" type="text" value="" id="expiry_date">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="account_number"><?php echo $this->lang->line('xin_e_details_do_clearance');?></label>
                    <input class="form-control date" placeholder="<?php echo $this->lang->line('xin_e_details_do_clearance');?>" name="date_of_clearance" type="text" value="" id="date_of_clearance">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
          <div class="tab-pane fade" id="account-contract">
            <div class="box">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_list_all');?></strong> <?php echo $this->lang->line('xin_e_details_contracts');?> </span> </div>
              <div class="card-body">
                <div class="box-datatable table-responsive">
                  <table class="table table-striped table-bordered dataTable" id="xin_table_contract" style="width:100%;">
                    <thead>
                      <tr>
                        <th><?php echo $this->lang->line('xin_action');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_duration');?></th>
                        <th><?php echo $this->lang->line('dashboard_designation');?></th>
                        <th><?php echo $this->lang->line('xin_e_details_contract_type');?></th>
                        <th><?php echo $this->lang->line('dashboard_xin_title');?></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-header with-elements"> <span class="card-header-title mr-2"> <strong> <?php echo $this->lang->line('xin_add_new');?></strong> <?php echo $this->lang->line('xin_e_details_contract');?> </span> </div>
            <div class="card-body pb-2">
              <?php $attributes = array('name' => 'contract_info', 'id' => 'contract_info', 'autocomplete' => 'off');?>
              <?php $hidden = array('u_basic_info' => 'UPDATE');?>
              <?php echo form_open('admin/employees/contract_info', $attributes, $hidden);?>
              <?php
      $data_usr4 = array(
      'type'  => 'hidden',
      'name'  => 'user_id',
      'value' => $user_id,
      );
    echo form_input($data_usr4);
    ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contract_type_id" class=""><?php echo $this->lang->line('xin_e_details_contract_type');?></label>
                    <select class="form-control" name="contract_type_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_select_one');?>">
                      <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                      <?php foreach($all_contract_types as $contract_type) {?>
                      <option value="<?php echo $contract_type->contract_type_id;?>"> <?php echo $contract_type->name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="" for="from_date"><?php echo $this->lang->line('xin_e_details_frm_date');?></label>
                    <input type="text" class="form-control date" name="from_date" placeholder="<?php echo $this->lang->line('xin_e_details_frm_date');?>" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="designation_id" class=""><?php echo $this->lang->line('dashboard_designation');?></label>
                    <select class="form-control" name="designation_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_select_one');?>">
                      <option value=""><?php echo $this->lang->line('xin_select_one');?></option>
                      <?php foreach($all_designations as $designation) {?>
                      <?php if($designation_id==$designation->designation_id):?>
                      <option value="<?php echo $designation->designation_id?>" <?php if($designation_id==$designation->designation_id):?> selected <?php endif;?>><?php echo $designation->designation_name?></option>
                      <?php endif;?>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title" class=""><?php echo $this->lang->line('xin_e_details_contract_title');?></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('xin_e_details_contract_title');?>" name="title" type="text" value="" id="title">
                  </div>
                  <div class="form-group">
                    <label for="to_date"><?php echo $this->lang->line('xin_e_details_to_date');?></label>
                    <input type="text" class="form-control date" name="to_date" placeholder="<?php echo $this->lang->line('xin_e_details_to_date');?>" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="description"><?php echo $this->lang->line('xin_description');?></label>
                    <textarea class="form-control" placeholder="<?php echo $this->lang->line('xin_description');?>" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="description"></textarea>
                    <span class="countdown"></span> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-actions box-footer"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => $this->Xin_model->form_button_class(), 'content' => '<i class="fas fa-check-square"></i> '.$this->lang->line('xin_save'))); ?> </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
