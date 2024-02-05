

@props(['type' => 'text', 'title' => 'Title', 'name' => 'title', 'placeholder' => 'placeholder', 'value' => '','show_label'=>true])
<div>
    @if($show_label)
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control"
        id="{{ $name }}" placeholder="{{ $placeholder }}" />

    @if ($errors->has($name))
        <div class="error">{{ $errors->first($name) }}</div>
    @endif
</div>
