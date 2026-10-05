<?php
// Página temporal "En construcción" — se reemplazará cuando tengamos el contenido final.
$nombre = 'Yoseline Aparicio Canizalez';
$anio   = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $nombre ?> | Bienes Raíces — Próximamente</title>
  <meta name="description" content="<?= $nombre ?>, asesora en bienes raíces. Compra y venta de casas. Nuestro sitio web estará disponible muy pronto.">
  <meta name="theme-color" content="#32141e">
  <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    :root {
      --vino:   #32141e;
      --ciruela:#4a2336;
      --crema:  #e1dcc8;
      --bosque: #2d3c29;
      --noche:  #14231e;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background:
        radial-gradient(ellipse at 20% 0%, var(--ciruela) 0%, transparent 60%),
        radial-gradient(ellipse at 100% 100%, var(--bosque) 0%, transparent 55%),
        var(--vino);
      color: var(--crema);
      font-family: 'Montserrat', sans-serif;
      font-weight: 300;
      -webkit-font-smoothing: antialiased;
    }
    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px 16px;
    }
    .tarjeta {
      width: 100%;
      max-width: 560px;
      text-align: center;
      animation: aparecer 1.2s ease-out both;
    }
    .logo {
      width: 96px;
      height: 96px;
      margin: 0 auto 32px;
      color: var(--crema);
    }
    .etiqueta {
      font-size: 0.72rem;
      letter-spacing: 0.35em;
      text-transform: uppercase;
      opacity: 0.75;
      margin-bottom: 20px;
    }
    h1 {
      font-family: 'Cormorant Garamond', serif;
      font-weight: 400;
      font-size: clamp(2.2rem, 7vw, 3.6rem);
      line-height: 1.1;
      letter-spacing: 0.01em;
    }
    .rol {
      margin-top: 14px;
      font-size: 0.85rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--crema);
      opacity: 0.85;
    }
    .separador {
      width: 64px;
      height: 1px;
      background: var(--crema);
      opacity: 0.5;
      margin: 36px auto;
    }
    .mensaje {
      font-family: 'Cormorant Garamond', serif;
      font-style: italic;
      font-size: clamp(1.25rem, 4vw, 1.6rem);
      margin-bottom: 12px;
    }
    .detalle {
      font-size: 0.95rem;
      line-height: 1.7;
      opacity: 0.8;
      max-width: 420px;
      margin: 0 auto;
    }
    .estado {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-top: 36px;
      padding: 10px 22px;
      border: 1px solid rgba(225, 220, 200, 0.35);
      border-radius: 999px;
      font-size: 0.75rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
    }
    .estado::before {
      content: '';
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--crema);
      animation: pulso 2s ease-in-out infinite;
    }
    footer {
      padding: 20px 16px;
      text-align: center;
      font-size: 0.72rem;
      letter-spacing: 0.1em;
      opacity: 0.6;
      background: rgba(20, 35, 30, 0.45);
    }
    @keyframes aparecer {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: none; }
    }
    @keyframes pulso {
      0%, 100% { opacity: 1; }
      50%      { opacity: 0.25; }
    }
    @media (prefers-reduced-motion: reduce) {
      .tarjeta, .estado::before { animation: none; }
    }
  </style>
</head>
<body>
  <main>
    <div class="tarjeta">
      <svg class="logo" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true">
        <path d="M14 46 L50 12 L62 30"/>
        <path d="M62 30 L72 20 L88 80"/>
        <path d="M14 46 L22 84"/>
        <path d="M14 46 Q32 44 38 62 L40 84"/>
        <path d="M38 62 Q44 48 52 60 L54 82"/>
        <path d="M52 60 Q58 42 66 46 L70 80"/>
        <path d="M62 30 L78 80"/>
        <path d="M8 86 L94 78"/>
      </svg>

      <p class="etiqueta">Bienes Raíces</p>
      <h1><?= $nombre ?></h1>
      <p class="rol">Compra &amp; Venta de Casas</p>

      <div class="separador"></div>

      <p class="mensaje">Estamos construyendo algo especial</p>
      <p class="detalle">
        Muy pronto encontrarás aquí las mejores propiedades y la asesoría
        que necesitas para encontrar tu próximo hogar.
      </p>

      <div class="estado">Sitio en construcción</div>
    </div>
  </main>

  <footer>
    &copy; <?= $anio ?> <?= $nombre ?> · yoselineca.com
  </footer>
</body>
</html>
