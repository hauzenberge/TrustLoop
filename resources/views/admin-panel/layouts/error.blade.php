@if(isset($error))
@if($error != null)
<div class="overlay">
    <div class="alert alert-danger" style="top: 50%; text-align:center">
        {!! $error !!}
    </div>
</div>

<script>
    var overlay = document.querySelector('.overlay');
    var button = document.querySelector('.block-button');

    button.addEventListener('click', function() {
        overlay.style.display = 'block';
    });
</script>
@endif
@endif