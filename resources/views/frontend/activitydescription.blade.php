@extends('layouts.app')



@section('content')
<div class="mainheading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>AI in Health Insurance and Healthcare</h1>
			</div>
		</div>
	</div>
	<hr>
</div>
<section class="maincontent">



	<div class="actualcontent">
		<div class="container">
<b>
    {!! html_entity_decode($activity_details->activity_name) !!}

</b>
        {!! html_entity_decode($activity_details->description) !!}


	</div>
</div>
</section>

@endsection
