<x-layout>

  <form>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Digite seu nome: </label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="nome" placeholder="Nome:">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Qual sua media? </label>
      <input type="text" class="form-control" id="formGroupExampleInput2" media="media" placeholder="Media:">
    </div>

    <button>
      "calcular"
    </button>
  </form>

<label> Resultado: {{ $data["resultado"] }}</label><br>
<label></label>
</x-layout>