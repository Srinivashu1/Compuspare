<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">

        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Panel</a></li>
            <li class="active">Table</li>
        </ol>
    </div>
    <style>
    .imgn {
        height: 80px;
        width: auto;
    }

    .trow a i {
        margin-top: 35px;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .sno p{
        
        margin-top: 10px;
        height: auto;
    }
    .imgs p{
        margin-top: 10px;
    }
    </style>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/admin/slideshownew"><i
                            class="fa fa-edit"></i> Insert </a></button>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Slide Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-center"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="sno" style="text-align: center;">SNO</th>
                                        <th style="text-align: center;">Slide</th>
                                        <th style="text-align: center;">Image Size</th>
                                        <th style="text-align: center;">Operation</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($slide as $row): ?>
                                    <tr class="trow">
                                        <td class="sno" style="margin-top: 35px;">
                                            <p><?php echo $i; ?></p>
                                        </td>
                                        <td><img class="imgn"
                                                src="<?php echo base_url() . "/uploads/" . $row['slide']; ?>" alt="" />

                                        </td>
                                        <td class="imgs">
                                            <p>1920x1080px</p>

                                        </td>


                                        <td>

                                            <a
                                                href="<?php echo base_url(); ?>index.php/admin/slideshowupdate?id=<?php echo $row['id']; ?>">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>

                                            <a
                                                href="<?php echo base_url(); ?>index.php/admin/updatestatusf?id=<?php echo $row['id']; ?>&status=1&tname=slide"><i
                                                    class="fa fa-check-circle"></i>
                                            </a>


                                            <a
                                                href="<?php echo base_url(); ?>index.php/admin/updatestatusf?id=<?php echo $row['id']; ?>&status=0&tname=slide"><i
                                                    class="fa fa-times-circle"></i>
                                            </a>

                                            <a
                                                href="<?php echo base_url(); ?>index.php/admin/slidedelete?id=<?php echo $row['id']; ?>&slide=<?php echo $row['slide']; ?>&tname=slide"><i
                                                    class="fa fa-trash"></i>
                                            </a>

                                        </td>

                                    </tr>
                                    <?php $i++; endforeach; ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

        <!-- /. ROW  -->
        <footer>
            <p>All right reserved.<a href="#">Bright Technologies</a></p>
        </footer>
    </div>

</div>