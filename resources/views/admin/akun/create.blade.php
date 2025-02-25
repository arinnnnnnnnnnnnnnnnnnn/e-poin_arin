<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah akun</title>
</head>
<body> 

  <h1>register</h1>
  <br><br>

  <a href="{{  route('akun.index') }}">kembali</a><br><br>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{  $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('akun.store') }}" method="POST">

    @csrf
    <label>nama lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>

    <br>
    <label>email address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

    <br>
    <label>password</label><br>
    <input type="password" id="password" name="password" value="{{ old('password') }}"><br>

    <br>
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">confirm password</label>
    <div class="col-md-6">
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    <label>Hak Akses</label><br>
    <select name="usertype" required>
      <option value="">Pilih Hak Akses</option>
      <option value="admin">admin</option>
      <option value="ptk">Ptk</option>
    </select>
    <br><br>

    <input type="submit" value="register">
  </form>

</body>
</html>