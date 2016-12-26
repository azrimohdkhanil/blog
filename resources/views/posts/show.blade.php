@php
	use Carbon\Carbon;
	//echo strtotime($post->updated_at);
	//$dt = new DateTime('@'.strtotime($post->updated_at));
	//$dt->setTimeZone(new DateTimeZone('Asia/Kuala_Lumpur'));
	//echo $dt->format('F j, Y, g:i a');
@endphp

@extends('main')

@section('title','| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
				 	<label>Url:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}"> {{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
				 	<label>Create At:</label>
				  	<!--<dd>{{ date( 'M j, Y h:ia' , strtotime($post->created_at)) }}</dd> -->
					<p>
						{{ 
							Carbon::parse($post->created_at)->setTimeZone(new DateTimeZone('Asia/Kuala_Lumpur'))->format('M j, Y h:ia')
						}}
					</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>
						{{ 
							//date('M j, Y h:ia ', strtotime($post->updated_at)) 
							//$dt->format('F j, Y, g:i a')
							Carbon::parse($post->updated_at)->setTimeZone(new DateTimeZone('Asia/Kuala_Lumpur'))->format('M j, Y h:ia')
						}}
					</p>
					<!-- <dd>{{ Carbon::now(new DateTimeZone('Asia/Kuala_Lumpur'))}}</dd> -->
				  
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						
						<!-- Another way
							{!!link_to_route('posts.edit', $title = 'Edit', $parameters = [$post->id], $attributes = ['class' => 'btn btn-primary btn-block']);!!} 
						-->
					</div>

					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>

				</div> <!-- end of row (sidebar button) -->

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
				</div>

			</div>
		</div>
	</div>
	

@endsection