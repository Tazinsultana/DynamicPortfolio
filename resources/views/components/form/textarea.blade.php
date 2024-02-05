@props([
    'title' => 'Title',
    'id' => 'deafult_text_area',
    'name' => 'title',
    'placeholder' => 'placeholder',
    'value' => '',
    'rows'=>"3"
])

<div>
    <label class="form-label" for="{{ $id }}">{{ $title }}</label>
    <textarea id="{{ $id }}" name="{{ $name }}" class="form-control" rows="{{$rows}}"  placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
</div>
