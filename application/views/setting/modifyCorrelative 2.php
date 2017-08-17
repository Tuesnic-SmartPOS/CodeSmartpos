<div class="container container-small">
   <div class="row" style="margin-top:100px;">
      <a class="btn btn-default float-right" href="#" onclick="history.back(-1)"style="margin-bottom:10px;">
         <i class="fa fa-arrow-left"></i> <?=label("Back");?></a>
      <?php echo form_open_multipart('correlatives/edit/'.$correlative->id); ?>

      <div class="form-group">
      <label for="CAI"><?=label("CAI");?> *</label>
      <input type="text" name="CAI" value="<?=$correlative->CAI;?>" class="form-control" id="CAI" placeholder="<?=label("CAI");?>" required>
     </div>
     <div class="form-group">
        <label for="Prefijo"><?=label("Prefijo");?></label>
        <input type="text" name="Prefijo" value="<?=$correlative->Prefijo;?>" class="form-control" id="Prefijo" placeholder="<?=label("Prefijo");?>">
     </div>
     <div class="form-group">
      <label for="NumIni"><?=label("NumIni");?></label>
      <input type="NumIni" name="NumIni" value="<?=$correlative->NumIni;?>" class="form-control" id="NumIni" placeholder="<?=label("NumIni");?>">
    </div>
     <div class="form-group">
      <label for="NumAct"><?=label("NumAct");?></label>
      <input type="text" name="NumAct" value="<?=$correlative->NumAct;?>" class="form-control" id="NumAct" placeholder="<?=label("NumAct");?>">
     </div>
	 <div class="form-group">
      <label for="NumEnd"><?=label("NumEnd");?></label>
      <input type="text" name="NumEnd" value="<?=$correlative->NumEnd;?>" class="form-control" id="NumEnd" placeholder="<?=label("NumEnd");?>">
     </div>
	 <div class="form-group">
      <label for="DateVen"><?=label("DateVen");?></label>
      <input type="text" name="DateVen" value="<?=$correlative->DateVen;?>" class="form-control" id="DateVen" placeholder="<?=label("DateVen");?>">
     </div>
     
      <div class="form-group">
        <button type="submit" class="btn btn-green col-md-6 flat-box-btn"><?=label("Submit");?></button>
      </div>
      <?php echo form_close(); ?>
    </div>
</div>
