<div class="row">
  <h2>Viw All Posts</h2>
</div>
<div class="row">
  <?php echo $this->Html->link('Add Post', ['action'=>'add'], ['class'=>'btn btn-primary']);?>
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
        <td>Column content</td>
      </tr>
  <?php endforeach;?>
    <?php else:?>
      <td>No Record Found!</td>
    <?php endif;?>
    </tbody>
  </table>
</div>