<!--=== header ===-->       
<?php echo modules::run('Utama/header');  ?>
<!--=== header ===-->       

<!--=== Menu ===-->     
<?php echo modules::run('Menu/main');  ?>
<!--=== Menu ===-->



 <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs" style="height: 100px;margin: 20px;">
        <div class="container">
            <!-- <h2 class="pull-left">Blog Medium</h2>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Features</a></li>
                <li class="active">Blog Medium</li>
            </ul> -->
            <h4 style="font-size: 16pt;" class="pull-left"><?php echo $header; ?></h4>
                <ol class="pull-right breadcrumb" style="margin-bottom: 5px;">
                    <li><a href="#">Penelitian</a></li>
                    <li><a href="#">Skema</a></li>
                </ol>
        </div><hr>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content" style="margin-bottom: 30px;">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-12 md-margin-bottom-40">
                <div class="row">
                    <div class="col-md-10">
                        <img src="<?php echo base_url($murl.'views/img/skema.JPG')?>" class="img-responsive" alt="Image">

                    </div>
                </div>
            </div>
            <!-- End Left Sidebar -->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

<!--=== footer ===-->       
        <?php echo modules::run('Utama/footer');  ?>
<!--=== footer ===-->       