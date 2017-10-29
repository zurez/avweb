@extends("layout.common")
@section('content')
<div class="row">
				<div class="col-sm-5">
		
					<div class="panel-heading panel-default" style="background-color:Grey; color:#fff;"> 
					<p>&nbsp;<i class="fa fa-support fa-fw"></i>&nbsp;<strong>Search Beneficiary</strong></p>
					<p>
						&nbsp;<input type="radio" name="gender" value="female"> Benificiary ID&nbsp;
						<input type="radio" name="gender" value="other"> Adhaar&nbsp;
						<input type="radio" name="gender" value="other"> Account No.&nbsp;
					</p>
					<p>
						
					</p>
						<table class="table table-condensed table-responsive">
						<thead>
						<tr>
							<th>
								<input type="text" class="form-control" placeholder="*Enter Detail" style="width:140px">
							</th>
							<th>
							*Mandatory
							</th>
							<th>
							</th>
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
			<div class="row">

			<span style="display: none;" id="table">
                <div class="row" >
                    <div class="col-sm-10">
					<div class="panel-heading panel-default" style="background-color:#fff">
                        <table class="table" id="actual_table">
                            <thead>
                                <tr>
                                    <th class='text-center' colspan="3"><i class="fa fa-user"></i>&nbsp;Ramdhari Singh- Begusarai</th>
                                    
                                </tr>
                              
                            </thead>
                            <tbody>
                                <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>Unique ID</td>
                                    <td class='text-center'>34xx56 </td>
                                </tr>
                                <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>Address</td>
                                    <td class='text-center'>34A/21 Patliputra </td>
                              
                                </tr>
                                <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>Date of Birth</td>
                                    <td class='text-center'>12/03/1981 </td>
                                   
                                </tr>
                                  <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>4.</td>
                                    <td class='text-center'>Fathers Name</td>
                                    <td class='text-center'>Shyam Lal</td>
                                   
                                </tr>
                                  <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>5.</td>
                                    <td class='text-center'>Account No.</td>
                                    <td class='text-center'>145278xxxxxx</td>
                                   
                                </tr>
                                  <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>6.</td>
                                    <td class='text-center'>Adhaar No.</td>
                                    <td class='text-center'>50123187xxxx</td>
                                   
                                </tr>
                                </tr>
                                  <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>7.</td>
                                    <td class='text-center'>Mobile No.</td>
                                    <td class='text-center'>876545xxxx</td>
                                   
                                </tr>
                            </tbody>
                        </table>
                        <table class="table" id="actual_table1">
                            <thead>
                                <tr>
                                    <th class='text-center' colspan="6">&nbsp;&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;Pension Payment History</th>
                                    
                                </tr>
                                  <tr>
                                    <th class='text-center'>S.No</th>
                                    <th class='text-center'>Pension for the month of</th>
                                    <th class='text-center'>Pension credited on</th>
									<th class='text-center'>Pension Amount</th>
									<th class='text-center'>Arrear</th>
                                    <th class='text-center'>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>June 2017</td>
                                    <td class='text-center'>15 July 2017 </td>
									<td class='text-center'>800</td>
									<td class='text-center'>400</td>
                                    <td class='text-center'>1200</td>
                                    <td></td>
                                </tr>
                                <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>July 2017</td>
                                    <td class='text-center'>18 Aug 2017</td>
									<td class='text-center'>600</td>
									<td class='text-center'>200</td>
                                    <td class='text-center'>800</td>
                                    <td></td>
                                </tr>
                                    <tr style="background-color: #3299BB;color: white;">
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>August 2017</td>
                                    <td class='text-center'>20 Sep 2017</td>
									<td class='text-center'>1200</td>
									<td class='text-center'>400</td>
                                    <td class='text-center'>1600</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
					
				</div>
                </div>
                <!-- /.row -->
                
                </span>
			</div>
			
		</div>
@stop