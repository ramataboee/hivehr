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

        <!-- END PAGE HEADER-->
        <div class="m-heading-1 border-green m-bordered">
            <h3>HTS Registration</h3>
            <p>The test result and any information shared by the client is confidential
                <a class="btn red btn-outline" href="http://apps.who.int/iris/bitstream/10665/179870/1/9789241508926_eng.pdf?ua=1&ua=1" target="_blank">the official documentation</a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green sbold uppercase">Register Visit</span>
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <?php
                          $attributes = array('class'=>'form-horizontal', 'id'=>'form_sample_1');
                          echo form_open('patients/register_hts',$attributes);
                        ?>
                      <!--  <form action="#" class="form-horizontal" id="form_sample_1">-->
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-3 control-label" for="form_control_1">Date
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" placeholder="" name="date">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="" name="name">
                                        <div class="form-control-focus"> </div>

                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Surname
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="" name="surname">
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Number

                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="" name="number">
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Age
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="" name="age">
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-radios">
                                    <label class="col-md-3 control-label" for="form_control_1">Gender
                                      <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="md-radio-list">
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox1_1" name="gender" value="Male" class="md-radiobtn">
                                                <label for="checkbox1_1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Male</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox1_2" name="gender" value="Female" class="md-radiobtn">
                                                <label for="checkbox1_2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Female </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-radios">
                                    <label class="col-md-3 control-label" for="form_control_1">HIV Status
                                      <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="md-radio-list">
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox1_3" name="hiv_status" value="Negative" class="md-radiobtn">
                                                <label for="checkbox1_3">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Negative</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox1_4" name="hiv_status" value="Positive" class="md-radiobtn">
                                                <label for="checkbox1_4">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Positive </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Number of Visits

                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="" name="visits">
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-checkboxes">
                                    <label class="col-md-3 control-label" for="form_control_1">Reason For Visit</label>
                                    <div class="col-md-9">
                                        <div class="md-checkbox-list">
                                            <div class="md-checkbox">
                                                <input type="checkbox" name="comments[]" value="1" id="checkbox1_1" class="md-check">
                                                <label for="checkbox1_1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> HTC </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" name="comments[]" value="2" id="checkbox1_2" class="md-check">
                                                <label for="checkbox1_2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> BP </label>
                                            </div>
                                            <div class="md-checkbox">
                                                <input type="checkbox" name="comments[]" value="3" id="checkbox1_211" class="md-check">
                                                <label for="checkbox1_211">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> RBS </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Save</button>
                                        <button type="reset" class="btn default">Reset</button>
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
