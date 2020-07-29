@extends('layouts.master')

@section('main')
<div class="custom-container">
	<section class="makp_breadcrumb bg_image">
		<div class="banner">
			<div class="bg_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb_content text-center">
							<h1 class="font-weight-normal">Thanh toán</h1>
							<ul>
								<li class="mx-1">
									<a href="{{ route('home') }}"><i class="fal fa-home-alt mr-1"></i>Trang chủ</a>
								</li>
								<li class="mx-1">
									<i class="fal fa-angle-right"></i>
								</li>
								<li class=" mx-1 active">Thanh toán</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section class="checkout_section my-5 py-5">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-8">
				<div class="border p-3 p-lg-4">
					<div class="mb-1">
						<h5 class="form_checkout_title">Mời bạn nhập biểu mẫu thanh toán</h5>
					</div>
					<div class="col-lg-12 mt-3">
						<div class="form-group">
							<label for="" class="required">Họ và tên <span class="text-danger">*</span></label>
							<input type="text" class="form-control coupon_code_input"
								placeholder="Nhập họ tên đầy đủ..." name="name">
						</div>
					</div>
					<div class="col-lg-12 mt-3">
						<div class="form-group">
							<label for="" class="required">Email </label>
							<input type="email" class="form-control coupon_code_input" placeholder="Nhập email..."
								name="email">
						</div>
					</div>
					<div class="col-lg-12 mt-3">
						<div class="form-group">
							<label for="" class="required">Số điện thoại <span class="text-danger">*</span></label>
							<input type="text" class="form-control coupon_code_input" placeholder="Nhập SĐT..."
								name="phone">
						</div>
					</div>
					<div class="col-lg-12 mt-3">
						<div class="row">
							<div class="col-lg-4 mt-2">
								<div class="form-group">
									<label for="">Tỉnh/Thành phố <span class="text-danger">*</span></label>
									<select class="form-control select2" name="cities" id="cities">
										<option value="0">--Tỉnh/Thành phố--</option>
										@foreach ($cities as $city)
										<option value="{{$city->id}}">{{$city->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-4 mt-2">
								<div class="form-group">
									<label for="">Quận/Huyện <span class="text-danger">*</span></label>
									<select class="form-control select2" name="districts" id="districts">
										<option value="0">--Quận/Huyện--</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 mt-2">
								<div class="form-group">
									<label for="">Xã/Phường <span class="text-danger">*</span></label>
									<select class="form-control select2" name="wards" id="wards">
										<option value="0">--Xã/Phường--</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12 mt-2">
								<div class="form-group">
									<label for="" class="required">Địa chỉ cụ thể</label>
									<input type="text" class="form-control coupon_code_input"
										placeholder="Số nhà, tòa nhà ..." name="name">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mt-3">
						<div class="form-group">
							<label for="" class="required">Lời nhắn</label>
							<textarea class="form-control coupon_code_input" name="" id="" rows="5"
								placeholder="Ghi chú của bạn..."></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="border p-3 p-lg-4 mb-5">
					<div class="text-center">
						<h4 class="order_product_title">Đơn hàng của bạn</h4>
					</div>
					<div class="table-responsive">
						<table class="table oder_table">
							<thead>
								<tr>
									<td class="cart_total_label">Sản phẩm</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="cart_total_label">Đồng hồ nam</td>
									<td class="cart_total_amount text-right">$349.00</td>
								</tr>
								<tr>
									<td class="cart_total_label">Váy nữ</td>
									<td class="cart_total_amount text-right">$349.00</td>
								</tr>
								<tr>
									<td class="cart_total_label">Giày trẻ em</td>
									<td class="cart_total_amount text-right">$349.00</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td class="cart_total_label">Tổng tiền sản phẩm</td>
									<td class="cart_total_amount text-right">$349.00</td>
								</tr>
								<tr>
									<td class="cart_total_label">Phí ship</td>
									<td class="cart_total_amount text-right">Miễn phí ship</td>
								</tr>
								<tr>
									<td class="cart_total_label">Tất cả</td>
									<td class="cart_total_amount text-right"><strong>$349.00</strong></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<div class="border p-3 p-lg-4">
					<div class="text-center">
						<h4 class="order_product_title">Phương thức thanh toán</h4>
					</div>
					<table class="table oder_table checkout_table">
						<tbody>
							<tr>
								<td class="cart_total_label">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input input_size" name="payment" id="" value="checkedValue" checked>
											<span class="checkmark"></span>
											Thanh toán khi nhận
										</label>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit !?</p>
									</div>
								</td>
							</tr>
							<tr>
								<td class="cart_total_label pt-4">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input input_size" name="payment" id="" value="checkedValue">
											<span class="checkmark"></span>
											Paypal
										</label>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quia doloremque dolores quibusdam laboriosam ullam officiis</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<a href="" class="btn btn-fill-out">Đặt hàng</a>
				</div>
			</div>
		</div>
</section>

@endsection

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('script')
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
	//Initialize Select2 Elements
	$('.select2').select2();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
	$("#cities").on('change', function(e){ 
		e.preventDefault();
		var id = $(this).val();
		var url = '{{url('checkout/districts')}}';
		$.ajax({
            url: url,
            method: 'get',
            data: {
                id: id,
            },
            success: function(data) {
                $('#districts').find('option:not(:first)').remove();
                $('#wards').find('option:not(:first)').remove();
                $.each(data, function(key, value){
                    $("select[name='districts']").append(
                        "<option value=" + value.id + ">" + value.name + "</option>"
                    );
                });
            }
        });
	});
	$("#districts").on('change', function(e){ 
		e.preventDefault();
		var id = $(this).val();
		var url = '{{url('checkout/wards')}}';
		$.ajax({
            url: url,
            method: 'get',
            data: {
                id: id,
            },
            success: function(data) {
                $('#wards').find('option:not(:first)').remove();
                $.each(data, function(key, value){
                    $("select[name='wards']").append(
                        "<option value=" + value.id + ">" + value.name + "</option>"
                    );
                });
            }
        });
	});
	
</script>
@endsection