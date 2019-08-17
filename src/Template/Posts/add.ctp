
<fieldset>
    <legend>Add Post</legend>
    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->input('title', ['class'=>'form-control', 'Placeholder'=>'Title']);?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->input('description', ['class'=>'form-control', 'Placeholder'=>'Description']);?>
      </div>
    </div>

    <?php echo $this->Form->button(__('Add Post'), ['class'=>'btn btn-primary']);?>
    <?php echo $this->Html->link('Back', ['action'=>'index'], ['class'=>'btn btn-primary'])?>
  </fieldset>