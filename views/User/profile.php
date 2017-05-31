<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <hr>
                <div class="container text-center">
                    <div class="view overlay hm-white-strong">
                        <img style="overflow: hidden;" src="<?= ROOT_PATH ?>uploads/user/avt/<?=$_SESSION['user_data']['avatar']?>" class="" alt="Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar Your avatar">
                        <div class="mask flex-center waves-effect" >
                            <form class="form-inline" action="<?= ROOT_PATH.'profile/changeAvt'?>" enctype="multipart/form-data" method="post" id="abc">
                                <p class="white-text" onclick="uploadFunction()" id="changebtn"><a href="#" class="btn btn-xs btn-link waves-effect">Change</a></p>
                            </form>
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
<script>
    function uploadFunction(){
        var x = document.createElement("INPUT");
        x.setAttribute("type", "file");
        x.setAttribute("name", "avatar");
        x.setAttribute("class", "form-control");
        var y = document.createElement("INPUT");
        y.setAttribute("type", "submit");
        y.setAttribute("name" , "submit");
        y.setAttribute("class", "btn btn-info");
        document.getElementById("abc").appendChild(x);
        document.getElementById("abc").appendChild(y);

        document.getElementById("changebtn").style.visibility = 'hidden';

    }
</script>