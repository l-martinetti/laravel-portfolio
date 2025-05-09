<form action={{ $form_action }} method={{ $form_method }}>
    @csrf
    <div class="mb-3">
        <label for="Name" class="form-label">Nome Progetto</label>
        <input type="text" class="form-control" id="Name" name="Name">
    </div>
    <div class="mb-3">
        <label for="Client" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="Client" name="Client">
    </div>
    <div>
        <span class="d-block mb-3">Descrizione del Progetto</span>
        <textarea class="form-control mb-3" placeholder="Inserisci qui la descrizione del progetto..." id="Brief"
            name="Brief"></textarea>
    </div>
    <div class="mb-3">
        <label for="Time" class="form-label">Durata in giorni</label>
        <input type="text" class="form-control" id="Time" name="Time">
    </div>

    <button type="submit" class="btn btn-primary mt-1">Crea</button>
</form>