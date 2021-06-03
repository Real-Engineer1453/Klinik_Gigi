<h1>Edit Member</h1>
{{ Form::open(['route' => ['user_officer.user_member.update', $data->id],'method'=>'PUT','enctype'=>"multipart/form-data",'files'=>true]) }}
{{ Form::hidden('id',$data->id) }}

<div class="row">
    <label for="nama" class="col-sm-2 col-form-label">Nama*</label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('nama', $data->nama, [
                    'id'=>"nama" ,
                    'class' => 'form-control',
                    'placeholder' => '...'
                ])
            }}
            @error('nama')
            <span class="bmd text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <label for="nomor_cm" class="col-sm-2 col-form-label">Nomor CM*</label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('nomor_cm', $data->nomor_cm, [
                    'id'=>"nomor_cm" ,
                    'class' => 'form-control',
                    'placeholder' => '...'
                ])
            }}
            @error('nomor_cm')
            <span class="bmd text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir*</label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('tanggal_lahir', $data->tanggal_lahir, [
                    'id'=>"tanggal_lahir" ,
                    'class' => 'form-control datepicker',
                    'placeholder' => 'Tanggal Lahir'
                ])
            }}
            @error('tanggal_lahir')
            <span class="bmd text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat *</label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('alamat', $data->alamat, [
                    'id'=>"alamat" ,
                    'class' => 'form-control',
                    'placeholder' => '...'
                ])
            }}
            @error('alamat')
            <span class="bmd text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP </label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('nomor_hp', $data->nomor_hp, [
                    'id'=>"nomor_hp" ,
                    'class' => 'form-control',
                    'placeholder' => '...'
                ])
            }}
            @error('nomor_hp')
            <span class="bmd text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="text-center">
    <input class="btn btn-rose btn-sm" type="submit" value="Simpan" />
    <a href="{{ route('user_officer.user_member.index') }}">Back</a>
</div>
{{ Form::close() }}