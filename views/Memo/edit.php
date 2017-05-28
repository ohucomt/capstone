
<?php
	$item = $viewmodel;
	

?>

<div class="card-block">
    <div>
        <h3><i class="fa fa-pencil"> Edit Memo:</i></h3>
        <hr class="mt-2 mb-2">
    </div>
    <form method="post" action="<?=ROOT_PATH.'memo/edit/'.$item['id']?>">

        <div class="md-form">
          <input type="text" name="title" id="titletext" class="form-control">
          <label for="titletext">Title</label>
          <input type="hidden" id="title" value="<?= $item['title']?>">
        </div>
        <div class="md-form">            
            <textarea type="text" id="bodytext" name="body" class="md-textarea"></textarea>
            <label for="bodytext">Content</label>
            <input type="hidden" id="body" value="<?= $item['body']?>">
        </div>

        <div class="form-inline">

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
            <button class="btn btn-success" type="submit" name="submit" value="submit">Done</button>
            <a class="btn btn-danger" href="<?=ROOT_PATH.'memo'?>">Cancel</a>
        </div>
        
    </form>
</div>



<script type="text/javascript">
	var body = document.getElementById("body").value;
	document.getElementById("bodytext").value = body;
    body = document.getElementById("title").value;
    document.getElementById("titletext").value = body;

</script>