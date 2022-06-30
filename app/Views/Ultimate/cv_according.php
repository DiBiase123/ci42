<style>
  .iconaccording
  {
    width: 10%;
  }
  .iconaccording:hover
  {
    rotate: -20deg;
  }

  @media only screen and (max-width: 600px)
{
        .iconaccording
        {
           width: 75px;
        }
        .iconaccording:hover
        {
          rotate: -20deg;
        }
}

</style>

<!--  ACCORDING CONTAINER-->
<div class="accordion " id="accordionFormation" >
  <!-- EXPERIENCE ACCORDING ++ START -->
  <?php echo view('Ultimate/according_cvexperience'); ?>
  <!-- EXPERIENCE ACCORDING // FINE-->

  <!--FORMATION ACCORDING ++START -->
  <?php echo view('Ultimate/according_cvformation'); ?>

  <!-- FORMATION ACCORDING // FINE -->

  <!-- COMPETENCE ACCORDING ++START-->
 <?php echo view('Ultimate/according_cvcompetence'); ?>
  <!-- COMPETENCE ACCORDING // FINE-->
  <br />
</div>
<!-- EXP ACCORDING -->
