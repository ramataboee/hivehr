<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="home">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Form Stuff</span>
                </li>
            </ul>

        </div>
        <!-- END PAGE BAR -->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="m-heading-1 border-green m-bordered">
                    <h3>FACILITY HIV Care (pre- ART) REGISTER</h3>
                    <p> lorem ispam. </p>
                    <p> lorem ispan
                        <a class="btn red btn-outline" href="http://example.com" target="_blank">the official documentation</a>
                    </p>
                </div>
                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                            <span class="caption-subject font-red bold uppercase">
                                <span class="step-title"> Step 1 of 4 </span>
                            </span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!--<form class="form-horizontal" action="#" id="submit_form" method="POST">-->
                        <?php
                            $attributes = array('class'=>'form-horizontal','id'=>'submit_form');
                            echo form_open('patients/register_preart',$attributes);
                        ?>
                            <div class="form-wizard">
                                <div class="form-body">
                                    <ul class="nav nav-pills nav-justified steps">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number"> 1 </span>
                                                <span class="desc">
                                                    <i class="fa fa-check"></i> Personal Details </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number"> 2 </span>
                                                <span class="desc">
                                                    <i class="fa fa-check"></i> Additional Information </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                <span class="number"> 3 </span>
                                                <span class="desc">
                                                    <i class="fa fa-check"></i> Clinic Stage </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab" class="step">
                                                <span class="number"> 4 </span>
                                                <span class="desc">
                                                    <i class="fa fa-check"></i> Confirm Details </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"> </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Provide Patient Filing Details</h3>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Enrolment Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="p_hivcare_enrolment" />
                                                    <span class="help-block"> Provide Date enrolled in chronic HIV Care</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Clinic
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="clinic_id">
                                                      <?php

                                                        foreach($clinic as $clinic_item):

                                                      echo"<option value='".$clinic_item['id']."'>".$clinic_item['name']."</option>";

                                                        endforeach;
                                                      ?>
                                                    </select>
                                                    <span class="help-block"> Provide Patient's clinic </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="p_name" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Surname
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="p_surname" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="p_dob"  />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="p_age" />

                                                </div>
                                            </div>
                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label" for="form_control_1">Gender</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-list">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_gen1" name="p_gender" value="Male" class="md-radiobtn">
                                                            <label for="checkbox1_gen1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Male </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_gen2" name="p_gender" value="Female" class="md-radiobtn">
                                                            <label for="checkbox1_gen2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Female </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label" for="form_control_1">Marital Status
                                                  <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-list">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_s1" name="p_marital_status" value="Single" class="md-radiobtn">
                                                            <label for="checkbox1_s1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Single</label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_s2" name="p_marital_status" value="Married" class="md-radiobtn">
                                                            <label for="checkbox1_s2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Married </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_s3" name="p_marital_status" value="Divorced" class="md-radiobtn">
                                                            <label for="checkbox1_s3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Divorced </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_s4" name="p_marital_status" value="Separated" class="md-radiobtn">
                                                            <label for="checkbox1_s4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Separated </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_s5" name="p_marital_status" value="Widowed" class="md-radiobtn">
                                                            <label for="checkbox1_s5">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Widowed </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Physical Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="p_address" />
                                                    <span class="help-block"> Where Patient Lives </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Phone Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="p_phone" />
                                                    <span class="help-block">e.g. 5700000 . Do not enter +266 or leave any spaces </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Confirmed HIV+ Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="p_hivdate" />
                                                    <span class="help-block"> Provide date test was positive for HIV</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">Isonicotinylhydrazide(INH) - If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Start Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="inh_start" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Stop Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="inh_stop" />

                                                </div>
                                            </div>
                                            <h3 class="block">cotrimoxazole (CTX) - If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Start Date

                                                </label>
                                                <div class="col-md-4">
                                                  <input type="date" class="form-control" name="ctx_start">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Stop Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="ctx_stop" />

                                                </div>
                                            </div>
                                            <h3 class="block"> Fluconazole (FCA) - If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Start Date

                                                </label>
                                                <div class="col-md-4">
                                                  <input type="date" class="form-control" name="fca_start">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Stop Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="fca_stop" />

                                                </div>
                                            </div>
                                            <h3 class="block"> TB Rx - If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Start Date

                                                </label>
                                                <div class="col-md-4">
                                                  <input type="date" class="form-control" name="tb_start">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Stop Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="tb_stop" />

                                                </div>
                                            </div>
                                            <h3 class="block"> Pregnancy - If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Pregnancy Due Date

                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="pregnancy" />
                                                    <span class="help-block"> or PMTCT Link </span>
                                                </div>
                                            </div>
                                            <h3 class="block">If patient is DEAD before starting ART -  If Applicable</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Dead Date
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="dead_date" />
                                                </div>
                                            </div>
                                            <h3 class="block">LOST or TO (Transfer Out) -  If Applicable</h3>
                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label" for="form_control_1">LOST or TO</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-list">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_lost1" name="lost_to" value="LOST" class="md-radiobtn">
                                                            <label for="checkbox1_lost1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> LOST </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_lost2" name="lost_to" value="TO" class="md-radiobtn">
                                                            <label for="checkbox1_lost2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> TO </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">LOST or TO Date
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="lost_to_date" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <h3 class="block">Clinical Stage at Registration</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Clinical Stage
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                  <select class="form-control"name="registration_clinical_stage">
                                                    <option></option>
                                                    <option value="1">Stage 1</option>
                                                    <option value="2">Stage 2</option>
                                                    <option value="3">Stage 3</option>
                                                    <option value="4">Stage 4</option>
                                                  </select>

                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="registration_clinical_stage_date" />
                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <h3 class="block">Confirm data collected</h3>
                                            <h4 class="form-section">Personal Information</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Name:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Surname:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_surname"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Gender:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_gender"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Age:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_age"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date Of Birth:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_dob"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Marital Status:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_marital_status"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Address:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Phone Number:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_phone"> </p>
                                                </div>
                                            </div>
                                            <h4 class="form-section">HIV Status Information</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Confirmed HIV+ date:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_hivdate"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Chronic HIV Enrollment date:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="p_hivcare_enrolment"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Clinical Stage:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="registration_clinical_stage"> </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="javascript:;" class="btn default button-previous">
                                                <i class="fa fa-angle-left"></i> Back </a>
                                            <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <button type="submit"  class="btn green"> Submit
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
