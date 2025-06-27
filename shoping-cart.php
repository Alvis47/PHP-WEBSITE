<?php 
include_once "header.php";
include_once "cart.php";
?>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" action="code.php" method="post" >
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2">Product Name</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

								<?php
								if(isset($_SESSION['id'])){
									$cartData = mysqli_query($connection,"select product.*,add_to_cart.* from product inner join add_to_cart on product.p_id=add_to_cart.product_id where add_to_cart.users_id =".$_SESSION['id']."");
									$_SESSION['g_total']=0;
									foreach($cartData as $datagetcart){
										$_SESSION['sub_total']=$datagetcart['product_qty']*$datagetcart['product_price'];

										$_SESSION['g_total']+=$_SESSION['sub_total'];
										?>
										<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/<?php echo $datagetcart['p_image']?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $datagetcart['p_name']?></td>
									<td class="column-3">$<?php echo $datagetcart['product_price']?></td>
									<td class="column-4">

									<td class="column-3"><?php echo $datagetcart['product_qty']?></td>

										<!-- <div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div> -->
									</td>
									<td class="column-5">$<?php echo $_SESSION['sub_total']?></td>
								</tr>
										<?php
									}
								}
								
								?>

							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									$<?php echo $_SESSION['g_total']?>
								</span>
							</div>
						</div>

						<button type="submit" name="checkout" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>


	<?php
	include_once "footer.php";
	
	?>