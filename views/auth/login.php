<div class="applogin">
    <div class="wrapper">

        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <img src="../../build/img/logoMC-naranja.png" alt="Logo">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>

            <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

            <form action="/" method="POST">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="nombre" id="nombre" value="<?php echo s($auth->nombre); ?>" required>
                    <label for="nombre">Usuario</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="contrasena" id="contrasena" required>
                    <label for="contrasena">Contraseña</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <input type="submit" class="btn" value="Iniciar Sesión" style="--i:3; --j:24;">
            </form>
        </div>
        <div class="info-text login">
            <div class="poscion">
                <h2 class="animation" style="--i:0; --j:20;">Diana Ramos</h2>
                <h3 class="animation" style="--i:0; --j:20;">¡Con ella si!</h3>
                <p class="animation" style="--i:1; --j:21;">La Sevillana</p>
            </div>
        </div>
    </div>
</div>