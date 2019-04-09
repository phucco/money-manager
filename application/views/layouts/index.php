<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_title; ?>">
    <meta name="author" content="Me">

    <title><?php echo $page_title; ?></title>

    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>js/plugins/fullcalender/fullcalendar.css" rel="stylesheet">

     <!-- Datepicker CSS -->
     <link href="<?php echo base_url(); ?>css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="headmain">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Money Manager</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                     Welcome, 
                    adf                </li>
                
               
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li> <a href="index.php?page=Settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
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
                         
                            <!-- /.nav-second-level -->
                    

                                    
                                                   
                        
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

<script>

$(document).ready(function () {
    $(this).parent().addClass("collapse");
    $(".parent").on('click', function () {
        $(this).parent().find("#subitem").slideToggle();
    });
});

</script>
      

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
        <!-- /#page-wrapper -->

   <script>


    /*$(function() {
		 		
		Morris.Donut({
        element: 'incomevsexpense',
        data: [
			
			{
            label: "Expense $",
            value: 			},
			{
            label: "Income $",
            value: 			},		
        ],
        resize: true
		});
		
		Morris.Donut({
        element: 'incomevsexpensemonth',
        data: [
			
			{
            label: "Expense $",
            value: 			},
			{
            label: "Income $",
            value: 			},		
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
   
    </script>


</div></body>
</html>