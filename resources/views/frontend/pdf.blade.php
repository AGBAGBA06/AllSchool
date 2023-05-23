@include('include/header')

<iframe src="{{asset('pdf/pdf/'.$offres->fichiers)}}" frameborder="0"></iframe>

@include('include/footer')