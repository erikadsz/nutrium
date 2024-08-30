<?php
    echo $this->layout("_theme");
?>


<div class="lista-usuarios">
  <h2>Lista de Clínicas</h2>
  <table>
    <tbody>
      <tr>
        <td><label>Nome da Clínica:</label> <input type="text" value="Clínica vital" disabled></td>
        <td><label>Endereco:</label> <input type="text" value="Rua das Ipanema, 67, Bairro Belo," disabled></td>
        <td><label>Nutricionistas:</label> <input type="text" value="Caíque Ramos" disabled></td>
        <td><label>Nutricionistas:</label> <input type="text" value="Julia Pereira" disabled></td>
        <td><button class="editar">Editar</button> <button class="excluir">Excluir</button></td>
      </tr>
      <tr>
      <td><label>Nome da Clínica:</label> <input type="text" value="Clínica Saúde Plena" disabled></td>
     <td><label>Endereço:</label> <input type="text" value="Avenida Brasil, 1234, Centro, Cidade D" disabled></td>
     <td><label>Nutricionistas:</label> <input type="text" value="Sofia Almeida" disabled></td>
     <td><label>Nutricionistas:</label> <input type="text" value="André Costa" disabled></td>
        <td><button class="editar">Editar</button> <button class="excluir">Excluir</button></td>
      </tr>
    </tbody>
  </table>
</div>