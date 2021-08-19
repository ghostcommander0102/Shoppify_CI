<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Builds</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Manage Builds</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- [fill-errorBox] -->
  <!-- Main content -->
    <section class="content" style="margin-left:10px; margin-right:10px">
                <div class="card">
                    <div class="card-header">

                        <a href="<?php echo base_url().'admin/build/addview'?>" class="btn btn-primary">Add Build</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 3%">
                                        #
                                    </th>
                                    <th style="width: 20%; text-align: center;">
                                        Type
                                    </th>
                                    <th style="width: 50%">
                                        Name
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < count($builds); $i++) { ?>
                                    <tr>
                                        <td>
                                            <?php echo str_pad($builds[$i]['build_id'],4,'0',STR_PAD_LEFT) ?>
                                        </td>
                                        <td class="project-state">
                                            <?php if($builds[$i]['build_isActive']) { ?>
                                                <span class="badge badge-success" style="font-size: 90%;width: 150px; background-color: [fill-bgcolor];">active</span>
                                            <?php } else {?>
                                                <span class="badge badge-success" style="font-size: 90%;width: 150px; background-color: [fill-bgcolor];">inactive</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <span style="font-weight: bold;"><?php echo $builds[$i]['build_name'] ?></span> -  <?php echo $builds[$i]['cpu_brand'].' '.$builds[$i]['cpu_name'].' '.$builds[$i]['cpu_value'].' | '.$builds[$i]['ram_brand'].' '.$builds[$i]['ram_name'].' '.$builds[$i]['ram_value']
                                                .' | '.$builds[$i]['gpu_brand'].' '.$builds[$i]['gpu_name'].' '.$builds[$i]['gpu_value']; ?>
                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url().'admin/build/edit?build_id='.$builds[$i]['build_id'] ?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/build/delete?build_id='.$builds[$i]['build_id'] ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
</form>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->