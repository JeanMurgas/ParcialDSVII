<?php

require_once '../head/head.php';
?>
<head>

       <script src="https://kit.fontawesome.com/a54771083c.js" crossorigin="anonymous"></script>
</head>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="fondo-login" style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 50%;">
        <!-- ... -->
        <div class="title" style="font-size: 24px; font-weight: bold;">
            Crea una Cuenta en Tickets
        </div>
        <form action='/ParcialKexyV2/view/home/user.php' method="POST">
            <div class="mb-3">
                <label for="username" class="form-label" style="color: #333; font-size: 18px;">
                    <i class="fas fa-user"></i> Usuario
                </label>
                <input type="text" name="username" class="form-control" id="username" placeholder="usuario">
            </div>
            <div class="mb-3">
    <label for="email" class="form-label" style="color: #333; font-size: 18px;">
        <i class="fas fa-envelope"></i> Correo
    </label>
    <input type="email" name="email" class="form-control" id="email" placeholder="correo@example.com">
</div>
            <div class="mb-3">
        <label for="role" class="form-label" style="color: #333; font-size: 18px;">
            <i class="fas fa-user-tag"></i> Rol
        </label>
        <select name="role" class="form-control" id="role">
            <option value="cliente">Cliente</option>
            <option value="tecnico">Técnico</option>
        </select>
    </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: #333; font-size: 18px;">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div style="display: flex; justify-content: center;">
                <button type="submit" class="btn btn-primary" style="background-color: blue; color: white; padding: 10px 20px; border: 2px solid red;">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Session
                </button>
            </div>
        </form>
        
        <div class="login" style="margin-top: 20px; text-align: center;">
            tienes una cuenta? <a href="login.php" style="text-decoration: none; color: blue;">Inicia Sesion</a>
        </div>
    </div>
</div>


<?php

require_once '../head/footer.php';

?>