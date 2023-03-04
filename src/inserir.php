<h1 class="mx-auto" style="text-align: center; color: white"> Cadastre uma Reserva </h1>

<form method="post" class="mx-auto" action="enviando.php" style="padding-top: 20px; margin-bottom: 50px;">
  <div class="form-floating" style="margin: 22px;">
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Exemplo" required />
    <label for="nome">Nome</label>
  </div>
  <div class="form-floating" style="margin: 22px;">
    <input type="email" class="form-control" id="email" name="email" placeholder="exeplo@123.com" required />
    <label for="email">E-mail</label>
  </div>
  <div class="form-floating" style="margin: 22px;">
    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(99)99999-9999" required />
    <label for="telefone">Telefone</label>
  </div>
  <div class="form-floating" style="margin: 22px;">
    <input type="date" class="form-control" id="data" name="data" placeholder="dd/mm/aaaa" required />
    <label for="data">Data</label>
  </div>
  <div class="form-floating" style="margin: 22px;">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="servico">
  <?php
  $servicos = select_servicos();
  foreach ($servicos as $servico) {

    echo "<option value=\"{$servico['id']}\">{$servico['tipo']}</option>";

  }
  ?>
  </select>
  <label for="floatingSelect">Serviço</label>
</div>
  <div style="margin: 22px;">
    <h5 class="text-light">Barbeiro</h5>
    <?php
    $barbeiros = select_barbeiros();
    foreach ($barbeiros as $barbeiro) {
      
      echo "<div class='form-check'>";
      echo "<input class=\"form-check-input\" type=\"radio\" name=\"barbeiro\" id=\"barbeiro_{$barbeiro['id']}\" value=\"{$barbeiro['id']}\" required>";
      echo "<label class=\"form-check-label text-light\" for=\"barbeiro_{$barbeiro['id']}}\"> {$barbeiro['nome_barbeiro']} </label>";
      echo "</div>";

    }   
    ?>
  </div>
  <div class="form-floating" style="margin: 22px;">
    <textarea class="form-control" placeholder="na régua" id="corte" name="corte" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Como gostaria do seu corte?</label>
  </div>
  <div class="form-check" style="margin: 22px;">
    <input class="form-check-input" type="checkbox" name="notificacao" id="notificacao" value="1">
    <label class="form-check-label text-light" for="notificacao">
      Deseja receber notificações via E-mail?
    </label>
  </div>
  <button type="submit" class="btn btn-primary" style="width: 50%; margin-left: 25%;">Enviar</button>
</div>
</form>