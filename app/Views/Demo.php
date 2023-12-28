<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <h1> REGISTER</h1>

               

                <?= form_open(); ?>
                <div class="form-group" >
                        <lable>Name</lable>
                        <input type="text" name="name"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable>Email</lable>
                        <input type="text" name="email"class="form-control" >
                        
                    </div>
                    <div class="form-group" >
                        <lable>Conform Email</lable>
                        <input type="text" name="cemail"class="form-control" >
                     
                    </div>
                    <div class="form-group" >
                        <lable>House No</lable>
                        <input type="text" name="hno"class="form-control">
                        
                    </div>
                    <div class="form-group" >
                        <lable>Street</lable>
                        <input type="text" name="street"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable> Appartment/Building Name</lable>
                        <input type="text" name="ABN"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable> State</lable>
                        <input type="text" name="state"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable> Photo Upload</lable>
                        <input type="file" name="photo"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable> photo(Recent passport size photo):</lable>
                        <img scr=>
                        
                      
                    </div>
                    <div class="form-group" >
                        <lable> upload your Resume</lable>
                        <input type="file" name="resume"class="form-control" >
                      
                    </div>
                    <div class="form-group" >
                        <lable> CitizenForce ID:</lable>
                        <input type="text" name="cid"class="form-control" >
                      
                    </div>
            </div>
        </div>


    </div>
</section>
</body>
</html>
