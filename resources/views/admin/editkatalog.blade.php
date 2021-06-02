
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
.button3 {
 
  background-color: white;
  color: rgba(212, 191, 175);
  border-radius: 8px;
  border: 2px solid rgba(212, 191, 175);
  width: 100px;
  height: 44px;
  font-size: 18px;
  font color: rgba(212, 191, 175);
   font-family:monserrat;
   
    transition-duration: 0.4s;
  cursor: pointer;
}
.button3:hover {
  background-color:#555555;
  color: white;
}

  </style>


</head>
<body>


<div class="container mt-5">
  <div class="card">
    <div class="card-body center1 mt-2  judul">
     
     <p class="p1">MY TOP PICK </p>
     <p class="p2">YOUR TOP RECOMMENDATIONS FOR YOUR FOLLOWERS</p>
     
     <br>
     <hr class="hr">
     

      <br>
      @foreach($katalog as $katalog)
    <table align="center">
    
      <tr>
        <td>
           <img src="/image/{{$katalog->foto}}" class="mx-auto d-block" width="286" height="286">

           
        </td>
      </tr>
      <tr>
        <td class="kanan">
          <br> {{$katalog->judul}}
        </td>
      </tr>
      <tr><td class="isi kanan">{{$katalog->jenis_baju}} 
       </td></tr>
      <tr><td class="isi kanan">{{$katalog->ukuran}} </td></tr>
      <tr><td class="isi kanan">Rp. {{$katalog->harga}} </td></tr>
      <tr><td>  </td></tr>
      <tr><td>   </td></tr>
      <tr><td><button class="btn button3" onclick="tombol()">Edit</button> <a href="/barang/{{$katalog->id}}" type="button" class="btn button3"> Hapus</a></td></tr>
      
        
      

     
      
    </table>
    <br>
    <hr>
    @endforeach
    <br>
    
     <button class="button1" onclick="buat()">
      Tambah Produk
      </button>
      
    </div>
    
  </div>
  
</div>

<script type="text/javascript">
  function tombol()
  {
    window.location.href = '/barang/{{$katalog->id}}/update';
  }
</script>
<script type="text/javascript">
  function buat()
  {
    window.location.href = '/katalogbaru';
  }
</script>

</body>
</html>
