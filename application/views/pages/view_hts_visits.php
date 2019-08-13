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
                    <a href="#">Tables</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Datatables</span>
                </li>
            </ul>

        </div>
        <!-- END PAGE BAR -->

        <!-- END PAGE HEADER-->
        <div class="m-heading-1 border-green m-bordered">
            <h3>All HTS visits for the clinic</h3>
            <p> Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table. </p>
            <p> For more info please check out
                <a class="btn red btn-outline" href="https://www.datatables.net/extensions/responsive/" target="_blank">the official documentation</a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Basic</span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">First name</th>
                                    <th class="all">Last name</th>
                                    <th class="min-tablet">Registered Date</th>
                                    <th class="desktop">Last Visit</th>
                                    <th class="none">Number of Visits</th>
                                    <th class="none">Age</th>
                                    <th class="none">Gender</th>
                                    <th class="none">Status</th>
                                    <th class="all">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                foreach($visits as $hts_person):
                              ?>
                                  <tr>
                                      <td><?php echo $hts_person['Name']; ?></td>
                                      <td><?php echo $hts_person['Surname']; ?></td>
                                      <td><?php echo $hts_person['Registration_date']; ?></td>
                                      <td><?php echo $hts_person['Last_visit']; ?></td>
                                      <td><?php echo $hts_person['Visits']; ?></td>
                                      <td><?php echo $hts_person['Age']; ?></td>
                                      <td><?php echo $hts_person['Gender']; ?></td>
                                      <td><?php echo $hts_person['Hiv_status']; ?></td>
                                      <td>
                                          <div class="btn-group pull-right">
                                              <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Action
                                                  <i class="fa fa-angle-down"></i>
                                              </button>
                                              <ul class="dropdown-menu pull-right">
                                                  <li>
                                                      <a href="javascript:;">
                                                          <i class="fa fa-print"></i> View </a>
                                                  </li>
                                                  <li>
                                                      <a href="#">
                                                          <i class="fa fa-file-pdf-o"></i> Update </a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:;">
                                                          <i class="fa fa-file-excel-o"></i> Move to PreART </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </td>
                                <?php
                              endforeach;
                              ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>

        </div>

    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
