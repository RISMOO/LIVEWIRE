<div>
    <span class="btn btn-primary" wire:click="addField()">Ajouter un champ </span>
    @foreach ($fields as $key=>$value)
   <textarea name="fields[]" class="form-control m-3">Champ n° {{$value}}</textarea>
   <span class="btn btn-danger" wire:click="removeField({{$key}})">Supprimer</span>
    @endforeach
</div>
