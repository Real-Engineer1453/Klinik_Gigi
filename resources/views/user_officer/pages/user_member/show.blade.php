SHOW Rekam Medis<br>
<a href="{{ route('user_officer.user_member.index') }}">Back</a>
<table border="1">
  <tr>
    <td>NAMA</td>
    <td>NOMOR CM</td>
    <td>TGL LAHIR</td>
    <td>ALAMAT</td>
    <td>NO.HP</td>
  </tr>
  <tr>
    <td>{{ $data_user->nama }}</td>
    <td>{{ $data_user->nomor_cm }}</td>
    <td>{{ $data_user->tanggal_lahir }}</td>
    <td>{{ $data_user->alamat }}</td>
    <td>{{ $data_user->nomor_hp }}</td>
  </tr>
</table>


<table border="1" class="table align-items-center mb-0">
  <thead>
  <tr>
    <th>#</th>
    <th>anamnesa</th>
    <th>riwayat_alergi</th>
    <th>tindakan</th>
    <th>terapi_obat</th>
    <th>user_officer</th>
    <th>action</th>
  </tr>
  </thead>
  <tbody>

  @foreach($data as $key => $d)
    <tr>
      <td class="align-middle text-center text-sm">
        <span class="text-secondary text-sm font-weight-bold">{{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}</span>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="text-secondary text-sm font-weight-bold">{{ $d->anamnesa }}</span>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="text-secondary text-sm font-weight-bold">{{ $d->riwayat_alergi }}</span>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="text-secondary text-sm font-weight-bold">{{ $d->tindakan }}</span>
      </td>
      <td>
        <p class="text-sm font-weight-bold mb-0">{{ $d->terapi_obat }}</p>
      </td>
      <td class="align-middle text-center">
        <p class="text-sm font-weight-bold mb-0">{{ $d->user_officer }}</p>
      </td>
      <td class="align-middle">
        <a href="{{ route('user_officer.user_member.edit', $d->id) }}" class="badge bg-info">
          Edit
        </a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>

{{$data->appends(Request::all())->links()}}
