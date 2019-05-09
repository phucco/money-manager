<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Accounts</h1>
    </div>
</div>
<?php $this->load->view('layouts/alert', $this->data); ?>
<a href="#new" class="btn white btn-success" data-toggle="modal">
    <i class="fa fa-plus"></i> Add New Account
</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-red">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> List Account
            </div>
            <div class="panel-body">                    
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-left">Account</th>
                            <th class="text-right">Amount</th>
                            <th class="text-left">Count Transaction</th>
                            <th class="text-left">Action</th>                           
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($list as $row) : ?>
						<tr>
				            <td class="text-center"><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td class="text-right"><?php echo number_format($row->amount); ?></td>
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
                            <th class="text-left">Account</th>
                            <th class="text-right">Amount</th>
                            <th class="text-left">Count Transaction</th>
                            <th class="text-left">Action</th>           
                        </tr>
                    </tfoot>
                </table>
            </div>
               
        </div>
           
    </div>
       
</div>