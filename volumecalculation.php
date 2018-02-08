<?php require_once "include/header_html.php"; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<?php require_once "include/nav_html.php"; ?>

  <div class="content-wrapper">
    <div class="container-fluid">
   		
        <div class="alert alert-danger" id="alertID" style="display: none;">
          <strong>Alert !</strong> Fields Cannot Be Empty !
        </div>

   		<div class="card" style="background: #0C4781;color:#fff;">
   		<div class="card-header">Volume Calculation</div>
   		<div class="card-body">
   			<div class="row">
   				<div class="col-md-3">
				  <div class="form-group">
				    <label>Length ( cm )</label>
				    <input type="text" class="form-control" id="lenID">
				  </div>
				</div>
				<div class="col-md-3">
				  <div class="form-group">
				    <label>Thickness ( cm )</label>
				    <input type="text" class="form-control" id="thiID">
				  </div>
				</div>
				<div class="col-md-3">
				  <div class="form-group">
				    <label>Height ( cm )</label>
				    <input type="text" class="form-control" id="heiID">
				  </div>
				</div>
				<div class="col-md-3">
				  <div class="form-group">
				    <label>&nbsp;</label>
				    <a href="javascript:void(0)" id="calID" class="form-control btn btn-warning">Calculate</a>
				  </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<label>Result : Litres </label>
				    <input type="text" class="form-control" id="resultID">
				</div>
			</div>
   		</div>
		</div>
    </div>
   
    <?php require_once "include/footer_html.php"; ?>

    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#calID").click(function(){
    			lenght=$("#lenID").val();
    			thickness=$("#thiID").val();
    			height=$("#heiID").val();
    			if(lenght!="" && thickness!="" && height!="") {
    				Calculate=(lenght*thickness*height)/1000;
    				$("#resultID").val(Calculate);
    				$("#alertID").hide(500);
    			} else {
    				$("#alertID").show(500);
    			}
    		});
		});
    </script>

  </div>
</body>

</html>
