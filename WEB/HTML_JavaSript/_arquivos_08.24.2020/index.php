<?php
    include 'header.php';
?>
    <div class="login">
        <script src="./functions.js"></script>
            <div  class="form-group">
                <h1>Jogo da Velha</h1>
                <h2>jogadores:</h2>
                <div class="form-group">
                    <label for="Jogador 1"> Jogador 1: </label>
                    <input class="form-control" type="text" id="jogador1"/>
                </div>
                <div class="form-group">
                    <label for="Jogador 1"> Jogador 2: </label>
                    <input class="form-control"type="text" id="jogador2"/>
                </div>
                <input type="button" value="Iniciar" class="btn btn-primary p" onclick="javascript: initGame();"/>
            </div>

        <h3 id="jogadorAtual"> </h3>
        <div id="game">
            <table cellpadding="0" cellspacing="0">
                <tr border="1"> 
                    <td onclick="javascript: setOnCeil(this, 0);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 1);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 2);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                </tr>
                <tr> 
                    <td onclick="javascript: setOnCeil(this, 3);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 4);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 5);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                </tr>
                <tr> 
                    <td onclick="javascript: setOnCeil(this, 6);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 7);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                    <td onclick="javascript: setOnCeil(this, 8);" onmouseover="javascript: this.style.backgroundColor = 'blue'" onmouseout="javascript: this.style.backgroundColor = 'red'"> &nbsp; </td>
                </tr>
            </table>
        </div>
    </div>