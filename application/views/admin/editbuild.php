<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Build</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                  <li class="breadcrumb-item active">Edit Build</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <form method=post action="<?php echo base_url().'admin/build/save'?>" enctype="multipart/form-data">
      <input type=hidden name=action value="edit">

      <input type=hidden name=build_id value="<?php echo $build[0]['build_id'] ?>">
      <!-- Main content -->
      <section class="content" style="margin-left:10px; margin-right:10px">
         <div class="row">
            <div class="col-md-6">
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Build Info</h3>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="inputName">Build Name</label>
                        <input type="text" name="build_name" class="form-control is-valid"
                           value="<?php echo $build[0]['build_name'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build Price</label>
                        <input type="text" name="build_price" class="form-control is-valid"
                           value="<?php echo $build[0]['build_price'] ?>">
                     </div>
                     <div style="float:left; width: 50%;">
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isActive" <?php echo
                                 $build[0]['build_isActive']?'checked':''; ?>>
                              <label class="form-check-label">Active</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isLimited" <?php echo
                                 $build[0]['build_isLimited']?'checked':''; ?>>
                              <label class="form-check-label">Limited</label>
                           </div>
                        </div>
                     </div>
                     <div style="float:left; width: 50%;">
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isWifi" <?php echo
                                 $build[0]['build_isWifi']?'checked':''; ?>>
                              <label class="form-check-label">Has wifi?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isRGB" <?php echo
                                 $build[0]['build_isRGB']?'checked':''; ?>>
                              <label class="form-check-label">Is RGB?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isBluetooth" <?php echo
                                 $build[0]['build_isBluetooth']?'checked':''; ?>>
                              <label class="form-check-label">Has Bluetooth?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isUSBC" <?php echo
                                 $build[0]['build_isUSBC']?'checked':''; ?>>
                              <label class="form-check-label">Has USB-C?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isVRReady" <?php echo
                                 $build[0]['build_isVRReady']?'checked':''; ?>>
                              <label class="form-check-label">Is VR Ready?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isStreamReady" <?php echo
                                 $build[0]['build_isStreamReady']?'checked':''; ?>>
                              <label class="form-check-label">Is Stream Ready?</label>
                           </div>
                        </div>

                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Processor</label>
                        <select class="form-control custom-select is-valid" value='0' name="build_processor">
                           <?php for ($i=0; $i < count($build_cpu); $i++) { ?>
                           <option <?php echo $build_cpu[$i]['component_id'] == $build[0]['build_cpu']?'selected':'' ?>  value="<?php echo $build_cpu[$i]['component_id'] ?>">
                              <?php echo $build_cpu[$i]['component_brand'].' '.$build_cpu[$i]['component_name'].' '.$build_cpu[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Motherboard</label>
                        <select class="form-control custom-select is-valid " name="build_motherboard">
                           <?php for ($i=0; $i < count($build_motherboard); $i++) { ?>
                           <option <?php echo $build_motherboard[$i]['component_id'] == $build[0]['build_motherboard']?'selected':'' ?> value="<?php echo $build_motherboard[$i]['component_id'] ?>">
                              <?php echo $build_motherboard[$i]['component_brand'].' '.$build_motherboard[$i]['component_name'].' '.$build_motherboard[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Memory</label>
                        <select class="form-control custom-select is-valid  " name="build_ram">
                           <?php for ($i=0; $i < count($build_ram); $i++) { ?>
                           <option <?php echo $build_ram[$i]['component_id'] == $build[0]['build_ram']?'selected':'' ?> value="<?php echo $build_ram[$i]['component_id'] ?>">
                              <?php echo $build_ram[$i]['component_brand'].' '.$build_ram[$i]['component_name'].' '.$build_ram[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Case</label>
                        <select class="form-control custom-select is-valid  " name="build_case">
                           <?php for ($i=0; $i < count($build_case); $i++) { ?>
                           <option  <?php echo $build_case[$i]['component_id'] == $build[0]['build_case']?'selected':'' ?> value="<?php echo $build_case[$i]['component_id'] ?>">
                              <?php echo $build_case[$i]['component_brand'].' '.$build_case[$i]['component_name'].' '.$build_case[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Power Supply</label>
                        <select class="form-control custom-select is-valid  " name="build_psu">
                           <?php for ($i=0; $i < count($build_psu); $i++) { ?>
                           <option  <?php echo $build_psu[$i]['component_id'] == $build[0]['build_psu']?'selected':'' ?> value="<?php echo $build_psu[$i]['component_id'] ?>">
                              <?php echo $build_psu[$i]['component_brand'].' '.$build_psu[$i]['component_name'].' '.$build_psu[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Graphics</label>
                        <select class="form-control custom-select is-valid  " name="build_gpu">
                           <?php for ($i=0; $i < count($build_gpu); $i++) { ?>
                           <option <?php echo $build_gpu[$i]['component_id'] == $build[0]['build_gpu']?'selected':'' ?> value="<?php echo $build_gpu[$i]['component_id'] ?>">
                              <?php echo $build_gpu[$i]['component_brand'].' '.$build_gpu[$i]['component_name'].' '.$build_gpu[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Solid State Drive</label>
                        <select class="form-control custom-select is-valid  " name="build_ssd">
                           <?php for ($i=0; $i < count($build_ssd); $i++) { ?>
                           <option <?php echo $build_ssd[$i]['component_id'] == $build[0]['build_ssd']?'selected':'' ?> value="<?php echo $build_ssd[$i]['component_id'] ?>">
                              <?php echo $build_ssd[$i]['component_brand'].' '.$build_ssd[$i]['component_name'].' '.$build_ssd[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Hard Drive</label>
                        <select class="form-control custom-select is-valid  " name="build_hdd">
                           <?php for ($i=0; $i < count($build_hdd); $i++) { ?>
                           <option  <?php echo $build_hdd[$i]['component_id'] == $build[0]['build_hdd']?'selected':'' ?> value="<?php echo $build_hdd[$i]['component_id'] ?>">
                              <?php echo $build_hdd[$i]['component_brand'].' '.$build_hdd[$i]['component_name'].' '.$build_hdd[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Software</label>
                        <select class="form-control custom-select is-valid  " name="build_soft">
                           <?php for ($i=0; $i < count($build_soft); $i++) { ?>
                           <option <?php echo $build_soft[$i]['component_id'] == $build[0]['build_soft']?'selected':'' ?> value="<?php echo $build_soft[$i]['component_id'] ?>">
                              <?php echo $build_soft[$i]['component_brand'].' '.$build_soft[$i]['component_name'].' '.$build_soft[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Accessories</label>
                        <select class="form-control custom-select is-valid  " name="build_acce">
                           <?php for ($i=0; $i < count($build_acce); $i++) { ?>
                           <option  <?php echo $build_acce[$i]['component_id'] == $build[0]['build_acce']?'selected':'' ?> value="<?php echo $build_acce[$i]['component_id'] ?>">
                              <?php echo $build_acce[$i]['component_brand'].' '.$build_acce[$i]['component_name'].' '.$build_acce[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Warranty</label>
                        <select class="form-control custom-select is-valid  " name="build_warranty">
                           <?php for ($i=0; $i < count($build_warranty); $i++) { ?>
                           <option <?php echo $build_warranty[$i]['component_id'] == $build[0]['build_warranty']?'selected':'' ?> value="<?php echo $build_warranty[$i]['component_id'] ?>">
                              <?php echo $build_warranty[$i]['component_brand'].' '.$build_warranty[$i]['component_name'].' '.$build_warranty[$i]['component_value'] ?>
                           </option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Cooling</label>
                        <select class="form-control custom-select  is-valid" name="build_cooling" id="build_cooling">
                           <?php for ($i=0; $i < count($build_cooling); $i++) { ?>
                                 <option <?php echo $build_cooling[$i]['component_id'] == $build[0]['build_cooling']?'selected':'' ?> value="<?php echo $build_cooling[$i]['component_id'] ?>"><?php echo $build_cooling[$i]['component_brand'].' '.$build_cooling[$i]['component_name'].' '.$build_cooling[$i]['component_value'] ?></option>
                           <?php } ?>
                        </select>
                     </div> 
                     <div class="form-group">
                        <label for="inputName">Build Fortnite FSP(1080p:1440p)</label>
                        <input type="text" name="build_fortnitefps" id="build_fortnitefps" class="form-control is-valid" value="<?php echo $build[0]['build_fortnitefps']?>">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build Counter Strike FSP(1080p:1440p)</label>
                        <input type="text" name="build_csfps" class="form-control is-valid"
                           value="<?php echo $build[0]['build_csfps']?>">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build League of L FSP(1080p:1440p)</label>
                        <input type="text" name="build_lolfps" class="form-control is-valid"
                           value="<?php echo $build[0]['build_lolfps']?>">
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Photos</label>
                        <div class="input-images"></div>
                     </div>
                     <div class="col-12">
                        <a href="<?php echo base_url().'admin/build' ?>" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Edit Build" class="btn btn-success float-right">
                     </div>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() ?>../assets/js/image-uploader.min.js"></script>

<script>


        $('.input-images').imageUploader();

</script>
