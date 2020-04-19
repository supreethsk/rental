<?php
 $id=$_GET['id'];
 
?>
<style>
::-webkit-textarea-placeholder { /* Chrome */
  color: #C8C8C8;
}
:-ms-textarea-placeholder { /* IE 10+ */
  color: #C8C8C8;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #C8C8C8;
  
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: #C8C8C8;
  
}
.Editor-editor{
  max-height: 300px;
}
.overflowscroll{
  overflow-y:scroll;
  height: 500px ;
  
}
.panel-heading {
    background-color: #23AEAC !important;
    color: #fff!important;
    border-color: #23AEAC  !important;
}
div.userProfilePanel {
    border-color: #ea7025!important;
    border-radius: 0px !important;
    border: 1px solid #23AEAC !important;
    /*border-top: 10px solid #F67F21 !important;*/
}
.panelmargin{
  margin-top: 3px;
}
    
    #sidebar{
        display: none;
    }
    
    #gallery{
        display: none;
    }
      @media only screen and (max-width: 600px) {
 .res{
   width: 100%;
   /*margin-top: 70px;*/
   overflow: auto;
   background-color: white;
   border:none;
  box-shadow: 0px 1px 0px lightgrey;
  }
   .navbar {
      position: relative;
  }
}
@media only screen and (min-width: 768px) {
 .res{
 margin-left: 213px;
 background-color: white;
 border:none;
  box-shadow: 0px 1px 0px lightgrey;
  }
  .later{
    margin-top: 10px;
  }
}
</style>  
</style>
<div class="row"> 
      <div class="col-md-8" style="margin-top: 50px;padding-left: 50px;">
          <form action="sent.php" method="POST">
         <div class="form-group">
          
                   <label>Enter Recipient Name</label>
                          <input type="text" class="form-control" name="To" value="<?php echo $id;?>">
          </div>
                  <textarea class="tinymce form-control mt-3" name="tinymce" value="">
                
                 
                
               </textarea>
         <button type="submit" class="btn"style="background-color:  #189eb5;margin-top: 25px;">Send</button>
         <!--  <button type="button" class="btn cancel" onclick="closeForm()"style="background-color:  #189eb5;margin-top: 25px;">Close</button> -->
        </form>
      </div>
  <script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>  
    