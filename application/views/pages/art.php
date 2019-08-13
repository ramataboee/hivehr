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
                                    <a href="#">ART Level</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Pre-Art</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->

                        <!-- END PAGE HEADER-->
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>Status of All Positive Patients</h3>
                            <p> These are all the patients that Have tested positive, but not enrolled in ART
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">Header Fixed</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                            <thead>
                                                <tr class="">
                                                    <th> Full Name </th>
                                                    <th> Phone </th>
                                                    <th> Address </th>
                                                    <th> Date Confirmed HIV+ </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php foreach($artpatient as $patient):?>
                                                <tr>
                                                    <td> <?php echo $patient['name']." ".$patient['surname']; ?> </td>
                                                    <td> <?php echo $patient['phone']; ?> </td>
                                                    <td> <?php echo $patient['address']; ?> </td>
                                                    <td> <?php echo $patient['dateconfirmedhiv_positive']; ?> </td>

                                                    <td>
                                                      <div class="btn-group">
                                                          <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                              <i class="fa fa-angle-down"></i>
                                                          </button>
                                                          <ul class="dropdown-menu" role="menu">
                                                              <li>                                                              <?php
                                                                        echo form_open('Patients/view_art_card');
                                                                      ?>
                                                                        <input type="hidden" name="id" id="id" value="<?php echo $patient['hex(id)']; ?>" />
                                                                        <input class="btn default red-stripe" type="submit" value="ART Card" />
                                                                      </form>
                                                              </li>
                                                              <li>                                                              <?php
                                                                        echo form_open('Patients/record_encounter');
                                                                      ?>
                                                                        <input type="hidden" name="id" value="<?php echo $patient['hex(id)']; ?>" />
                                                                        <input type="hidden" name="artid" value="<?php echo $patient['artid']; ?>"/>
                                                                        <input type="hidden" name="fullname" value="<?php echo $patient['name'].' '.$patient['surname']; ?>">
                                                                        <input class="btn default red-stripe" type="submit" value="Record Encounter" />
                                                                      </form>
                                                              </li>
                                                              <li>
                                                                  <a href="javascript:;">
                                                                      <i class="icon-user"></i> Edit </a>
                                                              </li>

                                                          </ul>
                                                      </div>
                                                    </td>
                                                </tr>
                                              <?php endforeach; ?>
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
