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
            		<li><a href="#">Home</a></li>
            		<li><a href="#">Info Terbaru</a></li>
            	</ol>
        </div><hr>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row blog-page" >
            <!-- Left Sidebar -->
        	<div class="col-md-9 md-margin-bottom-40" >

            <?php foreach($query as $row){ ?>
                <!--Blog Post-->
                <div class="row blog blog-medium margin-bottom-40" >
                    <div class="col-md-5">
                        <img class="img-responsive" src="<?php echo base_url($murl.'views/img/middle1.png') ?>" alt="">
                    </div>
                    <div class="col-md-7">
                        <h2><a href="#"><?php echo $row->judul; ?></a></h2>
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar"></i> <?php echo $row->tanggal_upload; ?></li>
                            <li><i class="fa fa-tags"></i> Posting, By Admin Polban</li>
                        </ul>
                        <p><?php echo $row->isi; ?></p>
                        <p><a class="btn-u btn-u-sm" href="blog_item.html">Read More <i class="fa fa-angle-double-right margin-left-5"></i></a></p>
                    </div>
                </div>
                <!--End Blog Post-->
            <?php } ?>

            <hr>
                <!--Pagination-->
                <div class="text-left">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!--End Pagination-->
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
        	<div class="col-md-3">

                <!-- Search Bar -->
                <div class="headline headline-md"><h2>Search</h2></div>
                <div class="input-group margin-bottom-40">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-warning" type="button">Go</button>
                    </span>
                </div>
                <!-- End Search Bar -->

                <!-- Posts -->
                <div class="posts margin-bottom-40">
                    <div class="headline headline-md"><h2>Recent Posts</h2></div>
                    <?php foreach($recent as $row){ ?>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="<?php echo base_url($murl.'views/img/middle1.png')?>" alt="" /></a></dt>
                        <dd>
                            <p><a href="#"><?php
                            $words = explode(" ",$row->isi);
                            $isi = implode(" ",array_splice($words,0,10));
                            echo $isi." ... <a href=''>Read More</a>"; ?></a></p>
                        </dd>
                    </dl>
                    <?php } ?>

                </div><!--/posts-->
                <!-- End Posts -->
            	
            </div>
            <!-- End Right Sidebar -->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

<!--=== footer ===-->		
		<?php echo modules::run('Utama/footer');  ?>
<!--=== footer ===-->		