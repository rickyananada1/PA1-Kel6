@include('struktur.navbar')

<div class="section">
    <div class="section-01">
      <img src="{{ asset('FrontEnd/img/30.jpg') }}"></a>
      <p>foodpedia Numero Sada adalah sebuah UMKM di kabupaten Toba yang menyediakan berbagai menu makanan dan minuman yang sesuai dengan masakan Nusantara.
        selain makanan berat tersedia juga cemilan dan minumam menarik yang bisa dinikmati seluruh kalangan usia. Cafe yang berdiri sejak 2016 ini selalu mengikuti perkembangan selera customer dimana interior cafe yang instagramable menjadi salah satu daya tarik bagi pelanggan terutama bagi kaum anak muda</p>
    </div><br>
    <div class="section-02">
      <p>foodpedia Numero Sada terletak di Jl Dr TB Silalahi Silalahi Pagar Batu Kec. Balige Toba Sumatera Utara.<br>
        Letak Cafe ini terbilang cukup strategis karena dekat dengan Jalan Lintas,Lumayan dekat juga dengan Museum TB Silalahi<br> Dapat Ditempuh dengan berjalan kaki dari TB Silalahi Selama 10 sampai 15 menit atau sekitaran 5 menit jika menggunakan dengan kendaraan</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.5161304118133!2d99.04604837483183!3d2.3312671976483874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0583927ff7fb%3A0x99213ac5e06301fe!2sFoodpedia%20Balige!5e0!3m2!1sid!2sid!4v1683188427038!5m2!1sid!2sid" width="50" height="50" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><br>
    <div class="section-03">
      <img src="{{ asset('FrontEnd/img/17.jpg') }}"></a>
      <div class="text">
        <p>Waktu operasi foodpedia :</p>
        <li>Senin – Jumat : 11.00 - 21.00 WIB</li>
        <li>Sabtu		  : 11.00 - 22.00 WIB</li></div>
    </div>
   </div><br>
   <div class="feedback">
     <div class="text" style="margin: auto;">
     <h3> "Berikanlah saran sebenar-benarnya,<br> agar kami bisa meningkatkan pelayanan kami."</h3>
     </div>

   <div class="form_comment">
   <div class="box_form" style="background-color:white  ; padding: 11px;">
   <form method="post" action="feedback.php">
      <h4 style="color:var(--yellow);">Nama :</h4>
      <input type="text" name="nama" placeholder="Masukan nama anda!!"><br><br>
      <h4 style="color:var(--yellow);">Pendapat anda :</h4>
      <textarea name="comment"  style="width: 400px; height:50px;"></textarea><br>
      <button type="submit" name="upload">Submit</button>
    </form>
   </div>
      <div id="box_comment">


      </div>
    </div>
   </div><br>
  <p class="m-0 text-center text-white">
    &copy;
    Designed by Kelompok 06 PA 2023
    </p>
  </div>

