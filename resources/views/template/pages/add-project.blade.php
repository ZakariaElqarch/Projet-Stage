@extends('template.layouts.template');

@section('content');
@csrf 
<div class="form-container">
    <form class="form-group">
        <label>Titre</label>
            <input type="text" name="titre">
        <label>Date début</label>
            <input type="date" name="date_debut">
        <label>Date de fin</label>
            <input type="date" name="date_fin">
        <label>Budget</label>
            <input type="text" name="budget">
        <label>Status</label>
        <select name="status">
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
        </select>
        <label>Taux d'avancement</label>
            <input type="text" name="taux_avancement">
            <input type="submit" value="Envoyer">
  </form>
</div>
  @endsection;