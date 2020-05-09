<?php
  $konek = mysqli_connect("localhost","root","","tugaslogin");

  $hasil = mysqli_query($konek,"SELECT * FROM tbkerja");
?>
<main>
<link rel="stylesheet" href="../style/home.css">
<link rel="stylesheet" href="../style/footer.css">
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="aboutus.php">About</a>
  <a href="services.php">Services</a>
  <a href="clients.php">Clients</a>
  <a href="contact.php">Contact</a>
</div>
<div class="header">
    <div class="kiri">
        <button class="openbtn" onclick="openNav()" title="beranda">☰</button>  
        <p title="Home">A-Work</p>
    </div>
    <div class="tengah">
        <input type="text" title="masukkan yang anda cari"><button title="cari">?</button>
    </div>
    <div class="kanan" title="Profile">
        <a href="profile.php">
          <div class="profile-kotak"title="profile">
        </div>
        <img src="../img/iconn/logout.png" title=""></a>
    </div>
    <a href="../logout.php" class="logout"><img src="../img/iconn/logout.png" title="logout"></a>
</div>
<div class="content">
<div class="sidebar">
    <div>
    <a href="#"><img src="../img/iconn/home-icon2.png"></a><br><br>
    </div>
    <div>
    <a href="#"><img src="../img/iconn/about-icon.png"></a><br>
    </div>
    <a href="#"></a>
</div>
<div class="main">
  <div class="content-pekerjaan">
  <h1>Rekomendasi Jenis Pekerjaan Yang Paling Sering Dicari</h1>
    <div class="coll col01">
      <div class="kotak">
        <div class="gambar g1"></div>
        <p class="tulisan">Arsitektur</p>
      </div>
      <div class="kotak">
        <div class="gambar g2"></div>
        <p class="tulisan">Design Logo</p>
      </div>
      <div class="kotak">
        <div class="gambar g3"></div>
        <p class="tulisan">Digital Marketing</p>
      </div>
      <div class="kotak">
        <div class="gambar g4"></div>
        <p class="tulisan">Internet</p>
      </div>
    </div>
    <div class="coll col01">
      <div class="kotak">
        <div class="gambar g5"></div>
        <p class="tulisan">Photoshop</p>
      </div>
      <div class="kotak">
        <div class="gambar g6"></div>
        <p class="tulisan">Video Editing</p>
      </div>
      <div class="kotak">
        <div class="gambar g7"></div>
        <p class="tulisan">Programmer</p>
      </div>
      <div class="kotak">
        <div class="hover"><div class="gambar g8"></div></div>
        <p class="tulisan">Design Grafis</p>
      </div>
    </div>
    <div class="coll col01">
      <div class="kotak">
        <div class="gambar g9"></div>
        <p class="tulisan">PhotoGraphy</p>
      </div>
      <div class="kotak">
        <div class="gambar g10"></div>
        <p class="tulisan">Android Developer</p>
      </div>
      <div class="kotak">
        <div class="gambar g11"></div>
        <p class="tulisan">Penulis</p>
      </div>
      <div class="kotak">
        <div class="gambar g12"></div>
        <p class="tulisan">Translator</p>
      </div>
    </div>
  </div>
</div>
</div>
  <div class="content-2">
    <div class="k-search">
      <input type="text" class="i-search" name="cari">
      <input type="submit" value="cari">
    </div><hr><br>

    <?php while($row=mysqli_fetch_assoc($hasil)):?>
    <div class="content-k">
      <div class="content-k-kiri">
      <a href="#" class="k-lebih"><?php echo $row["judul"];?></a>
      <p class="k-desc"><?php echo $row["deskripsi"];?></p>
      <div class="kategori">
        <a href="#" class="k-kategori"><?php echo $row["kategori01"];?></a>
        <a href="#" class="k-kategori"><?php echo $row["kategori02"];?></a>
      </div>
     </div>
     <div class="content-k-kanan">
       <p class="k-harga">$<?php echo $row["harga"];?></p>
       <div class="k-post">
         <p><?php echo $row["tanggal"];?></p>
       </div>
     </div>
    </div>
    <hr><br>
    <?php endwhile; ?>


<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

</main>
<?php
  require "../footer.php";
?>
