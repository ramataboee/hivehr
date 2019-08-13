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
                    <span>HIV Care/ART Card</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> HIV Care/ART Card
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <!--tab_1_1-->
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 profile-info">
                                      <?php foreach($patientinfo as $attribute): ?>
                                        <h1 class="font-green sbold uppercase"><?php echo $attribute['name']." ".$attribute['surname']; ?></h1>
                                        <div class="portlet sale-summary">
                                            <div class="portlet-body">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="sale-info"> Birth Date:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['dob']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Gender:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['gender']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Phone Number:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['phone']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Address:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['address']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Marital Status:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['maritalstatus']; ?></span>
                                                    </li>
                                                    <?php endforeach; ?>
                                                    <?php foreach($districtinfo as $district): ?>
                                                    <li>
                                                        <span class="sale-info"> District:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $district['name']; ?></span>
                                                    </li>
                                                    <?php endforeach; ?>
                                                    <?php foreach($chiefinfo as $chief): ?>
                                                    <li>
                                                        <span class="sale-info"> Chief:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $chief['name']." ".$chief['surname']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Chief Village:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $chief['village']; ?></span>
                                                    </li>
                                                    <?php endforeach; ?>
                                                    <?php foreach($clinicinfo as $clinic):?>
                                                      <li>
                                                          <span class="sale-info"> Clinic:
                                                              <i class="fa fa-img-down"></i>
                                                          </span>
                                                          <span class="sale-num"><?php echo $clinic['name']; ?></span>
                                                      </li>
                                                    <?php endforeach;?>
                                                </ul>

                                            </div>
                                        </div>


                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-6">
                                        <div class="portlet sale-summary">
                                            <div class="portlet-title">
                                                <div class="caption font-red sbold"> ART Summary </div>
                                                <div class="tools">
                                                    <a class="reload" href="javascript:;"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <ul class="list-unstyled">
                                                  <?php foreach($patientinfo as $attribute): ?>
                                                    <li>
                                                        <span class="sale-info"> HTS Registered Date:
                                                            <i class="fa fa-img-up"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['creation_date']; ?> </span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Confirmed HIV+ Date:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['dateconfirmedhiv_positive']; ?></span>
                                                    </li>
                                                  <?php endforeach; ?>
                                                  <?php foreach($artinfo as $art): ?>
                                                    <li>
                                                        <span class="sale-info"> ART Start Date:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $art['dateenrolled']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Why Eligible:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $art['whyeligible']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Care of Entry Point:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $art['careofentry']; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info"> Cohort:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num">
                                                          <?php
                                                            $time = strtotime($art['cohort']);
                                                            $month = date("F",$time);
                                                            $year = date("Y",$time);
                                                            echo $year."/".$month;
                                                          ?>
                                                        </span>
                                                    </li>

                                                  <?php endforeach; ?>
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
                                            <a href="#tab_1_11" data-toggle="tab"> HTS Records </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_22" data-toggle="tab"> Health Status Pre-ART</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_33" data-toggle="tab"> ART Start Status</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_44" data-toggle="tab"> Regimen</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_55" data-toggle="tab"> Encounters</a>
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

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php foreach($htsrecords as $record): ?>
                                                        <tr>
                                                            <td> <?php echo $record['date']; ?> </td>
                                                            <td> <?php echo $record['hivstatus']; ?> </td>
                                                            <td> <?php echo $record['nextdate']; ?> </td>
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
                                                            <i class="fa fa-briefcase"></i> Indicator </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-question"></i> Status </th>
                                                            <th class="hidden-xs">
                                                                <i class="fa fa-question"></i> </th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php foreach($firsthealth as $status): ?>
                                                    <tr>
                                                        <td> Clinical Stage</td>
                                                        <td> <?php echo $status['clinical_stage']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> INH</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span>  <?php echo $status['inh_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $status['inh_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> CTX</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span> <?php echo $status['ctx_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $status['ctx_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> FCA</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span>  <?php echo $status['fca_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $status['fca_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> TB Rx</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span>  <?php echo $status['tbrx_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $status['tbrx_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> LOST/TO</td>
                                                        <td> <?php echo $status['lost_to']; ?> </td>
                                                        <td> Date: <?php echo $status['lost_to_date']; ?> </td>
                                                    </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <!--tab-pane-->
                                        <div class="tab-pane" id="tab_1_33">
                                          <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Indicator </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-question"></i> Status </th>
                                                            <th class="hidden-xs">
                                                                <i class="fa fa-question"></i> </th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php foreach($artstrartinfo as $artstart): ?>
                                                    <tr>
                                                        <td> Weight</td>
                                                        <td> <?php echo $artstart['weight']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Functional Status</td>
                                                        <td> <?php echo $artstart['function']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Height</td>
                                                        <td> <?php echo $artstart['height']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> WHO Clinical Stage</td>
                                                        <td> <?php echo $artstart['whoclinicalstage']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> CD4 count</td>
                                                        <td> <?php echo $artstart['cd4']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Status of Enrolment</td>
                                                        <td> <?php echo $artstart['statusofenrollment']; ?> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> INH</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span>  <?php echo $artstart['inh_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $artstart['inh_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> CTX</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span> <?php echo $artstart['ctx_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $artstart['ctx_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> TB Rx</td>
                                                        <td> <span class="label label-success label-sm">Start Date:</span>  <?php echo $artstart['tb_treatment_start']; ?> </td>
                                                        <td> <span class="label label-danger label-sm">Stop Date:</span>  <?php echo $artstart['tb_treatment_stop']; ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> LOST/TO</td>
                                                        <td> <?php echo $status['lost_to']; ?> </td>
                                                        <td> Date: <?php echo $status['lost_to_date']; ?> </td>
                                                    </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <!--tab-pane-->
                                        <div class="tab-pane" id="tab_1_44">
                                          <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Regimen Line </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-question"></i> Regimen </th>
                                                        <th class="hidden-xs">
                                                                <i class="fa fa-question"></i> Substitute Reason</th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-question"></i> Substitute Date</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php foreach($regimen as $regimeninfo): ?>
                                                    <tr>
                                                        <td> <?php echo $regimeninfo['regimen_line']; ?></td>
                                                        <td>  <?php echo $regimeninfo['regimen']; ?></td>
                                                        <td> <?php echo $regimeninfo['substitution_reason']; ?></td>
                                                        <td> <?php echo $regimeninfo['substitution_date']; ?></td>
                                                    </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <!--tab-pane-->
                                        <div class="tab-pane" id="tab_1_55">
                                          <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                          <div class="portlet box red">
                                              <div class="portlet-title">
                                                  <div class="caption">
                                                      <i class="fa fa-globe"></i>Encounters </div>
                                                  <div class="tools"> </div>
                                              </div>
                                              <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                                  <thead>
                                                    <tr>
                                                        <th class="all">Date </th>
                                                        <th class="all">Scheduled? </th>
                                                        <th class="all">Follow up date</th>
                                                        <th class="none">Duration Since First Starting ART/ Since Starting Current Regimen</th>
                                                        <th class="none">SMI/WHZ Score</th>
                                                        <th class="none">Weight</th>
                                                        <th class="none">Pregnant</th>
                                                        <th class="none">Function</th>
                                                        <th class="all">WHO Clinical Stage</th>
                                                        <th class="none">TB Status</th>
                                                        <th class="none">STI</th>
                                                        <th class="none">Potential side effects</th>
                                                        <th class="none">New OI, other problems</th>
                                                        <th class="none">Cotrimoxazole</th>
                                                        <th class="none">IPT</th>
                                                        <th class="none">Other meds dispensed</th>
                                                        <th class="all">ARV Drugs</th>
                                                        <th class="none">Viral Load</th>
                                                        <th class="all">Cd4</th>
                                                        <th class="none">Labs</th>
                                                        <th class="none">Refer/ Consults/ Link</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php foreach($encounters as $encounter): ?>
                                                    <tr>
                                                          <td> <?php echo $encounter['date_scheduled']; ?></td>

                                                          <td> <?php echo $encounter['scheduled']; ?></td>
                                                          <td> <?php echo $encounter['followup_date']; ?></td>

                                                          <td> <?php echo $encounter['durationsincefirststart']; ?></td>

                                                          <td> <?php echo $encounter['smi_whz_score']; ?></td>

                                                          <td> <?php echo $encounter['weight']; ?></td>

                                                          <td> <?php echo $encounter['pregnant']; ?></td>

                                                          <td> <?php echo $encounter['function']; ?></td>

                                                          <td> <?php echo $encounter['who_clinicalstage']; ?></td>

                                                          <td> <?php echo $encounter['tb_status']; ?></td>

                                                          <td> <?php echo $encounter['sti']; ?></td>

                                                          <td> <?php echo $encounter['potential_sideeffects']; ?></td>

                                                          <td> <?php echo $encounter['new_oi']; ?></td>

                                                          <td> <?php echo $encounter['ctx']; ?></td>

                                                          <td> <?php echo $encounter['ipt']; ?></td>

                                                          <td> <?php echo $encounter['other_meds']; ?></td>

                                                          <td> <?php echo $encounter['arvdrugs']; ?></td>

                                                          <td> <?php echo $encounter['viraload']; ?></td>

                                                          <td> <?php echo $encounter['cd4']; ?></td>

                                                          <td> <?php echo $encounter['labs']; ?></td>

                                                          <td> <?php echo $encounter['refer']; ?></td>

                                                    </tr>
                                                  <?php endforeach; ?>
                                                  </tbody>
                                                </table>
                                              </div>
                                          </div>
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
