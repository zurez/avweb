@extends("layout.common")
@section('content')
<br><br><br><br><br><br>
<div class="row">
				<div class="col-sm-6">
		
					<div class="panel-heading panel-default" style="background-color:Grey; color:#fff;"> 
					<p>&nbsp;<i class="fa fa-support fa-fw"></i>&nbsp;<strong>Please Enter Details</strong></p>
					
						<table class="table table-condensed table-responsive">
						<thead>
						<tr>
							<th>
								<select class="form-control" style="width:120px"><option selected="selected">Select District</option>
                                <option>Beguserai</option>
                                <option>Madhepura</option>
                                <option>Saharsa</option>
                                <option>Patna</option>
                                </select>
							</th>
							
							<th>
								<select class="form-control"><option selected="selected">Select Block</option>
                                <option>Madhai</option>
                                <option>Patali</option>
                                <option>Digha</option>
                                <option>Saktipur</option>
                                </select>
							</th>

							<th>
							<select class="form-control"><option selected="selected">Financial Year</option>
                                <option>2017-2018</option>
								<option>2018-2019</option>
							</th>
						<tr>
							<th>
							<input type="text" class="datepicker" placeholder="From Date">
							</th>
							<th>
							<input type="text" class="datepicker" placeholder="From Date">
							</th>
							<th>
								<a class="btn btn-primary btn-block" id="submit" onclick="showhide()">Submit</a>
							</th>

						</tr>
						</thead>
						</table>
						
					</div>
					<!-- panel-heading -->
					
				</div>
				
			</div><br>
			<!-- row1 -->
			
			
			<span style="display: none;" id="table">
                <div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>S.No</th>
									<th class='text-center'>Payment File No.</th>
									
                                    <th class='text-center'>Locked On</th>
                                    <th class='text-center'>Pension For</th>
                                    <th class='text-center'>No. of <br>Beneficiaries</th>
									<th class='text-center'>Pension Amount</th>
									<th class='text-center'>Arrear</th>
                                    <th class='text-center'>Total Amount<br>(In Crores)</th>
                                    <th class='text-center'>Sent to PFMS</th>
                                    <th class='text-center'>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
									<td class='text-center'>45xx24xx</td>
									
                                    <td class='text-center'>25/07/2017</td>
                                    <td class='text-center'>June 2017</td>
                                    <td class='text-center'>4300000</td>
									<td class='text-center'>200</td>
									<td class='text-center'>100</td>
                                    <td class='text-center'>300</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
									<td class='text-center'>7865xx5x</td>
									
                                    <td class='text-center'>14/08/2017</td>
                                    <td class='text-center'>July 2017</td>
                                    <td class='text-center'>3000000</td>
									<td class='text-center'>650</td>
									<td class='text-center'>325</td>
                                    <td class='text-center'>975</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Not Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
									<td class='text-center'>45xx3x4z</td>
									
                                    <td class='text-center'>20/09/2017</td>
                                    <td class='text-center'>Aug 2017</td>
                                    <td class='text-center'>2400000</td>
									<td class='text-center'>45.7</td>
									<td class='text-center'>20.2</td>
                                    <td class='text-center'>65.9</td>
                                    <td class='text-center'>No</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
									<td class='text-center'>675xx4x5</td>
									
                                    <td class='text-center'>04/10/2017</td>
                                    <td class='text-center'>Sep 2017</td>
                                    <td class='text-center'>3500000</td>
									<td class='text-center'>78</td>
									<td class='text-center'>34</td>
                                    <td class='text-center'>112</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-sm-6">
                        <button class="btn btn-primary pull-left"> <i class="fa fa-download fw"></i>&nbsp;Download</button>
                    </div>
                </div>
                </span>
@stop