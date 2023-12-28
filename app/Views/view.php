<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Councile Registration Member Form</title>
    <script>
    setTimeout(function(){
      $("#hidemsg").hide();
    },3000);
     </script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">

            <?php if(session()->getTempdata("success")): ?>
                        <div id="hidemsg" class="alert alert-success"> <?= session()->getTempdata('success')  ?></div>
                 <?php endif;  ?>


                <?php if(session()->getTempdata("error")): ?>
                        <div id="hidemsg" class="alert alert-danger"> <?= session()->getTempdata('error')  ?></div>
                <?php endif;  ?>

            <?=form_open_multipart();?>
                <div class="form-group">
                   
                    <lable>Name:</lable>
                    <input type="text" name="uname" class="form-control" value="<?= old('uname') ?>">
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['uname'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['uname']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Email:</lable>
                    <input type="text" name="email" class="form-control" value="<?= old('email') ?>">

                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['email'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['email']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>conform Email:</lable>
                    <input type="text" name="cemail" class="form-control" value="<?= old('cemail') ?>">
                    
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['cemail'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['cemail']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>House No:</lable>
                    <input type="text" name="hno" class="form-control" value="<?= old('hno') ?>">
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['hno'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['hno']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Street:</lable>
                    <input type="text" name="street" class="form-control" value="<?= old('street') ?>">
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['street'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['street']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>locality/Area:</lable>
                    <input type="text" name="area" class="form-control" value="<?= old('area') ?>">
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['area'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['area']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Ward/Division:</lable>
                    <input type="text" name="ward" class="form-control" value="<?= old('ward') ?>">
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['ward'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['ward']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Appartment/Building Name:</lable>
                    <input type="text" name="apname" class="form-control" value="<?= old('apname') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['apname'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['apname']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>City/Town/Village:</lable>
                    <input type="text" name="ctv" class="form-control" value="<?= old('ctv') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['ctv'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['ctv']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>District:</lable>
                    <input type="text" name="district" class="form-control" value="<?= old('district') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['district'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['district']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>State:</lable>
                    <input type="text" name="state" class="form-control"value="<?= old('state') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['state'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['state']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Pincode</lable>
                    <input type="text" name="pincode" class="form-control"value="<?= old('pincode') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['pincode'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['pincode']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Upload Photo</lable>
                    <input type="file" name="uphoto" class="form-control" value="<?= old('uphoto') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['uphoto'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['uphoto']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Photo:</lable>
                    <img src="" class="form-control">
                    
                </div>
                <div class="form-group">
                    <lable>upload Resume</lable>
                    <input type="file" name="uresume" class="form-control" value="<?= old('uresume') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['uresume'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['uresume']?></span>
                    <?php endif;?>
                </div>

                <div>
                    <label>CF ID:</label>
                    <input type="text" name="cid" class="form-control" value="<?= old('cid') ?>"> 
                   
                </div>

                <!-- Executive_council -->
                <?php if(isset($executive)):?>
                <p>For Statical Purpose</p>

                <div class="form-group">
                    <label for="caste">Religion:</label>
                    <select name="religion" id="Religion">
                        <option selected="selected" value="<?= old('religion') ?>">Select</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Sikh">Sikh</option>
                        <option value="Buddhist">Buddhist</option>
                        </select>
                       
                </div>
                <div class="form-group">
                    <lable>Caste:</lable>
                    <input type="text" name="caste" class="form-control" value="<?= old('caste') ?>"> 
                    <?php if(session()->has('errors')&&!empty(session()->get('errors')['caste'])): ?>
                    <span  class='text-danger'><?= session()->get('errors')['caste']?></span>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <lable>Category</lable>
                    <select name="category" id="ddl_Category">
                        <option selected="selected" value="<?= old('category') ?>">Select</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="BC">BC</option>
                        <option value="OBC">OBC</option>
                        <option value="EBC">EBC</option>
                        <option value="OC">OC</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <lable>upload Contact Info of three References</lable>
                    <input type="file" name="ucontact" class="form-control" > 
                    
                </div>
                <?php endif;?>  
                <div class="form-group">
                   
                    <input type="submit"  value="Submit" class="btn btn-primary">
                </div>
                    <?= form_close(); ?>
            </div>
        </div>
    </div>


</body>

</html>