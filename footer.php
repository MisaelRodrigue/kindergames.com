<form method="POST" action="?pg=inserir_comentarios">
	<H2 for="story">Coments:</H2>
	<?php exibir(); ?>
	<label>Nick: </label>
	<input class="w3-input" type="text" placeholder="Name" name="nome"></p>
	<textarea id="story"
	rows="5" cols="32" placeholder="Comentários" class="margin_coments" name="coments" class="margin_coments"></textarea><br>
	<input type="hidden" name="uri" value="<?=$_SERVER['REQUEST_URI']?>">
	<button class="submit_button">Enviar</button>
</form>
<div class="container">          
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="?pg=projeto">1</a></li>
		<li class="page-item"><a class="page-link" href="?pg=pagtwo">2</a></li>
		<li class="page-item"><a class="page-link" href="?pg=pagthree">3</a>
		</li>
	</ul>
</div>
