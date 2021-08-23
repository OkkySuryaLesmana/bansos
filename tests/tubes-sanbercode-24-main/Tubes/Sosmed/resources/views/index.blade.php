@extends('master')

@section('content')
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        <div class="main-left-sidebar no-margin">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="username-dt">
                                        <div class="usr-pic">
                                            <img src="/img/{{$user['foto']}}" alt="" style="width: 100px; height:100px;">
                                        </div>
                                    </div>
                                    <!--username-dt end-->
                                    <div class="user-specs">
                                        <h3>{{$user['nama']}}</h3>
                                        <span> {{$profile['bio']}} </span>
                                    </div>
                                </div>
                                <!--user-profile end-->
                                <ul class="user-fw-status">

                                    <li>
                                        <?php $count = 0; ?>
                                        <h4>Following</h4>
                                        <span>
                                            @foreach ($follow as $f)
                                            @if ($f->profil_id1==$user['id'])
                                            <?php $count++; ?>
                                            @endif
                                            @endforeach
                                            {{$count}}
                                        </span>
                                    </li>
                                    <li>
                                        <?php $count = 0; ?>
                                        <h4>Followers</h4>
                                        <span>
                                            @foreach ($follow as $f)
                                            @if ($f->profil_id2==$user['id'])
                                            <?php $count++; ?>
                                            @endif
                                            @endforeach
                                            {{$count}}
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#" title="">View Profile</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card full-width">
                                <ul>
                                </ul>
                                <div class="ml-1 mr-1 mt-2 mb-2">
                                    <div class="ml-2">
                                        <h4>People you may know</h4>
                                        <ul>
                                            @foreach ($profil as $p)
                                            @if ($p->id!=$user['id'])
                                            <li>
                                                <form action="/follow" method="post">
                                                    @csrf
                                                    <br>
                                                    <input type="hidden" value="{{$user['id']}}" name="profil_id1">
                                                    <input type="hidden" value="{{$p->id}}" name="profil_id2">
                                                    <button type="submit" class="btn btn-warning">
                                                        <img src="/img/{{$p['foto']}}" alt="" style="width: 30px; height:30px;">
                                                        &nbsp; {{$p->nama}}
                                                        </button>
                                                </form>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--tags-sec end-->
                        </div>
                        <!--main-left-sidebar end-->
                    </div>
                    <div class="col-lg-6 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="user-picy">
                                    <img src="/img/{{$user['foto']}}" alt="" style="width: 60px; height:60px;">
                                </div>
                                <div class="post-st">
                                    <ul>
                                        <li><a class="post-jb active" href="#" title="">Post</a></li>
                                    </ul>
                                </div>
                                <!--post-st end-->
                            </div>
                            <!--post-topbar end-->
                            <div class="posts-section">
                                @yield('postingan')
                            </div>
                            <!--posts-section end-->
                        </div>
                        <!--main-ws-sec end-->
                    </div>

                </div>
            </div><!-- main-section-data end-->
        </div>
    </div>
</main>
<div class="post-popup job_post">
    <div class="post-project">
        <h3>Post</h3>
        <div class="post-project-fields">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="tulisan" id="tulisan" placeholder="Masukkan tulisan">
                            @error('tulisan')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Masukkan gambar">
                            @error('gambar')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="caption" id="caption" placeholder="Masukkan caption">
                            @error('caption')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="quote" id="quote" placeholder="Masukkan quote">
                            @error('quote')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="hidden" class="form-control" name="profil_id" id="profil_id" value="{{$user['id']}}">
                        <input type="hidden" class="form-control" name="email" id="email" value="{{$user['email']}}">
                        <input type="hidden" class="form-control" name="nama" id="nama" value="{{$user['nama']}}">
                        <input type="hidden" name="foto" value="{{$user['foto']}}">
                    </div>
                    <div class="col-lg-12 no-pdd">
                        <button type="submit" value="submit">Post</button>
                    </div>
                </div>
            </form>
        </div>
        <!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
    <!--post-project end-->
</div>
<!--post-project-popup end-->
@endsection