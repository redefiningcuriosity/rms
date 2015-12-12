<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Place Order</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Review your Order</h1>
			</div>
		</div><!--/.row-->
	<div class="row">
		<form action="http://localhost/rms/placeorder/payment" method="post">
		<input type="hidden" name="orderarray" value='<?php echo (json_encode($orderarray)); ?>'/>
		<div class="col-lg-12">
			<table class="table table-hover">
				<thead>
									<tr>
										<th><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Type</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Subtype</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Category</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Total Price</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									<?php
									$sum=0;
									foreach($orderarray as $veg)
									{
										$sum+=$veg[m_price]*$veg[quant];
										echo "
										<tr>
											<td>".$veg[m_name]."</td>
											<td>".$veg[m_price]."</td>
											<td>".$veg[m_type]."</td>
											<td>".$veg[m_subtype]."</td>
											<td>".$veg[quant]."</td>
											<td>".$veg[m_price]*$veg[quant]."</td>
										</tr>";
									}?>
									</tbody>
									<tfoot>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<th>Total</th>
											<td><?php echo $sum;?></td>
										</tr>
									</tfoot>
								</table>
							</div>
			</div>
			<div class="row">
			<div class="col-lg-12" style=" text-align: right">
				<input type="Submit" class="btn btn-primary" value="Proceed to Payment">
			</div>
			</form>
		</div>
