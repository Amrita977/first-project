@php
    $user="Amrita";
    $fruits=["Grapes","Apple"]
@endphp

<script>
   // var data= @json($fruits);

    var data ={{Js::from($fruits)}};

    data.forEach(function(entry){
    console.log(entry);
    });

</script>
