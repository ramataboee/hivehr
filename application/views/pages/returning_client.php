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
                    <a href="#">HTS</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Returning Clients</span>
                </li>
            </ul>

        </div>
        <!-- END PAGE BAR -->

        <!-- END PAGE HEADER-->
        <div class="m-heading-1 border-green m-bordered">
            <h3>Search for a returning client</h3>
            <p> Search for a returning client by any keyword</p>
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
                          <span class="caption-subject bold uppercase">List of Registered Clients</span>
                      </div>

                  </div>
                  <div class="portlet-body">
                      <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                          <thead>
                              <tr class="">
                                  <th> Client ID </th>
                                  <th> Registered Date </th>
                                  <th> Name </th>
                                  <th> Surname </th>
                                  <th> Date of Birth </th>
                                  <th> Gender </th>
                                  <th> Action </th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
                              foreach($returning as $client):
                            ?>
                                <tr>
                                    <td><?php echo $client['hex(id)']; ?></td>
                                    <td><?php echo $client['creation_date']; ?></td>
                                    <td><?php echo $client['name']; ?></td>
                                    <td><?php echo $client['surname']; ?></td>
                                    <td><?php echo $client['dob']; ?></td>
                                    <td><?php echo $client['gender']; ?></td>

                                    <td>
                                      <!--  <div class="btn-group pull-right">
                                                    <a href="view_client/<?php //echo $client['hex(id)']; ?>">
                                                        <i class="fa fa-print"></i> View
                                                    </a>
                                        </div>-->
                                        <div class="btn-group pull-right">

                                          <?php
                                            echo form_open(base_url('view_client_profile'));
                                          ?>
                                            <input type="hidden" name="id" id="id" value="<?php echo $client['hex(id)']; ?>" />
                                            <input type="submit" value="View" />
                                          </form>
                                        </div>
                                    </td>
                                  </tr>
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
