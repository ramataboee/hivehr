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
                    <span>Clients</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Client Profile
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                    </li>
                    <li>
                        <a href="#tab_1_3" data-toggle="tab"> Update Client </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!--tab_1_1-->
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 profile-info">
                                      <?php foreach($client_profile as $attribute): ?>
                                        <h1 class="font-green sbold uppercase"><?php echo $attribute['name']; echo $attribute['surname']; ?></h1>
                                        <ul class="feeds">
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label">
                                                                <i class="fa fa-user-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Registered Date:<?php echo $attribute['creation_date']; ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Birth Date: <?php echo $attribute['dob']; ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label">
                                                                <i class="fa fa-venus-mars"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Gender: <?php echo $attribute['gender']; ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                      <?php endforeach; ?>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="portlet sale-summary">
                                            <div class="portlet-title">
                                                <div class="caption font-red sbold"> HTS Summary </div>
                                                <div class="tools">
                                                    <a class="reload" href="javascript:;"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="sale-info"> TOTAL VISITS
                                                            <i class="fa fa-img-up"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $total_visits; ?> </span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> CURRENT YEAR VISITS
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"> 87 </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                                <div class="tabbable-line tabbable-custom-profile">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_11" data-toggle="tab"> All Visits </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_22" data-toggle="tab"> Current Year Visits </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_11">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <i class="fa fa-briefcase"></i> Date Tested</th>
                                                            <th class="hidden-xs">
                                                                <i class="fa fa-question"></i> HIV Status </th>
                                                            <th>
                                                                <i class="fa fa-bookmark"></i> Next Visit </th>
                                                            <th> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php foreach($hts_visits as $record): ?>
                                                        <tr>
                                                            <td> <?php echo $record['date']?> </td>
                                                            <td> <?php echo $record['hivstatus']?> </td>
                                                            <td> <?php echo $record['nextdate']?> </td>
                                                        </tr>
                                                      <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--tab-pane-->
                                        <div class="tab-pane" id="tab_1_22">
                                          <div class="portlet-body">
                                              <table class="table table-striped table-bordered table-advance table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>
                                                              <i class="fa fa-briefcase"></i> Company </th>
                                                          <th class="hidden-xs">
                                                              <i class="fa fa-question"></i> Descrition </th>
                                                          <th>
                                                              <i class="fa fa-bookmark"></i> Amount </th>
                                                          <th> </th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> Pixel Ltd </a>
                                                          </td>
                                                          <td class="hidden-xs"> Server hardware purchase </td>
                                                          <td> 52560.10$
                                                              <span class="label label-success label-sm"> Paid </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> Smart House </a>
                                                          </td>
                                                          <td class="hidden-xs"> Office furniture purchase </td>
                                                          <td> 5760.00$
                                                              <span class="label label-warning label-sm"> Pending </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> FoodMaster Ltd </a>
                                                          </td>
                                                          <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                          <td> 12400.00$
                                                              <span class="label label-success label-sm"> Paid </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> WaterPure Ltd </a>
                                                          </td>
                                                          <td class="hidden-xs"> Payment for Jan 2013 </td>
                                                          <td> 610.50$
                                                              <span class="label label-danger label-sm"> Overdue </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> Pixel Ltd </a>
                                                          </td>
                                                          <td class="hidden-xs"> Server hardware purchase </td>
                                                          <td> 52560.10$
                                                              <span class="label label-success label-sm"> Paid </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> Smart House </a>
                                                          </td>
                                                          <td class="hidden-xs"> Office furniture purchase </td>
                                                          <td> 5760.00$
                                                              <span class="label label-warning label-sm"> Pending </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <a href="javascript:;"> FoodMaster Ltd </a>
                                                          </td>
                                                          <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                          <td> 12400.00$
                                                              <span class="label label-success label-sm"> Paid </span>
                                                          </td>
                                                          <td>
                                                              <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab_1_3-->
                    <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                            <div class="col-md-3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_1-1">
                                            <i class="fa fa-lock"></i> Record Visit </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_2-2">
                                            <i class="fa fa-cog"></i> Personal info </a>
                                        <span class="after"> </span>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_3-3">
                                            <i class="fa fa-cog"></i> Get More Details(Pre-ART)</a>
                                        <span class="after"> </span>
                                    </li>


                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <!-- record HTS visit -->
                                    <div id="tab_1-1" class="tab-pane active">
                                        <!--<form role="form" action="#">-->
                                        <?php

                                          $form_attributes = array('role'=>'form');
                                          echo form_open('Hts/record_hts',$form_attributes);
                                        ?>
                                            <input type="hidden" name="id" value="<?php echo $theid;//id passed from array data ?>">
                                            <div class="form-group">
                                                <label class="control-label">Date:
                                                  <span class="required">*</span>
                                                </label>
                                                <input type="date" class="form-control" name="date" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Next Date:
                                                  <span class="required">*</span>
                                                </label>
                                                <input type="date" class="form-control" name="next_date" />
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label">HIV Status:
                                                      <span class="required">*</span>
                                                    </label>
                                                    <div>
                                                        <div class="md-radio-list">
                                                            <div class="md-radio">
                                                                <input type="radio" id="checkbox1_3" name="hiv_status" value="negative" class="md-radiobtn">
                                                                <label for="checkbox1_3">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Negative</label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="checkbox1_4" name="hiv_status" value="positive" class="md-radiobtn">
                                                                <label for="checkbox1_4">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Positive </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>


                                            <div class="margiv-top-10">
                                                <button type="submit" class="btn green"> Submit </button>
                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- update user information -->
                                    <div id="tab_2-2" class="tab-pane">
                                      <form role="form" action="#">
                                          <div class="form-group">
                                              <label class="control-label">First Name</label>
                                              <input type="text" placeholder="John" class="form-control" /> </div>
                                          <div class="form-group">
                                              <label class="control-label">Last Name</label>
                                              <input type="text" placeholder="Doe" class="form-control" /> </div>

                                          <div class="form-group">
                                              <label class="control-label">Date of Birth</label>
                                              <input type="date" placeholder="" class="form-control" /> </div>
                                          <div class="margiv-top-10">
                                              <a href="javascript:;" class="btn green"> Save Changes </a>
                                              <a href="javascript:;" class="btn default"> Cancel </a>
                                          </div>
                                      </form>
                                    </div>
                                    <!-- record HTS visit -->
                                    <div id="tab_3-3" class="tab-pane">
                                      <div class="m-heading-1 border-green m-bordered">
                                          <h3>Get More information about Client</h3>
                                          <p> <span class="label label-danger">Only</span> get more information if the client has tested <span class="label label-danger">positive.</span>
                                          </p>
                                          <p>And Use the Record Visit Tab first to record the HTS visit. Then come here.
                                          </p>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <!-- BEGIN VALIDATION STATES-->
                                              <div class="portlet light portlet-fit portlet-form bordered">

                                                  <div class="portlet-body">
                                                      <!-- BEGIN FORM
                                                      <form action="#" class="form-horizontal" id="form_sample_1"> -->
                                                      <?php
                                                      $form_attr = array('class'=>'form-horizontal', 'id'=>'form_sample_1');
                                                      echo form_open('Patients/add_patient',$form_attr);

                                                      ?>
                                                          <input type="hidden" name="clientid" value="<?php echo $theid; ?>">
                                                          <div class="form-body">
                                                              <div class="alert alert-danger display-hide">
                                                                  <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                              <div class="alert alert-success display-hide">
                                                                  <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                                  <div class="caption">
                                                                      <i class=" icon-layers font-red"></i>
                                                                      <span class="caption-subject font-red sbold uppercase">Personal Information</span>
                                                                  </div>
                                                              <div class="form-group form-md-line-input">
                                                                  <label class="col-md-3 control-label" for="form_control_1">Address
                                                                      <span class="required">*</span>
                                                                  </label>
                                                                  <div class="col-md-9">
                                                                      <input type="text" class="form-control" placeholder="" name="address">
                                                                      <div class="form-control-focus"> </div>

                                                                  </div>
                                                              </div>
                                                              <div class="form-group form-md-line-input">
                                                                  <label class="col-md-3 control-label" for="form_control_1">Phone Number
                                                                      <span class="required">*</span>
                                                                  </label>
                                                                  <div class="col-md-9">
                                                                      <input type="text" class="form-control" placeholder="" name="phone">
                                                                      <div class="form-control-focus"> </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label class="control-label col-md-3">District</label>
                                                                  <div class="col-md-4">
                                                                      <select class="bs-select form-control" name="district">
                                                                        <?php foreach($districts as $district): ?>
                                                                          <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label class="control-label col-md-3">Chief</label>
                                                                  <div class="col-md-4">
                                                                      <select class="bs-select form-control" name="chief">
                                                                        <?php foreach($chiefs as $chief): ?>
                                                                          <option value="<?php echo $chief['id']; ?>"><?php echo $chief['name']." - ".$chief['village']; ?></option>
                                                                        <?php endforeach; ?>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label class="control-label col-md-3">Marital Status</label>
                                                                  <div class="col-md-4">
                                                                      <select class="bs-select form-control" name="marital_status">
                                                                          <option value="single">single</option>
                                                                          <option value="married">married</option>
                                                                          <option value="separated">separated</option>
                                                                          <option value="divorced">divorced</option>
                                                                          <option value="widowed">widowed</option>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="caption">
                                                                  <i class=" icon-layers font-red"></i>
                                                                  <span class="caption-subject font-red sbold uppercase">HIV Status Information </span>
                                                              </div>
                                                              <div class="form-group form-md-line-input">
                                                                  <label class="col-md-3 control-label" for="form_control_1">Date Confirmed HIV +
                                                                      <span class="required">*</span>
                                                                  </label>
                                                                  <div class="col-md-9">
                                                                      <input type="date" class="form-control" placeholder="" name="hiv_date">
                                                                      <div class="form-control-focus"> </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label class="control-label col-md-3">Clinic</label>
                                                                  <div class="col-md-4">
                                                                      <select class="bs-select form-control" name="clinic">
                                                                        <?php foreach($clinic as $clinic_row): ?>
                                                                          <option value="<?php echo $clinic_row['id']; ?>"><?php echo $clinic_row['name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="caption">
                                                                  <i class=" icon-layers font-red"></i>
                                                                  <span class="caption-subject font-red sbold uppercase">Clinical Stage </span>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label class="control-label col-md-3">WHO Clinical Stage</label>
                                                                  <div class="col-md-4">
                                                                      <select class="bs-select form-control" name="clinical_stage">
                                                                          <option value="Stage_1">Stage 1</option>
                                                                          <option value="Stage_2">Stage 2</option>
                                                                          <option value="Stage_3">Stage 3</option>
                                                                          <option value="Stage_4">Stage 4</option>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="caption">
                                                                  <i class=" icon-layers font-red"></i>
                                                                  <span class="caption-subject font-red sbold uppercase">Health Assessment(Fill if applicable) </span>
                                                              </div>
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
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">LOST / TO</label>
                                                                <div class="col-md-4">
                                                                    <select class="bs-select form-control" name="lost_to">
                                                                        <option value="LOST">LOST</option>
                                                                        <option value="TO">Transfer Out</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label">date</label>
                                                                    <input type="date" class="form-control" name="losttodate"/> </div>
                                                              </div>


                                                          </div>
                                                          <div class="form-actions">
                                                              <div class="row">
                                                                  <div class="col-md-offset-3 col-md-9">
                                                                      <button type="submit" class="btn green">Submit</button>
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
                                </div>
                            </div>
                            <!--end col-md-9-->
                        </div>
                    </div>
                    <!--end tab-pane-->

                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
