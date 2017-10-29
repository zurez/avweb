@extends("layout.common")
@section('content')
<div class="row">
				<div class="col-sm-4">
		
					<div class="panel-heading panel-default" style="background-color:Grey; color:#fff;"> 
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
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>Scheme Name</th>
									<th class='text-center'>Sanction No.</th>
									
                                    <th class='text-center'>Date</th>
                                    <th class='text-center'>Center/State</th>
                                    <th class='text-center'>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>IGNOAPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNWPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNDPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>LSSPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
								
								 <tr>
                                    <td class='text-center'>BDPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select ><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
                                </tr>
								
								 <tr>
                                    <td class='text-center'>SSSPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
					
					
				<div class="row" >
				
                <div  class="col-sm-2">
                    <button class="btn btn-primary">Print</button>&nbsp;&nbsp;
					<button class="btn btn-primary">Update</button>
                </div>
					<div class="col-sm-4">
					</div>
					<div class="col-sm-2">
					<table>
					<th class='text-center'> Sanction Order No.</th>
					<th class='text-center'> Date</th>
					<tr>
					
					<td class='text-center'><input type="text" name=""></td>
					<td class='text-center'><input type="text" class="datepicker" name=""></td>
					</tr>
					</table>
					
					<br>
					<input type="file" name="fileupload" value="fileupload" id="fileupload"><br>
                    <button class="btn btn-primary pull-left" style="width:150px;" onclick="myFunction()">Upload</button>
					</div>
				
				</div>
                </span>
			
			</div>
@stop