<?php 
  session_start();
  session_destroy();
echo '
<script>
  alert("Saliendo del sitio web");
  location.href = "index.php";
</script>

';

?>


