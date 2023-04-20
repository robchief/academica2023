<!DOCTYPE html>
<html lang="es">
<head>

  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <title><?php echo $page_title; ?></title>
  
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="Universidad Autónoma del Estado de Morelos">
  <meta property="og:url" content="www.uaem.mx/index-laravel">
  <meta property="og:image" content="www.uaem.mx/content/images/logo.png" >
  <meta property="og:locale" content="es_MX">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-38920403-1', 'auto');
    ga('send', 'pageview');

  </script>-->
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PCWS2ZV');</script>
  <!-- End Google Tag Manager -->
  <link rel="preconnect" href='http://fonts.googleapis.com/' crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha256-m81NDyncZVbr7v9E6qCWXwx/cwjuWDlHCMzi9pjMobA=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha256-wLz3iY/cO4e6vKZ4zRmo4+9XDpMcgKOvv/zEU3OMlRo=" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="https://www.uaem.mx/assets/2020/css/bootstrap4.min.css">-->
  <!-- <link rel="stylesheet" type="text/css" href="css/style-general.css"> -->
  <link rel="stylesheet" type="text/css" href="https://www.uaem.mx/assets/2020/css/style-general-2020.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css">
  <!-- estilos owl carousel 2 -->
  <link rel="stylesheet" href="libs/css/owl-carousel/owl-carousel.min.css">
  <link rel="stylesheet" href="libs/css/owl-carousel/owl.theme-default.min.css">
  <!-- estilos owl carousel 2 -->
  <!-- estilos carousel vertical -->
  <link rel="stylesheet" href="https://www.uaem.mx/assets/vendor/slick/css/slick-theme.css">
  <link rel="stylesheet" href="https://www.uaem.mx/assets/vendor/slick/css/slick.css">
  <!-- estilos carousel vertical -->
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="/assets/vendor/rev-slider/css/rs6.css">
  <!-- REVOLUTION STYLE SHEETS -->
    <!--ESTILOS SECRETARIA ACADEMICA CUSTOM-->
    <link rel="stylesheet" type="text/css" href="libs/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="libs/css/flag-icon.css">
    
  <style>
    .slide-item{
        max-height: 190px;
    }
    .slick-dots li.slick-active button:before{
        font-size: 19px !important;
        color: #08c !important;
    }
    .slick-dots li button::before{
        font-size: 19px !important;
        color: #08c !important;
        content: '●' !important;
        line-height: 0 !important;
    }

</style>
<!-- estilos home-slider -->
<style>
    .owl-nav{
        display: none !important;
    }
    #bannerFinan2{
        display: none;
    }
    #bannerTrans2 {
        display: none;
    }
    .rescate {
        margin-top: 0px; /*antes -21*/
    }
    #div1 {
        width: 75%;
    }
    #div1 input {
        padding-left: 10px;
    }
    .rescate .col-sm-12{
        padding:0px;
    }
    .bg-primo .col-md-6{
      min-height: 42px;
      background-color: #7eb25d;
  }
  .bg-primo .col-sm-12{
      min-height: 42px;
      background-color: #7eb25d;
  }
  #primoQueryTemp{
      max-height: 40px;
  }
  .img-lupa-text{
      width: 100%;
      padding-top: 7px;
      padding-left: 3px;
  }
  .modal-backdrop{
      z-index: 2;
  }
  @media (min-width:576px) {
    #div1 {
        width: 88%;
    }
}
@media (max-width:1160px) {
  .primo {
      display:contents;
  }
  .primo .container{
      padding:0px;
  }
  .br-movil{
    display: block !important;
}
}
@media (min-width: 768px) and (max-width: 991px) {
    #div1 {
        width: 85%;
    }  
}

@media (min-width: 768px) and (max-width: 1024px) {
  .img-lupa-text{
    /*width: 70%;*/
    margin: auto;
}  
.br-movil{
    display: block !important;
}
}

@media (min-width: 768px) and (max-width: 991px) {
  .img-lupa-text{
    width: 50%;
    margin: auto;
    padding-top: 4px;
    padding-bottom: 3px;
}
}

@media (min-width: 10px) and (max-width: 768px) {
  .img-lupa-text{
    width: 60%;
    margin: auto;
    padding-top: 8px;
    padding-bottom: 3px;
}
}
</style>
<!-- estilos home slider -->
<style>
    .owl-carousel h3 > a{
        color: #08c !important;
    }
    .addthis_counter.addthis_pill_style{
        margin-left: 10px;
    }
</style>
<!-- estilos slider revo -->
<style>#rev_slider_8_1_wrapper .hesperiden.tparrows{cursor:pointer;background:rgba(21,42,85,0.8);width:40px;height:40px;position:absolute;display:block;z-index:1000; border-radius:50%}#rev_slider_8_1_wrapper .hesperiden.tparrows.rs-touchhover{background:#152a55}#rev_slider_8_1_wrapper .hesperiden.tparrows:before{font-family:'revicons';font-size:20px;color:#ffffff;display:block;line-height:40px;text-align:center}#rev_slider_8_1_wrapper .hesperiden.tparrows.tp-leftarrow:before{content:'\e82c'; margin-left:-3px}#rev_slider_8_1_wrapper .hesperiden.tparrows.tp-rightarrow:before{content:'\e82d'; margin-right:-3px}#rev_slider_8_1_wrapper rs-loader.spinner2{background-color:#155891 !important}</style>
<!-- fin estilos revo -->
<script>
    WebFontConfig = {
        google: {families: ['Oswald:300,400,700', 'Open Sans:400,700,300', 'Roboto:400', 'Shadows Into Light:400']},
        /*custom: {families: ['FontAwesome', 'icomoon'],urls: ['https://www.uaem.mx/assets/vendor/fontawesome/css/font-awesome.min.css','https://www.uaem.mx/assets/css/icomoon.css']},*/
        custom: {families: ['icomoon'],urls: ['../libs/css/icomoon/icomoon.css']},
        timeout: 2000
    };
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>
<!-- /STYLE -->
<!-- Estilos Truepush -->
<style>
    .optin-box2 {
        -webkit-box-shadow: 0px 0px 56px -16px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 56px -16px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 56px -16px rgba(0,0,0,0.75);
    }
    .optin-box2 {
      background-color: #000 !important;
  }
/* oculta link truepush */
.truepush_optin_notifications .optinbox_plus_truepush .optinbox_plus_tpsection .optinbox_tpbuttons a {
  display: none !important;
}
</style>
  <style>
  .item > article {
    padding-bottom: 0px !important;
  }
  .thumbnail .col-md-6-izq {
    padding-left: 12px;
    padding-right: 3px;
  }
  .thumbnail .col-md-6-der {
    padding-left: 3px;
    padding-right: 12px;
  }
  .p-3px {
    padding-top: 3px;
    padding-bottom: 3px;
  }
  #thumbs-enlaces .thumb-info {
    max-height: 800px !important;
  }

  @media (max-width: 768px) {
    .thumbnail .col-md-6 {
      padding-right: 12px !important;
      padding-left: 12px !important;
    }
  }

  @media (max-width: 576px) {
    .thumbnail .col-md-6-izq {
      padding-left: 5px !important;
      padding-right: 0px !important;
    }
    .thumbnail .col-md-6-der {
      padding-right: 5px !important;
      padding-left: 0px !important;
    }
  }
</style>

  <!--<script src="https://sdk.truepush.com/sdk/v2/app.js" async></script>
<script>
var truepush = window.truepush || [];
truepush.push(function(){
    truepush.Init({
        id: "5d825a5a518d2e1ab0f876f3"
        },
        function(error){
          if(error) console.log(error);
        })
    })
</script>-->

<!-- script accesibilidad -->
<!--<script>
var _userway_config = {
account: 'Ab0Q0ksEoV'
};
</script>
<script src="https://usrwy.com/widget.js"></script>-->
<!-- Accessibility Code for "uaem.mx" -->
<!--<script>
    window.interdeal = {
        "sitekey": "7e961c351c18e9a594b9635b362c34a8",
        "Position": "Left",
        "Menulang": "ES-MX",
        "domains": {
            "js": "https://cdn.equalweb.com/",
            "acc": "https://access.equalweb.com/"
        },
        "btnStyle": {
            "vPosition": [
            "80%",
            null
            ],
            "scale": [
            "0.8",
            "0.8"
            ],
            "color": {
                "main": "#014c80",
                "second": ""
            },
            "icon": {
                "type": 10,
                "shape": "circle",
                "outline": false
            }
        }
    };
    (function(doc, head, body){
        var coreCall             = doc.createElement('script');
        coreCall.src             = 'https://cdn.equalweb.com/core/4.0.4/accessibility.js';
        coreCall.defer           = true;
        coreCall.integrity       = 'sha512-LDvqiv8qYdF1MIqxiGZrvcDsmN6cZy0u0l23Dj7TVXmkVSNyzjtkcll8uCb8EGdwDVHjvisVYsAWuwTf6Mpu8g==';
        coreCall.crossOrigin     = 'anonymous';
        coreCall.setAttribute('data-cfasync', true );
        body? body.appendChild(coreCall) : head.appendChild(coreCall);
    })(document, document.head, document.body);
</script>

-->
<!-- script accesibilidad --></head>