
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beranda OTSChop </title>
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
.judul{
  font-size: 30px;
  font color: rgb(234, 78, 1);
  font-weight: 600;
}
.p1{
  font-family: Montserrat - 500,sans-serif;
  font-size: 13px;
  font-weight: 500;
  line-height: 17px;
  font color:#d4bfaf;

}
.p2{
    font-family: Sacramento - 400,cursive;
  font-size: 38px;
  font-weight: 400;
  line-height: 34px;
  font color:#6d6d6d;
}
.button44 {
 
  background-color: white;
  color: rgba(212, 191, 175);
  border-radius: 8px;
  border: 2px solid rgba(212, 191, 175);
  width: 40px;
  height: 40px;
  font-size: 18px;
  font color: rgba(212, 191, 175);
   font-family:monserrat;
   
    transition-duration: 0.4s;
  cursor: pointer;
}
.button44:hover {
  background-color:#555555;
  color: white;
}

  </style>


</head>
<body>

<div class="container mt-5 mb-5">
   @foreach($utama as $utama)
  <div class="card card1">
    <div class="card-body center1 mt-2">       
  <img src="/image/{{$utama->logo}}" class="rounded-circle border"  width="200" height="200" align="center" > 
  <button class="btn" data-toggle="modal" data-target="#logo" >
      <span class="fas fa-edit"></span>
    </button>
  <br>
 
 <table align="center">
   <tr><td class="p1">{{$utama->nama_toko}}</td>
    <td><button class="btn" data-toggle="modal" data-target="#nama" >
      <span class="fas fa-edit"></span>
    </button></td>

   </tr>
   <tr><td class="p2">{{$utama->deskripsi}}</td>
    <td><button class="btn" data-toggle="modal" data-target="#deskripsi" >
      <span class="fas fa-edit"></span>
    </button></td></tr>
 </table>

@endforeach
 
 
  <br>
  
    <button type="button" class="button1 " onclick="editkatalog()">Edit Katalog</button><br >
    <button type="button" class="button1 mt-2" data-toggle="modal" data-target="#p1">Edit Link Shopee</button><br>
    <button type="button" class="button1 mt-2" data-toggle="modal" data-target="#p2">Edit No Whatsapp</button><br>
    <button class="button1 mt-2" onclick="logout()"><span class="fas fa-power-off">LOGOUT</span></button>
    
    

  
 
  
    </div>
  </div>
  
</div>
 <div class="modal fade" id="p1" role="dialog">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Link Shopee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/shopee/{{$utama->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Link Shopee Yang Tersimpan</label>
            <p>{{$utama->shopee}}</p>
            <label">Link Shopee Baru</label>
            <input name="shopee" type="text" class="form-control" placeholder="Masukkan Link">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ganti</button>
            
          </div>
        </form>
        
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="p2" role="dialog">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Nomor Whatsapp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/wa/{{$utama->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Nomor Whatsapp Yang Tersimpan</label>
            <p>{{$utama->wa}}</p>
            <label">Nomor Whatsapp Baru</label>
            <input name="wa" type="number" class="form-control" placeholder="Contoh = 6285603530711 samakan dengan contoh!!!">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ganti</button>
            
          </div>
        </form>
        
      </div>
    </div>
  </div>
  </div>
</div>

 <div class="modal fade" id="nama" role="dialog">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Nama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/namatoko/{{$utama->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Nama Baru</label>
            <input name="nama_toko" type="text" class="form-control" placeholder="Masukkan Nama Baru">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ganti</button>
            
          </div>
        </form>
        
      </div>
    </div>
  </div>
  </div>

   <div class="modal fade" id="deskripsi" role="dialog">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Deskripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/deskripsi/{{$utama->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Deskripsi Baru</label>
            <input name="deskripsi" type="textbox" class="form-control" placeholder="Masukkan Deskripsi Baru">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ganti</button>
            
          </div>
        </form>
        
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade" id="logo" role="dialog">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/log/{{$utama->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label">Logo Baru</label>
            <br>
            <input type="file" name="logo" id="preview_gambar">
            <br>
            <img src="#" id="gambar_nodin" class="rounded-circle border" width="200" height="200" alt="Preview Gambar" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ganti</button>
            
          </div>
        </form>
        
      </div>
    </div>
  </div>
  </div>

  <script >
    
      function editkatalog()
      {
        window.location.href='/editkatalog';

      }
    
  </script>
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
<script type="text/javascript">
  function logout()
  {
    
   window.location.href='{{ route('logout') }}';
  }
</script>

  
</body>
</html>
