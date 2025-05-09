<form action={{ $form_action }} method={{ $form_method }}>
    @csrf
    {{ $blade_method }}
    <div class="mb-3">
        <label for="Name" class="form-label">Nome Progetto</label>
        <input type="text" class="form-control" id="Name" name="Name" value={{$form_name}}>
    </div>
    <div class="mb-3">
        <label for="Client" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="Client" name="Client" value={{ $form_client }}>
    </div>
    <div>
        <span class="d-block mb-3">Descrizione del Progetto</span>
        <textarea class="form-control mb-3" placeholder="Inserisci qui la descrizione del progetto..." id="Brief"
            name="Brief">{{ $form_brief }}</textarea>
    </div>
    <div class="mb-3">
        <label for="Time" class="form-label">Durata in giorni</label>
        <input type="text" class="form-control" id="Time" name="Time" value={{ $form_time }}>
    </div>

    {{$form_buttons}}
</form>