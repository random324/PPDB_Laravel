@extends('layouts.main')

@section('container')
    <div class="kodfun-galeri">
        <div style="background-image: url('img/tkj.jpg');"></div>
        <div style="background-image: url('img/mm.jpg');"></div>
        <div style="background-image: url('img/smk.png');"></div>
        <div style="background-image: url('img/rpl.jpg');"></div>
        <div style="background-image: url('img/school.jpg');"></div>

    </div>
    <hr />
    <div id="jurusan">

        <h2>KOMPETENSI KEAHLIAN</h2>

        <p>Berikut ini adalah uraian singkat Jurusan di SMKN 4 Payakumbuh</p>

        <div class='grid'>

            <div class='keahlian'>

                <a href=""><img src="img/tkj.jpg"></a>

                <h3>Teknik Komputer Dan Jaringan</h3>

                <p>Jurusan TKJ adalah satu jurusan yang mempelajari seluruh seluk beluk komputer dan jaringannya. Secara
                    garis besar, jurusan ini akan mengajarkan terkait perakitan, pemasangan, perbaikan, dan jaringan
                    komputer. Jurusan TKJ dapat dijumpai di SMK di seluruh Indonesia.
                </p>

            </div>

            <div class='keahlian'>

                <a href=""><img src="img/mm.jpg"></a>

                <h3>Multi Media</h3>

                <p>Jurusan multimedia ini merupakan suatu jurusan SMK di bidang komputer yang mempelajari tentang penggunaan
                    komputer guna untuk menyajikan data teks, suara, gambar, animasi, serta video yang dibuat semenarik
                    mungkin dengan tools-tools yang sudah tersedia seperti halnya Adobe Photoshop, CorelDraw, Freehand,
                    Adobe After.</p>

            </div>

            <div class='keahlian'>

                <a href=""> <img src="img/rpl.jpg"></a>

                <h3>Rekayasa perangkat Lunak</h3>

                <p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang
                    Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer.</p>

            </div>

            <div class='keahlian'>

                <a href=""> <img src="img/school.jpg" alt="Broadcasting"></a>

                <h3>Broadcasting Dan Perfileman</h3>

                <p>Secara umum, Jurusan Broadcasting adalah sebuah jurusan yang mempelajari bagaimana teori dan praktik
                    dalam menciptakan program untuk disiarkan melalui media massa yaitu televisi dan radio, selain itu juga
                    saat ini semakin berkembang new media melalui internet.</p>

            </div>

        </div>



    </div>

    <div class="depan">

        <img src="img/logo.png">

    </div>

    <div class="organisasi">

        <h1>STRUKTUR ORGANISASI</h1>

        <p>Struktur organisasi di SMKN 4 Payakumbuh</p>

        <div class="grid2">



            <div class="struktur">

                <img src="img/kepsek.jpg">

                <h2>Drs. AIZUR HEDI, MM</h2>

                <p><b>KEPALA SEKOLAH</b></p>

                <p>menjabat kepala sekolah</p>

            </div>

            <div class="struktur">

                <img src="img/logo_smk.png">

                <h2>Ilham ilahi, M.Pd.T</h2>

                <p><b>WAKA HUBINMAS</b></p>

                <p>Menjabat wakil kepala sekolah hubinmas</p>

            </div>
        </div>

        <div class="subscribe">

            <h1>Official SMKN 4 Payakumbuh</h1>

            <a href='https://www.youtube.com/@smkn4pyk'>SUBSCRIBE</a>

        </div>
        <br><br>

        </body>

        </html>

        <style>
            .kodfun-galeri {
                display: flex;
                height: 15rem;
                gap: 1rem;
            }

            .kodfun-galeri>div {
                flex: 1;
                border-radius: 1rem;
                background-position: center;
                background-repeat: no-repeat;
                background-size: auto 100%;
                transition: all .8s cubic-bezier(.25, .4, .45, 1.4);
            }

            .kodfun-galeri>div:hover {
                flex: 5;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                font-weight: lighter;
            }

            .top {
                background-image: url(img/bg.jpg);
                background-size: cover;
                height: 90vh;
                opacity: 90%;
                z-index: -2;
            }

            .menu img {
                float: left;
                width: 300px;
                padding-left: 90px;
            }

            .bghitam {
                background: black;
                height: 90vh;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                opacity: 50%;
                z-index: -3;
            }

            .menu ul {
                list-style: none;
                display: inline-flex;
                float: right;
                padding-right: 80px;
                padding-top: 20px;
            }

            .menu ul li {
                padding-right: 20px;
            }

            .menu ul li a {
                text-decoration: none;
                cursor: pointer;
                color: white;
            }

            .menu ul li a:hover {
                color: #1CAAE9;
            }

            .text {
                text-align: right;
                padding-right: 90px;
                padding-top: 230px;
                color: white;
                font-weight: lighter;
            }

            .text h1 {
                font-size: 40px;
            }

            .text p {
                font-size: 25px;
            }

            .text span {
                background: #1CAAE9;
                border-radius: 50px;
                padding: 15px;
            }

            .text span a {
                text-decoration: none;
                color: white;
                border: 1px solid transparent;
                padding-top: 20px;
            }

            #jurusan {
                padding-top: 50px;
                text-align: center;
            }

            #jurusan h2 h3 p {
                font-weight: lighter;
            }

            #jurusan p {
                opacity: 70%;
            }

            .keahlian img {
                width: 50px;
            }

            .keahlian {
                padding-top: 50px;
            }

            .grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                width: 80%;
                margin: auto;
            }

            .depan {
                opacity: 70%;
                padding-top: 50px;
            }

            .depan img {
                width: 100%;
                z-index: -3;
                height: 300px;
            }

            .struktur img {
                width: 100px;
            }

            .organisasi {
                text-align: center;
                font-weight: lighter;
                padding-top: 50px;
            }

            .organisasi h1 {
                opacity: 80%;
            }

            .organisasi p {
                opacity: 50%;
            }

            .grid2 {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .subscribe {
                background: black;
                height: 100px;
                color: white;
                font-weight: lighter;
                text-align: center;
                opacity: 90%;
                padding-top: 20px;
                padding-bottom: 40px;
            }

            .subscribe a {
                border: 1px solid transparent;
                background: red;
                color: white;
                text-decoration: none;
                padding: 10px;
                border-radius: 5px;
            }

            .berita {
                text-align: center;
                padding-top: 50px;
            }

            .berita p {
                opacity: 50%;
            }

            .grid4 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                width: 90%;
                margin: auto;
            }

            .grid3 p h2 {
                text-align: left;
            }

            .grid3 {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.19);
                padding: 20px;
            }

            .grid3 a {
                text-decoration: none;
                border: 1px solid transparent;
                padding: 10px;
                background: #1CAAE9;
                border-radius: 50px;
                color: white;
            }

            .grid3 img {
                border-radius: 4px 4px 0 0;
            }

            .kontak {
                background-image: url(img/bg2.png);
                height: 80vh;
                background-size: cover;
                width: 100%;
            }

            .des {
                width: 20%;
                padding-left: 120px;
                color: white;
                padding-top: 80px;
            }

            .footer {
                background: black;
                color: white;
                opacity: 90%;
                padding: 20px;
                padding-left: 120px;
            }

            .footer p {
                opacity: 50%;
            }

            .footer a {
                text-decoration: none;
                color: white;
            }
        </style>
    @endsection
