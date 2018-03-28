<div class="fila_4">
    <div class="cajaRegistro">
        <div class="botonesRegistro">
            <a href="?c=login">
                <button class="btn azulO">Iniciar Sesión</button>
            </a>
            <a href="?c=registroUsuario">
                <button class="btn azulC">Registrarse</button>
            </a>
            
        </div>
        <h1 style="color: white; margin: auto; font-family: Times New Roman;">Bienvenidos</h1>
        <form action="?c=registroUsuario&a=Guardar" method="post">
            <div class="entradaFila_1 ent">
                <input name="nombre" type="text" class="input" required placeholder="Nombre" style=" width: 250px; margin-right: 15px;">
                <input name="apellidos" type="text" class="input" required placeholder="Apellidos" style=" width: 250px; margin-left:  15px;">
            </div>  

            <div class="entradaFila_2 ent">
                <input name="email" type="email" class="input" required placeholder="Email"style=" text-transform: initial; width: 370px; margin-right: 20px;">

                <input type="radio" class="radio" name="sexo" id="mujerR" required style="color: ededed;">
                <label for="mujerR">Mujer</label>

                <input type="radio" class="radio" name="sexo" id="hombreR" required style="color: #ededed;">
                <label for="hombreR">Hombre</label>

            </div>         

            <div class="entradaFila_3 ent">
                <input name="contra"type="password" class="input" required placeholder="Contraseña" style=" text-transform: initial; width: 250px; margin-right: 15px;">
                <input name="pais" type="text" class="input" placeholder="País" style=" width: 250px; margin-left: 15px;">
               
            </div> 
            
            <div class="entradaFila_4 ent">
                <input name="comfirContra" type="password" class="input" required placeholder="Comfirmar Contraseña" style="color: #ededed; text-transform: initial; width: 250px; margin-right: 15px;">
                <input name="tel" type="tel" class="input" required placeholder="Telefono" style="color: #ededed; width: 250px; margin-left: 15px;">
            </div> 
            
            <div class="entradaFila_5 ent">     
                <input type="submit" name="registrar" class="regisBtn" value="REGISTRARSE">
                
                <div class="g-recaptcha" data-sitekey="6Lc-bx4UAAAAAIRNMz4P5b1Kb9sAfyVeK_tnLHR9" style="float: right;"></div>
            </div> 
            
        </form>
    </div>
</div>




