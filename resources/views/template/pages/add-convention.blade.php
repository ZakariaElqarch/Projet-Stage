@extends('template.layouts.template');
@section('content');
@csrf
<div class="form-container">
    <form class="form-group">
      <label>Titre:</label>
      <input type="text" name="title">

      <label>Date de début:</label>
      <input type="date" name="start-date">

      <label>Date de fin:</label>
      <input type="date" name="end-date">

      <label>Les associés:</label>
      <input type="text" name="associés">
      <!-- <select name="associates">
        <option value="associate1">Associé 1</option>
        <option value="associate2">Associé 2</option>
        <option value="associate3">Associé 3</option>
      </select> -->

      <label>Liste de convention:</label>
      <select name="convention-list">
        <option value="convention1">Convention 1</option>
        <option value="convention2">Convention 2</option>
        <option value="convention3">Convention 3</option>
      </select>

      <label>Liste de division:</label>
      <select name="division-list">
        <option value="division1">Division 1</option>
        <option value="division2">Division 2</option>
        <option value="division3">Division 3</option>
      </select>

      <label>Budget:</label>
      <input type="text" name="budget">

      <input type="submit" value="Submit">
    </form>
  </div>
  @endsection;