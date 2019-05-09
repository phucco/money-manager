<!DOCTYPE html>
<html>
    <head>

        <?php $this->load->view('layouts/head', $this->data); ?>

    </head>
    <body>

        <div id="wrapper">

            <?php $this->load->view('layouts/navbar', $this->data); ?>

            <div id="page-wrapper">

                <?php $this->load->view($temp, $this->data); ?>

            </div>

        </div>

        <?php $this->load->view('layouts/js_footer', $this->data); ?>
    </body>
</html>