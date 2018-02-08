<?php require_once "include/header_html.php"; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<?php require_once "include/nav_html.php"; ?>

  <div class="content-wrapper">
    <div class="container-fluid">
   			
   		<div class="alert alert-danger" id="alertID" style="display: none;">
          <strong>Alert !</strong> Fields Cannot Be Empty !
        </div>

        <div class="card" style="background: #0C4781;color:#fff;">
   		<div class="card-header">Fahrenheit - Celsius Converter</div>
   		<div class="card-body">
   			<div class="row">
   				<div class="col-md-9">
				  <div class="form-group">
				    <label>Fahrenheit ( F )</label>
				    <input type="text" class="form-control" id="fahID">
				  </div>
				</div>
				<div class="col-md-3">
				  <div class="form-group">
				    <label>&nbsp;</label>
				    <a href="javascript:void(0)" id="conID" class="form-control btn btn-warning">Convert</a>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>Result : Celsius </label>
				    <input type="text" class="form-control" id="resultID">
				</div>
			</div>
   		</div>
		</div>


    </div>
   
    <?php require_once "include/footer_html.php"; ?>

    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#conID").click(function(){
    			fahrenheit=$("#fahID").val();
    			if(fahrenheit!="") {
    				Calculate=(fahrenheit-32)/1.8;
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
