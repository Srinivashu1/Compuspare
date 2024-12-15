
<div id="page-wrapper" >
    <div class="header"> 
        <h1 class="page-header">
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Panel</a></li>
            <li class="active">Form Page</li>
        </ol> 
    </div>
		
    <div id="page-inner"> 
        
        <div class="row">
          <br>
        <button id="new" onClick="newinsert()" class="btn btn-default">New Insert</button>
        <button id="update" onClick="update()" class="btn btn-default">Update</button>
        
            <div class="col-lg-12">
            <br>
                <div class="panel inse1 panel-default">
                  
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="<?php echo base_url('index.php/Admin/do_upload');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <label>slide 1</label>
                                    <input type="file" name='slide1' value=1>
                                    </div>
                                    <div class="form-group">
                                    <label>slide 2</label>
                                    <input type="file" name='slide2' value=2>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>slide 3</label>
                                        <input type="file" name='slide3' value=3>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    
                                </form>
                                
                                <form role="form" action="<?php echo base_url('index.php/Admin/serviceinsert');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group" style="margin-top:15px;">
                                      <label>Service Image</label>
                                      <input type="file" name='serviceimg1'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" name='servicetext1'></textarea>

                                    </div>
                                    
                                    
                
                                    
                                    <div class="form-group">
                                      <label>Service Image</label>
                                      <input type="file" name='serviceimg2'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" name='servicetext2'></textarea>

                                    </div>
                                    
                                    
                
                                    
                                    <div class="form-group">
                                      <label>Service Image</label>
                                      <input type="file" name='serviceimg3'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" name='servicetext3'></textarea>

                                    </div>
                                    
                                    
                
                                    
                                    <div class="form-group">
                                      <label>Service Image</label>
                                      <input type="file" name='serviceimg4'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" name='servicetext4'></textarea>

                                    </div>
                                    
                                    
                
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    
                                </form>

                                <form role="form" action="<?php echo base_url('index.php/Admin/supportinsert');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group" style="margin-top:15px;">
                                    <label>Support</label><br>
                                    <label>Image</label>
                                    <input type="file" name='support1'>
                                    </div>
                                    <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="3" name='supporttext'></textarea>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    
                                </form>
                                <form role="form" action="<?php echo base_url('index.php/Admin/applyinsert');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" style="margin-top:15px;">
                                    <label>Apply</label><br>
                                    <label>Image</label>
                                    <input type="file" name='apply1'>
                                    </div>
                                    <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="3" name='applytext'></textarea>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                
                                
                            
                            
                            
                            
                            
                            
                            <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="col-lg-6">
                                
                                
                                <form role="form" action="<?php echo base_url('index.php/Admin/galleryinsert');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <label>Gallery Image</label><br>
                                    <label>Image 1</label>
                                    <input type="file" name='galleryimg1'>
                                    </div>
                                    <div class="form-group">
                                      <label>Image 2</label>
                                      <input type="file" name='galleryimg2'>
                                    </div>
                                    <div class="form-group">
                                    
                                    <label>Image 3</label>
                                    <input type="file" name='galleryimg3'>
                                    </div>
                                    <div class="form-group">
                                    <label>Image 4</label>
                                      <input type="file" name='galleryimg4'>
                                    </div>
                                    <div class="form-group">
                                    
                                    <label>Image 5</label>
                                    <input type="file" name='galleryimg5'>
                                    </div>
                                    <div class="form-group">
                                    <label>Image 6</label>
                                      <input type="file" name='galleryimg6'>
                                    </div>

                              
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    
                                </form>
                                
                                <form role="form" action="<?php echo base_url('index.php/Admin/engineersinsert');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Engineers Add 1</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerimg1'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineertit1'>
                                </div>
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" name='engineercon1'></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Engineers Add 2</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerimg2'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineertit2'>
                                </div>
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" name='engineercon2'></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Engineers Add 3</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerimg3'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineertit3'>
                                </div>
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" name='engineercon3'></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Engineers Add 4</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerimg4'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineertit4'>
                                </div>
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" name='engineercon4'></textarea>
                                </div>
                                
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                
                                
                            
                            
                            
                            
                            
                            
                            <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        
                        
                        
                      </div>
                        <!-- /.row (nested) -->
                    </div>
                    
                    <!-- /.panel-body -->
                    
                </div>
                <div class="panel inse2 panel-default" style="display:none; margin:15px; margin-top:20px;">
                    <div class="panel-heading">
                        Basic Form 
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/updateslide1');?>" method="POST" enctype="multipart/form-data">
                                    <label>slide 1</label>
                                    <input type="file" name='upslide1' value=1><br>
                                    <button class="btn btn-default">Submit</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/updateslide2');?>" method="POST" enctype="multipart/form-data">
                                    <label>slide 2</label>
                                    <input type="file" name='upslide2' value=1><br>
                                    <button class="btn btn-default">Submit</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/updateslide3');?>" method="POST" enctype="multipart/form-data">
                                    <label>slide 3</label>
                                    <input type="file" name='upslide3' value=1><br>
                                    <button>Submit</button>
                                    </form>
                                    </div>
                                    
                                    
                                
                                
                                  <form role="form" action="<?php echo base_url('index.php/Admin/serviceupdate1');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group" >
                                      <label>Service Image 1</label>
                                      <input type="file" name='serviceupdateimg1'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='serviceupdatetext1'></textarea>
                                      <button type="submit" class="btn btn-default">Submit Button</button>
                                    </div>
                                  </form>
                                  <form role="form" action="<?php echo base_url('index.php/Admin/serviceupdate2');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Service Image 2</label>
                                      <input type="file" name='serviceupdateimg2'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='serviceupdatetext2'></textarea>
                                      <button type="submit" class="btn btn-default">Submit Button</button>
                                    </div>
                                  </form>
                                  <form role="form" action="<?php echo base_url('index.php/Admin/serviceupdate3');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Service Image 3</label>
                                      <input type="file" name='serviceupdateimg3'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150"  name='serviceupdatetext3'></textarea>
                                      <button type="submit" class="btn btn-default">Submit Button</button>
                                    </div>
                                  </form>
                                  <form role="form" action="<?php echo base_url('index.php/Admin/serviceupdate4');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Service Image 4</label>
                                      <input type="file" name='serviceupdateimg4'>
                                    </div>
                                    <div class="form-group">
                                      <label>Text area</label>
                                      <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='serviceupdatetext4'></textarea>
                                      <button type="submit" class="btn btn-default">Submit Button</button>
                                    </div>
                                  </form>
                                  <form role="form" action="<?php echo base_url('index.php/Admin/supportupdate');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <label>Support</label><br>
                                    <label>Image</label>
                                    <input type="file" name='supportupdateimg'>
                                    </div>
                                    <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='supportupdatetext'></textarea>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    
                                </form>
                                <form role="form" action="<?php echo base_url('index.php/Admin/applyupdatecon');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group" style="margin-top:20px;">
                                    <label>Apply</label><br>
                                    <label>Image</label>
                                    <input type="file" name='applyupdateimg'>
                                    </div>
                                    <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='applyupdatetext'></textarea>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>

                                <div class="form-group"  style="margin-top:20px;">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate1');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 1</label>
                                    <input type="file" name='galleryupdateimg1'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                                    
                                
                                    
                              
                            
                            <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="col-lg-6">
                                
                                
                            <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate2');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 2</label>
                                    <input type="file" name='galleryupdateimg2'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate3');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 3</label>
                                    <input type="file" name='galleryupdateimg3'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate4');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 4</label>
                                    <input type="file" name='galleryupdateimg4'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate5');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 5</label>
                                    <input type="file" name='galleryupdateimg5'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                                    <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/galleryupdate6');?>" method="POST" enctype="multipart/form-data">
                                    <label>Gallery Image</label><br>
                                    <label>Image 6</label>
                                    <input type="file" name='galleryupdateimg6'><br>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                    </div>
                    
                                


                                <form role="form" action="<?php echo base_url('index.php/Admin/engineersupdate1');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Engineers Add 1</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerupdateimg1'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineerupdatetit1'>
                                </div>
                                
                                
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" name='engineerupdatecon1'></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                <form role="form" action="<?php echo base_url('index.php/Admin/engineersupdate2');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Engineers Add 2</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerupdateimg2'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineerupdatetit2'>
                                </div>
                                
                                
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='engineerupdatecon2'></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                <form role="form" action="<?php echo base_url('index.php/Admin/engineersupdate3');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Engineers Add 3</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerupdateimg3'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineerupdatetit3'>
                                </div>
                                
                                
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='engineerupdatecon3'></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                <form role="form" action="<?php echo base_url('index.php/Admin/engineersupdate4');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Engineers Add 4</label><br>
                                    <label>Image</label>
                                    <input type="file" name='engineerupdateimg4'>
                                </div>
                                <div class="form-group">
                                  <label>title</label><br>
                                  <input type="text" name='engineerupdatetit4'>
                                </div>
                                
                                
                                <div class="form-group">
                                  <label>content</label><br>
                                  <textarea class="form-control" rows="3" col="3" minlength="126" maxlength="150" name='engineerupdatecon4'></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                </form>
                                
                                    
                                    
                                    
                                    
                                
                                
                            
                            
                            
                            
                            
                            
                            <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        
                        
                        
                      </div>
                        <!-- /.row (nested) -->
                    </div>
                    
                    <!-- /.panel-body -->
                    
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        
        <footer><p>All right reserved.<a href="#">Bright Technologies</a></p></footer>			
        <script>
          var newbtn=document.getElementById("new");
          var updbtn=document.getElementById("update");
          var pan=document.querySelector('.inse1');
          var upd=document.querySelector('.inse2');
          function update(){
            pan.style.display = "none";
            upd.style.display = "block";

          }
          function newinsert(){
            pan.style.display = "block";
            upd.style.display = "none";

          }


        </script>
    </div>
    <!-- /. PAGE INNER  -->
</div>