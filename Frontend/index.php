<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>VirtLabNet Projesi | Yakından Eğitim</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- jquery -->
		<script src="js/jquery-1.9.1.min.js"></script>
		
		<!-- bootstrap CSS/JS kutuphaneleri -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		
	</head>
  
	<body>
		<div class="container">
		
		
			<div class="breadcrumb"><h1>VirtLabNet Project</h1></div>
			
            <div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tOverview" data-toggle="tab"><i class="icon-home"></i> Overview</a></li>
                <li><a href="#tNodes" data-toggle="tab"><i class="icon-hdd"></i> Nodes</a></li>
                <li><a href="#tNetworks" data-toggle="tab"><i class="icon-signal"></i> Networks</a></li>
                <li><a href="#tTopology" data-toggle="tab"><i class="icon-random"></i> Topology</a></li>
                <li><a href="#tHelp" data-toggle="tab"><i class="icon-question-sign"></i> Help</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tOverview">
                    <h1>Overview</h1>
                    <h4 class="alert alert-info">Current Nodes</h4>
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
                                <td>
                                    <div class="switch switch-small" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                                        <input type="checkbox" checked />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Node 2</td>
                                <td>1 May 2013 00:00</td>
                                <td>1024</td>
                                <td>1024</td>
                                <td>
                                    <div class="switch switch-small" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                                        <input type="checkbox" />
                                    </div>
                                </td>
                            </tr>            
                        </tbody>
                    </table>
                    
                    <br />
                    <h4 class="alert alert-info">Current Networks</h4>
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
                    <h1>Nodes</h1>
                    <h4 class="alert alert-info">Current Nodes</h4>
                    <button class="btn btn-info" style="float:right; margin-bottom:2px; width:190px"><i class="icon-file icon-white"></i> Create new node</button>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
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
                                <td style="text-align:center"><Input type="checkbox" name="c1" value="1" /></td>
                                <td>1</td>
                                <td>Node 1</td>
                                <td>1 May 2013 00:00</td>
                                <td>1024</td>
                                <td>1024</td>
                                <td>
                                    <div class="switch switch-small" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                                        <input type="checkbox" checked />
                                    </div>
                                    <input type="button" class="icon-refresh" style="width:20px; height:20px; line-height:30px"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center"><Input type="checkbox" name="c2" value="1" /></td>
                                <td>1</td>
                                <td>Node 2</td>
                                <td>1 May 2013 00:00</td>
                                <td>1024</td>
                                <td>1024</td>
                                <td>
                                    <div class="switch switch-small" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                                        <input type="checkbox" />
                                    </div>
                                </td>
                            </tr>            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tNetworks">
                    <h1>Networks</h1>
                    <h4 class="alert alert-info">Current Networks</h4>
                    <button class="btn btn-info" style="float:right; margin-bottom:2px; width:190px"><i class="icon-file icon-white"></i> Create new network</button>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Network Name</th>
                                <th>Creation Time</th>
                                <th>IPv4</th>
                                <th>IPv6</th>
                            </tr>            
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center"><Input type="checkbox" name="c1" value="1" /></td>
                                <td>1</td>
                                <td>DualNet</td>
                                <td>1 May 2013 00:00</td>
                                <td>10.10.10.0/24</td>
                                <td>2001:abc:12:12::/64</td>
                            </tr>
                            <tr>
                                <td style="text-align:center"><Input type="checkbox" name="c2" value="1" /></td>
                                <td>2</td>
                                <td>IPv4Net</td>
                                <td>3 May 2013 00:00</td>
                                <td>192.168.2.0/24</td>
                                <td>-</td>
                            </tr>            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tTopology">
                  <h1>Topology</h1>
                </div>
                <div class="tab-pane" id="tHelp">
                  <h1>Help</h1>
                    <table class="table table-striped">
                            <tr>
                                <td>
                                    VirtLabNet is a project developed throught the Yakindan Egitim (http://www.yakindanegitim.org) project farm.
                                    <br /><br />
                                    VirtLabNet aims enabling usage of virtualization technologies via a web GUI. You may create and use your own 
                                    topology, nodes and networks.
                                    <br /><br />
                                    For more information visit: http://virtlabnet.dyndns.org
                                    <br /><br />
                                    Contributers:<br />
                                    &nbsp; - Aydin Yakar (Developer)<br />
                                    &nbsp; - Emre Yüce (Consultant)
                                </td>
                            </tr>
                    </table>
                </div>
              </div>
            </div>

		</div>
		
        <link href="css/bootstrap.switch.css" rel="stylesheet">
        <script src="js/bootstrap.switch.min.js"></script>
		<script>
            $('#toggle-state-switch-button').on('click', function () {
                $('#toggle-state-switch').bootstrapSwitch('toggleState');
            });
        </script>
	</body>
</html>