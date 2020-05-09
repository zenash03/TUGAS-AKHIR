<?php
    $konek = mysqli_connect("localhost","root","","tugaslogin");
    $q = "SELECT * FROM record  ORDER BY id DESC LIMIT 1";
    $p = "SELECT * FROM users";
    $g = mysqli_query($konek, $p);
    $e = mysqli_query($konek, $q);
    $f = mysqli_query($konek, $p);
    $row = mysqli_fetch_assoc($e);
    $asli = mysqli_fetch_assoc($f);
    if($row['username'] == $asli['user'] && $row['password'] == $asli['password']){
        session_start();
        // $g = mysqli_query($konek, $r);
        $tampil = mysqli_fetch_array($g);
    }
?>
<link rel="stylesheet" href="../style/profile.css">
<main>
    <div class="header">
    <a href="home.php">
     <div class="kira">
        <p>back</p>
     </div>
    </a>
    <a  href="home.php">
     <div class="kananan">
        <input type="submit" value="save changes" name="submit">
     </div>
    </a>
    </div>
    <div class="content-prof">
        <div class="gambar-prof"></div>
        <div class="isi-prof">
            <p class="isi-p-prof"> Name :<br>
            <input type="text" placeholder="name" required class="input-prof" value="<?php echo $tampil["fullname"];?>"></p>
            <hr>
            <p  class="isi-p-prof"> Username :<br>
            <input type="text" placeholder="username" required
            class="input-prof" value="<?php echo $tampil["user"];?>"></p>
            <hr>
            <p  class="isi-p-prof"> Email :<br>
            <input type="text" placeholder="email" required class="input-prof" value="<?php echo $tampil["email"];?>"></p>
            <hr>
            <p  class="isi-p-prof"> Password :<br>
            <input type="password" placeholder="password" required class="input-prof" value="<?php echo $tampil["password"];?>"></p>
            <hr>
        </div>
    </div>
</main>
<?php
?>