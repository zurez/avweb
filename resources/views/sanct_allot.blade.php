@extends("layout.common")
@section("content")
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
                    <div class="col-sm-9">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>Scheme Name</th>
                                    <th class='text-center'>Sanction No.</th>
                                    
                                    <th class='text-center'>Date</th>
                                   
                                    <th class='text-center'>Sanction<br>Amount</th>
                                    <th class='text-center'>Alloted<br>Amount</th>
                                    <th class='text-center'>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>IGNOAPS</td>
                                    <td class='text-center'>156437</td>
                                    <td class='text-center'>24/07/2016</td>
                                    <td class='text-center'>43000000</td>
                                    <td class='text-center'>13500000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNWPS</td>
                                    <td class='text-center'>432637</td>
                                    <td class='text-center'>16/09/2017</td>
                                    <td class='text-center'>67000000</td>
                                    <td class='text-center'>45400000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNDPS</td>
                                    <td class='text-center'>786541</td>
                                    <td class='text-center'>10/10/2017</td>
                                    <td class='text-center'>65000000</td>
                                    <td class='text-center'>25001000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>LSSPS</td>
                                    <td class='text-center'>786547</td>
                                    <td class='text-center'>22/07/2015</td>
                                    <td class='text-center'>67000000</td>
                                    <td class='text-center'>43200000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                                
                                 <tr>
                                    <td class='text-center'>BDPS</td>
                                    <td class='text-center'>786549</td>
                                    <td class='text-center'>15/04/2017</td>
                                    <td class='text-center'>11800000</td>
                                    <td class='text-center'>9700000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                </tr>
                                
                                 <tr>
                                    <td class='text-center'>SSSPS</td>
                                    <td class='text-center'>652754</td>
                                    <td class='text-center'>24/09/2016</td>
                                    <td class='text-center'>478600000</td>
                                    <td class='text-center'>142500000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-sm-4">
                        <button class="btn btn-primary pull-left"><i class="fa fa-download"></i>Download</button>
                    </div>
                </div>
                </span>
            
            </div>
@stop