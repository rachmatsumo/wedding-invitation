<!DOCTYPE html>
<html>
  <!-- 
    Creator : Abdul Rachmat
    Whatsapp : 0813 4248 7857
    Web : webkuy.com
  -->
  <head>
    <meta charset="utf-8">
    <title>Wedding Invitation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Undangan Digital">
    <link href="assets/icon.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">
    
  </head>
  <body>

    <!-- Opening Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-body body-opening">
            <img src="assets/bgr.jpg">
            <div class="label">
              <div class="w-100">
                <h6 class="text-opening">Kepda Yth.</h6>
                Bapak/Ibu/Saudara(i) 
                <p class="nama-opening"><?php if(isset($_GET['to'])){echo $_GET['to'];} ?></p>
              </div>
              <button type="button" class="btn btn-gold btn-lg" data-bs-dismiss="modal" id="tutupWelcome">Buka Undangan</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Modal Gift  -->
    <div class="modal fade" id="amplop" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kirim Hadiah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <p class="t-justify">Bapak/Ibu Saudara/i yang ingin memberikan hadiah secara online dapat mengirimkannya melalui rekening di bawah ini :</p>
            <div class="accordion" id="gift_resi">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="btn btn-primary" type="button"data-bs-toggle="collapse" data-bs-target="#rek1c" aria-expanded="true" aria-controls="collapseOne">
                    Bank Mandiri
                  </button>
                </h2>
                <div id="rek1c" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p id="rek1"> </p>
                    <p>A.n. </p>
                    <button class="btn btn-danger mt-2 mb-2" onclick="CopyToClipboard('rek1')">Salin Nomor</button>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="btn btn-warning" type="button"data-bs-toggle="collapse" data-bs-target="#rek2c" aria-expanded="false" aria-controls="collapseTwo">
                    Bank BCA
                  </button>
                </h2>
                <div id="rek2c" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p id="rek2"></p>
                    <p>A.n. </p>
                    <button class="btn btn-danger mt-2 mb-2" onclick="CopyToClipboard('rek2')">Salin Nomor</button>
                  </div>
                </div>
              </div>
            </div>
            <p class="t-justify">Jangan lupa untuk konfirmasi amplop anda dengan menekan tombol konfirmasi di bawah.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a type="button" href="#" onclick="window.location.href='https://api.whatsapp.com/send?phone=628'" class="btn btn-success">
            <i class="fa fa-envelope-open-text"></i> 
            Konfirmasi
          </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bottom-bar">
      <audio controls autoplay id="myAudio">
        <source src="assets/song/song.mp3" type="audio/mpeg">
      </audio>
      <div class="list-group" id="menu-bar">
        <a class="nav-link list-group-item-action menu-icon" href="#home">
          <img src="assets/ikon/home.png">
        </a>
        <a class="nav-link list-group-item-action menu-icon" href="#menu-1">
          <img src="assets/ikon/wedding-ring.png">
        </a>
        <a class="nav-link list-group-item-action menu-icon" href="#menu-2">
          <img src="assets/ikon/valentines-day.png">
        </a>
        <a class="nav-link list-group-item-action menu-icon" href="#menu-3">
          <img src="assets/ikon/wedding.png">
        </a>
        <a class="nav-link list-group-item-action menu-icon" href="#menu-4">
          <img src="assets/ikon/wedding-planner.png">
        </a>
      </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#menu-bar" data-bs-offset="1" class="scrollspy-content" tabindex="0">
      
      <div id="home">
        <!-- Bgr gambar home -->
        <div id="bgr-home">
        </div>
        <!-- Bgr animasi -->
        <div class="area">
          <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <h1 class="c-white">The Wedding</h1>
        <h6>Official Invitation</h6> 
        <div class="animate mt-4 flower mb-4"> 
          <h2 class="flower-nama">Aku</h2> 
          <h1 class="flower-nama">&</h1> 
          <h2 class="flower-nama">Kamu</h2>
        </div>
         
        <p class="p-tanggal mt-4"><i class="far fa-heart c-white"></i> 1 Januari 2025 <i class="far fa-heart c-white"></i></p>
        <p class="p-tanggal">Nama Kecamatan, Nama Kota</p> 

      </div>

      <div id="menu-1" class="menu-div">
        <h3>Bismillahirahmanirrahim</h3>
        
        <p class="t-justify">Assalamualaikum Wr. Wb.
          Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan.
          Ya Allah semoga ridho-Mu tercurah mengiringi pernikahan putra-putri kami:
        </p>
        <img src="assets/P.jpg" class="rounded-circle foto-b">
        <h6 class="nama-text">Aku Binti Ayahku</h6>
        <h6>Putri dari</h6>
        <h6>Bapak Aku dan Ibu Aku</h6>
        
        <img src="assets/L.jpg" class="rounded-circle foto-a">
        <h6 class="nama-text">Kamu Bin Ayahmu</h6>
        <h6>Putra dari</h6>
        <h6>Bapak Kamu dan Ibu Kamu</h6>
        
      </div>

      <div id="menu-2" class="menu-div">
        <h3>Wedding Day</h3>
        <h6>The Happy Event</h6>
        
        <p>Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri Resepsi Pernikahan putra-putri kami
        </p>
        <div class="table-box mb-4">
          <table>   
            <tr>
              <th></th>
              <td><h4>Akad Nikah</h4></td>
            </tr>
            <tr>
              <th> <i class="fas fa-calendar-alt"></th>
              <td>Senin, 1 Januari 2025</td>
            </tr>
            <tr>
              <th><i class="fas fa-clock"></th>
              <td>09.00 WIB</td>
            </tr>
            <tr>
              <th style="vertical-align: text-top"><i class="fas fa-map"></th>
              <td>Masjid Baiturrahim - Kota Tercinta</td>
            </tr> 
          </table>
        </div> 

        <div class="table-box mb-4">
          <table>   
            <tr>
              <th></th>
              <td><h4>Resepsi</h4></td>
            </tr>
            <tr>
              <th><i class="fas fa-calendar-alt"></th>
              <td>Senin, 1 Januari 2025</td>
            </tr>
            <tr>
              <th><i class="fas fa-clock"></th>
              <td>19.00 WIT s.d. Selesai</td>
            </tr>
            <tr>
              <th style="vertical-align: text-top"><i class="fas fa-map"></th>
              <td>Gedung Pernikahan - Kota Tercinta</td>
            </tr>
          </table>
        </div>
        
        <div class="mapouter mb-4">
          <div class="gmap_canvas">
            <iframe width="100%" height="75%" id="gmap_canvas" src="https://maps.google.com/maps?q=Balai Besar Pendidikan dan Pelatihan Kesejahteraan Sosial (BBPPKS) Jayapura&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> 
          </div>
        </div>
        
        <a class="btn btn-warning mb-4 btn-lg w-100" href="http://www.google.com" target="_blank"> Petunjuk Arah  <i class="fa fa-arrow-circle-right"></i> </a>
        
        <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan do'a restu kepada kedua mempelai.</p>
        <div class="row">
          <div class="col-3 col-md-3 waktu">
            <p id="hari"></p>
            <p class="waktu-hint">Hari</p>
          </div>
          <div class="col-3 col-md-3 waktu">
            <p id="jam"></p>
            <p class="waktu-hint">Jam</p>
          </div>
          <div class="col-3 col-md-3 waktu">
            <p id="menit"></p>
            <p class="waktu-hint">Menit</p>
          </div>
          <div class="col-3 col-md-3 waktu">
            <p id="detik"></p>
            <p class="waktu-hint">Detik</p>
          </div>
        </div>

        <a class="btn mb-4 btn-lg btn-gold w-100" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=MHBpMG1wdWw5c2lucHBwbnF1bnZoN2J0MWwgZ3JhcGlra3VAbQ&amp;tmsrc=grapikku%40gmail.com"> <i class="fa fa-heart"></i> Save the date</a>
        
        <p>Untuk menghindari penyebaran virus covid-19 dimohon kepada seluruh tamu undangan untuk selalu :</p>
        <table class="mb-4">
          <tr>
            <td><img src="assets/1.png" class="w-50"></td>
            <td style="text-align: left">Menggunakan masker</td>
          </tr>
          <tr>
            <td><img src="assets/2.png" class="w-50"></td>
            <td style="text-align: left">Menjaga jarak</td>
          </tr>
          <tr>
            <td><img src="assets/3.png" class="w-50"></td>
            <td style="text-align: left">Mencuci tangan dengan sabun atau handsanitizer</td>
          </tr>
        </table>
        
        <div class="accordion" id="accordionExample">
          <div class="accordion-item ">
            <h2 class="accordion-header " id="headingTwo">
              <button class="btn collapsed btn-gold btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-align: center;width: 100%">
                <i class="fa fa-handshake"></i>  Turut Mengundang
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table>
                  <tr>
                    <td style="vertical-align: top">1.</td>
                    <td>Dr.H.Makmur Tajuddin S.Ag., SH., MM</td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top">2.</td>
                    <td>H.Djen Kutanggas</td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top">3.</td>
                    <td>H.Dehan</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="menu-3" class="menu-div">
        <h3>Our Gallery</h3>
        <h6>Happiness Moment of Us</h6>
        <div class="container">
          <div class="row"> 
            <div class="col-md-12" style="transform:rotate(-5deg)">
              <a class="thumbnail" href="#" data-image-id="" data-bs-toggle="modal" data-title="" data-image="galeri/1.jpg" data-bs-target="#image-gallery">
                <img class="img-thumbnail" src="galeri/1.jpg">
              </a>
            </div>
            <div class="col-md-12" style="transform:rotate(2deg)">
              <a class="thumbnail" href="#" data-image-id="" data-bs-toggle="modal" data-title="" data-image="galeri/2.jpg" data-bs-target="#image-gallery">
                <img class="img-thumbnail" src="galeri/2.jpg">
              </a>
            </div>
            <div class="col-md-12" style="transform:rotate(-3deg)">
              <a class="thumbnail" href="#" data-image-id="" data-bs-toggle="modal" data-title="" data-image="galeri/3.jpg" data-bs-target="#image-gallery">
                <img class="img-thumbnail" src="galeri/3.jpg">
              </a>
            </div> 

            <!-- Modal Foto Show -->
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <button type="button" class="btn-close btn-close-top" data-bs-dismiss="modal"></button>
                  <div class="modal-body">
                    <img id="image-gallery-image" class="img-fluid" src="">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div id="menu-4" class="menu-div"> 
        <h3>Say Something</h3>
        <h6>Tell us what you're thinking about us</h6>
        <p>
          Dan diantara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
          - QS. Ar-Rum: 21
        </p> 

        <button data-bs-toggle="modal" data-bs-target="#amplop" class="btn btn-danger mb-2 d-none">
          <i class="fa fa-envelope-open"></i> Kirim Hadiah
        </button>  

        <!-- Form Pesan -->
        <div id="kirim_p" class="" aria-labelledby="headingTwo" data-bs-parent="#pesan_orang">
          <div class="accordion-body">
            <form method="post" action="tambah_pesan.php">

              <input class="form-control mb-2" name="nama" placeholder="Nama" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" required>

              <!-- Set Value di bawah berdasarkan penerima -->
              <input class="form-control" type="hidden" value="aku-kamu" name="kepada" placeholder="Nama">

              <textarea class="form-control" name="pesan" id="pesan" placeholder="Ucapan & Doa (Maks 200 karakter)" rows="4" autocomplete="off" required></textarea>
              <label>Pada saat acara kemungkinan saya :</label>
              <div class="form-check form-check-inline">

                <input type="radio" class="btn-check" name="kehadiran" value="Hadir" id="success-outlined" autocomplete="off" checked>
                <label class="btn btn-outline-success" for="success-outlined">Akan Hadir</label>

                <input type="radio" class="btn-check" name="kehadiran" value="Tidak Hadir" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-danger" for="danger-outlined">Tidak Hadir</label>

                <input type="radio" class="btn-check" name="kehadiran" value="50:50" id="warning-outlined" autocomplete="off">
                <label class="btn btn-outline-warning" for="warning-outlined">Masih Dilema</label>

              </div>
              
              <label>Perasaan saya mendengar kabar ini :</label>
              <div class="emot-selector mb-2">
                <input id="senang" type="radio" name="emot" value="senang" />
                <label class="emot senang mb-2" for="senang"></label>
                <input id="sedih" type="radio" name="emot" value="sedih" />
                <label class="emot sedih mb-2" for="sedih"></label>
                <input id="cemburu" type="radio" name="emot" value="cemburu" />
                <label class="emot cemburu mb-2" for="cemburu"></label>
                <input id="love" type="radio" name="emot" value="love" />
                <label class="emot love" for="love"></label>
                <input id="terluka" type="radio" name="emot" value="terluka" />
                <label class="emot terluka" for="terluka"></label>
                <input id="marah" type="radio" name="emot" value="marah" />
                <label class="emot marah" for="marah"></label>
              </div>
              <button type="submit" class="btn btn-gold btn-lg w-100">Kirim <i class="fa fa-arrow-circle-right"></i></button>
            </form>
          </div>
        </div>
        
        <div class="table-div mb-4">
          <?php 
          include 'config.php';
          $no = 1;
          $query = mysqli_query($mysqli, "SELECT * FROM pesan where kepada='aku-kamu' or kepada='all' order by id desc");
          while ($data = mysqli_fetch_array($query)){?>
            <table class="table-ku" id="emosi">
              <tr>
                <td rowspan="3" style="vertical-align: top">
                  <i class="senang" id="emot_personal"></i>
                </td>
                <td class="f-bolder"><?php echo $data['nama']; ?></td>
                <input id="emot_data" value="<?php echo $data['emot'] ; ?>" type="hidden" class="form-control">
              </tr>
              <tr>
                <td class="f-italic">
                <input id="hadir_status" value="<?php echo $data['kehadiran']; ?>" class="input-hadir">
              </td>
              </tr>
              <tr>
                <td><?php echo $data['pesan']; ?> </td>
              </tr>
            </table>
          <?php } ?>
        </div>
        
        <a href="http://webkuy.com" target="_blank" class="badge bg-warning mb-4">
          <img src="https://webkuy.com/assets/img/favicon.ico" style="width: 20px"> Powered by Webkuy!
        </a> 
      </div>

    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script.js"></script>
  
  </body>
</html>