<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/svg+xml" href="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title id="headTitle"><?= $title ?? 'Fullstack Native'; ?></title>

    <!-- TOKEN SEARCH ENGINE -->
    <!--<meta content='#tokenyandex' name='yandex-verification'/>
    <meta content='#tokenbing' name='msvalidate.01'/>
    <meta content='#tokengoogle' name='google-site-verification'/> -->

    <!-- LANGUAGE DIRECTORY -->
    <link rel="alternate" hreflang="en" href="/" />
    <link rel="alternate" hreflang="id" href="/" />

    <!-- <meta itemprop="name" content="Bootstrap Gallery - free examples, templates &amp; tutorial"/>
    <meta itemprop="description" content="Responsive galleries created with Bootstrap 5. Image gallery, video gallery, photo gallery, full-page, eCommerce, lightbox, slider, thumbnails, &amp; more."/>
    <meta itemprop="image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/gallery/src/assets/featured.jpg"/> -->

    <!-- <meta property="og:title" content="Judul Konten Anda">
    <meta property="og:description" content="Deskripsi Konten Anda">
    <meta property="og:image" content="URL_GAMBAR_KONTEN">
    <meta property="og:url" content="URL_HALAMAN_KONTEN">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dian Nugroho | Official" />
    <meta property="og:locale" content="id_ID" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Judul Konten Anda">
    <meta name="twitter:description" content="Deskripsi Konten Anda">
    <meta name="twitter:image" content="URL_GAMBAR_KONTEN"> -->

    <meta name="description"
        content="Personal Website (Website Pribadi) milik Dian Adi Nugroho yang dibuat menggunakan VueJS3 beserta tailwind. Website ini dibuat dengan tujuan untuk showcase skill dalam membangun website Front End Web Development." />
    <meta name="keywords" content="dianadi021, dianskuad, dian skuad, dian nugroho, dian adi nugroho" />
    <!-- <meta name="image" content="#" /> -->
    <meta name="author" content="Dian Nugroho" />
    <meta name="language" content="Indonesia" />
    <meta name="language" content="English" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.country" content="id" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

    <link rel="stylesheet" media="all" href="http://localhost/assets/scripts/css/app.css" />
    <script src="http://localhost/assets/vendor/tailwindcss/tailwindcss-3.4.5.js"></script>

    <script src="http://localhost/assets/vendor/jquery/jquery.js"></script>
    <script src="http://localhost/assets/vendor/jquery/jquery-ui.js"></script>
    <script src="http://localhost/assets/scripts/js/controller.js"></script>
    <script src="http://localhost/assets/vendor/jquery/jquery.datetimepicker.full.min.js"></script>

    <script src="http://localhost/assets/vendor/moment/moment.min.js"></script>
    <script src="http://localhost/assets/vendor/moment/id.min.js"></script>

    <script src="http://localhost/assets/vendor/noty/noty.min.js"></script>
    <script src="http://localhost/assets/vendor/tostr/toastr.min.js"></script>
    <script src="http://localhost/assets/vendor/font-awesome/all.min.js"></script>
    <script src="http://localhost/assets/vendor/sweetalert/sweetalert2@11.js"></script>
    <script src="http://localhost/assets/vendor/alpinejs/alpinejs@3.14.3.min.js" defer></script>
    <script src="http://localhost/assets/vendor/datatables/datatables.js" defer></script>
</head>

<body class="w-full flex flex-wrap">
    <?= $content ?? ''; ?>

    <div id="loadingAjax"
        class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50 cursor-wait">
        <div class="text-center flex flex-wrap justify-center">
            <div class="loaderAjax"></div>
            <p class="w-full text-white">Loading, mohon tunggu...</p>
        </div>
    </div>

    <div id="loadingContetLoader"
        class="spinner fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50 cursor-wait">
        <div
            class="flex flex-wrap justify-center p-6 bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
            <div class="loaderContent"></div>
            <p class="w-full text-center">Sedang menyiapkan data, Mohon ditunggu.</p>
        </div>
    </div>
</body>

</html>