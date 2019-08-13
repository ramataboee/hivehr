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
                                    <a href="home">Pre-ART</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Move to ART</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="m-heading-1 border-green m-bordered">
                                    <h3>Register <?php echo $fname; ?> In ART</h3>
                                    <p>
                                      Fill out required information to move patient into art
                                    </p>

                                </div>
                                <div class="portlet light bordered" id="form_wizard_1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red bold uppercase"> ART Register 1 -
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

                                        <?php
                                          $attributes = array('class'=>'form-horizontal','id'=>'submit_form');
                                          echo form_open('Patients/art_register',$attributes);
                                        ?>
                                            <div class="form-wizard">
                                                <div class="form-body">
                                                    <ul class="nav nav-pills nav-justified steps">
                                                        <li>
                                                            <a href="#tab1" data-toggle="tab" class="step">
                                                                <span class="number"> 1 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Registration information </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number"> 2 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Status at ART start  </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                                <span class="number"> 3 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Aditional Information </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" data-toggle="tab" class="step">
                                                                <span class="number"> 4 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> 1st Line Regime </span>
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
                                                            <h3 class="block">Provide Registration information</h3>
                                                            <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">ART Start Date
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="date" class="form-control" name="artstartdate" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Why Eligible
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="why" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Care of Entry
                                                                  <span class="required"> * </span>
                                                                </label>
                                                                <div class="mt-checkbox-inline col-md-6">
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox1" name="careofentry[]" value="pmtct"> PMTCT
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox2" name="careofentry[]" value="medical"> Medical
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="under5"> Under 5
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="tb">TB
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="sti">STI
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="inpatient">InPatient
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="self_refer">Self-refer
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="cbo">CBO
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="outpatient">OutPatient
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="outreach">Outreach
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="careofentry[]" value="other">Other
                                                                        <span></span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <h3 class="block">Status at ART start</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Weight
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="weight" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Height
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="height" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Functional Status
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="functional" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Clinical Stage
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                     <select class="bs-select form-control" name="clinicalstage">
                                                                        <option value="Stage_1">Stage 1</option>
                                                                        <option value="Stage_2">Stage 2</option>
                                                                        <option value="Stage_3">Stage 3</option>
                                                                        <option value="Stage_4">Stage 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">CD4
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="cd4" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Status of Enrolment
                                                                  <span class="required"> * </span>
                                                                </label>
                                                                <div class="mt-checkbox-inline col-md-6">
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox1" name="statusofenrol[]" value="pmtct"> Pregnant
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox2" name="statusofenrol[]" value="medical"> On TB Treatment
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="statusofenrol[]" value="under5"> HIV Exposed Infant
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="statusofenrol[]" value="tb">Postputum
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="statusofenrol[]" value="sti">Not sick or Pregnant
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="statusofenrol[]" value="inpatient">Sick with Non TB(inpatient/medical)
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox">
                                                                        <input type="checkbox" id="inlineCheckbox3" name="statusofenrol[]" value="self_refer">Other
                                                                        <span></span>
                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab3">
                                                            <h3 class="block">Additional Information <i>(Fill if Applicable)</i></h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">INH</label>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Start date</label>
                                                                    <input type="date" placeholder="" class="form-control" name="inhstart" /> </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Stop date</label>
                                                                    <input type="date" placeholder="" class="form-control" name="inhstop" /> </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">CTX</label>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Start date</label>
                                                                    <input type="date" class="form-control" name="ctxstart" /> </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Stop date</label>
                                                                    <input type="date" class="form-control" name="ctxstop" /> </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">FCA</label>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Start date</label>
                                                                    <input type="date" class="form-control" name="fcastart" /> </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Stop date</label>
                                                                    <input type="date" class="form-control" name="fcastop" /> </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">TB Rx</label>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Start date</label>
                                                                    <input type="date" class="form-control" name="tbrx_start" /> </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Stop date</label>
                                                                    <input type="date" class="form-control" name="tbrx_stop"/> </div>
                                                              </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab4">
                                                            <h3 class="block">1st Line Regimen</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Regimen Level
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                  <select class="bs-select form-control" name="regimen_line">
                                                                     <option value="1">1st Line Regimen</option>
                                                                     <option value="2">2nd Line Regimen</option>
                                                                 </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-3">Regimen
                                                                  <span class="required"> * </span>
                                                              </label>
                                                              <div class="col-md-4">
                                                                <textarea class="form-control" rows="4" name="regimen"></textarea>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Substitutions</label>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Reason</label>
                                                                    <input type="text" placeholder="" class="form-control" name="substitution_reason" /> </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">Date</label>
                                                                    <input type="date" placeholder="" class="form-control" name="substitution_date" /> </div>
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
                                                            <button type="submit" class="btn green button-submit"> Submit
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
