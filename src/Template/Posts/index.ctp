
<div class="row">
<?php echo $this->Flash->render('message');?>
</div>
<div class="row">
  <h2>View All Posts</h2>
</div>
<div class="row">
  <?php echo $this->Html->link('ADD NEW POST', ['action'=>'add'], ['class'=>'btn btn-primary']);?>
</div>
<div class="row">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if(!empty($posts)):?>
    <?php foreach($posts as $post):?>
      <tr class="table-active">
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->description ?></td>
        <td>
          <?php echo $this->Html->link('View', ['action'=>'view', $post->id], ['class'=>'btn btn-primary'])?>
          <?php echo $this->Html->link('Edit', ['action'=>'edit', $post->id], ['class'=>'btn btn-success'])?>
          <?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $post->id],
            ['class'=>'btn btn-danger'],
            ['confirm'=>'Are you sure?']
          )
          ?>
        </td>
      </tr>
  <?php endforeach;?>
    <?php else:?>
      <td>No Record Found!</td>
    <?php endif;?>
    </tbody>
  </table>
</div>