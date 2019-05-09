<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Income Reports</h1>
    </div>
</div>
<?php $this->load->view('layouts/alert', $this->data); ?>
<a href="<?php echo base_url('transaction/add/'); ?>" class="btn white btn-success" data-toggle="modal">
    <i class="fa fa-plus"></i> New Transaction
</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> History of Incomes
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-uppercase">
                            <th class="text-left">Date</th>
                            <th class="text-left">Category</th>
                            <th class="text-left">Title</th>
                            <th class="text-right">Amount</th>
                            <th class="text-left">Account</th>
                            <th class="text-left">Description</th>
                            <th class="text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($list as $row) : ?>
						<tr class="active">
				            <td><?php echo $row->date; ?> <a href="<?php echo base_url('transaction/income'); ?>">
                                    <span class="btn btn-primary btn-xs glyphicon glyphicon-plus-sign"></span>
                                </a></td>
                            <td><?php echo $row->category_name; ?></td>
				            <td><?php echo $row->content; ?></td>
                            <td class="text-right"><?php echo money($row->amount); ?></td>
                            <td><?php echo $row->account_name; ?></td>
                            <td><?php echo $row->description; ?></td>
            				<td class="notification">
            					<a href="#EditCat<?php echo $row->id; ?>"data-toggle="modal">
                                    <span class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="left" data-original-title="Edit Transaction"></span>
                                </a>
            					<a href="#DeleteCat<?php echo $row->id; ?>" data-toggle="modal">
                                    <span class="btn btn-primary btn-xs glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" data-original-title="Delete Transaction"></span>
                                </a>
            				</td>
			            </tr>
                        <?php endforeach; ?>
    	        	</tbody>

                    <tfoot>
                        <tr class="text-uppercase">
                           	<th class="text-left">Date</th>
                            <th class="text-left">Category</th>
                            <th class="text-left">Title</th>
                            <th class="text-right">Amount</th>
                            <th class="text-left">Account</th>
                            <th class="text-left">Description</th>
                            <th class="text-left">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </div>

</div>