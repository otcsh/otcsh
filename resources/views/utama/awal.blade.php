
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
  <img src="/image/{{$utama->logo}}" class="rounded-circle border" alt="Cinque Terre" width="200" height="200" align="center" > 
  <br>
 <table align="center">
   <tr><td class="p1">{{$utama->nama_toko}}</td></tr>
   <tr><td class="p2">{{$utama->deskripsi}}</td></tr>
 </table>
 
 
  <br>
  
    <button type="button" class="button1 " onclick="katalog()"> Katalog</button><br ><br>
    <button type="button" class="button1 mt-2" onclick="shopee()">Shopee</button><br><br>
    <button type="button" class="button1 mt-2" onclick="wa()">Tanya Whatsapp</button><br>
    <br>
  
 
   <button class="button44 " onclick="admin()"><span class="fas fa-user-astronaut"></span></button>
    </div>
  </div>
  
</div>

<script type="text/javascript">
  function katalog(){
    window.location.href='/katalog';
  }
</script>
<script type="text/javascript">
  function shopee(){
    window.location.href='http://{{$utama->shopee}}';
  }
</script>
<script type="text/javascript">
  function wa(){
    window.location.href='https://api.whatsapp.com/send?phone={{$utama->wa}}&text=Halooo%20kak%20saya ingin%20tanya%20tanya%20barang%20thriftingnya';
  }
</script>
</script>
<script type="text/javascript">
  function admin(){
    window.location.href='/login';
  }
</script>
@endforeach
</body>
</html>
