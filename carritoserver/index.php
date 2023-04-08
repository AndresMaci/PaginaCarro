

<!DOCTYPE html>
<html>
<head>
	
	<title>Control de Carrito</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div class="container">
		<div class="controls">
    <h2>Controles del Carrito</h2>
    <div class="control-buttons">
        <button id="left-btn">Izquierda</button>
        <button id="forward-btn">Adelante</button>
        <button id="backward-btn">Atras</button>
        <button id="right-btn">Derecha</button>
	    <button id="p">Parar</button>
        <button id="auto-mode-btn">Cambiar modo</button>
    </div>
</div>

		<div class="info">
			<h2>Información del Carrito</h2>
			<p>Carro conectado: <span id="c">Desconectado</span></p>
			<p>Distancia con el proximo objeto: <span id="distance">0</span></p>
			<p>Dirección: <span id="direction">Norte</span></p>
			<p>Último Color Leído: <span id="color">Rojo</span></p>
			<p>Modo: <span id="mode">Manual</span></p>
			<button id="D">Desconectar</button>

		</div>
		
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
