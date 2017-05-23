<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

<div class="row">
	<form class="col s3" method="post" action="">
		<div class="row">
			<div class="input-field col s12">
				<label for="lastname"> Nom : </label>
				<input type="text" name="lastname" id="lastname" required class="validate">
			</div>

			<div class="input-field col s12">
				<label for="firstname"> Prénom : </label>
				<input type="text" name="firstname" id="firstname" required class="validate">
			</div>

			<div class="input-field col s12">
				<label for="mail"> Email : </label>
				<input type="email" name="mail" id="mail" required class="validate">
			</div>

			<div class="input-field col s12">
				<label for="tel"> Téléphone : </label>
				<input type="text" name="tel" id="tel" required class="validate">
			</div>

			<button class="btn waves-effect waves-light" type="submit" name="submit"> Devenir bénévole </button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/subscribe.js"></script>