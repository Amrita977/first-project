@php
    $user="Amrita Rajvansh ";
    $fruits=["Grapes","Apple","Mango","Orange"]
@endphp

<script>
   // var data= @json($fruits);

    var data ={{Js::from($fruits)}};

    data.forEach(function(entry){
    console.log(entry);
    });

</script>
