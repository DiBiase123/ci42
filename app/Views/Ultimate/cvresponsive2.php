<script type="text/javascript">
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

<style>
.iconaprofilo
{
   width: 40%;
}
.nascosta
{
  visibility: visible;
}

@media only screen and (max-width: 600px)
{

  .iconaprofilo
  {
       width: 50%;
  }
  .nascosta
  {
  visibility:  hidden;
  }
  .cell
  {
line-height: 80%;
  }
}
</style>

<style>
.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% {
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }

}
</style>

<div class="container px-2 border text-center border-3 " style="background:  #00b8ea">
  <!-- ANIMAZIONE TITOLO -->
  <h1 class="display-1 p-2 animate__animated animate__bounce" style=" line-height: 0.6;">
      <span class="bg-danger text-dark p-1 border border-white border-end-0"> DI </span>
      <span class="text-white p-1 border border-white border-start-0" style="background: #052c65"> BIASE </span>
  </h1>

    <div class="animate__animated animate__fadeInDown animate__delay-1s animate__fast;">
      <h2 class="display-2 text-dark animate__animated animate__rubberBand animate__delay-3 "  style="line-height: 0.5;" >
        <em style="background-color: rgba(251, 251, 251, 0.4)">Giuliano</em>
      </h2>
    </div>
    <br>
  <!--FINE ANIMAZIONE TITOLO -->

    <!--Waves Container-->
    <div class="m-1">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
      </svg>
    </div>
    <!--Waves end-->

  <div class="row gx-5 align-items-center bg-white p-1 m-1">

    <div class="col-sm rounded-5 ">  <!-- COLONNA SX -->
      <br>
         <ul class="text-uppercase list-unstyled text-dark cell  " >

              <li class="fs-6 note note-warning animate__animated animate__fadeInLeft animate__delay-2s animate__fast;" data-mdb-toggle="tooltip" data-mdb-placement="top" title="BAC+2" >
                <p class="animate__animated animate__slideInLeft animate__delay-2.5s">Développeur Web & Web Mobile</p>
               </li>
               <br>

             <li class="fs-6 note note-danger animate__animated animate__fadeInLeft animate__delay-3s animate__fast" data-mdb-toggle="tooltip" data-mdb-placement="top" title="BAC+3">
                <p class="animate__animated animate__slideInLeft animate__delay-3.5s">   Illustrateur & Animateur Multimédia </p>
              </li>
              <br>

             <li class="fs-6 note note-success animate__animated animate__fadeInLeft animate__delay-4s animate__fast" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Titre Professionel">
                 <p class="animate__animated animate__slideInLeft animate__delay-4.5s"> Graphiste publicitaiare </p>
               </li>
         </ul>
    </div>

    <div class="col-sm rounded-5 animate__animated animate__fadeIn animate__rotateIn animate__bounce animate__delay-2s  animate__slower;"> <!-- COLONNA DX -->
      <svg  xmlns="http://www.w3.org/2000/svg"  fill="currentColor"
            class="bi bi-person-square iconaprofilo align-text-bottom gradient" style="vertical-align: bottom; color: #757575;"  viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
      </svg>

      <?php echo view('Ultimate/bottoni_social2'); ?>
      <br>
    </div>

  </div>
<?php echo view('Ultimate/cv_according'); ?>
</div>
