@if(session()->has('flash_message'))
<script>
swal({
 title: "{{ session('flash_message.title') }}",
 text: "{{ session('flash_message.message') }}",
 type: "{{ session('flash_message.level') }}",
 @if (session('flash_message.button')  == 'false')
 timer: 2000,
 @endif 
 showConfirmButton: {{ session('flash_message.button') }}	
});
</script>
@endif