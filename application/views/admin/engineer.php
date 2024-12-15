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
            height: 100px;
            width: 150px;
        }

        .t {
            height: 100px;
            width: 150px;
        }
        td{
            text-align: center;
        }
        td p{
            margin-top: 17px;
        }
        td a i{
            margin-top: 40px;
            margin-right: 20px;
        }
    </style>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/admin/engineershownew"><i
                            class="fa fa-edit"></i> Insert </a></button>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Engineers Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNO</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Image Size</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Content</th>
                                        <th class="text-center">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($engineer as $row): ?>
                                        <tr>
                                            <td><p><?php echo $i; ?></p></td>
                                            <td width="200" height="50"><img class="imgn"
                                                    src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" />
                                            </td>
                                            <td><p>50X50</p></td>
                                            <td width="200" height="50"><p><?php echo $row['title']; ?></p></td>
                                            <td width="200" height="50"><p><?php echo $row['content']; ?></p></td>



                                            <td width="200" height="100">

                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/engineershowupdate?id=<?php echo $row['id']; ?>"><i
                                                        class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/slidedelete?id=<?php echo $row['id']; ?>&slide=<?php echo $row['img']; ?>&tname=engineers"><i
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