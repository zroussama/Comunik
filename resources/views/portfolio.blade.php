<form action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="contrat">Contrat</label>
      <input type="file" name="contrat" id="contrat">
    </div>
    <div class="form-group">
      <label for="date_contrat">Date Contrat</label>
      <input type="date" name="date_contrat" id="date_contrat">
    </div>
    <button type="submit">Save</button>
  </form>