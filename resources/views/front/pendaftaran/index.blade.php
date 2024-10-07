@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)

@push('css')
@endpush


@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('themplete/front') }}/hero.png)">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Halaman Pendaftaran</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Pendaftaran</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Request Services One-->
<section class="request-services-one" style="margin-top: -50px;">
    <div class="container">
        <div class="request-services-one__top">
            <div class="sec-title">
                <div class="sub-title">
                    <h5><span class="icon-right-arrow-1"></span> Dapatkan berbagai kemudahan dengan bergabung</h5>
                </div>
                <h2>Bersama Kami</h2>
            </div>
        </div>

        <div class="row">
            <!--Start Single Tab-->
            <div class="tab" id="track">
                <div class="request-services-one__single-tab">
                    <form id="contact-form2"
                        class="default-form2 contact-form-validated request-services-one__form"
                        action="assets/inc/sendemail.php" novalidate="novalidate">

                        <div class="request-services-one__form-top">
                            <div class="title-box">
                                <h3>Informasi Umum :</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="input-box">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" value=""
                                            placeholder="Ronald Richards" required="">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="input-box">
                                        <label>Email</label>
                                        <input type="email" name="email" value=""
                                            placeholder="ronald@gmail.com" required="">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="input-box">
                                        <label>Password</label>
                                        <input type="text" placeholder="Password"
                                            name="password">
                                    </div>
                                </div>




                            </div>

                            <div class="row">
                              
                             

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="input-box">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" id="" cols="10" rows="1" ></textarea>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                              
                            

                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>No WhatsApp</label>
                                      <input type="text" placeholder="085-xxx-xxx-xxx" name="no_wa">
                                  </div>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>Jenis Kelamin</label>
                                      <div class="select-box">
                                          <select class="selectmenu wide" name="jenis_kelamin">
                                              <option selected="selected">Pria</option>
                                              <option>Wanita</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>Tanggal Lahir</label>
                                      <input type="date" class="form-control wide" placeholder="" name="tanggal_lahir" style="padding: .75rem .75rem;">
                                  </div>
                              </div>


                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>Kategori Konsumen</label>
                                      <div class="select-box">
                                          <select class="selectmenu wide" name="kategori_konsumen">
                                              <option selected="selected">Personal</option>
                                              <option>Corporate</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>Nama Perusahaan</label>
                                      <input type="text" placeholder="Artaboga" name="nama_perusahaan">
                                  </div>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4">
                                  <div class="input-box">
                                      <label>Kode Referal</label>
                                      <input type="text" placeholder="324355" name="kode_referal">
                                  </div>
                              </div>


                          </div>
                        </div>
 
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="request-services-one__form-btn">
                                    <button class="thm-btn" type="submit"
                                        data-loading-text="Mohon tunggu...">
                                        <span class="txt">Daftar Sekarang</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Single Tab-->
        </div>
    </div>

</section>
<!--End Request Services One-->





@endsection


@push('scripts')
@endpush