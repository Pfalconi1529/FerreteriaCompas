<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  

  <title>Ferreteria</title>
</head> 
<body class="bg-dark">
  <div class="container p-5 img-fluid  text-info " >
    <div class="row ">
      <div class="col text-center" >
        <table class="table table-danger ">
          
        </table>
      </div>
      <div class="col border border-info my-5">
        <div class="text-end">
          
        </div>
        <div>
          <h2 class="fw-bold text-center py-5">Ingreso de Cargo</h2>


          <form id="form" action="principal.php" method="post">
            <div class="mb-4">
              <label for="cargo" class="form-label">Introduce el nombre del cargo</label>
              <input type="text" class="form-control" name="cargo" id="cargo">
            </div>
            
            <div class="d-grid">
              <button type="submit" class="btn btn-primary" name="iniciar" id="iniciar">Registrar Cargo</button>
            </div>
            

          </form>
          
        </div>
      </div>
    </div>

  </div>
</body>
</html>