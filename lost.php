

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <title></title>
</head>
<body>
  <div style="margin-bottom: 15px; background-color: #080808;">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link btn" href="lost.php" role="button">Insert Item</a>
        </li>
        <!-- <li style="margin-top: 4px" class="nav-item">
          <a class="nav-link btn btn-sm" href="/departments">Department</a>
        </li>
        <li style="margin-top: 4px" class="nav-item pull-right">
          <a class="nav-link btn btn-sm" href="/logout">Sign Out</a>
        </li> -->
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm"></div>
      <div align="left" class="col-sm">
        <h3><b>encryption methods</b></h3>
        <hr>
        <form  action="encrypt.php" method="post">
          
          <div class="form-group">
            <label for="form-username">Standard DES</label>
            <input type="text" name="doc_no" required placeholder="Document number" class="form-username form-control" id="documentNumber">
          </div>
          <div class="form-group">
            <label for="form-username">Extended DES</label>
            <input type="text" name="itm_own" required placeholder="Owner name" class="form-username form-control" id="itemOwnerName">
          </div>
          <div class="form-group">
            <label for="form-username">MD5</label>
            <input type="text" name="col_nm" required placeholder="Collector name" class="form-username form-control" id="collectorName">
          </div>
          <div class="form-group">
            <label for="form-username">Blowfish</label>
            <input type="tel" name="col_pn" required placeholder="Collector phone" class="form-username form-control" id="collectorPhone">
          </div>
          <div class="form-group">
            <label for="form-username">SHA 256</label>
            <input type="date" name="dat_c" required placeholder="Date found" class="form-username form-control" id="dateCollected">
          </div>
          <div class="form-group">
            <label for="form-username">SHA 512</label>
            <input type="text" name="col_pnt" required placeholder="Collection point" class="form-username form-control" id="collectionPoint">
          </div>
          <div class="form-group">
           <button type="submit" name="encrypt" id="encrypt" class="btn btn-primary pull-right">encrypt</button>
          </div>
        </form>
      </div>
      <div class="col-sm"></div>
    </div>
  </div>

  <script type="text/javascript" src="public/js/jquery-3.3.1.js" />
  </script>
  <script type="text/javascript" src="public/js/bootstrap.min.js" />
  </script>
</body>
</html>
