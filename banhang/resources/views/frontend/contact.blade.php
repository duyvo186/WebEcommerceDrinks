@extends('frontend.master')
@section('content')


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper px-md-4">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                        <p><span>Địa Chỉ:</span> tan phu district </p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                        <p><span>Số Điện Thoại:</span> <a href="tel://1234567920">0389954506</a></p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">DV@thietkeweb.com</a></p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="text">
                        <p><span>Website</span> <a href="#">dv.com</a></p>
                      </div>
                  </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Liên Hệ</h3>
                                <form method="POST" action="{{route('c.submit')}}"  class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Tên Đầy Đủ</label>
                                                <input type="text" class="form-control" name="ten" id="ten" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email </label>
                                                <input type="text" class="form-control" name="email" id="email" value="" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Nội dung</label>
                                                <input type="text" class="form-control" name="subject" id="subject" value="" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Điện Thoại Liên Lạc</label>
                                                <textarea class="form-control"name="sdt" id="sdt"  value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                              <label class="label" for="#">Lời Nhắn</label>
                                              <textarea class="form-control"name="note" id="note" cols="30" rows="4" placeholder="Message" value="" row="3"></textarea>
                                          </div>
                                      </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                        
                                                <button type="submit" class="btn btn-danger py-3 px-4">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-first d-flex align-items-stretch">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3998835197567!2d106.93699201472684!3d10.857159192266774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31751fdc301e09d3%3A0xca8bbc750fb858f1!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6BpIE5ndXnDqm4gdsOgIE3DtGkgVHLGsOG7nW5nIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgQ8ahIHPhu58gSUk!5e0!3m2!1svi!2s!4v1607664109004!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      @endsection
