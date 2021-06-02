
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style >
    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.center1 {
  text-align: center;
  
}
.button1 {
 
  background-color: white;
  color: rgba(212, 191, 175);
  border-radius: 8px;
  border: 2px solid rgba(212, 191, 175);
  width: 220px;
  height: 44px;
  font-size: 18px;
  font color: rgba(212, 191, 175);
   font-family:monserrat;
   
    transition-duration: 0.4s;
  cursor: pointer;
}
.button1:hover {
  background-color:#555555;
  color: white;
}
.card1{
 margin: auto;
  width: 416px;
  height: 600px;
}
.center2{
   margin: auto;
  width: 50%;
  
  padding: 10px;
}
.border{
  border-style: solid rgba(212, 191, 175);
}
.spasi{
  height:30px;
}
.p1{

   font-family: Hind - 600, sans-serif;
   line-height: 30px;
   color: rgb(234, 78, 1);
   font-size: 30px;
  font-weight: 600px;
}
.p2{
color: #2d7f8f;
   font-size: 13px;
   line-height: 19px;
  font-weight: 600px;
  font-family: Hind - 600, sans-serif;
}
.hr{
  color: #F5C9B3;
}
.kanan{
  text-align: left;
  color: #2d7f8f;
   font-size: 18px;
   line-height: 19px;
  font-weight: 600;
  font-family: Hind - 600, sans-serif;
}
.isi{
  font-family: "Cutive Mono" - 400, monospace;
  font-weight: 400;
  font-size: 17px;
 color: rgb(234, 78, 1);
 line-height: 22px;
}

  </style>


</head>
<body>

<div class="container mt-5">
  <div class="card">
    <div class="card-body">
      <form action="/barangjadi/{{$katalog->id}}/update" enctype="multipart/form-data" method="POST">
         {{csrf_field()}}
          <div class="form-group">
            <label">Gambar</label>
            <p>Gambar Tersimpan</p><br>
            <img src="/image/{{$katalog->foto}}" width="200px" height="200px">
            <br>
            <label>Gambar Baru</label>
            <input type="file" name="foto" id="preview_gambar">
            <br>
            <img src="#" id="gambar_nodin" width="200px" height="200px"  />
          </div>
          <div class="form-group">
            <label>Kode Barang</label><br>
            <input type="text" name="judul" value="{{$katalog->judul}}">
          </div>
          <div class="form-group">
            <label>Jenis Baju</label><br>
            <input type="text" name="jenis_baju" value="{{$katalog->jenis_baju}}">
          </div>
          <div class="form-group">
            <label>Ukuran</label><br>
            <input type="text" name="ukuran" value="{{$katalog->ukuran}}">
          </div>
          <div class="form-group">
            <label>Harga</label><br>
            Rp. <input type="number" name="harga" value="{{$katalog->harga}}">
          </div>
          <div class="modal-footer">
            <a class="btn btn-secondary" href="/editkatalog">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
            
          </div>
      </form>
      
    </div>
    
  </div>
  
</div>
 <script >
    function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}
  </script>
  <script >
    $("#preview_gambar").change(function(){
   bacaGambar(this);
});
  </script>
</body>
</html>
