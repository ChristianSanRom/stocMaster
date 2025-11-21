<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Panel Operario - Sistema</title>
  <link rel="stylesheet" href="../HTML/css/panel_admin.css">
</head>
<body>
  <header class="topbar">
    <div class="brand">Almacén X</div>
    <nav class="topnav">
      <a href="entrada_mercancia.php">Entradas</a>
      <a href="salida_mercancia.php">Salidas</a>
      <a href="verificar_mercancia.php">Verificar</a>
      <a class="logout" href="logout.php">Cerrar sesión</a>
    </nav>
  </header>

  <div class="layout">
    <aside class="sidebar">
      <ul>
        <li><a href="panel_operario.php">Dashboard</a></li>
        <li><a href="entrada_mercancia.php">Registrar Entrada</a></li>
        <li><a href="salida_mercancia.php">Registrar Salida</a></li>
        <li><a href="verificar_mercancia.php">Verificar Mercancía</a></li>
        <li><a href="detalle_entrada.php">Detalles de Entrada</a></li>
        <li><a href="detalle_salida.php">Detalles de Salida</a></li>
      </ul>
    </aside>

    <main class="main">
      <h2>Bienvenido, Operario de Almacén</h2>

      <section class="cards">
        <article class="stat">
          <h3>Entradas registradas</h3>
          <p class="num">24</p>
        </article>
        <article class="stat">
          <h3>Salidas registradas</h3>
          <p class="num">18</p>
        </article>
        <article class="stat">
          <h3>Verificaciones pendientes</h3>
          <p class="num">4</p>
        </article>
        <article class="stat">
          <h3>Alertas</h3>
          <p class="num">2</p>
        </article>
      </section>

      <section class="recent">
        <h3>Últimas actividades</h3>
        <table class="table">
          <thead><tr><th>Fecha</th><th>Acción</th><th>Detalle</th></tr></thead>
          <tbody>
            <tr><td>2025-10-20</td><td>Entrada registrada</td><td>Lote #A-154</td></tr>
            <tr><td>2025-10-19</td><td>Salida completada</td><td>Pedido #1023</td></tr>
            <tr><td>2025-10-18</td><td>Verificación realizada</td><td>Zona B2</td></tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>