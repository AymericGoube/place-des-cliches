
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
				<label for="password"> Choisir un mot de passe : </label>
				<input type="password" name="password" id="password" required class="validate">
			</div>

			<div class="select-field col s12">
				<label for="status">Je</label>
				<select required name="status" id="status" class="validate">
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

					<optgroup label="Autre">
						<option value="young"> Travaille dans une structure jeunesse (mission locale, MJC, maison de quartier…) </option>
						<option value="association"> Travaille pour une association </option>
						<option value="other"> Autre  </option>
					</optgroup>
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
