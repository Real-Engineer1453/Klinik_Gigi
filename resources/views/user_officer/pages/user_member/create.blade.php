
{{ Form::open(['route' => ['user_officer.user_member.store'],'method'=>'POST','enctype'=>"multipart/form-data",'files'=>true]) }}
<div class="row">
    <label for="nama" class="col-sm-2 col-form-label">Nama*</label>
    <div class="col-sm-9">
        <div class="form-group">
            {{ Form::text('nama', null, [
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
            {{ Form::text('nomor_cm', null, [
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
            {{ Form::text('tanggal_lahir', null, [
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
            {{ Form::text('alamat', null, [
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
            {{ Form::text('nomor_hp', null, [
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
</div>
{{ Form::close() }}
