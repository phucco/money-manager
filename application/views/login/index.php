<!DOCTYPE html>
<html>
    <head>

        <?php $this->load->view('layouts/head', $this->data); ?>

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><span class="glyphicon glyphicon-lock"></span> Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="" role="form">
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control"  name="email" type="email" placeholder="My email, not yours" autofocus value="<?php echo set_value('email'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Can you guess?" value="<?php echo set_value('password'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input class="form-control" name="code" type="text" placeholder="<?php echo $random_code; ?>" value="<?php echo set_value('code'); ?>" autocomplete="off">
                                </div>
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                <hr>
                                <button type="submit" name="login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span>  Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <small >Copyright © 2019 Money Manager | All right Reserved</small>
            </div>
        </div>

    </body>
</html>