
<script type="text/javascript">
    $("#medicion").addClass("active");
</script>

<?php
foreach ($css_files as $file) : ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>

<?php foreach ($js_files as $file) : ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<br>
<body style="background-color:#FF0000;">

  <div class="logo">
      <h1> <center>  <img src="https://miro.medium.com/max/3150/1*qBz0ffSUvdvVpfhGuKG9Zw.jpeg" style="height: 400px; width: 800px;">   </center></h1>
  <br>
  <br>
<div class="container-fluid">
    <div class="col-md-12">
        <h3 class="text-center" style="color:#1D1A49;">
            <i class="fas fa-object-group"></i>

            GESTIÓN DE LOCALIDAD DE LOS TERRENOS
        </h3>
        <br>
        <?php echo $output; ?>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $("#field-hora_inicio_dis").prop("type", "time");
        $("#field-hora_fin_dis").prop("type", "time");
    });
</script>
