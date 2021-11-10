<input @if($row->required == 1) required @endif type="text" class="form-control" name="{{ $row->field }}" id="{{ $row->field }}"
        placeholder="{{ old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name')) }}"
        {!! isBreadSlugAutoGenerator($options) !!}
        value="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}"
        @if(isset($options->disabled)) disabled @endif >
@section('data-kemiskinan')
<div class="form-penilaian-hidden container-fluid">
        <div class="form-group">
                <label for="kode_desa">Kode Desa</label>
                <input type="text" class="form-control" id="kode_desa" name="kode_desa" placeholder="Kode Desa" value="{{ old('kode_desa', $dataTypeContent->kode_desa ?? '') }}">
        </div>
        <div class="form-group">
                <label for="kode_kecamatan">Kode Kecamatan</label>
                <input type="text" class="form-control" id="kode_kecamatan" name="kode_kecamatan" placeholder="Kode Kecamatan" value="{{ old('kode_kecamatan', $dataTypeContent->kode_kecamatan ?? '') }}">
        </div>
</div>
@stop
