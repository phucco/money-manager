<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('layouts/head', $this->data); ?>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="headmain">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">Money Manager</a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>Welcome! </li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav font-sidebar" id="side-menu">
                            <li>
                                <a class="active" href="index.php"><i class="glyphicon glyphicon-home"></i>  Dashboard<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="index.php?page=Transaction"><i class="glyphicon glyphicon-refresh"></i>  Transaction<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="index.php?page=AssetReport"><i class="glyphicon glyphicon-stats"></i>  Incomes<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="index.php?page=ExpenseReport"><i class="glyphicon glyphicon-list-alt"></i> Expenses<span class="fa arrow"></span></a>
                            </li><li>
                        </li><li>
                        <a href="index.php?page=ManageAccount"> <i class="fa fa-tags"></i> Account<span class="fa arrow"></span></a>
                    </li>
                    <li><a href="index.php?page=ManageBudget"><i class="fa fa-archive"></i> Budgets<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a class="parent" href="javascript:void(0)"><i class="fa fa-gears"> </i> Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" id="subitem">
                        <li>
                            <a href="index.php?page=ManageExpenseCategory"><i class="fa fa-caret-right"></i> Expense Categories</a>
                        </li>
                        <li>
                            <a href="index.php?page=ManageIncomeCategory"><i class="fa fa-caret-right"></i> Income Categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="parent" href="javascript:void(0)"><i class="fa fa-print"> </i> Reports &amp; Graphs<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="subitem" href="index.php?page=IncomeVsExpense"><i class="fa fa-caret-right"> </i> Income Vs Expense</a>
                        </li>
                        <li>
                            <a id="subitem" href="index.php?page=IncomeCalender"><i class="fa fa-caret-right"> </i> Income Calender</a>
                        </li>
                        <li>
                            <a id="subitem" href="index.php?page=ExpenseCalender"><i class="fa fa-caret-right"> </i> Expense Calender</a>
                        </li>
                        <li>
                            <a id="subitem" href="index.php?page=AllIncomeReports"><i class="fa fa-caret-right"></i> Income Reports</a>
                        </li>
                        <li>
                            <a id="subitem" href="index.php?page=AllExpenseReports"><i class="fa fa-caret-right"></i> Expense Reports</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?page=Settings"><i class="fa fa-user"> </i> Profile Settings<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="index.php?action=logout"><i class="glyphicon glyphicon-log-out"></i>  Logout<span class="fa arrow"></span></a>
                </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-calendar fa-4x"></i>
                                </div>
                                <div class="col-xs-12 text-left">
                                    <h2>$ 0</h2>
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
                                    <h2>$ 0</h2>
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
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-resize-full fa-4x"></i>
                                </div>
                                <div class="col-xs-12 text-left">
                                    <h2>$ 0 </h2>
                                    <div>Your Total Expense</div>
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
                                    <h2>$ 0 </h2>
                                    <div>Your Current Total Balance</div>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Latest 10 Income
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Account</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center"><a href="index.php?page=AssetReport">View Details</a></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-info">
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
                    <!-- /.panel -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Budget Progress On <b>April 2019</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                                <div class="text-center"></div>
                                <!-- /.col-lg-4 (nested) -->
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Latest 10 Expense
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>Account</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <div class="text-center"><a href="index.php?page=ExpenseReport">View Details</a></div>
                                <!-- /.col-lg-4 (nested) -->
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Reports Expense/Income                        </div>
                        <div class="panel-body">
                            <div id="incomevsexpense">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Report Expense/Income This Month                        </div>
                        <div class="panel-body">
                            <div id="incomevsexpensemonth">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        </div>
<!-- /#page-wrapper -->
<script>
/*$(function() {
        Morris.Donut({
element: 'incomevsexpense',
data: [
            {
label: "Expense $",
            value:          },
            {
label: "Income $",
            value:          },
],
resize: true
        });
        Morris.Donut({
element: 'incomevsexpensemonth',
data: [
            {
label: "Expense $",
            value:          },
            {
label: "Income $",
            value:          },
],
resize: true
});
$('.notification').tooltip({
selector: "[data-toggle=tooltip]",
container: "body"
})
});*/
</script>
<script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
<!--<script src="<?php echo base_url(); ?>js/migrate.js"></script>-->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/fullcalender/lib/moment.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/fullcalender/fullcalendar.min.js"></script>
<!--<script src="<?php echo base_url(); ?>js/plugins/qtip/jquery.qtip.min.js"></script>-->
<!-- Morris Charts JavaScript -->
<!-- <script src="<?php echo base_url(); ?>js/plugins/morris/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/morris/morris-data.js"></script> -->
<!-- Datepicker JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
<!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/dataTables/dataTables.bootstrap.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>js/sb-admin-2.js"></script>
<script>

$(document).ready(function () {
    $('#income .input-group.date').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true
    });
    $('#expense .input-group.date').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true
    });
});
</script>

</body>
</html>