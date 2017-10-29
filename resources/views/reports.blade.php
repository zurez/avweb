@extends("layout.common")
@section('content')
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
							<select class="form-control"><option selected="selected">Transaction Status</option>
                                <option>Successfull</option>
								<option>Failed</option>
								<option>Pending</option>
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
                                    <th class='text-center'>Unique ID</th>
									<th class='text-center'>UTR No.</th>
                                    <th class='text-center'>Beneficiary&nbsp;Name</th>
                                    <th class='text-center'>District</th>
                                    <th class='text-center'>Mobile&nbsp;No.</th>
                                    <th class='text-center'>Bank&nbsp;Account&nbsp;No.</th>
                                    <th class='text-center'>IFSC</th>
                                    <th class='text-center'>Block</th>
                                    <th class='text-center'>Fathers&nbsp;Name</th>
                                    <th class='text-center'>Adhaar&nbsp;No.</th>
                                    <th class='text-center'>Date&nbsp;of&nbsp;Birth</th>
                                    <th class='text-center'>Differently&nbsp;Abled</th>
									<th class='text-center'>Pension&nbsp;Paid <br>(In Rupees)</th>
									<th class='text-center'>Arrear&nbsp;Paid <br>(In Rupees)</th>
									<th class='text-center'>Amount&nbsp;Paid <br>(In Rupees)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>54xx2167</td>
									<td class='text-center'>4576547864</td>
                                    <td class='text-center'>Ram Sharan</td>
                                    <td class='text-center'>Patna</td>
                                    <td class='text-center'>8989898989</td>
                                    <td class='text-center'>532125185691</td>
                                    <td class='text-center'>SBI01234444</td>
                                    <td class='text-center'>Ashiana</td>
                                    <td class='text-center'>Mahesh&nbsp;Sharan</td>
                                    <td class='text-center'>501243526745</td>
                                    <td class='text-center'>23/04/1984</td>
                                    <td class='text-center'>Yes</td>
									<td class='text-center'>800</td>
									<td class='text-center'>400</td>
									<td class='text-center'>1200</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>3456xx</td>
									<td class='text-center'>8761325165</td>
                                    <td class='text-center'>Madhur Bhaskar</td>
                                    <td class='text-center'>Madhepura</td>
                                    <td class='text-center'>9842561736</td>
                                    <td class='text-center'>657634987678</td>
                                    <td class='text-center'>PNB01234534</td>
                                    <td class='text-center'>Naurangpur</td>
                                    <td class='text-center'>Naren&nbsp;Bhaskar</td>
                                    <td class='text-center'>786438910287</td>
                                    <td class='text-center'>13/05/1964</td>
                                    <td class='text-center'>No</td>
									<td class='text-center'>1200</td>
									<td class='text-center'>400</td>
									<td class='text-center'>1600</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>xx1256</td>
									<td class='text-center'>5643217865</td>
                                    <td class='text-center'>Shiv Mahato</td>
                                    <td class='text-center'>Patna</td>
                                    <td class='text-center'>8767546239</td>
                                    <td class='text-center'>532165437812</td>
                                    <td class='text-center'>IDB01236544</td>
                                    <td class='text-center'>Digha</td>
                                    <td class='text-center'>Sanjeev&nbsp;Mahato</td>
                                    <td class='text-center'>672184390123</td>
                                    <td class='text-center'>23/10/1974</td>
                                    <td class='text-center'>No</td>
									<td class='text-center'>2000</td>
									<td class='text-center'>1200</td>
									<td class='text-center'>3200</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
                                    <td class='text-center'>56xx12</td>
									<td class='text-center'>1527865419</td>
                                    <td class='text-center'>Vineet Kumar</td>
                                    <td class='text-center'>Saharsa</td>
                                    <td class='text-center'>8989898989</td>
                                    <td class='text-center'>532125185691</td>
                                    <td class='text-center'>SBI01234674</td>
                                    <td class='text-center'>Rampur</td>
                                    <td class='text-center'>Vinod&nbsp;Kumar&nbsp;Gupta</td>
                                    <td class='text-center'>673421786524</td>
                                    <td class='text-center'>03/04/1956</td>
                                    <td class='text-center'>No</td>
									<td class='text-center'>200</td>
									<td class='text-center'>200</td>
									<td class='text-center'>400</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>5.</td>
                                    <td class='text-center'>98765x</td>
									<td class='text-center'>1527821349</td>
                                    <td class='text-center'>Prabhu Nandan</td>
                                    <td class='text-center'>Madhepura</td>
                                    <td class='text-center'>8768453210</td>
                                    <td class='text-center'>000987645312</td>
                                    <td class='text-center'>HDF01234562</td>
                                    <td class='text-center'>Madhaili</td>
                                    <td class='text-center'>Dinesh&nbsp;Nandan</td>
                                    <td class='text-center'>908769005431</td>
                                    <td class='text-center'>21/04/1992</td>
                                    <td class='text-center'>Yes</td>
									<td class='text-center'>600</td>
									<td class='text-center'>200</td>
									<td class='text-center'>800</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>6.</td>
                                    <td class='text-center'>0043xx</td>
									<td class='text-center'>6543854192</td>
                                    <td class='text-center'>Gurucharan Das</td>
                                    <td class='text-center'>Patna</td>
                                    <td class='text-center'>9011287654</td>
                                    <td class='text-center'>000088761281</td>
                                    <td class='text-center'>SBI08917238</td>
                                    <td class='text-center'>Patliputra</td>
                                    <td class='text-center'>Mohan&nbsp;Das</td>
                                    <td class='text-center'>673829109281</td>
                                    <td class='text-center'>14/08/1954</td>
                                    <td class='text-center'>No</td>
									<td class='text-center'>4000</td>
									<td class='text-center'>1600</td>
									<td class='text-center'>5600</td>
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