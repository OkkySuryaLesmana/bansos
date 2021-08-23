@extends('index')

@section('postingan')
@foreach ($posting as $key)
<div class="job-status-bar">
    <div class="posty">
        <div class="post-bar no-margin">
            <div class="post_topbar">
                <div class="usy-dt">
                    <img src="/img/{{$key['foto']}}" alt="" style="width: 60px; height:60px;">
                    <div class="usy-name">
                        <h3>{{$key['nama']}}</h3>
                        <!-- <h5>{{$key['id']}}</h5> -->
                        <span><img src="images/clock.png" alt="">3 min ago</span>
                    </div>
                </div>
                <div class="ed-opts">
                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                    <ul class="ed-options">
                        <li><a href="#" title="">Edit Post</a></li>
                        <li><a href="#" title="">Unsaved</a></li>
                        <li><a href="#" title="">Unbid</a></li>
                        <li><a href="#" title="">Close</a></li>
                        <li><a href="#" title="">Hide</a></li>
                    </ul>
                </div>
            </div>
            <div class="job_descp">
                <br>
                <p>{{$key['tulisan']}}</p>
                <?php $newstring = substr($key['gambar'], -3); ?>
                @if ($newstring=='mp4')
                <video width="320" height="240" controls>
                    <source src="/img/{{$key['gambar']}}" type="video/mp4">
                        Your browser does not support the video tag.
                </video>
                @else
                <img src="/img/{{$key['gambar']}}" alt="" style="width: 100%;">
                @endif
            </div>
            <div class="job-status-bar">
                <ul class="like-com mt-1 mb-1">
                    <?php $count = 0;
                    $liked = False; ?>
                    <li>
                        <form action="/like" method="post">
                            @csrf
                            <input type="hidden" value="{{$key['id']}}" name="postingan_id">
                            <input type="hidden" value="{{$user['id']}}" name="profil_id">
                            <button type="submit"><i class="la la-heart"></i>
                                @foreach ($like as $l)
                                @if ($l['postingan_id']==$key['id'])
                                <?php $count++; ?>
                                @endif
                                @endforeach
                                {{$count}} like
                            </button>
                        </form>
                    </li>
                </ul>
                {{-- <a><i class="la la-eye"></i>Views 50</a> --}}
            </div>
        </div>
        <!--post-bar end-->
        <div class="comment-section">
            <div class="comment-sec">
                <ul>
                    @foreach ($komen as $k)
                    @if ($k['postingan_id']==$key['id'])
                    <li>
                        <div class="comment-list">
                            <div class="bg-img">
                                <img src="/img/{{$k['foto']}}" alt="" style="width: 50px; heigth: 50px;">
                                
                            </div>
                            <div class="comment">
                                <h3> {{$k['nama']}} </h3>
                                <p> {{$k['komen']}} </p>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <!--comment-sec end-->
            <div class="post-comment">
                <div class="comment_box">
                    {{-- form komentar --}}
                    <form action="/komen" method="post">
                        @csrf
                        <input type="text" name="komen" placeholder="Post a comment">
                        <input type="hidden" name="profil_id" value="{{$user['id']}}" placeholder="Post a comment">
                        <input type="hidden" name="nama" value="{{$user['nama']}}" placeholder="Post a comment">
                        <input type="hidden" name="postingan_id" value="{{$key['id']}}" placeholder="Post a comment">
                        <input type="hidden" name="email" value="{{$user['email']}}" placeholder="Post a comment">
                        <input type="hidden" name="foto" value="{{$user['foto']}}">
                        <button type="submit">Send</button>
                    </form>
                    <br><br>
                </div>
            </div>
            <!--post-comment end-->
        </div>
        <!--comment-section end-->
    </div>
</div>
@endforeach
@endsection