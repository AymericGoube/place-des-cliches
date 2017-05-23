<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="css/subscribe.css">

<div class="row">
	<form class="col s3">
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
				<label for="password"> Choisir un mot de passe : </label>
				<input type="password" name="password" id="password" required class="validate">
			</div>

			<div class="select-field col s12">
				<label for="status">Je</label>
				<select multiple required name="status" id="status" class="validate">
					<optgroup label="Travaille dans un établissement scolaire">
						<option value="primaire"> Primaire </option>
						<option value="college"> Collège </option>
						<option value="lycee"> Lycée </option>
						<option value="sup"> Etablissement du supérieur </option>
					</optgroup>

					<optgroup label="Suis un élève / étudiant">
						<option value="pupil"> Collège </option>
						<option value="highschool"> Lycée </option>
						<option value="student"> Etablissement du supérieur </option>
					</optgroup>

					<option value="young"> Travaille dans une structure jeunesse (mission locale, MJC, maison de quartier…) </option>
					<option value="association"> Travaille pour une association </option>
					<option value="other"> Autre  </option>
				</select>
			</div>

			<div class="input-field col s12">
				<label for="department"> Département : </label>
				<input type="text" name="department" id="department" required class="validate">
			</div>

			<button class="btn waves-effect waves-light" type="submit" name="submit"> M'inscrire </button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/subscribe.js"></script> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<form method="post" action="" class="col-md-4">
	<div class="form-group">
		<label for="lastname"> Nom : </label>
		<input type="text" name="lastname" id="lastname" required class="form-control">
	</div>

	<div class="form-group">
		<label for="firstname"> Prénom : </label>
		<input type="text" name="firstname" id="firstname" required class="form-control">
	</div>

	<div class="form-group">
		<label for="mail"> Email : </label>
		<input type="email" name="mail" id="mail" required class="form-control">
	</div>

	<div class="form-group">
		<label for="password"> Choisir un mot de passe : </label>
		<input type="password" name="password" id="password" required class="form-control">
	</div>

	<div class="form-group">
		<label for="status"> Je : </label>
		<select multiple required name="status" id="status" class="form-control">
			<optgroup label="Travaille dans un établissement scolaire">
				<option value="primaire"> Primaire </option>
				<option value="college"> Collège </option>
				<option value="lycee"> Lycée </option>
				<option value="sup"> Etablissement du supérieur </option>
			</optgroup>

			<optgroup label="Suis un élève / étudiant">
				<option value="pupil"> Collège </option>
				<option value="highschool"> Lycée </option>
				<option value="student"> Etablissement du supérieur </option>
			</optgroup>

			<option value="young"> Travaille dans une structure jeunesse (mission locale, MJC, maison de quartier…) </option>
			<option value="association"> Travaille pour une association </option>
			<option value="other"> Autre  </option>
		</select>
	</div>

	<div class="form-group">
		<label for="department"> Département du lieu d'activité : </label>
		<input type="text" name="department" id="department" required class="form-control">
	</div>

	<button class="btn btn-success" type="submit" name="submit"> M'inscrire </button>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>