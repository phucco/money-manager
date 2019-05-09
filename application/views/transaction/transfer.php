<div class="row">
    <div class="col-lg-12">
	    <h1 class="page-header">Transaction</h1>
    </div>
</div>
<?php $this->load->view('layouts/alert', $this->data); ?>
<form action="" method="post" role="form">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   <i class="fa fa-retweet"></i> Transfer from account to another account
                </div>
                <div class="panel-body">
                    <div class="form-group col-lg-6">
				        <label for="content">Name</label>
                        <input class="form-control" placeholder="Name" name="content" type="text" value="<?php set_value('content'); ?>">
                    </div>
                    <div class="form-group col-lg-6" id="income">
                        <label for="date">Date</label>
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                            <input name="date" class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="amount" class="control-label">Amount</label>
                        <div class="input-group">
                            <input class="form-control" placeholder="Amount" name="amount" type="text" value="<?php set_value('amount'); ?>">
                            <span class="input-group-addon">đ</span>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="fee" class="control-label">Bank fees</label>
                        <div class="input-group">
                            <input class="form-control" placeholder="Bank fee" name="fee" type="text" value="<?php set_value('fee'); ?>">
                            <span class="input-group-addon">đ</span>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="faccount_id">From Account</label>
                        <select name="faccount_id" class="form-control">
                            <?php echo $account_dropdown; ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="taccount_id">To Account</label>
                        <select name="taccount_id" class="form-control">
                            <?php echo $account_dropdown; ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12 clearbothh">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" value="<?php set_value('description'); ?>"></textarea>
                   </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-log-in"></span>  Save Tranfer
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>