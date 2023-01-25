
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::has('error'))
<script>
    Swal.fire(
        '¡Error!',
        "{{ Session::get('error') }}",
        'error'
    )
</script>
@endif
@if (Session::has('message'))
<script>
    Swal.fire(
        '¡Bien hecho!',
        "{{ Session::get('message') }}",
        'success'
    )
</script>
@endif