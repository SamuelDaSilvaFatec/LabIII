<div class="crud">
    <div class="forms">
        <h2>Create</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="disciplina">Disciplina:</label>
                <select name="disciplina">
                    <option value="ED">Estrutura de Dados</option>
                    <option value="RC">Redes de Computadores</option> 
                </select>
            </div>
            <div class="form-group">
                <label for="pergunta">Pergunta:</label>
                <input class="campo" type="text" name="pergunta" 
                maxlength="1000"required autofocus>
            </div>
            <div class="form-group">
                <label for="resposta">Resposta:</label>
                <input class="campo"type="textarea" name="resposta" 
                maxlength="1000"required>
            </div>
            <input type="hidden" name="op" value="1">
            <input type="submit" class="btn btn-success" value="Create">
            <input type="reset" class="btn btn-danger">
        </form>
    </div>
    <hr>
    <div>
        <h2>Read</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="disciplina">Disciplina:</label>
                <select name="disciplina">
                    <option value="ED">Estrutura de Dados</option>
                    <option value="RC">Redes de Computadores</option> 
                </select>
            </div>
            <input type="hidden" name="op" value="2">
            <input type="submit" class="btn btn-success" value="Read">
        </form>
    </div>
    <hr>
    <div>
        <h2>Update</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="disciplina">Disciplina:</label>
                <select name="disciplina">
                    <option value="ED">Estrutura de Dados</option>
                    <option value="RC">Redes de Computadores</option> 
                </select>
            </div>
            <div class="form-group">
                <label for="ID:">Código do Registro:</label>
                <input type="textarea" name="id" 
                maxlength="1000" required>
            </div>
            <div class="form-group">
                <label for="pergunta">Pergunta:</label>
                <input class="campo" type="textarea" name="pergunta" 
                maxlength="1000"required autofocus>
            </div>
            <div class="form-group">
                <label for="resposta">Resposta:</label>
                <input class="campo"type="textarea" name="resposta" 
                maxlength="1000"required>
            </div>
            
            <input type="hidden" name="op" value="3">
            <input type="submit" class="btn btn-success" value="Update">
            <input type="reset" class="btn btn-danger">
        </form>
    </div>
    <hr>
    <div>
        <h2>Delete</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="disciplina">Disciplina:</label>
                <select name="disciplina">
                    <option value="ED">Estrutura de Dados</option>
                    <option value="RC">Redes de Computadores</option> 
                </select>
            </div>
            <div class="form-group">
                <label for="ID:">Código do Registro:</label>
                <input type="textarea" name="id" 
                maxlength="3" required>
            </div>
            
            <input type="hidden" name="op" value="4">                
            <input type="submit" class="btn btn-success" value="Delete">
            <input type="reset" class="btn btn-danger" class="btn btn-primary btn-sm">
        </form>
    </div>
</div>