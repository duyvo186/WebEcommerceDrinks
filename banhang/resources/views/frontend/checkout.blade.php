@extends('frontend.master')
@section('content')

    

    

{{-- @foreach ($cart as $id=>$item) --}}


	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group"method="post">
	                	<label for="firstname">Tên đầy Đủ</label>
	                  <input type="text" id="ten"name="ten" value="" class="form-control" placeholder="" required>
	                </div>
	              </div>
	              {{-- <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div> --}}
                <div class="w-100"></div>
		            {{-- <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
		            </div> --}}
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">địa chỉ</label>
	                  <input type="text" name="diachi" id="diachi" value="" class="form-control" placeholder="" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Thành Phố</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            {{-- <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div> --}}
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="text" name="sdt" id="sdt" value=""  class="form-control" placeholder="" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email </label>
	                  <input type="text" name="email" id="email"  value="" class="form-control" placeholder="" required>
	                </div>
                </div>
                <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Lời Nhắn</label>
                        <textarea class="form-control" name="ghichu" id="" rows="3"></textarea>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
                            <div class="custom-control custom-checkbox" >
                                                <input onchange="if(this.checked){$('#nhanhang').removeClass('d-none')}else{$('#nhanhang').addClass('d-none')}"  type="checkbox" class="custom-control-input" id="khac">
										  <label  action="hide" class="custom-control-label" for="khac" >
                                           Nhận Thông Tin</label>
                                          </div>

                                    </div>
                                    <div class="d-none" id="nhanhang" class="row align-items-end">
                                        <div class="col-md-6">
                                      <div class="form-group"method="post">
                                          <label for="firstname">Tên đầu</label>
                                        <input type="text" id="tennhan"name="tennhan" value="" class="form-control" placeholder="" >
                                      </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div> --}}
                                  <div class="w-100"></div>
                                      {{-- <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="country">State / Country</label>
                                              <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">France</option>
                                              <option value="">Italy</option>
                                              <option value="">Philippines</option>
                                              <option value="">South Korea</option>
                                              <option value="">Hongkong</option>
                                              <option value="">Japan</option>
                                            </select>
                                          </div>
                                          </div>
                                      </div> --}}
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="streetaddress">Địa Chỉ Nhận Hàng</label>
                                        <input type="text" name="diachinhan" id="diachinhan" value="" class="form-control" placeholder="House number and street name" >
                                      </div>
                                      </div>
                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                                      </div>
                                      </div> --}}

                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="towncity">Town / City</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div> --}}
                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="postcodezip">Postcode / ZIP *</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div> --}}
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phone">Số Điện Thoại</label>
                                        <input type="text" name="sdtnhan" id="sdtnhan" value=""  class="form-control" placeholder="" >
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailaddress">Email /label>
                                        <input type="text" name="emailnhan" id="emailnhan"  value="Thanh Toán" class="form-control" >
                                      </div>
                </div>
	            </div>
              <!-- END -->
              @php
              $tong = 0;
              @endphp
               @foreach ($cart as $item)

               @endforeach
              {{-- @php  $cart['id'->$item]; @endphp --}}
              @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp

	        <div class="row mt-5 pt-3 d-flex">

	          	<div class="col-md-6 d-flex">

	          		<div class="cart-detail cart-total p-3 p-md-4">

	          			<h3 class="billing-heading mb-4">Tổng tiền</h3>
	          			<p class="d-flex">



		    						<span>Tiền</span>
		    						<span>{{number_format($tt)}}</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Tiền SHIP</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>$3.00</span>
		    					</p>

                        {{-- @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp --}}
		    					<p id="tongtien" name="tongtien"class="d-flex total-price" aria-required>
		    						<span>Tổng</span>
		    						<span>{{ number_format($tong)}}</span>
                                </p>

                                </div>

                  </div>

	          	<div class="col-md-6">
	          		<div class="cart-detail p-3 p-md-4">
	          			
                                    @csrf
                                    <p> <button type="submit" class="btn btn-primary py-3 px-4">Thanh Toán</button></p>
                                </form>
								</div>
	          	</div>
              </div>

          </div> <!-- .col-md-8 -->
        </div>
        </div>

    </section>
    @endsection
