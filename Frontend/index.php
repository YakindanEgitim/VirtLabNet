<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>VirtLabNet Projesi | Yakından Eğitim</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- jquery -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.ready.js"></script>
		
		<!-- bootstrap CSS/JS kutuphaneleri -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		
	</head>
  
	<body>
		<div class="container">
		
		
			<div class="breadcrumb"><h1>VirtLabNet Projesi</h1></div>
			
<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tOverview" data-toggle="tab">Overview</a></li>
    <li><a href="#tNodes" data-toggle="tab">Nodes</a></li>
    <li><a href="#tNetworks" data-toggle="tab">Networks</a></li>
    <li><a href="#tTopology" data-toggle="tab">Topology</a></li>
    <li><a href="#tHelp" data-toggle="tab">Help</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tOverview">
        <h1>Overview</h1>
        <h4 class="alert alert-info" style="width:160px">Current Nodes</h4>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Node Name</th>
                    <th>Creation Time</th>
                    <th>CPU (Mb.)</th>
                    <th>RAM (Mb.)</th>
                    <th>Status</th>
                </tr>            
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Node 1</td>
                    <td>1 May 2013 00:00</td>
                    <td>1024</td>
                    <td>1024</td>
                    <td>On</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Node 2</td>
                    <td>1 May 2013 00:00</td>
                    <td>1024</td>
                    <td>1024</td>
                    <td>On</td>
                </tr>            
            </tbody>
        </table>
        
        <br />
        <h4 class="alert alert-info" style="width:160px">Current Networks</h4>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Network Name</th>
                    <th>Creation Time</th>
                    <th>IPv4</th>
                    <th>IPv6</th>
                </tr>            
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>DualNet</td>
                    <td>1 May 2013 00:00</td>
                    <td>10.10.10.0/24</td>
                    <td>2001:abc:12:12::/64</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>IPv4Net</td>
                    <td>3 May 2013 00:00</td>
                    <td>10.11.11.0/24</td>
                    <td>-</td>
                </tr>          
            </tbody>
        </table>
    </div>
    <div class="tab-pane" id="tNodes">
      <h1>Nodes</h2>
    </div>
    <div class="tab-pane" id="tNetworks">
      <h1>Networks</h2>
    </div>
    <div class="tab-pane" id="tTopology">
      <h1>Topology</h2>
    </div>
    <div class="tab-pane" id="tHelp">
      <h1>Help</h2>
    </div>
  </div>
</div>

		</div>
	</body>
</html>