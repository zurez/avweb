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
			<span  id="table" style="display:none">
                <div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:Grey;color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th colspan="2"></th>
                                    <th colspan="2" class="text-center">General Component</th>
                                    <th colspan="2" class="text-center">Special Component</th>
                                    <th colspan="1" class="text-center">TSP Component</th>
                                </tr>
                                <tr style="text-align:center">
                                    <th></th>
                                    <th colspan="1">Scheme</th>
                                    <th colspan="1">Center</th>
                                    <th colspan="1">State</th>
                                    <th colspan="1">Center</th>
                                    <th colspan="1">State</th>
                                    <th colspan="1">Center</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>IGNOAPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty1"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya"id="qtya1" ></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                  
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>IGNWPS</td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qty" id="qty2"></td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qtya" id="qtya2"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>IGNDPS</td>
                                   <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty3"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya3"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                   
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
                                    <td class='text-center'>LSSPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty4"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya4"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>5.</td>
                                    <td class='text-center'>BDPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty5"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya5"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                   
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>6.</td>
                                    <td class='text-center'>SSSPS</td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qty" id="qty6"></td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qtya" id="qtya6"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>_</td>
                                    <td class='text-center'>Total Amount</td>
                                    <td class='text-center'><input type="text" name="total" id="total"></td>
                                    <td class='text-center'><input type="text" name="totala" id="totala"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>

                                
                           
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Remarks">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary pull-left" Style="Width:100PX" onclick="myFunction()">Allot</button>
                    </div>
                    <div class="col-sm-2">
                        <!-- <button class="btn btn-warning pull-left">Reject</button> -->
                    </div>
                </div>
                </span>
			
@stop