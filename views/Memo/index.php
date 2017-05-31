
<div class="card-block">
    <div>
        <h3><i class="fa fa-pencil"> New Memo:</i></h3>
        <hr class="mt-2 mb-2">
    </div>
    <form method="post" action="<?=ROOT_PATH.'memo/add'?>">

        <div class="md-form" id="inputTitle">
          <input type="text" name="title" id="title" class="form-control">
          <label for="title">Title</label>
        </div>
        <div class="md-form">
            <textarea class="md-textarea validate" id="form1" type="text" name="body" onfocus="showTakeNote()" onfocusout="hideTakeNote(this.value)" require></textarea>
            <label for="form1">Take a note...</label>
        </div>

        <div class="form-inline" id='colorPicker'>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio11"  value="danger-color">
                <label for="radio11" style="color: #ff4444">Red</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio21" value="warning-color">
                <label for="radio21" style="color: #ffbb33">Yellow</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio31" value="success-color">
                <label for="radio31" style="color: #00C851">Green</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio32" value="info-color">
                <label for="radio32" style="color: #33b5e5">Mint</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio33" value="default-color">
                <label for="radio33" style="color: #2BBBAD">Mint Drak</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio34" value="primary-color">
                <label for="radio34" style="color: #4285F4">Blue</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio35" value="secondary-color">
                <label for="radio35" style="color: #aa66cc">Violet</label>
            </fieldset>

            <fieldset class="form-group">
                <input name="group1" type="radio" id="radio36" value="" checked="checked">
                <label for="radio36">None</label>
            </fieldset>

        </div>
        
        <div class="text-right">
            <button class="btn btn-success" id="submitBtn" type="submit" name="submit" value="submit">Add</button>
        </div>
        
    </form>
</div>

<script type="text/javascript">
  document.getElementById('inputTitle').style.visibility = 'hidden';
  document.getElementById('colorPicker').style.visibility = 'hidden';
  document.getElementById('submitBtn').style.visibility = 'hidden';
  function hideTakeNote(value){
    if(value.length < 1){
      document.getElementById('inputTitle').style.visibility = 'hidden';
      document.getElementById('colorPicker').style.visibility = 'hidden';
      document.getElementById('submitBtn').style.visibility = 'hidden';
    }
  }

  function showTakeNote(){
    document.getElementById('inputTitle').style.visibility = 'visible';
    document.getElementById('colorPicker').style.visibility = 'visible';
    document.getElementById('submitBtn').style.visibility = 'visible';
  }
</script>


<div class="card-columns">
    <?php

	foreach ($viewmodel as $item) { 
    ?>
    <div>
        <div class="card hoverablea <?=$item['color']?>">
            <div class="card-block ">
                <div class="card-title ">
                   <div class="row">
                       <div class="col-md-9">
                          <h3 class="card-title"><?= $item['title']?></h3>
                          <small style="font-size: 0.8em;"><?= $item['created_date']?></small>
                       </div>
                       <div class="col-md-1">
                            <a href="<?=ROOT_PATH.'memo/edit/'.$item['id']?>"><i class="fa fa-pencil" ></i></a>
                       </div>
            
                       <div class="col-md-1">
                           <a href="<?=ROOT_PATH.'memo/delete/'.$item['id']?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" ></i></a>
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
    
</div>

