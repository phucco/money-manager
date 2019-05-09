<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Income Categories</h1>
    </div>
</div>
<?php $this->load->view('layouts/alert', $this->data); ?>
<a href="#new" class="btn white btn-success" data-toggle="modal">
    <i class="fa fa-plus"></i> Add New Category
</a>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> List Category 
                </div>
                <div class="panel-body">                    
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-left">Category</th>
                                <th class="text-left">Count Transaction</th>
                                <th class="text-left">Action</th>                           
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($list as $row) : ?>
    						<tr>
                                <td class="text-center"><?php echo $row->id; ?></td>
    				            <td><?php echo $row->name; ?></td>
    				            <td><?php echo $row->count_transaction; ?></td>
                				<td class="notification">
                					<a href="#EditCat<?php echo $row->id; ?>"data-toggle="modal">
                                        <span class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="left" data-original-title="Edit Category"></span>
                                    </a>
                					<a href="#DeleteCat<?php echo $row->id; ?>" data-toggle="modal">
                                        <span class="btn btn-primary btn-xs glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" data-original-title="Delete Category"></span>
                                    </a>			
                				</td>
    			            </tr>
                            
                            <?php endforeach; ?>
        	        	</tbody>
    			
                        <tfoot>
                            <tr>
                                <th class="text-center">ID</th>
                               	<th class="text-left">Category</th>
                                <th class="text-left">Count Transaction</th>       
                                <th class="text-left">Action</th>           
                            </tr>
                        </tfoot>
                    </table>
                </div>
                   
            </div>
               
        </div>
           
    </div>


<?php /*
<form action="" method="post">
    <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">  
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New Category</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input class="form-control" required="" placeholder="Category" name="new_category" type="text" autofocus>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($list as $row) : ?>

        <div class="modal fade" id="EditCat<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Edit Category</h4>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <input class="form-control" required="" name="edit_category" value="<?php echo $row->name; ?>" type="text" autofocus>
                                    <input type="hidden" name="category_id" value="<?php echo $row->id; ?>">
                                </div>
                        </div>
                        <div class="modal-footer">                 
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</form>
*/ ?>