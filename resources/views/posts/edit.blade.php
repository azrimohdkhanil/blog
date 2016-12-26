@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

	<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			<div class="form-group">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			</div>

			<div class="form-group">
				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}
			</div>
			
			<div class="form-group">
				{{ Form::label('body', 'Body:', ['class' => '']) }}
				{{ Form::textarea('body',null, ["class" => 'form-control input-lg']) }}
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Create At:</dt>
				  <dd>{{ date( 'M j, Y h:ia' , strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Last Updated:</dt>
				  <dd>{{ date( 'M j, Y h:ia ', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						
						<!-- Another way
							{!!link_to_route('posts.edit', $title = 'Edit', $parameters = [$post->id], $attributes = ['class' => 'btn btn-primary btn-block']);!!} 
						-->
						
					</div>

					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div> <!-- end of row (form)-->
	

@endsection