    <script>
         $(document).ready(function() {
            $('.mdb-select').material_select();
          });
    </script>

    <div class="container">
    <div class="card hoverable">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-pencil"></i> Sign up</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        <br>
        <form method="post" action="<?= ROOT_PATH.'user/register'?>" name="myForm" onsubmit="returnValidate()">
        <!--Body-->
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form3" name="first_name" class="form-control validate" >
                        <label for="form3">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form4" name="last_name" class="form-control validate">
                        <label for="form4">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="md-form">
                <input type="date" name="dob" id="dob" class="form-control validate" >
            </div>


            <select class="mdb-select">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label>Example label</label>


            <div class="md-form">
                <input onchange="checkUniqueMail(this.value)" type="email" name="email" id="form2" class="form-control validate" >
                <label for="form2">Your email</label>
                <p style="color: red;" id="email"></p>
            </div>

            
            
            <div class="md-form">
                <input type="text" name="username" id="form2" class="form-control validate"  onchange="checkUniqueUser(this.value)">
                <label for="form2">Username</label>
                <p style="color: red;" id="user"></p>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="password" id="form1" name="password" class="form-control validate" >
                        <label for="form3">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="password" id="form0" name="re-password" class="form-control validate" >
                        <label for="form4">Re-password</label>
                    </div>
                </div>
            </div>
            
            

        <div class="text-xs-center">
            <button class="btn btn-deep-orange" type="submit" name="submit" value="submit">Send</button>
        </div>
            
            <div class="modal-footer">
                <p>Already registered? <a href="<?=ROOT_PATH.'user/login'?>">Login</a></p>
            </div>
        </form>
    </div>
</div>
</div>