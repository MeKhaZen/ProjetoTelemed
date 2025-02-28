<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
  include 'topSite.html'; // Inclui cabeçalho padrão
?>

<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0">Bem-vindo à Vanz HealthTech</h3>
    </div>
    <div class="card-body">
      <p>Bem-vindo ao sistema Vanz HealthTech. Utilize a barra lateral para navegar pelas diferentes seções do sistema.</p>
      <p>Aqui estão algumas instruções de como utilizar o sistema:</p>
      <ul>
        <li>Para cadastrar médicos, vá para a seção "Médicos".</li>
        <li>Para visualizar e gerenciar pacientes, vá para a seção "Pacientes".</li>
        <li>Para acessar o histórico médico, vá para a seção "Histórico Médico".</li>
        <li>Para acessar o histórico de pacientes, vá para a seção "Histórico de Pacientes".</li>
      </ul>
    </div>
  </div>
</div>

<!-- Menu Toggle Script -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>

</body>
</html>