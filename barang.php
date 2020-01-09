<?php 
include "header.php";
?>
<div class="container">

<h3>Data Barang</h3>
<p>Mengelola Data Barang</p>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">+ Add</button>









</div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Form Data Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>









<?php 
include "footer.php";
?>
