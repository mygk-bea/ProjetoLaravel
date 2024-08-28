{{ $slot }}

<form action="{{ route('site.contato') }}" method="POST" class="{{ $dark }}">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <input type="text" class="form-control" id="mensagem" name="mensagem" value="{{ old('mensagem') }}">
    </div>
    <div class="mb-3">
        <select name="motivo" id="motivo" class="form-select">
            <option selected>Qual o motivo do contato?</option>
            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Reclamação</option>
            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Dúvida</option>
            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Elogio</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

{{ print_r($errors) }}