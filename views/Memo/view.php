<?php
	if(!$viewmodel){
		echo 0;
	}else{
		$item = $viewmodel;
		?>
		<div>
        <div class="card hoverablea <?=$item['color']?>">
            <div class="card-block ">
                <div class="card-title ">
                   <div class="row">
                       <div class="col-md-8">
                          <h3 class="card-title"><?= $item['title']?></h3>
                          <small style="font-size: 0.8em;"><?= $item['created_date']?></small>
                       </div>
                       <div class="col-md-1">
                            <a href="<?=ROOT_PATH.'memo/edit/'.$item['id']?>"><i class="fa fa-pencil" ></i></a>
                       </div>
            
                       <div class="col-md-1">
                           <a href="<?=ROOT_PATH.'memo/delete/'.$item['id']?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" ></i></a>
                       </div>

                       <div class="col-md-1">
                         <a href="<?=ROOT_PATH.'memo/share/'.$item['id']?>"><i class="fa fa-share-alt"></i></a>
                       </div>
                   </div>
                </div>

            
                <p class="card-text"><?= nl2br($item['body'])?></p>
                
            </div>
        </div>
        <br>
    </div>
		<?php
	}
?>