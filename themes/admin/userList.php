<?php
    echo $this->layout("_theme");
?>


<div class="lista-usuarios">
  <h2>Lista de Usuários</h2>
  <table>
    <tbody>
      <tr>
        <td><label>Nome Completo:</label> <input type="text" value="João Silva" disabled></td>
        <td><label>Nome da Clínica:</label> <input type="text" value="Clínica Vital" disabled></td>
        <td><label>Email:</label> <input type="text" value="joaosilva@gmail.com" disabled></td>
        <td><label>Endereco:</label> <input type="text" value="Rua das Flores, 123, Bairro Jardim," disabled></td>
        <td><button class="editar">Editar</button> <button class="excluir">Excluir</button></td>
      </tr>
      <tr>
        <td><label>Nome Completo:</label> <input type="text" value="Maria Souza" disabled></td>
        <td><label>Nome da Clínica:</label> <input type="text" value="Clínica Saúde" disabled></td>
        <td><label>Email:</label> <input type="text" value="mariasouza@gmail.com" disabled></td>
        <td><label>Endereco:</label> <input type="text" value="Rua Alegre, 567, Bairro Jardim," disable> </td>
        <td><button class="editar">Editar</button> <button class="excluir">Excluir</button></td>
      </tr>
    </tbody>
  </table>
</div>