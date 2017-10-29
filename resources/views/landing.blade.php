@extends('layout.common')
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Dashboard</h4>
                </div>
            </div>
	            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:#4b657b">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><h4>26000000</h4></div>
                                    <div><h6>Total Beneficiaries</h6></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer" style="color:Blue">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading" style="background-color:#454645">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-circle-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="margin-bottom:-12px">
                                    <div><h4>12</h4></div>
                                    <div><h6>Aadhaar Validated Beneficiaries</h6></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading" style="background-color:#454645">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-square fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="margin-bottom:-12px">
                                    <div><h4>124</h4></div>
                                    <div><h6>Aadhaar-Bank Account Seeded Beneficiaries</h6></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading" style="background-color:#4b657b">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="margin-bottom:-14px; margin-top:-15px">
                                    <div><h4>Center 13</h4></div>
									<div><h4>State 13</h4></div>
                                    <div><h6>Fund Sanctioned</h6></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
		<div class="row">
			
			<div class="col-sm-4 panel panel-default" width="40%">
			<div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> BENEFICIARIES<br>
			<canvas id="bar" width="400" height="350"></canvas>
            </div>
			
			</div>
			<div class="col-sm-4 panel panel-default" width="40%">
			<div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> EXPENDITURE<br>
			<canvas id="pie" width="400" height="350"></canvas>
            </div>
			
			</div>
			<div class="col-sm-4 panel panel-default" width="40%">
			<div class="panel-heading">
            <i class="fa fa-book fa-fw"></i> PENSION REOPRT<br><br>
<table style= "font-size:12px;font-weight: bold; margin-left:50px">
 <tr>
        <td colspan="1">Select District&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
        <td colspan="2">
        <select class="form-control"><option selected="selected">Select</option>
        <option>Beguserai</option>
        <option>Madhepura</option>
        <option>Saharsa</option>
        <option>Patna</option>
        </select>
        </td>

  </tr>
  <tr>
        <td colspan="1">Select Block&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
        <td colspan="2">
        <select class="form-control"><option selected="selected">Select</option>
        <option>Beguserai</option>
        <option>Madhepura</option>
        <option>Saharsa</option>
        <option>Patna</option>
        </select>
        </td>

  </tr>
  <tr>
  <td colspan="1">
  <input type="text" class="datepicker form-control" placeholder="From Date">
  </td>
  <td>
  <input type="text" class="datepicker form-control" placeholder="To Date">
  </td>
  </tr>
  <tr>
  <td colspan="1">
  <a href="report1.html" class="btn btn-primary btn-block" style="margin-top:5px;margin-left:40px">Submit</a>
  </td>
  </tr>
 </table>
            </div>
			</div>
			<div class="col-sm-4 panel panel-default" width="40%" style="margin-top:-20px">
			<div class="panel-heading" style="color:#6b8e23; font-size:15px;margin-top:0px">
            <i class="fa fa-support fa-fw"></i>&nbsp; ICICI PFMS HELPDESK<br><br>
			<p><i class="fa fa-phone fa-fw"></i>&nbsp;Call : 040-33593555<br><i class="fa fa-envelope-o fa-fw"></i>&nbsp;Email : icicipfms@icicibank.com</p>
            </div>
			</div>
	    </div>
		
		
		<div class="row">
		
				<div class="col-sm-5">
				<div class="panel-heading panel-default" style="background-color:Grey; color:#fff"> <i class="fa fa-building fa-fw"></i>&nbsp;<strong>EXPENDITURE REPORT</strong> </div>
				
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
	<thead style="background-color:White">
		<tr>
			<th>
				Scheme Name
			</th>
			<th>
				YTD
			</th>
			<th>
				MTD
			</th>
			<th>
				FTD
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				BDPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				IGNDPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				IGNOAPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				IGNWPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				LSSPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				SSSPS
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
	</tbody>
</table>
			
				</div>
				
				<!-- overall balance -->
				<div class="col-sm-3">
				<div class="panel panel-default" style="margin-top:50px">
				<table class="table table-bordered table-condensed table-responsive" style="color:#fff; background-color:#7b6060; font-size:14px">
	<tbody>
		<tr>
			<td>
				Overall Bank Balance
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
		<tr>
			<td>
				Total Expenditure
			</td>
			<td>
				[CONTENT]
			</td>
		</tr>
	</tbody>
</table>
				
	</div>
	</div>
	<!-- overall ends -->	

					<div class="col-sm-4">
					<div class="panel panel-default">
					<div class="panel-heading" style="font-size:15px; background-color:#413842;color:#fff">
                            <i class="fa fa-paperclip fa-fw"></i>&nbsp;NOTICE&nbsp;&nbsp;BOARD
                        </div>
                        <div class="panel-body" style="font-size:12px; text-align:center; background:url('../img/2629.jpg'); color:#fff">
                            <p>This is an example of muted text.</p>
                            <p>This is an example of primary text.</p>
                            <p>This is an example of success text.</p>
                            <p>This is an example of info text.</p>
                        </div>
					
					</div>
					</div>
					<!-- news board -->
				
		</div>
		<!--row2 -->	
@stop