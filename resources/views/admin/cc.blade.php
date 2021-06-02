<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#p1">Open Modal</button>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#p2">Open Modal</button>




  <!-- Modal -->
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
        <form action="#" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Link Shopee</label>
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
        <form action="#" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label">Link Shopee</label>
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
  
</div>

</body>
</html>
