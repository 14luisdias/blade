
<!-- <a class="btn btn-outline-light {{ $class }}" {{ $attributes }}> -->
<a {{ $attributes->merge(['class' => 'btn btn-outline-light ']) }}>
    <i class="fas fa-download me-2"></i>
    {{ $titulo }}
</a>
