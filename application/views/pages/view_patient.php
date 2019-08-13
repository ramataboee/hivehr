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
        <h1 class="page-title"> Patient Profile
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
                                    <div class="col-md-8 profile-info">
                                      <?php foreach($patientinfo as $attribute): ?>
                                        <h1 class="font-green sbold uppercase"><?php echo $attribute['name']." ".$attribute['surname']; ?></h1>
                                        <div class="portlet sale-summary">
                                            <div class="portlet-body">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="sale-info"> First Registered Date:
                                                            <i class="fa fa-img-up"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['creation_date']; ?> </span>
                                                    </li>
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
                                                    <li>
                                                        <span class="sale-info"> Confirmed HIV+ Date:
                                                            <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num"><?php echo $attribute['dateconfirmedhiv_positive']; ?></span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

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
                                            <a href="#tab_1_22" data-toggle="tab"> Health Status At Entry</a>
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
