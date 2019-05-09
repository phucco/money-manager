<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-calendar fa-4x"></i>
                    </div>
                    <div class="col-xs-12 text-left">
                        <h2><?php echo money($get_current_expense_this_month) . ' đ'; ?></h2>
                        <div>Current Expense This Month</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-calendar fa-4x"></i>
                    </div>
                    <div class="col-xs-12 text-left">
                        <h2><?php echo money($get_current_income_this_month) . ' đ'; ?></h2>
                        <div>Current Income This Month</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-1">
                        <i class="glyphicon glyphicon-resize-small fa-4x"></i>
                    </div>
                    <div class="col-xs-12 text-left">
                        <h2><?php echo money($get_current_balance_this_month) . ' đ'; ?></h2>
                        <div>Current Balance This Month</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-resize-full fa-4x"></i>
                    </div>
                    <div class="col-xs-12 text-left">
                        <h2><?php echo money($get_total_money) . ' đ'; ?></h2>
                        <div>Your Total Money</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Latest 10 Expense
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Content</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php foreach ($list_10_expense as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->date; ?></td>
                                        <td><?php echo $row->content; ?></td>
                                        <td><?php echo $row->description; ?></td>
                                        <td class="text-right"><?php echo money($row->amount); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo base_url('transaction/expense/'); ?>">View Details</a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- <div class="panel panel-info">
            <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Reports Expense/Income</div>
            <div class="panel-body">
                <div id="incomevsexpense">
                </div>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Report Expense/Income This Month                        </div>
            <div class="panel-body">
                <div id="incomevsexpensemonth">
                </div>
            </div>
        </div> -->
    </div>
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Latest 10 Income
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Content</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_10_income as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->date; ?></td>
                                        <td><?php echo $row->content; ?></td>
                                        <td><?php echo $row->description; ?></td>
                                        <td class="text-right"><?php echo money($row->amount); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo base_url('transaction/income/'); ?>">View Details</a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Account Balances
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Budget Progress On <b>April 2019</b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="text-center"></div>
                </div>
            </div>
        </div> -->
    </div>
</div>