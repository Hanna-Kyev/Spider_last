<div class="col">
    <div class="card">
        <div class="card-header">
        <strong class="card-title"><span data-feather="file-text"></span><?=$title;?></strong> 
        <a href="/admin/brands/create" class="btn 
            btn-primary text-right float-right"><span data-feather="plus"></span>Add new</a>            
        </div>
          <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($brands) && count($brands)>0):?>
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($brands as $brand):?>
                        <tr>
                        <td><?=$brand->id;?></td>
                        <td><?=$brand->name;?></td>
                        <td>
                          <a href="/admin/brands/show/<?=$brand->id?>" class="btn btn-default"><span data-feather="eye"></span> View</a>
                          <a href="/admin/brands/edit/<?=$brand->id?>" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>
                          <a href="/admin/brands/delete/<?=$brand->id?>" class="btn btn-danger"><span data-feather="delete"></span> Delete</a>
                        </td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>  
                <?php else: echo "<h3> No Brands yet... </h3>";?>
                <?php  endif;?>
            </div>
          </div>  
    </div>
</div>