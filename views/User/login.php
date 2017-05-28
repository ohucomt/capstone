<div class="container">
           <div class="card hoverable">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Login</h3>
            <hr class="mt-2 mb-2">
        </div>
        <br>
        <form method="post" action="<?= ROOT_PATH.'user/login'?>">
        <!--Body-->
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" name="username" class="form-control" >
            <label for="form3">Username</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" name="password" id="form2" class="form-control" >
            <label for="form2">Password</label>
        </div>

        <div class="text-xs-center">
            <button class="btn btn-deep-orange" type="submit" name="submit">Send</button>
        </div>
            
            <div class="modal-footer">
                <div class="options">
                    <p>Not a member? <a href="<?=ROOT_PATH.'user/register'?>">Register</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
