<label {!! $__field->attributes($__field->getOption('label_attr')) !!}>{!! $__field->getOption('label') !!}</label>
<input type="text" name="{{ $__field->getName() }}" {!! $__field->attributes($__field->getAttributes()) !!} value="{{ $__field->getRawValue() }}">
@include($__field->getTheme().'.types.includes.info', ['field' => $__field])
@include($__field->getTheme().'.types.includes.errors', ['field' => $__field])
