@extends('layouts.layout')

@section('content')
<!-- Form start Here -->
<h3 class="title1">Ajouter Une Convention :</h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Titre</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="focusedinput" placeholder="Intitulé">
								</div>

							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Date Debut</label>
								<div class="col-sm-8">
									<input type="date" class="form-control1" id="focusedinput" placeholder="Intitulé">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Date fin</label>
								<div class="col-sm-8">
									<input type="date" class="form-control1" id="focusedinput" placeholder="Intitulé">
								</div>
							</div>


							<div class="form-group">
								<label for="selector1" class="col-sm-2 control-label">Devision</label>
								<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
							</div>

							<div class="form-group">
								<label for="selector1" class="col-sm-2 control-label">Service</label>
								<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Multiple Select</label>
								<div class="col-sm-8">
									<select multiple="" class="form-control1">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
								<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4"
										class="form-control1"></textarea></div>
							</div>
							<div class="form-group">
								<label for="radio" class="col-sm-2 control-label">Comité de pilotage</label>
								<div class="col-sm-8">
									<div class="radio block"><label><input type="radio" name="test"> Oui</label></div>
									<div class="radio block"><label><input type="radio" name="test"> Non</label>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>

						</form>
					</div>
					<!-- Form end Here -->

@endsection