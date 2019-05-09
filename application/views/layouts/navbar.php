<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="headmain">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Manager</a>
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
                    <a <?php echo ($module == 'dashboard') ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-home"></i>  Dashboard</a>
                </li>
                <li>
                    <a <?php echo ($module == 'transaction' && $action == 'index') ? 'class="active"' : ''; ?> href="<?php echo base_url('transaction/'); ?>"><i class="glyphicon glyphicon-refresh"></i>  Transaction</a>
                </li>
                <li>
                    <a <?php echo ($module == 'transaction' && $action == 'income') ? 'class="active"' : ''; ?> href="<?php echo base_url('transaction/income/'); ?>"><i class="glyphicon glyphicon-stats"></i>  Incomes</a>
                </li>
                <li>
                    <a <?php echo ($module == 'transaction' && $action == 'expense') ? 'class="active"' : ''; ?> href="<?php echo base_url('transaction/expense/'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Expenses</a>
                </li>
                <li>
                    <a <?php echo ($module == 'transaction' && $action == 'transfer') ? 'class="active"' : ''; ?> href="<?php echo base_url('transaction/transfer/'); ?>"><i class="glyphicon glyphicon-retweet"></i> Transfer</a>
                </li>
                <li <?php echo ($module == 'category') ? 'class="active"' : ''; ?>>
                    <a class="parent" href="javascript:void(0);"><i class="fa fa-gears"> </i> Category<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" id="subitem">
                        <li>
                            <a <?php echo ($module == 'category' && $action == 'expense') ? 'class="active"' : ''; ?> href="<?php echo base_url('category/expense/'); ?>"><i class="fa fa-caret-right"></i> Expense Categories</a>
                        </li>
                        <li>
                            <a <?php echo ($module == 'category' && $action == 'income') ? 'class="active"' : ''; ?> href="<?php echo base_url('category/income/'); ?>"><i class="fa fa-caret-right"></i> Income Categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a <?php echo ($module == 'account') ? 'class="active"' : ''; ?> href="<?php echo base_url('account/'); ?>"> <i class="fa fa-tags"></i> Account</a>
                </li>
                <!-- <li>
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
                </li> -->
                <!-- <li>
                    <a href="index.php?page=Settings"><i class="fa fa-user"> </i> Profile Settings</a>
                </li> -->
                <li>
                    <a href="<?php echo base_url('logout/'); ?>"><i class="glyphicon glyphicon-log-out"></i>  Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>