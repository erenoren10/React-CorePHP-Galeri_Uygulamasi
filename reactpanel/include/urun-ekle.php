<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_demos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    if(!empty($_POST["kategori"]) && !empty($_POST["baslik"]) && !empty($_POST["anahtar"]) && !empty($_POST["description"]) && !empty($_POST["sirano"]))
	{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $baslik = $_POST['baslik'];
            $anahtar = $_POST['anahtar'];
            $description = $_POST['description'];
            $sirano = $_POST['sirano'];
            $kategori_id = $_POST['kategori'];

            $sql = "INSERT INTO resimler (baslik, anahtar, description, sirano, kategori) VALUES ( :baslik, :anahtar, :description, :sirano, :kategori)";
            $stmt = $conn->prepare($sql); 
            $stmt->bindParam(':baslik', $baslik);
            $stmt->bindParam(':anahtar', $anahtar);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':sirano', $sirano);
            $stmt->bindParam(':kategori', $kategori_id);
            $stmt->execute();

            echo "Ürün başarıyla eklendi.";
        }
    }
    else
    {
        ?>
        <div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
        <?php
    }
} catch(PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$conn = null;
*/
$kontrol=$VT->VeriGetir("kategoriler","WHERE tablo=? AND durum=?",array(),"ORDER BY ID ASC",1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_pinhole";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ürün Ekle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Ürün Ekle</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
       </div>
       </div>
       <?php
	   if($_POST)
	   {
		   if(!empty($_POST["kategori"]) && !empty($_POST["baslik"]) && !empty($_POST["anahtar"]) && !empty($_POST["description"]) && !empty($_POST["sirano"]))
		   {
			   $kategori=$VT->filter($_POST["kategori"]);
			   $baslik=$VT->filter($_POST["baslik"]);
			   $anahtar=$VT->filter($_POST["anahtar"]);
			   $seflink=$VT->seflink($baslik);
			   $description=$VT->filter($_POST["description"]);
			   $sirano=$VT->filter($_POST["sirano"]);
			   if(!empty($_FILES["resim"]["name"]))
			   {
				   $yukle=$VT->upload("resim");
				   if($yukle!=false)
				   {
                    $kategori_baslik = ""; // Kategorinin baslik bilgisi için bir değişken oluşturuyoruz

                    // Kategori başlığını çekme
                    $sql_kategori_baslik = "SELECT seflink FROM kategoriler WHERE ID = ?";
                    $stmt = $conn->prepare($sql_kategori_baslik);
                    $stmt->bind_param("i", $kategori); // $kategori değerini bağlama ekliyoruz
                    $stmt->execute();
                    $stmt->bind_result($kategori_baslik);
                    $stmt->fetch();
                    $stmt->close();           
                    $ekle = $VT->SorguCalistir("INSERT INTO resimler","SET baslik=?, seflink=?, kategori=?, resim=?, anahtar=?, description=?, durum=?, sirano=?, tarih=?",array($baslik, $seflink, $kategori, $yukle, $anahtar, $description, 1, $sirano, date("Y-m-d")));
                    $kekle = $VT->SorguCalistir(
                      "INSERT INTO $kategori_baslik (baslik, seflink, kategori, resim, anahtar, description, durum, sirano, tarih)",
                      "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                      array($baslik, $seflink, $kategori, $yukle, $anahtar, $description, 1, $sirano, date("Y-m-d"))
                  );

				   }
				   else
				   {
					    ?>
                   <div class="alert alert-info">Resim yükleme işleminiz başarısız.</div>
                   <?php
				   }
			   }
			   else
			   {
                    $kategori_baslik = ""; // Kategorinin baslik bilgisi için bir değişken oluşturuyoruz

                    // Kategori başlığını çekme
                    $sql_kategori_baslik = "SELECT seflink FROM kategoriler WHERE ID = ?";
                    $stmt = $conn->prepare($sql_kategori_baslik);
                    $stmt->bind_param("i", $kategori); // $kategori değerini bağlama ekliyoruz
                    $stmt->execute();
                    $stmt->bind_result($kategori_baslik);
                    $stmt->fetch();
                    $stmt->close();                    
                    $ekle = $VT->SorguCalistir("INSERT INTO resimler","SET baslik=?, seflink=?, kategori=?, resim=?, anahtar=?, description=?, durum=?, sirano=?, tarih=?",array($baslik, $seflink, $kategori, $yukle, $anahtar, $description, 1, $sirano, date("Y-m-d")));
                    $kekle = $VT->SorguCalistir(
                      "INSERT INTO $kategori_baslik (baslik, seflink, kategori, resim, anahtar, description, durum, sirano, tarih)",
                      "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                      array($baslik, $seflink, $kategori, $yukle, $anahtar, $description, 1, $sirano, date("Y-m-d"))
                    );          }
			   if($ekle!=false && $kekle!=false)
			   {
				    ?>
                   <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
                   <?php
			   }
			   else
			   {
				    ?>
                   <div class="alert alert-danger">İşleminiz sırasında bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyiniz.</div>
                   <?php
			   }
		   }
		   else
		   {
			   ?>
               <div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
               <?php
		   }
	   }
	   ?>
       <form action="#" method="post" enctype="multipart/form-data">
       <div class="col-md-8">
       <div class="card-body card card-primary">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="kategori">Kategori Seç</label>
                  <select class="form-control select2" style="width: 100%;" name="kategori" id="kategori">
                    <?php
                    $kategoriler = $VT->VeriGetir("kategoriler", "", array(), "ORDER BY ID ASC");
                    foreach ($kategoriler as $kategori) {
                        echo '<option value="' . $kategori["ID"] . '">' . $kategori["baslik"] . '</option>';
                    }
                    ?>
                  </select>
                </div>
              <!-- /.col -->
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Başlık</label>
                <input type="text" class="form-control" placeholder="Başlık ..." name="baslik">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description ..." name="description">
                </div>
            </div>
             <div class="col-md-12">
                <div class="form-group">
                <label>Anahtar</label>
                <input type="text" class="form-control" placeholder="Anahtar ..." name="anahtar">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Resim</label>
                <input type="file" class="form-control" placeholder="Resim Seçiniz ..." name="resim">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Sıra No</label>
                <input type="number" class="form-control" placeholder="Sıra No ..." name="sirano" style="width:100px;">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">KAYDET</button>
                </div>
            </div>
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        </div>
       </form>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php


 ?>
 
