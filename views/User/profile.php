<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <hr>
                <div class="container text-center">
                    <div class="view overlay hm-white-strong">
                        <img style="overflow: hidden;" src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(7).jpg" class="" alt="Your avatar">
                        <div class="mask flex-center waves-effect">
                            <p class="white-text"><a href="#" class="btn btn-xs btn-link waves-effect">Change</a></p>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="list-group">
                        <?php $id = $_SESSION['user_data']['id'];?>
                        <a href="<?= ROOT_PATH.'user/profile/'.$id.'/welcome'?>" class="list-group-item">Welcome</a>
                        <a href="<?= ROOT_PATH.'user/profile/'.$id.'/security'?>" class="list-group-item">Sign-in & security</a>
                        <a href="<?= ROOT_PATH.'user/profile/'.$id.'/info'?>" class="list-group-item">Personal info</a>
                        <a href="<?= ROOT_PATH.'user/profile/'.$id.'/preferences'?>" class="list-group-item">Account preferences</a>
                    </div>
                    <div class="extra-margin"><p> </p></div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <?php
                    $rel = $this->request['rel'];
                    if(empty($rel)){
                        $rel = 'welcome';
                    }
                    require('profile/'.$rel.'.php');
                ?>
            </div>
        </div>
    </div>
</div>