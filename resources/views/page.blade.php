Anda berhasil login sebagai {{ auth()->user()->level }}, akun anda telah {{ auth()->user()->status }}

<form action="{{ route('logout.check') }}" method="POST">
@csrf
  <button type="submit">LOGOUT</button>
</form>