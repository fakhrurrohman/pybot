<?php
session_start();
require '../config.php';
require '../lib/header.php';
?>

    <div class="row">
        
			<div class="col-lg-6">
                <div class="card border shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight"> Cek Profile</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr><td>URL</td><td><?php echo $config['web']['url'] ?>api/profile</td></tr>
                        <tr><td>api_key</td><td><i>API Key Anda.</i></td></tr>
                        <tr><td>action</td><td>profile</td></tr>
                    </tbody>
                        </table>
                    </div><br />
<b>Contoh Respons</b><br />
<div class="border alert alert-light">
    Jika Benar:
<pre>
{
  "data": {
          "username": "VSProject",
          "saldo_sosmed": "136810"
          }
}
</pre>
                                            </td>
                                            <td>
                                                Jika Salah:<br>
                                                <pre>
{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
                    
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card border shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight"> Parameter Lainya</h6>
                            </div>                                                                     
                                                                                                 
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id-tab="layanan-tab" data-toggle="tab" href="#layanan" role="tab" aria-controls="layanan" aria-selected="false"><i class="mdi mdi-server"></i> Layanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id-tab="pemesanan-tab" data-toggle="tab" href="#pemesanan" role="tab" aria-controls="pemesanan" aria-selected="false"><i class="mdi mdi-cart-outline"></i> Order</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" id-tab="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false"><i class="mdi mdi-list-status"></i> Status</a>
                                        </li>
                                    </ul>
                                              
                                <div class="tab-content">
                                    
                                <div class="tab-pane active p-3" id="layanan" role="layanan" aria-labelledby="layanan-tab">
                                <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <tr><td>URL</td><td><?php echo $config['web']['url'] ?>api/server</td></tr>
                                        <tr><td>api_key</td><td><i>API Key Anda.</i></td></tr>
                                        <tr><td>action</td><td>layanan</td></tr>
                                    </tbody>
                                </table>
                            </div>
<br>
<b>Contoh Respons</b><br />
<div class="border alert alert-light">
<pre>
Result Jika Sukses:
{
  "data": {
          "sid": "1"
          "kategori": "Instagram"
          "layanan": "Instagram Indo Layanan OP"
          "min": "100"
          "max": "5000"
          "harga": "3500"
          "refill": "1"
          "catatan": "VSProject OP"
          }
}

Result Jika Gagal:
{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
    </div>
                                
                                <div class="tab-pane p-3" id="pemesanan" role="tabpanel" aria-labelledby="pemesanan-tab">
                                <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <tr><td>URL</td><td><?php echo $config['web']['url'] ?>api/server</td></tr>
                                        <tr><td>api_key</td><td><i>API Key Anda.</i></td></tr>
                                        <tr><td>action</td><td>pemesanan</td></tr>
                                        <tr><td>layanan</td><td><i>ID Layanan</i></td></tr>
                                        <tr><td>target</td><td><i>Target Pesanan.</i></td></tr>
                                        <tr><td>jumlah</td><td><i>Jumlah Pesanan.</i></td></tr>
                                        <tr><td>custom_comments</td><td><i>Kosongkan Jika Tidak Diperlukan.</i></td></tr>
                                    </tbody>
                                </table>
                            </div>
<br>
<b>Contoh Respons</b><br />
<div class="border alert alert-light">
<pre>
Result Jika Sukses:
{
  "data": {
          "id": "12345",
          "start_count": "321"
          }
}

Result Jika Gagal:
{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
    </div>
                                
                                <div class="tab-pane p-3" id="status" role="status" aria-labelledby="status-tab">
                                	<div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <tr><td>URL</td><td><?php echo $config['web']['url'] ?>api/server<br /></td></tr>
                                        <tr><td>api_key</td><td><i>API Key Anda.</i></td></tr>
                                        <tr><td>action</td><td>status</td></tr>
                                        <tr><td>id</td><td><i>ID Pesanan.</i></td></tr>
                                    </tbody>
                                </table>
                            </div>
<br>
<b>Contoh Respons</b><br />
<div class="border alert alert-light">
<pre>
Result Jika Sukses:
{
  "data": {
          "id":"1",
          "start_count":"1",
          "status":"Success",
          "remains":"0"
          }
}

Result Jika Gagal:
{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
    </div>
                        
            
                        </div>
                    </div>
                </div>
            </div>
            <center>
              <a href="https://my.domainesia.com/ref.php?u=23364"><img src="https://dnva.me/server9ev4" width="280px" height="90px" alt="DomaiNesia"></a>
            </center>
                                    </div>
                    </div>
                </div>
            </div>
            <center>
              <a href="https://my.domainesia.com/ref.php?u=23364"><img src="https://dnva.me/server9ev4" width="280px" height="90px" alt="DomaiNesia"></a>
            </center>
<?php
require '../lib/footer.php';
?>
