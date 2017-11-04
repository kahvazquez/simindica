<title>Sim Indica</title>
  <div class='text-center'>
    <h1>SIM : TV por assinatura e internet </h1>
      <?php echo (isset($msg) ? $msg : '') ?>
  </div>  
  <fieldset id='ident_form'> 
      <link rel="stylesheet" type="text/css" href="http://localhost/xampp/simindica/lib/css/simindica.css">
    <img id='form-logo-header' src='http://localhost/xampp/simindica/new_sim_logo.png'/>
    <div class='text-center'>
      <h4 class='text-center'>FORMULÁRIO DE INDICAÇÃO DE CLIENTES</h4>
      <div class="text-center" id="formulario">
        <form method='post'>
        <input type='hidden' name='enviar' value='inserir'/>
          <p>
            Área de atuação
            <select name='area'>
              <option value='Rede Interna'> Rede Interna </option>
              <option value='Rede Externa'> Rede Externa </option>
              <option value='Atendimento Pessoal'> Atendimento Pessoal </option>
              <option value='Televendas'> Televendas </option>
              <option value='Vendas Pessoais'> Vendas Pessoais </option>
              <option value='PAP'> PAP - Link </option>
            </select>
          </p>
          CEP
          <input type='text' name='cep' placeholder='Digite apenas números' required size=32>
          <br>
          <p>Colaborador Indicador
            <input type='text' name='indicador' size=40>
          </p>
          <p>Nome do Indicado:
            <input type='text' name='indicado' required size=43>
          </p>
          <p>CPF:
            <input type='text' name='cpf' maxlength="11" placeholder='Digite apenas números' required size=30>
          </p>
          <p>CNPJ:
            <input type='text' name='cnpj' maxlength="14" placeholder='Digite apenas números' size=28>
          </p>
          <p>RG:
            <input type='text' name='rg' placeholder='Digite apenas números' required size=30>
          </p>
          <p>
            Estado Civil:
            <select name='estadocivil'>
              <option value='Solteiro(a)'> Solteiro(a) </option>
              <option value='Casado(a)'> Casado(a) </option>
              <option value='Divorciado(a)'> Divorciado(a) </option>
              <option value='Viuvo(a)'> Viúvo(a) </option>
              <option value='Noivo(a)'> Noivo(a) </option>
            </select>
          </p>
          <p>Nome da mãe:
            <input type='text' name='nomemae' size=40>
          </p>
            <div class="text-center">
            <p>Endereço:
              <input type='text' name='endereco' required size=44> 
            </p>
            <p>Número:
              <input type='text' name='numero' required size=26>
            </p>
            <p>Complemento:
              <input type='text' name='complemento'>
            </p>
            <p>Bairro:
              <input type='text' name='bairro' required size=28>
            </p>
            <p>
              Cidade:
              <input type='text' name='cidade' required> UF:
              <select name='uf'>
                <option value='RJ'> RJ </option>
                <option value='MG'> MG </option>
                <option value='PB'> PB </option>
                <option value='MT'> MT </option>
                <option value='PE'> PE </option>
                <option value='BA'> BA </option>
                <option value='RS'> RS </option>
                <option value='SE'> SE </option>
              </select>
            </p>
          </div>
          <p>
            Telefone 1:
            <input type='text' placeholder='(DDD)+(Número)' name='telefone1'>
          </p>
          <p>
            Telefone2:
            <input type='text' placeholder='(DDD)+(Número)' name='telefone2'>
          </p>
          <p>
            E-mail:
            <input type='text' placeholder='exemplo@email.com' name='email' size=24>
          </p>
          <button type='submit' class='bt'>Enviar</button>
          <br>
        </form>
      </div>
    </div>
  </fieldset>
</div>

