@extends('master')
@section('content')
<div class="account-tabs-setting ml-5">
    <div class="row">
        <div class="ml-5 col-lg-9">
            <div class="ml-5 mr-5 tab-content" id="nav-tabContent">
                <div class="ml-5 tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
                    <div class="acc-setting">
                        <h3>Edit Profil {{$user['nama']}}</h3>
                        <form action="/editProfile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$user['id']}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <br>
                                                    <div class="form-group">
                                                        <h4>Nama</h4>
                                                        <input type="text" class="form-control" name="nama" id="nama" value="{{$user['nama']}}">
                                                        @error('nama')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Email</h4>
                                                        <input type="text" class="form-control" name="email" id="email" value="{{$user['email']}}">
                                                        @error('email')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Umur</h4>
                                                        <input type="text" class="form-control" name="umur" id="umur" value="{{$profile['umur']}}">
                                                        @error('umur')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Biografi</h4>
                                                        <input type="text" class="form-control" name="bio" id="bio" value="{{$profile['bio']}}">
                                                        @error('bio')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Alamat</h4>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{$profile['alamat']}}" >
                                                        @error('alamat')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Password</h4>
                                                        <input type="password" class="form-control" name="password" id="password" value="Masukkan password">
                                                        @error('password')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Tulis ulang password</h4>
                                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Tulis ulang password">
                                                        @error('confirmasi_password')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>Upload foto profil</h4>
                                                        <input type="file" class="form-control" name="foto" id="foto" value="{{$user['foto']}}">
                                                        @error('gambar')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="ml-3 mb-5 col-lg-12 no-pdd">
                                                    <button class="btn btn-primary" type="submit" value="submit">Save</button>
                                                </div>
                                            </div>
                        </form>
                    </div><!--acc-setting end-->
                </div>
                  <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                      <div class="acc-setting">
                          <h3>Profile Status</h3>
                          <div class="profile-bx-details">
                              <div class="row">
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="profile-bx-info">
                                          <div class="pro-bx">
                                              <img src="images/pro-icon1.png" alt="">
                                              <div class="bx-info">
                                                  <h3>$5,145</h3>
                                                  <h5>Total Income</h5>
                                              </div><!--bx-info end-->
                                          </div><!--pro-bx end-->
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                      </div><!--profile-bx-info end-->
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="profile-bx-info">
                                          <div class="pro-bx">
                                              <img src="images/pro-icon2.png" alt="">
                                              <div class="bx-info">
                                                  <h3>$4,745</h3>
                                                  <h5>Widthraw</h5>
                                              </div><!--bx-info end-->
                                          </div><!--pro-bx end-->
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                      </div><!--profile-bx-info end-->
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="profile-bx-info">
                                          <div class="pro-bx">
                                              <img src="images/pro-icon3.png" alt="">
                                              <div class="bx-info">
                                                  <h3>$1,145</h3>
                                                  <h5>Sent</h5>
                                              </div><!--bx-info end-->
                                          </div><!--pro-bx end-->
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                      </div><!--profile-bx-info end-->
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="profile-bx-info">
                                          <div class="pro-bx">
                                              <img src="images/pro-icon4.png" alt="">
                                              <div class="bx-info">
                                                  <h3>130</h3>
                                                  <h5>Total Projects</h5>
                                              </div><!--bx-info end-->
                                          </div><!--pro-bx end-->
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                      </div><!--profile-bx-info end-->
                                  </div>
                              </div>
                          </div><!--profile-bx-details end-->
                          <div class="pro-work-status">
                              <!-- <h4>Work Status  -  Last Months Working Status</h4> -->
                          </div><!--pro-work-status end-->
                      </div><!--acc-setting end-->
                  </div>
                  <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                      <div class="acc-setting">
                        <h3>Account Setting</h3>
                        <form>
                            <div class="cp-field">
                                <h5>Old Password</h5>
                                <div class="cpp-fiel">
                                    <input type="text" name="old-password" placeholder="Old Password">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="cp-field">
                                <h5>New Password</h5>
                                <div class="cpp-fiel">
                                    <input type="text" name="new-password" placeholder="New Password">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="cp-field">
                                <h5>Repeat Password</h5>
                                <div class="cpp-fiel">
                                    <input type="text" name="repeat-password" placeholder="Repeat Password">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="cp-field">
                                <h5><a href="#" title="">Forgot Password?</a></h5>
                            </div>
                            <div class="save-stngs pd2">
                                <ul>
                                    <li><button type="submit">Save Setting</button></li>
                                    <li><button type="submit">Restore Setting</button></li>
                                </ul>
                            </div><!--save-stngs end-->
                        </form>
                    </div><!--acc-setting end-->
                  </div>
                  <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                      <div class="acc-setting">
                          <h3>Notifications</h3>
                          <div class="notifications-list">
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Poonam Verma</a> Bid on your Latest project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Tonney Dhman</a> Comment on your project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Poonam Verma </a> Bid on your Latest project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Tonney Dhman</a> Comment on your project</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                              <div class="notfication-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="notification-info">
                                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                      <span>2 min ago</span>
                                  </div><!--notification-info -->
                              </div><!--notfication-details end-->
                          </div><!--notifications-list end-->
                      </div><!--acc-setting end-->
                  </div>
                  <div class="tab-pane fade" id="nav-requests" role="tabpanel" aria-labelledby="nav-requests-tab">
                      <div class="acc-setting">
                          <h3>Requests</h3>
                          <div class="requests-list">
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>Jessica William</h3>
                                      <span>Graphic Designer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>John Doe</h3>
                                      <span>PHP Developer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>Poonam</h3>
                                      <span>Wordpress Developer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>Bill Gates</h3>
                                      <span>C &amp; C++ Developer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>Jessica William</h3>
                                      <span>Graphic Designer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                              <div class="request-details">
                                  <div class="noty-user-img">
                                      <img src="http://via.placeholder.com/35x35" alt="">
                                  </div>
                                  <div class="request-info">
                                      <h3>John Doe</h3>
                                      <span>PHP Developer</span>
                                  </div>
                                  <div class="accept-feat">
                                      <ul>
                                          <li><button type="submit" class="accept-req">Accept</button></li>
                                          <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                      </ul>
                                  </div><!--accept-feat end-->
                              </div><!--request-detailse end-->
                          </div><!--requests-list end-->
                      </div><!--acc-setting end-->
                  </div>
                  <div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
                      <div class="acc-setting">
                        <h3>Deactivate Account</h3>
                        <form>
                            <div class="cp-field">
                                <h5>Email</h5>
                                <div class="cpp-fiel">
                                    <input type="text" name="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="cp-field">
                                <h5>Password</h5>
                                <div class="cpp-fiel">
                                    <input type="password" name="password" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="cp-field">
                                <h5>Please Explain Further</h5>
                                <textarea></textarea>
                            </div>
                            <div class="cp-field">
                                <div class="fgt-sec">
                                    <input type="checkbox" name="cc" id="c4">
                                    <label for="c4">
                                        <span></span>
                                    </label>
                                    <small>Email option out</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,</p>
                            </div>
                            <div class="save-stngs pd3">
                                <ul>
                                    <li><button type="submit">Save Setting</button></li>
                                    <li><button type="submit">Restore Setting</button></li>
                                </ul>
                            </div><!--save-stngs end-->
                        </form>
                    </div><!--acc-setting end-->
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection