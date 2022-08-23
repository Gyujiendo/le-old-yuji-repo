<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bellevue | Missão</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="shortcut icon" href="/bellevue/img/favicon.png" />
</head>

<style>

h4{
  color: white;
}

#esp1:hover {
  z-index:10 !important;
  transform: scale(1.3);
}

#esp2:hover { 
  z-index:10 !important;
  -webkit-transform: scale(1.3);
  -ms-transform: scale(1.3);
   transform: scale(1.3);
}

#esp3:hover { 
  z-index:10 !important;
  transform: scale(1.3);
}

#esp4:hover { 
  z-index:10 !important;
  transform: scale(1.3);
}

#esp5:hover { 
  z-index:10 !important;
  transform: scale(1.3);
}

#esp6:hover { 
  z-index:10 !important;
  transform: scale(1.3);
}

#esp7:hover { 
  z-index:10 !important;
  transform: scale(1.3);
}


.row{
    margin-left: 0;
    margin-right: 0;
}

html {
  overflow: hidden;
  height: 100%;
}
body {
  overflow: auto;
  height: 100%;
}

/* unset bs3 setting */
.modal-open {
 overflow: auto; 
}

.navbar.navbar-default .navbar-collapse {
  border: 1px solid transparent;
}

.scrollbar {
margin-left: 32px;
float: left;
height: 300px;
width: 65px;
background: #fff;
overflow-y: scroll;
margin-bottom: 25px;
}
.force-overflow {
min-height: 450px;
}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #4285F4; }

.scrollbar-danger::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-danger::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-danger::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #ff3547; }

.scrollbar-warning::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-warning::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-warning::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #FF8800; }

.scrollbar-success::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-success::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-success::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #00C851; }

@media screen and (min-width: 1200px) {
 
  .scrollbar-info::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-info::-webkit-scrollbar {
width: 7px;
background-color: #F5F5F5; }

.scrollbar-info::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #33b5e5; }

}

.scrollbar-default::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-default::-webkit-scrollbar {
width: 8px;
background-color: #F5F5F5; }

.scrollbar-default::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #2BBBAD; }

.scrollbar-secondary::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-secondary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-secondary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #aa66cc; }

@keyframes fadeOut{

  100% {
    opacity: 0;
    visibility: hidden;
  }
}

.loader.hidden{
  animation: fadeOut 1s;
  animation-fill-mode: forwards;

}

.underline {
  font: 1em Arial, sans-serif;
  display:;
  text-decoration: none;
  color: gray;

  background-image: linear-gradient(black, black), linear-gradient(white, white);
  background-size: 0 2px, auto;
  background-repeat: no-repeat;
  background-position: center bottom;
  transition: all .2s ease-out;
}

.underline:hover {
  /* The following line makes the underline only as wide as the text */
  background-size: calc(100% - 2em) 2px, auto;
  background-size: 100% 2px, auto;
}

ul {
    display: flex;
    transform: translate(-50%, -50%);
}

    ul li {
        list-style: none;
    }

        ul li a {
            width: 80px;
            height: 80px;
            background-color: #fff;
            text-align: center;
            line-height: 80px;
            font-size: 35px;
            margin: 0 10px;
            display: block;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            border: 3px solid #fff;
            z-index: 1;
        }

            ul li a .icon {
                position: relative;
                color: #262626;
                transition: .5s;
                z-index: 3;
            }

            ul li a:hover .icon {
                color: #fff;
                transform: rotateY(360deg);
            }

            ul li a:before {
                content: "";
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: 100%;
                background: #f00;
                transition: .5s;
                z-index: 2;
            }

            ul li a:hover:before {
                top: 0;
            }

        ul li:nth-child(1) a:before {
            background: #3b5999;
        }

        ul li:nth-child(2) a:before {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        }

        ul li:nth-child(3) a:before {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        }

        ul li:nth-child(4) a:before {
            background: #dd4b39;
        }

        @media (min-width: 576px){

            .linhamobile{
                height: 38%;
            }


        }

        @media (min-width: 576px){

            .sbgbrancomobile{
              background-color:white;
            }


        }

</style>

<body class="scrollbar-info" style="overflow-x: hidden;">

	<div class="loader" style="position:fixed; top:0; left:0; z-index:99; background:white; height:100%; width:100%; display:flex; justify-content: center; align-items:center;">
	<div class="spinner-border text-info" style="height:150px; width: 150px;" role="status">
	<span class="sr-only">Loading...</span>
	</div>
	</div>
  <!-- Start your project here-->

<!--Navbar web-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark w-100 position-fixed sbgbrancomobile" style="box-shadow: none; z-index:10; height:auto;">
<a href="/bellevue/home.php" class="d-none d-lg-block d-xl-block"><img class="navbar-brand " style="height:auto; width:auto; margin-left:30px;" src="/bellevue/img/bellevue1.png"></a>
  <div class="collapse navbar-collapse" id="">
    <div class="navbar-nav" style="margin-top: 30px; margin-left: 75px;">

      <div class="nav-item mb-4">
        <a class="nav-link text-dark underline" style="opacity:0.8;" href="/bellevue/missao.php">Missões
        </a>
      </div>
      <div class="nav-item">
        <a class="nav-link text-dark underline" style="opacity:0.8; margin-left: 30px;" href="/bellevue/valores.php">Valores</a>
      </div>
      <div class="nav-item">
        <a class="nav-link text-dark underline" style="opacity:0.8; margin-left: 30px;" href="/bellevue/agendamento.php">Agendamento</a>
      </div>
    </div>

    <ul class="navbar-nav position-absolute "" style="margin-left: 68%; margin-top:46px;">
        <li>
          <a target="_blank" href="https://pt-br.facebook.com/bellevueodonto/" title="Acessar Facebook">
            <i class="fab fa-facebook-f icon"></i></a>
        </li>

        <div class="rounded-circle" style="margin-top: 13px; height: 60px; width:1px; opacity:0.7; background-color: black;"></div>

        <li>
          <a target="_blank" href="https://www.instagram.com/explore/locations/1981508742071944/bellevue-odontologia-e-desenvolvimento/%22title=%22Acessar Instagram">
            <i class="fab fa-instagram icon"></i></a>
        </li>
        </ul>
  </div>
</nav>
<span class="d-none d-lg-block d-xl-block"><br> <br> <br> <br> <br></span>
<!--/.Navbar web-->



<!--Navbar mobile-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark w-100 d-block d-sm-none" style="box-shadow: none;">
<a href="/bellevue/home.php"><img class="navbar-brand mt-3" style="height:100px; width:260px; margin-left:30px;" src="/bellevue/img/bellevue.png"></a>
   <hr>
   <div class="text-center" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars mdb-gallery-view-icon fa-2x"></i>
   </div>
   <hr>
  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent-333">
    <div class="navbar-nav">
      <div class="nav-item">
        <a class="nav-link text-dark" href="/bellevue/missao.php"><b>Missões</b>
        </a>
        <hr>
      </div>
      <div class="nav-item">
        <a class="nav-link text-dark" href="/bellevue/valores.php"><b>Valores</b></a>
        <hr>
      </div>
      <div class="nav-item">
        <a class="nav-link text-dark" href="/bellevue/agendamento.php"><b>Agendamento</b></a>
      </div>
      </div>
      <hr>
  </div>

<br>

        <div class="row w-100 justify-content-around">

        <div class="col">
        <a target="_blank" href="https://pt-br.facebook.com/bellevueodonto/">
        <div class="rounded-circle" style="background-color: #3C5A99; height: 50px; width: 50px; margin: 0 auto;">
        <i class="fab fa-facebook-f fa-2x text-white" style="margin-top:10px; margin-left:14px;"></i>
        </div>
        </a>
        </div>


        <div class="col">
        <a target="_blank" href="https://www.instagram.com/explore/locations/1981508742071944/bellevue-odontologia-e-desenvolvimento/">
        <div class="rounded-circle" data-toggle="tooltip" data-placement="top" title="Acessar Instagram" style="margin: 0 auto; height: 50px; width: 50px; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);">
        <i class="fab fa-instagram fa-2x text-white" style="margin-top:9px; margin-left:11px;"></i>
        </div>
        </a>
        </div>

        </div>


</nav>
<br>

<!--/.Navbar mobile-->

<!--Tela incial-->

<div class="row">

<!-- Card -->
<div class="card card-image border-rounded text-center" style="width: 100%; margin:auto; background-image: url(img/missao.jpg);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4">
    <div>
      <h2 style="color:#37BFD8;"><b><i class="fas fa-clipboard-list"></i> Missão</b></h2>
      <br>
      <p><span style="font-size: 18px; color: white;">A BelleVue Odontologia & Desenvolvimento foi fundada em 22 de setembro de 2017 e tem como sua principal missão atender a todos os pacientes e independente do grau de complexidade, garantir o sucesso de todos os tratamentos com o máximo empenho dos nossos profissionais e suas técnicas. O conceito de odontologia romântica organizado e desenvolvido em nossos ambientes, visa eliminar qualquer relação extrativista de mercado e garantir aos nossos pacientes o foco na resolução dos seus casos seja em qualquer nível de necessidade e/ou complexidade.
<br><br>
Nosso time atua em diversos projetos sociais ligados ou não a instituições de ensino superior, promovendo desenvolvimento social e melhorias no IDH das áreas envolvidas, nossa visão contempla todos esses aspectos da missão e busca expandir esse conceito e nossas clínicas para toda a macrorregião de São Paulo.
<br><br>
BelleVue é um novo conceito de Odontologia e Desenvolvimento.
</span>
</p>
    </div>
  </div>

</div>
<!-- Card -->

</div>

<br><br>


<a href="/bellevue/ortodontia.php"><img class="d-block d-sm-none" src="img/invimobile.jpeg" style="height: auto; width: 100%;"/></a>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/ortodontia.php"><img class="d-block d-sm-none" src="img/OrtodontiaMobile.png" style="height: auto; width: 100%;"/></a>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/harmonizacao.php"><img class="d-block d-sm-none" src="img/HarmonizaçãoMobile.png" style="height: auto; width: 100%;"/></a>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/implantodontia.php"><img class="d-block d-sm-none" src="img/ImplantodontiaMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/odontopediatria.php"><img class="d-block d-sm-none" src="img/OdontopediatriaMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/estetica.php"><img class="d-block d-sm-none" src="img/EsteticaMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/protese.php"><img class="d-block d-sm-none" src="img/PróteseMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/endodontia.php"><img class="d-block d-sm-none" src="img/EndoMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/ortognatica.php"><img class="d-block d-sm-none" src="img/OrtogMobile.png" style="height: auto; width: 100%;"/>
<span class="d-block d-sm-none"><br></span>
<a href="/bellevue/cirurgia.php"><img class="d-block d-sm-none" src="img/cirurgia1Mobile.png" style="height: auto; width: 100%;"/>

<div class="row w-100 position-relative linhamobile">

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/invi1.jpg); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">
<a href="/bellevue/invisalign.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Invisalign</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Ortodontia.jpeg); background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/ortodontia.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Ortodontia</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Harmonização.jpeg); object-position: 10px 0; background-repeat: no-repeat; background-size: cover; background-position: 90% 50%;">
<a href="/bellevue/harmonizacao.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Harmonização</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>


<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Implantodontia.jpeg); background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/implantodontia.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Implantodontia</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Odontopediatria.jpeg); background-position: 50% 30%; background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/odontopediatria.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Odontopediatria</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

</div>


<div class="row w-100 position-relative linhamobile">

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Estetica.jpeg); background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/estetica.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Estética</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Prótese.jpeg); background-position: 50% 90%; background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/protese.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Prótese</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/Endo.jpeg); background-position: 50% 90%; background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/endodontia.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Endodontia</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/ortogcrop.jpg); background-repeat: no-repeat; background-size: cover;">
<a href="/bellevue/ortognatica.php">
    <div class="mask flex-center rgba-black-strong text-center">
        <h2 class="white-text">Cirurgia Ortognática</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

<div class="col view overlay img-fluid d-none d-lg-block d-xl-block" alt="smaple image" style="background-image: url(img/cirurgia1.jpg); background-repeat: no-repeat; background-size: cover; background-position: 90% 50%;">
<a href="/bellevue/cirurgia.php">
    <div class="mask flex-center rgba-black-strong">
        <h2 class="white-text">Cirurgia</h2>
        <br>
        <h5 class="white-text position-absolute mt-4">-veja sobre-</h5>
    </div>
    <div>
    </div>
    </a>
</div>

</div>


  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
</body>



<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

window.addEventListener("load", function(){

    const loader = document.querySelector(".loader");
    console.log(loader);
    loader.className += " hidden";
 });

 </script>

</html>