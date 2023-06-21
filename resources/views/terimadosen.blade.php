<!doctype html>
<html lang="en">
  <head>
    <title>Isi Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="/dosen/terimadosen" method="POST">
  <h1>Ini Halaman terima Dosen</h1>  
  @php
    $gelar_dosen = explode(',' , $gelar)

  @endphp
<hr>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="S1" {{ in_array('S1', $gelar_dosen)?'checked':'' }} id="defaultCheck1" name="gelar[]" >
  <label class="form-check-label" for="defaultCheck1">
    S1
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="S2"{{ in_array('S2', $gelar_dosen)?'checked':'' }} id="defaultCheck2" name="gelar[]">
  <label class="form-check-label" for="defaultCheck2">
    S2
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="S3"{{ in_array('S3', $gelar_dosen)?'checked':'' }} id="defaultCheck3" name="gelar[]">
  <label class="form-check-label" for="defaultCheck3">
    S3
  </label>
</div>
<input type="text" value="{{$gelar}}">
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>