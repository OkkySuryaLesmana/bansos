@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <input type="hidden" id="kode_desa_auth" value="{{ Auth::user()->kode_desa }}">
    <div class="page-content edit-add container-fluid" >
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                        <input id="secret_key" value="{{ config('api.secret_key') }}" type="hidden">
                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            @endphp

                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif

                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}"  @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                    <!-- <div class="form-penilaian"> -->
                                        <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                            @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    <!-- </div> -->
                                    @elseif ($row->type == 'relationship')
                                    <!-- <div class="form-penilaian"> -->
                                        <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                            @include('voyager::formfields.relationship', ['options' => $row->details])
                                    <!-- </div> -->
                                    @else
                                    {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @if ($loop->first)
                                        <!-- <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label> -->
                                            <button type="button" 
                                            class="btn btn-primary btn-submit {{ __('voyager::generic.'.($edit ? 'btn-edit' : 'btn-save')) }}" >Cek NIK</button>
                                        @endif
                                        @if($loop->index == 0)
                                        <div class="form-penilaian">
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('kode_desa', $dataTypeContent->kode_desa ?? '') }}">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="kode_desa">Nilai Kemiskinan</label>
                                                <input type="text" class="form-control" id="kode_desa" name="kode_desa" placeholder="Total Nilai Kemiskinan" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label for="kode_kecamatan">kode_kecamatan Kemiskinan</label>
                                                <input type="text" class="form-control" id="kode_kecamatan" name="kode_kecamatan" placeholder="Status Kemiskinan">
                                            </div> -->
                                        </div>
                                        
                                        @endif
                                    @endif
                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                    
                                </div>
                            @endforeach
                        
                        <!-- @yield('data-kemiskinan') -->
                            <!-- <div class="form-penilaian container-fluid">
                                <div class="form-group">
                                    <label for="kode_desa">Kode Desa</label>
                                    <input type="text" class="form-control" id="kode_desa" name="kode_desa" placeholder="Kode Desa" value="{{ old('kode_desa', $dataTypeContent->kode_desa ?? '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kode_kecamatan">Kode Kecamatan</label>
                                    <input type="text" class="form-control" id="kode_kecamatan" name="kode_kecamatan" placeholder="Kode Kecamatan" value="{{ old('kode_kecamatan', $dataTypeContent->kode_kecamatan ?? '') }}">
                                </div>
                            </div> -->
                        </div><!-- panel-body -->

                        <div class="panel-footer form-penilaian">
                            
                        <button type="button" class="btn btn-primary {{ __('voyager::generic.'.($edit ? 'edit' : 'save')) }}">{{ __('voyager::generic.'.($edit ? 'edit' : 'save')) }}</button>
                            <!-- @section('submit-buttons')
                                
                                
                            @stop -->
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop
@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/sweetalert2.min.js') }}">
@stop
@section('javascript')
<script src="{{ url('assets/js/sweetalert2.all.min.js') }}"></script>
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        $(".form-penilaian").removeAttr("style").hide();
        $(".form-penilaian-hidden").removeAttr("style").hide();
        $('.btn-submit').on('click', function(){
        $('.btn-submit').attr('disabled', true);
        // console.log('message success');
        let nik = $('#nik:input').val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        let secret_key = $('#secret_key').val();
        var SAVENILAI = {!! json_encode(url('/simpan-nilai')) !!};
        var UPDATENILAI = {!! json_encode(url('/update-nilai')) !!};
        var CNIK = {!! json_encode(url('/check-nik')) !!};
        // var CUPDATE = {!! json_encode(url('/check-data-kemiskinan')) !!};
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'https://private-92f0f-alihamzah.apiary-mock.com/api/get_penduduk/' + nik,
            // url: 'https://induk.ciamiskab.go.id/api/get_penduduk/' + nik,
            data: {
                nik:nik,
                _token:_token,
                'secret_key' : secret_key
            },
            success: function(data) {
                console.log(data)
                let kode_desa = $('#kode_desa_auth').val();
                // console.log(kode_desa);
                if(data.status == '401'){
                    $(".form-penilaian").removeAttr("style").hide();
                    $(".form-penilaian-hidden").removeAttr("style").hide();
                    Swal.fire({
                        // position: '',
                        icon: 'warning',
                        title: 'Anda Tidak Memiliki Akses Untuk Input Data Ini!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    // console.log(data);
                }else if(data.data[0].kode_desa != kode_desa){
                    $(".form-penilaian").removeAttr("style").hide();
                    $(".form-penilaian-hidden").removeAttr("style").hide();
                    // console.log(data);
                    Swal.fire({
                        // position: '',
                        icon: 'warning',
                        title: 'Anda Tidak Memiliki Akses Untuk Input Data Ini!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    // console.log(data)
                    // cek duplikasi data
                    $.ajax({
                        type:'GET',
                        dataType: 'json',
                        url: CNIK,
                        data: {
                            'nik': data.data[0].nik
                        },
                        success: function(status) {
                            if(status != 0 && $("button").hasClass("voyager::generic.btn-save") == true){
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Data Telah Diinput, Periksa Tabel Data',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }else{
                                var arr = [];
                                $.ajaxSetup({
                                    headers:
                                    { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                                });
                                var request;
                                
                                if($("button").hasClass("voyager::generic.btn-edit") == true){
                                    arr[0] = status[0].indikator1;
                                    arr[1] = status[0].indikator2;
                                    arr[2] = status[0].indikator3;
                                    arr[3] = status[0].indikator4;
                                    arr[4] = status[0].indikator5;
                                    arr[5] = status[0].indikator6;
                                    arr[6] = status[0].indikator7;
                                    arr[7] = status[0].indikator8;
                                    arr[8] = status[0].indikator9;
                                    arr[9] = status[0].indikator10;
                                    arr[10] = status[0].indikator11;
                                    arr[11] = status[0].indikator12;
                                    arr[12] = status[0].indikator13;
                                    arr[13] = status[0].indikator14;
                                    arr[14] = status[0].indikator15;
                                    arr[15] = status[0].indikator16;
                                    arr[16] = status[0].indikator17;
                                    arr[17] = status[0].indikator18;
                                    arr[18] = status[0].indikator19;
                                    arr[19] = status[0].indikator20;
                                }
                                // console.log($('.btn-save').length)
                                Swal.fire({
                                    // position: '',
                                    icon: 'success',
                                    title: 'Data Tersedia',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                setTimeout(function () {
                                    $(".form-penilaian").show();
                                    $(".form-penilaian-hidden").removeAttr("style").hide();
                                    $('#kode_desa').val(data.data[0].kode_desa);
                                    $('#kode_kecamatan').val(data.data[0].kode_kecamatan);
                                    $('#nama_lengkap').val(data.data[0].nama_lengkap);
                                }, 1500);
                                // var total_nilai = $('#total_nilai').val();
                                $("#indikator1").change(function () {
                                    arr[0] = parseInt(this.value);
                                });
                                $("#indikator2").change(function () {
                                    arr[1] = parseInt(this.value);
                                });
                                $("#indikator3").change(function () {
                                    arr[2] = parseInt(this.value);
                                });
                                $("#indikator4").change(function () {
                                    arr[3] = parseInt(this.value);
                                });
                                $("#indikator5").change(function () {
                                    arr[4] = parseInt(this.value);
                                });
                                $("#indikator6").change(function () {
                                    arr[5] = parseInt(this.value);
                                });
                                $("#indikator7").change(function () {
                                    arr[6] = parseInt(this.value);
                                });
                                $("#indikator8").change(function () {
                                    arr[7] = parseInt(this.value);
                                });
                                $("#indikator9").change(function () {
                                    arr[8] = parseInt(this.value);
                                });
                                $("#indikator10").change(function () {
                                    arr[9] = parseInt(this.value);
                                });
                                $("#indikator11").change(function () {
                                    arr[10] = parseInt(this.value);
                                });
                                $("#indikator12").change(function () {
                                    arr[11] = parseInt(this.value);
                                });
                                $("#indikator13").change(function () {
                                    arr[12] = parseInt(this.value);
                                });
                                $("#indikator14").change(function () {
                                    arr[13] = parseInt(this.value);
                                });  
                                $("#indikator15").change(function () {
                                    arr[14] = parseInt(this.value);
                                });
                                $("#indikator16").change(function () {
                                    arr[15] = parseInt(this.value);
                                });
                                $("#indikator17").change(function () {
                                    arr[16] = parseInt(this.value);
                                });
                                $("#indikator18").change(function () {
                                    arr[17] = parseInt(this.value);
                                });
                                $("#indikator19").change(function () {
                                    arr[18] = parseInt(this.value);
                                });
                                $("#indikator20").change(function () {
                                    arr[19] = parseInt(this.value);
                                });
                                $('.Edit').on('click', function(){
                                    // console.log('edit');
                                    var nilai = 0;
                                        status = "";
                                        for (let i = 0; i < arr.length; i++) {
                                            nilai += arr[i];
                                        }
                                        if(nilai < 30){
                                            status = 'sangat miskin';
                                        }else if(nilai >= 31 && nilai <= 40){
                                            status = 'miskin';
                                        }else if(nilai >= 41 && nilai <= 50){
                                            status = 'hampir miskin';
                                        }else if(nilai >= 51 && nilai <= 60){
                                            status = 'rentan miskin';
                                        }
                                        // console.log(nilai);
                                        // console.log(status);

                                        request = $.ajax({
                                            type:'get',
                                            dataType: 'json',
                                            url: UPDATENILAI,
                                            data: {
                                                'nik': nik,
                                                'total_nilai' : nilai,
                                                'status' : status,
                                                'kode_desa' : data.data[0].kode_desa,
                                                'kode_kecamatan' : data.data[0].kode_kecamatan,
                                                'nama_lengkap' : data.data[0].nama_lengkap,
                                                'indikator1' : arr[0],
                                                'indikator2' : arr[1],
                                                'indikator3' : arr[2],
                                                'indikator4' : arr[3],
                                                'indikator5' : arr[4],
                                                'indikator6' : arr[5],
                                                'indikator7' : arr[6],
                                                'indikator8' : arr[7],
                                                'indikator9' : arr[8],
                                                'indikator10' : arr[9],
                                                'indikator11' : arr[10],
                                                'indikator12' : arr[11],
                                                'indikator13' : arr[12],
                                                'indikator14' : arr[13],
                                                'indikator15' : arr[14],
                                                'indikator16' : arr[15],
                                                'indikator17' : arr[16],
                                                'indikator18' : arr[17],
                                                'indikator19' : arr[18],
                                                'indikator20' : arr[19]
                                            }
                                        });
                                        request.done(function(msg) {
                                            Swal.fire({
                                                // position: '',
                                                icon: 'success',
                                                title: 'Data Berhasil Dikalkulasi',
                                                showConfirmButton: false,
                                                timer: 1500
                                            })
                                            setTimeout(function () {
                                                window.location.replace({!! json_encode(url('/admin/angka-kemiskinans')) !!});
                                            }, 1500);
                                        });
                                        request.fail(function(jqXHR, textStatus) {
                                           console.log(textStatus);
                                        });
                                });
                                //var myarray = []; // more efficient than new Array()
                                $(".Save").on("click",function() {
                                        var nilai = 0;
                                        status = "";
                                        for (let i = 0; i < arr.length; i++) {
                                            nilai += arr[i];
                                        }
                                        if(nilai < 30){
                                            status = 'sangat miskin';
                                        }else if(nilai >= 31 && nilai <= 40){
                                            status = 'miskin';
                                        }else if(nilai >= 41 && nilai <= 50){
                                            status = 'hampir miskin';
                                        }else if(nilai >= 51 && nilai <= 60){
                                            status = 'rentan miskin';
                                        }
                                        request = $.ajax({
                                            type:'get',
                                            dataType: 'json',
                                            url: SAVENILAI,
                                            data: {
                                                'nik': nik,
                                                'total_nilai' : nilai,
                                                'status' : status,
                                                'kode_desa' : data.data[0].kode_desa,
                                                'kode_kecamatan' : data.data[0].kode_kecamatan,
                                                'nama_lengkap' : data.data[0].nama_lengkap,
                                                'indikator1' : arr[0],
                                                'indikator2' : arr[1],
                                                'indikator3' : arr[2],
                                                'indikator4' : arr[3],
                                                'indikator5' : arr[4],
                                                'indikator6' : arr[5],
                                                'indikator7' : arr[6],
                                                'indikator8' : arr[7],
                                                'indikator9' : arr[8],
                                                'indikator10' : arr[9],
                                                'indikator11' : arr[10],
                                                'indikator12' : arr[11],
                                                'indikator13' : arr[12],
                                                'indikator14' : arr[13],
                                                'indikator15' : arr[14],
                                                'indikator16' : arr[15],
                                                'indikator17' : arr[16],
                                                'indikator18' : arr[17],
                                                'indikator19' : arr[18],
                                                'indikator20' : arr[19]
                                            }
                                        });
                                        request.done(function(msg) {
                                            // console.log("Data Berhasil Disimpan")
                                            Swal.fire({
                                                // position: '',
                                                icon: 'success',
                                                title: 'Data Berhasil Dikalkulasi',
                                                showConfirmButton: false,
                                                timer: 1500
                                            })
                                            setTimeout(function () {
                                                window.location.replace({!! json_encode(url('/admin/angka-kemiskinans')) !!});
                                            }, 1500);
                                        });
                                        request.fail(function(jqXHR, textStatus) {
                                            console.log(textStatus);
                                        });
                                });
                        }
                    }
                    });
                    
                    
                }
            }
        });
        setTimeout(function(){ $('.btn-submit').removeAttr('disabled'); }, 5000);
        });
        $('#nik :input').keypress(function (event) {
        if (event.keyCode === 10 || event.keyCode === 13) {
            event.preventDefault();
        }
        })
        $('.btn-reset').on('click', function() {
            $('.nama').val('');
            $('.lahir').val('');
            $('.alamat').val('');
        });
    </script>
@stop
