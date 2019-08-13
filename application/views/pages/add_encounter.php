<!-- BEGIN CONTAINER -->
<div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Form Stuff</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->


                        <div class="m-heading-1 border-green m-bordered">
                            <h3>jQuery Validation Plugin</h3>
                            <p> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options. For more info please check out
                                <a class="btn red btn-outline" href="http://jqueryvalidation.org" target="_blank">the official documentation</a>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN VALIDATION STATES-->
                                <div class="portlet light portlet-fit portlet-form bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-red"></i>
                                            <span class="caption-subject font-red sbold uppercase"><?php echo $fname; ?> - Encounter registration</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">
                                        <!-- BEGIN FORM-->

                                        <?php
                                        $attributes = array('class'=>'form-horizontal','id'=>'form_sample_1');
                                        echo form_open('Encounters/add_encounter',$attributes);
                                        ?>
                                          <input type="hidden" name="clientid" value="<?php echo $cid; ?>">
                                          <input type="hidden" name="artid" value="<?php echo $artid; ?>">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Date
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="date" name="scheduled_date" data-required="1" class="form-control" /> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Scheduled?
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <select class="form-control" name="scheduled">
                                                          <option value="">Select...</option>
                                                          <option value="Yes">Yes</option>
                                                          <option value="No">No</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Follow up date
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="date" name="followup_date" data-required="1" class="form-control" /> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Duration
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input name="duration" type="text" class="form-control" />
                                                        <span class="help-block"> Duration Since First Starting ART/ Since Starting Current Regimen </span>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">SMI/WHZ Score
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input name="smi" type="text" class="form-control" />
                                                        <span class="help-block"> SMI if child WHZ SCORE</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Weight
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input name="weight" type="text" class="form-control" />
                                                        <span class="help-block"> Ht at 1st visit for adult,(if chilf record +/_ oedema)</span>
                                                       </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Pregnant EDD
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input name="edd" type="text" class="form-control" />
                                                        <span class="help-block"> Pregnant EDD? PMTCT? FP/NoFP. If FP, write Method(s), if Child record MUAC</span>
                                                       </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Function
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <select class="form-control" name="function">
                                                          <option value="">Select...</option>
                                                          <option value="work">Work</option>
                                                          <option value="amb">Amb</option>
                                                          <option value="bed">Bed</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">WHO Clinical Stage</label>
                                                    <div class="col-md-6">
                                                      <select class="form-control" name="stage">
                                                          <option value="">Select...</option>
                                                          <option value="Stage_1">Stage 1</option>
                                                          <option value="Stage_2">Stage 2</option>
                                                          <option value="Stage_3">Stage 3</option>
                                                          <option value="Stage_4">Stage 4</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">TB Status
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input name="tb" type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">STI</label>
                                                    <div class="col-md-6">
                                                      <select class="form-control" name="sti">
                                                          <option value="">Select...</option>
                                                          <option value="signs">Sign</option>
                                                          <option value="no-signs">No Sign</option>

                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Potential side effects
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <textarea name="side_effects" class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">New OI, other problems
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea name="new_oi" rows="5" class="form-control"></textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Cotrimoxazole
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <input name="ctx" type="text" class="form-control" />
                                                      <span class="help-block"> Adhere / No. of days dispensed</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">IPT
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <input name="ipt" type="text" class="form-control" />
                                                      <span class="help-block"> Adhere / No. of days dispensed</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Other meds dispensed
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea name="other_meds" rows="5" class="form-control" ></textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">ARV Drugs
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea rows="5" name="arvdrugs" class="form-control"></textarea>
                                                      <span class="help-block"> Adhere / Why OR Regimen / No. of days dispensed</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Viral Load
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <input name="viraload" type="text" class="form-control" />

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Cd4
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <input name="cd4" type="text" class="form-control" />
                                                      <span class="help-block"> if < 5 years write CD4%</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Labs
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea name="labs" rows="5" class="form-control" ></textarea>
                                                      <span class="help-block"> Hgb, RPR, TLC, TB sputum, Other lab, AFB's</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Refer/ Consults/ Link
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea name="refer" rows="5" class="form-control" ></textarea>
                                                      <span class="help-block"> Refer or consults or link / provide (including nutritional support &amp; infanct feeding), if hospitalised write # of days)</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">Submit</button>
                                                        <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>


                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
<!-- END CONTAINER -->
