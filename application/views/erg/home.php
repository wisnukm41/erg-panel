    <div id="slide" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="bg-main-slide" style="background-image: url('<?= base_url('assets/uploads/images/recruitment.jpg') ?>')">
          </div>
          <a href="#">
            <div class="carousel-caption">
              <h3>Open Recruitment 2019</h3>
              <p>Divisi ERG membuka recruitment untuk calon anggota.</p>
            </div>
          </a>
        </div>
        <?php foreach ($slides as $slide) : ?>
        <div class="carousel-item">
          <div class="bg-main-slide" style="background-image: url('<?= base_url('assets/uploads/images/').$slide->img ?>')">
          </div>
          <a href="#">
            <div class="carousel-caption">
              <h3><?= $slide->name ?></h3>
              <p><?= $slide->description ?></p>
            </div>
          </a>
        </div>
        <?php endforeach ?>
      </div>
      <a class="carousel-control-prev" href="#slide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  <section id="about" class="content">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center">TENTANG</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-3">
          <div class="about-img" style="background-image: url('<?= base_url('assets/public/who.jpeg') ?>')"></div>
        </div>
        <div class="col-lg-6">
          <h4 class="text-lg-right">Siapa Kami</h4>
          <p class="text-lg-right">ERG adalah Divisi UNIKOM yang bergerak pada bidang teknologi</p>
        </div>
      </div>
    </div>
  </section>
  <section id="research" class="content">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center">RISET</h1>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-2dot4 col-4">
          <div id="iot-research" class="bg-research">
            <img class="img-research" src="<?= base_url('assets/public/iot.png') ?>" alt="IoT" width="100%">
          </div>
        </div>
        <div class="col-lg-2dot4 col-4">
          <div id="embedded-research" class="bg-research">
            <img class="img-research" src="<?= base_url('assets/public/embedded.png') ?>" alt="Embedded" width="100%">
          </div>
        </div>
        <div class="col-lg-2dot4 col-4">
          <div id="desktop-research" class="bg-research">
            <img class="img-research" src="<?= base_url('assets/public/desktop.png') ?>" alt="Desktop" width="100%">
          </div>
        </div>
        <div class="col-lg-2dot4 col-6">
          <div id="mobile-research" class="bg-research">
            <img class="img-research" src="<?= base_url('assets/public/mobile.png') ?>" alt="Mobile" width="100%">
          </div>
        </div>
        <div class="col-lg-2dot4 col-6">
          <div id="web-research" class="bg-research">
            <img class="img-research" src="<?= base_url('assets/public/web.png') ?>" alt="Web" width="100%">
          </div>
        </div>
      </div>
      <div id="research-iot" class="row mb-5 bg-research-studies">
        <div class="col-lg-6">
          <div class="content-research">
            <h4 class="bg-title-research">IoT (Internet of Thing)</h4>
            <p class="bg-desc-research text-justify">Internet untuk Segala-(nya) (bahasa Inggris: Internet of Things, atau dikenal juga dengan singkatan IoT) merupakan sebuah konsep yang bertujuan untuk memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus. Adapun kemampuan seperti berbagi data, remote control, dan sebagainya, termasuk juga pada benda di dunia nyata. Contohnya bahan pangan, elektronik, koleksi, peralatan apa saja, termasuk benda hidup yang semuanya tersambung ke jaringan lokal dan global melalui sensor yang tertanam dan selalu aktif.Pada dasarnya, Internet of Things mengacu pada benda yang dapat diidentifikasikan secara unik sebagai representasi virtual dalam struktur berbasis Internet. Istilah Internet of Things awalnya disarankan oleh Kevin Ashton pada tahun 1999 dan mulai terkenal melalui Auto-ID Center di MIT.</p>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div id="iot-studies-slide" class="carousel slide main-slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#iot-studies-slide" data-slide-to="0" class="active">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/mqtt.png') ?>" alt="mqtt" width="100%">
                </div>
              </li>
              <li data-target="#iot-studies-slide" data-slide-to="1">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/arduino.png') ?>" alt="arduino" width="100%">
                </div>
              </li>
              <li data-target="#iot-studies-slide" data-slide-to="2">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/python.png') ?>" alt="python" width="100%">
                </div>
              </li>
              <li data-target="#iot-studies-slide" data-slide-to="3">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/database.png') ?>" alt="Database" width="100%">
                </div>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">MQTT</h4>
                    <p class="bg-desc-study text-justify">Diterjemahkan dari bahasa Inggris-MQTT adalah protokol pengiriman berbasis-berlangganan-standar ISO. Ini bekerja di atas protokol TCP / IP. Ini dirancang untuk koneksi dengan lokasi terpencil di mana "jejak kode kecil" diperlukan atau bandwidth jaringan terbatas. Pola pesan publish-subscribe membutuhkan broker pesan.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Arduino IDE</h4>
                    <p class="bg-desc-study text-justify">Arduino menggunakan bahasa pemrograman sendiri yang menyerupai bahasa C. Bahasa pemrograman Arduino (Sketch) sudah dilakukan perubahan untuk memudahkan pemula dalam melakukan pemrograman dari bahasa aslinya. Sebelum dijual ke pasaran, IC mikrokontroler Arduino telah ditanamkan suatu program bernama Bootlader yang berfungsi sebagai penengah antara compiler Arduino dengan mikrokontroler.Arduino IDE dibuat dari bahasa pemrograman JAVA. Arduino IDE juga dilengkapi dengan library C/C++ yang biasa disebut Wiring yang membuat operasi input dan output menjadi lebih mudah. </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Python (bahasa pemrograman)</h4>
                    <p class="bg-desc-study text-justify">Python adalah bahasa pemrograman interpretatif multiguna dengan filosofi perancangan yang berfokus pada tingkat keterbacaan kode.Python diklaim sebagai bahasa yang menggabungkan kapabilitas, kemampuan, dengan sintaksis kode yang sangat jelas,dan dilengkapi dengan fungsionalitas pustaka standar yang besar serta komprehensif. Python juga didukung oleh komunitas yang besar.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Database (NoSQL, SQL)</h4>
                    <p class="bg-desc-study text-justify">Databse adalah kumpulan berbagai data dan informasi yang tersimpan dan tersusun di dalam komputer secara sistematik yang dapat diperiksa, diolah atau dimanipulasi dengan menggunakan program komputer untuk mendapatkan informasi dari basis data tersebut</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="research-embedded" class="row mb-5 bg-research-studies">
        <div class="col-lg-6">
          <div class="content-research">
            <h4 class="bg-title-research">Embedded System (Microcontroller & Hardware)</h4>
            <p class="bg-desc-research">Mikrokontroler adalah sebuah chip yang berfungsi sebagai pengontrol rangkaian elektronik dan umunya dapat menyimpan program did umumnya terdiri dari CPU (Central Processing Unit), memori, I/O tertentu dan unit pendukung seperti Analog-to-Digital Converter (ADC) yang sudah terintegrasi di dalamnya.</p>
            <p class="bg-desc-research">Perangkat Keras Komputer (Hardware) adalah sebuah komponen fisik pada komputer yang digunakan oleh sistem untuk menjalankan perintah yang telah diprogramkan atau dalam arti singkatnya sebuah komponen pada komputer yang bisa disentuh, dilihat dan diraba.</p>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div id="embedded-studies-slide" class="carousel slide main-slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#embedded-studies-slide" data-slide-to="0" class="active">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/mikro.png') ?>" alt="mikro" width="100%">
                </div>
              </li>
              <li data-target="#embedded-studies-slide" data-slide-to="1">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/pcb.jpg') ?>" alt="elektronika" width="100%">
                </div>
              </li>
              <li data-target="#embedded-studies-slide" data-slide-to="2">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/arduino.png') ?>" alt="arduino" width="100%">
                </div>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Mikrokontroler</h4>
                    <p class="bg-desc-study"> Ada beberapa fungsi atau kegunaan mikrokontroler antara lain iyalah : 
                    <ol>
                      <li> Sebagai Counter</li>
                      <li> Sebagai Decoder dan Encoder</li>
                      <li> Sebagai Flip -  Flop</li>
                      <li> Sebagai Pembangkit Osilasi</li>
                      <li> Sebagai Timer / Pewaktu</li>
                      <li> Sebagai ADC ( Analog Digital Converter )</li>
                      <li> DLL.</li>
                    </ol></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Elektronika</h4>
                    <p class="bg-desc-study">Elektronika merupakan ilmu yang mempelajari alat listrik arus lemah yang dioperasikan dengan cara mengontrol aliran elektron atau partikel bermuatan listrik dalam suatu alat seperti komputer, peralatan elektronik, termokopel, semikonduktor, dan lain sebagainya, disini juga kita mempelajari desain Elektronik menggunkan : </p>
                    <ul>
                      <li>Proteus</li>
                      <li>EAGLE</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Arduino IDE</h4>
                    <p class="bg-desc-study text-justify">Arduino menggunakan bahasa pemrograman sendiri yang menyerupai bahasa C. Bahasa pemrograman Arduino (Sketch) sudah dilakukan perubahan untuk memudahkan pemula dalam melakukan pemrograman dari bahasa aslinya. Sebelum dijual ke pasaran, IC mikrokontroler Arduino telah ditanamkan suatu program bernama Bootlader yang berfungsi sebagai penengah antara compiler Arduino dengan mikrokontroler.Arduino IDE dibuat dari bahasa pemrograman JAVA. Arduino IDE juga dilengkapi dengan library C/C++ yang biasa disebut Wiring yang membuat operasi input dan output menjadi lebih mudah. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="research-desktop" class="row mb-5 bg-research-studies">
        <div class="col-lg-6">
          <div class="content-research">
            <h4 class="bg-title-research">Desktop</h4>
            <p class="bg-desc-research text-justify">Sub riset desktop merupakan aplikasi berbasis sistem operasi(os) windows. Disini kita mempelajari bahasa pemograman .Net yaitu Visual Basic(VB), dan CSharp(C#),dengan menggunakan bahasa ini ,para programmer dapat membangun aplikasi windows forms.juga dapat di peroleh secara terpadu dalam Microsoft Visual Studio .NET seperti bahas Visual Basic.NET atau CSharp sendiri menganut paradigma bahasa pemograman berorientasi objek yang dapat dilihat sebagai evolusi dari Microsoft Visual Basic atau CSharp versi sebelumnya yang di implimentasikan diatas .NET Framework.</p>
         </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div id="desktop-studies-slide" class="carousel slide main-slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#desktop-studies-slide" data-slide-to="0" class="active">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/csharp.png') ?>" alt="CSharp" width="100%">
                </div>
              </li>
              <li data-target="#desktop-studies-slide" data-slide-to="1">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/vbnet.png') ?>" alt="VBNet" width="100%">
                </div>
              </li>
              <li data-target="#desktop-studies-slide" data-slide-to="2">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/database.png') ?>" alt="Database" width="100%">
                </div>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">C# (CSharp)</h4>
                    <p class="bg-desc-study text-justify">C# merupakan sebuah bahasa pemrograman yang berorientasi objek yang dikembangkan oleh Microsoft sebagai bagian dari inisiatif kerangka .NET Framework.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Visual Basic (VB)</h4>
                    <p class="bg-desc-study text-justify">Microsoft Visual Basic merupakan sebuah bahasa pemrograman yang menawarkan Integrated Development Environment visual untuk membuat program perangkat lunak berbasis sistem operasi Microsoft Windows dengan menggunakan model pemrograman.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Database (NoSQL, SQL)</h4>
                    <p class="bg-desc-study text-justify">Databse adalah kumpulan berbagai data dan informasi yang tersimpan dan tersusun di dalam komputer secara sistematik yang dapat diperiksa, diolah atau dimanipulasi dengan menggunakan program komputer untuk mendapatkan informasi dari basis data tersebut</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="research-mobile" class="row mb-5 bg-research-studies">
        <div class="col-lg-6">
          <div class="content-research">
            <h4 class="bg-title-research">Mobile</h4>
            <p class="bg-desc-research">Di sub riset Mobile berfokus pada pembuatan aplikasi Android. Di ERG, fokus utama sub riset Mobile untuk membuat aplikasi Android yang berbasis IoT. Selain itu, di sub riset Mobile juga akan mempelajari Realtime Database, Maps API, Socket, dan lain – lainnya. Sub riset Mobile harus bisa bekerja sama dengan sub riset IoT dan Embedded System demi membuat sistem IoT terintegrasi yang sempurna.</p>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div id="mobile-studies-slide" class="carousel slide main-slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#mobile-studies-slide" data-slide-to="0" class="active">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/firebase.png') ?>" alt="Firebase" width="100%">
                </div>
              </li>
              <li data-target="#mobile-studies-slide" data-slide-to="1">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/androidstudio.png') ?>" alt="Android Studio" width="100%">
                </div>
              </li>
              <li data-target="#mobile-studies-slide" data-slide-to="2">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/sqlite.png') ?>" alt="SQL Lite" width="100%">
                </div>
              </li>
              <li data-target="#mobile-studies-slide" data-slide-to="3">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/xml.png') ?>" alt="XML" width="100%">
                </div>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Firebase</h4>
                    <p class="bg-desc-study">Firebase adalah suatu layanan dari Google yang digunakan untuk mempermudah para pengembang aplikasi dalam mengembangkan aplikasi. Dengan adanya Firebase, pengembang aplikasi bisa fokus mengembangkan aplikasi tanpa harus memberikan usaha yang besar.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Android Studio</h4>
                    <p class="bg-desc-study">Android Studio adalah Integrated Development Enviroment untuk sistem operasi Android, yang dibangung diatas perangkat lunak JetBrains IntelliJ IDEA dan didesain khusus untuk pengembangan Android.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Sqlite</h4>
                    <p class="bg-desc-study">SQLite merupakan sebuah sistem manajemen basisdata relasional yang bersifat ACID-compliant dan memiliki ukuran pustaka kode yang relatif kecil, ditulis dalam bahasa C. SQLite merupakan proyek yang bersifat public domain yang dikerjakan oleh D. Richard Hipp.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">XML</h4>
                    <p class="bg-desc-study">XML adalah bahasa markup untuk keperluan umum yang disarankan oleh W3C untuk membuat dokumen markup keperluan pertukaran data antar sistem yang beraneka ragam. XML merupakan kelanjutan dari HTML yang merupakan bahasa standar untuk melacak Internet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="research-web" class="row mb-5 bg-research-studies">
        <div class="col-lg-6">
          <div class="content-research">
            <h4 class="bg-title-research">Web</h4>
            <p class="bg-desc-research text-justify">Web programming terdiri dari dua suku kata yaitu web dan programming. Programming dapat diartikan sebagai proses, cara, atau pembuatan suatu program. Sedangkan web dapat diartikan sebagai jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks, grafik, suara dan sumber daya animasi melalui protokol transfer hypertext (HTTP). Jadi, web programming adalah suatu proses, cara, atau pembuatan suatu program berbasis web.</p>
            <p class="bg-desc-research text-justify">Bagian web programming itu terdiri dari 3 segmen: cloud, hosting dan website.</p>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div id="web-studies-slide" class="carousel slide main-slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#web-studies-slide" data-slide-to="0" class="active">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/laravel.png') ?>" alt="Laravel" width="100%">
                </div>
              </li>
              <li data-target="#web-studies-slide" data-slide-to="1">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/nodejs.png') ?>" alt="NodeJS" width="100%">
                </div>
              </li>
              <li data-target="#web-studies-slide" data-slide-to="2">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/frontend.png') ?>" alt="Frontend" width="100%">
                </div>
              </li>
              <li data-target="#web-studies-slide" data-slide-to="3">
                <div class="bg-content-research">
                  <img class="img-research" src="<?= base_url('assets/public/database.png') ?>" alt="Database" width="100%">
                </div>
              </li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Laravel</h4>
                    <p class="bg-desc-study text-justify">Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">NodeJS+ (Framework)</h4>
                    <p class="bg-desc-study text-justify">Node.js adalah perangkat lunak yang didesain untuk mengembangkan aplikasi berbasis web dan ditulis dalam sintaks bahasa pemrograman JavaScript. Bila selama ini kita mengenal JavaScript sebagai bahasa pemrograman yang berjalan di sisi client / browser saja, maka Node.js ada untuk melengkapi peran JavaScript sehingga bisa juga berlaku sebagai bahasa pemrograman yang berjalan di sisi server.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Frontend (Framework)</h4>
                    <p class="bg-desc-study text-justify">Frontend adalah bagian yang langsung dilihat oleh user. User juga bisa langsung berinteraksi pada bagian ini. Bagian ini dibangun menggunakan HTML, CSS, dan JavaScript.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <h4 class="bg-title-study">Database (NoSQL, SQL)</h4>
                    <p class="bg-desc-study text-justify">Databse adalah kumpulan berbagai data dan informasi yang tersimpan dan tersusun di dalam komputer secara sistematik yang dapat diperiksa, diolah atau dimanipulasi dengan menggunakan program komputer untuk mendapatkan informasi dari basis data tersebut</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-12">
          <h3 class="text-center">TIM PENDUKUNG</h1>
        </div>
      </div>
      <div class="row py-3" style="background-color: #0b387c">
        <div class="col-lg-6 pb-3">
          <div class="row">
            <div class="col-lg-12 col-4">
              <div class="bg-research">
                <img class="img-research" src="<?= base_url('assets/public/designer.png') ?>" alt="Designer"
                  width="100%">
              </div>
            </div>
            <div class="col-lg-12 col-8">
              <h4 class="text-lg-center">Graphic Design</h4>
              <p class="text-lg-center">Graphic Design adalah profesi yang menciptakan ilustrasi, tipografi, fotografi, videografi, atau grafis motion. Seorang desainer grafis menciptakan karya untuk penerbit, media cetak dan elektronik, seperti brosur dan mengiklankan produk.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0C4091">
          <div class="row">
            <div class="col-lg-12 col-4">
              <div class="bg-research">
                <img class="img-research" src="<?= base_url('assets/public/speaker.png') ?>" alt="Public Speaker"
                  width="100%">
              </div>
            </div>
            <div class="col-lg-12 col-8">
              <h4 class="text-lg-center">Public Speaking</h4>
              <p class="text-lg-center">Public Speaking adalah komunikasi lisan berupa pidato, presentasi, dan jenis berbicara di depan umum (orang banyak) lainnya. Public Speaking juga diartikan sebagai "pembicaraan publik" yang maksudnya berbicara di depan orang banyak juga.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="activity" class="content">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center">KEGIATAN</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row mb-3">
            <div class="col-4 col-lg-3">
              <div class="bg-activity">
                <img class="img-research" src="<?= base_url('assets/public/workshop.png') ?>" alt="Workshop"
                  width="100%">
              </div>
            </div>
            <div class="col-8 col-lg-9">
              <h4>Seminar</h4>
              <p>Kita bisa menyelenggarakan seminar yang bermanfaat untuk membantu perkembangan anda</p>
            </div>
          </div>
          <div class="row">
            <div class="col-4 col-lg-3">
              <div class="bg-activity">
                <img class="img-research" src="<?= base_url('assets/public/sharing.png') ?>" alt="Sharing" width="100%">
              </div>
            </div>
            <div class="col-8 col-lg-9">
              <h4>Diskusi</h4>
              <p>Kita bisa menyelenggarakan diskusi tentang teknologi yang berhadapan dengan kita untuk menyelesaikan
                solusi</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row mb-3">
            <div class="col-lg-3 col-4 order-lg-2">
              <div class="bg-activity">
                <img class="img-research" src="<?= base_url('assets/public/expo.png') ?>" alt="Expo" width="100%">
              </div>
            </div>
            <div class="col-lg-9 col-8 order-lg-1">
              <h4 class="text-lg-right">Pameran</h4>
              <p class="text-lg-right">Kita bisa ikut pameran-pameran teknologi atau festival yang diadakan oleh
                komunitas untuk memperluas ilmu pengetahuan</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3 col-4 order-lg-2">
              <div class="bg-activity">
                <img class="img-research" src="<?= base_url('assets/public/sport.png') ?>" alt="Sport" width="100%">
              </div>
            </div>
            <div class="col-lg-9 col-8 order-lg-1">
              <h4 class="text-lg-right">Olahraga</h4>
              <p class="text-lg-right">Kita bisa ikut kegiatan olahraga seperti Berenang, Badminton, Volley, dll</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="news" class="content">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center">BERITA</h1>
        </div>
      </div>
      <div class="row mb-4">
      <?php
        $i=1;
        foreach ($news as $news) :
        if($i <= 4) :
        ?>
        <div class="col-lg-3 mb-3">
          <a href="<?= base_url('news/').$news->slug ?>" class="text-dark" style="text-decoration: none">
            <div class="bg-news">
              <div class="row">
                <div class="col-lg-12">
                  <div class="bg-section-news"
                    style="background-image: url('<?= base_url('assets/uploads/news/'.$news->img) ?>')"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="desc-news">
                    <h5><?= $news->name ?></h5>
                    <div style="overflow:hidden">
                      <p>
                        <?= substr("$news->description",0,120) ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="date-news text-center mt-auto">
                    <span><?= $news->date ?></span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php endif; $i++; endforeach ?>
      </div>
      <div class="row">
        <!-- <div class="col-lg-12 text-center">
          <a href="#" class="btn btn-primary mx-auto">Lihat Berita Lainnya</a>
        </div> -->
      </div>
    </div>
  </section>
  <section id="achievement" class="content">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center">PRESTASI</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-1 col-1">
          <a class="carousel-control-prev" href="#achievement-slide" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
        </div>
        <div class="col-lg-10 col-10">
          <div id="achievement-slide" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php 
              $a = 1;
              foreach($awards as $award):
                if($award->image !== 'default.png' && $award->image !== null) :
                  if($a === 1):
            ?>
              <div class="carousel-item active">
              <?php else : ?>
              <div class="carousel-item">
              <?php endif ?>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="bg-achievement-slide"
                      style="background-image: url('<?= base_url('assets/uploads/awards/').$award->image ?>')"></div>
                    </div>
                  <div class="col-lg-6">
                    <h4><?= $award->topic ?></h4>
                    <p><?= $award->description ?></p>
                    <span class="btn btn-info">Tim</span>
                  </div>
                </div>
              </div>
            <?php
            $a++;
            endif;
            endforeach ?>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-1">
          <a class="carousel-control-next" href="#achievement-slide" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="footer" class="content-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <div class="text-center">
            <img class="img-logo-footer" src="<?= base_url('assets/public/erg-logo-white.png') ?>" alt="ERG Logo">
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-6">
          <div class="row mb-4">
            <div class="col-lg-12">
              <h3 class="text-center">LINKS</h3>
            </div>
          </div>
          <div id="footer-link" class="row text-center d-flex justify-content-center mb-3 footer-menu">
            <div class="col-4 mb-3">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="#about">Tentang</a>
              </span>
            </div>
            <div class="col-4 mb-3">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="#research">Riset</a>
              </span>
            </div>
            <div class="col-4 mb-3">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="#activity">Kegiatan</a>
              </span>
            </div>
            <div class="col-4 mb-3">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="#news">Berita</a>
              </span>
            </div>
            <div class="col-4 mb-3">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="#achievement">Prestasi</a>
              </span>
            </div>
          </div>
          <div class="row text-center d-flex justify-content-center mb-5">
            <div class="col-12">
              <span class="text-uppercase font-weight-bold">
                <a class="text-light text-decoration-none" href="https://www.unikom.ac.id">UNIKOM</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="border-left: 1px solid #0b387c">
          <div class="row mb-3">
            <div class="col-lg-12">
              <h3 class="text-center">Follow Up</h3>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-3">
              <a href="https://www.facebook.com/divisiergunikom">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="bg-follow">
                      <img class="img-research" src="<?= base_url('assets/public/facebook.png') ?>" alt="Designer"
                        width="100%">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-3">
              <a href="https://www.instagram.com/ergunikom_">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="bg-follow">
                      <img class="img-research" src="<?= base_url('assets/public/instagram.png') ?>" alt="Designer"
                        width="100%">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-3">
              <a href="https://www.youtube.com/channel/UCSAT6XES3dH19wegALq7-EQ">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="bg-follow">
                      <img class="img-research" src="<?= base_url('assets/public/youtube.png') ?>" alt="Designer"
                        width="100%">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-3">
              <a href="mailto:ergunikom.official@gmail.com">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="bg-follow">
                      <img class="img-research" src="<?= base_url('assets/public/email.png') ?>" alt="Designer"
                        width="100%">
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-center">Ruang ERG, 4503 (Gdg Miracle), Jalan Dipatiukur No. 112-116, Coblong, Lebakgede, Bandung, Kota Bandung, Jawa Barat 40132</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center font-italic">
            <p>ERG adalah divisi yang bergerak di bidang riset & teknologi. Kami membuat banyak produk untuk membantu masyarakan, mengikuti kompetisi di bidang teknologi, menyebarkan pengetahuan tentang pengembangan teknologi, bekerja dengan banyak lembaga untuk membangun produk ber-teknologi</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footbar" class="content-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <span>Crafted By ERG | Web Team</span>
          </div>
        </div>
      </div>
    </div>
  </section>