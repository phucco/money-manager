<div class="row">
    <div class="col-lg-12">
	    <h1 class="page-header">Transaction</h1>
    </div>
</div>
<?php $this->load->view('layouts/alert', $this->data); ?>
<form action="" method="post" role="form">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-minus"></i> Expenses
                </div>
                <div class="panel-body">
                    <div class="form-group col-lg-6">
                        <label for="econtent">Content</label>
                        <input class="form-control" placeholder="Content" name="econtent" type="text">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="ecategory_id">Category</label>
                        <select name="ecategory_id" class="form-control">
                            <?php echo $expense_dropdown; ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="eamount" class="control-label">Amount</label>
                            <div class="input-group">
							    <input class="form-control" placeholder="Amount" name="eamount" type="text" value="">
                                <span class="input-group-addon">đ</span>
                            </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="eaccount_id">Account</label>
                        <select name="eaccount_id" class="form-control">
                            <?php echo $account_dropdown; ?>                                        
                        </select>
                    </div>
                    <div class="form-group col-lg-6" id="expense">
                         <label for="edate">Date</label>
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
							<input name="edate" class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>">
						</div>
                    </div>
                    <div class="form-group col-lg-12 clearbothh">
                        <label for="edescription">Description</label>
                        <textarea name="edescription" class="form-control"></textarea>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-warning btn-block">
                        <span class="glyphicon glyphicon-log-in"></span>  Save Expense
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   <i class="fa fa-plus"></i> Incomes
                </div>
                <div class="panel-body">
                    <div class="form-group col-lg-6">
				        <label for="icontent">Name</label>
                        <input class="form-control" placeholder="Name" name="icontent" type="text">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="icategory_id">Category</label>
                        <select name="icategory_id" class="form-control">
                            <?php echo $income_dropdown; ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
						<label for="iamount" class="control-label">Amount</label>
						<div class="input-group">
							<input class="form-control" placeholder="Amount" name="iamount" type="text">
                            <span class="input-group-addon">đ</span>
						</div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="iaccount_id">Account</label>
                        <select name="iaccount_id" class="form-control">
                            <?php echo $account_dropdown; ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-6" id="income">
                        <label for="idate">Date</label>
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
							<input name="idate" class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>">
						</div>
                    </div>
                    <div class="form-group col-lg-12 clearbothh">
                         <label for="idescription">Description</label>
                        <textarea name="idescription" class="form-control"></textarea>
                   </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-log-in"></span>  Save Income
                    </button>
                </div>
            </div>
        </div>
    </div>    
</form>