@csrf
<label for="">Title</label>
<input type="text" name="title" value="{{ old('title', $project->title) }}"></br>
<label for="">Url</label>
<input type="text" name="url" value="{{ old('url', $project->url) }}"></br>
<label for="">Description</label>
<textarea name="description">{{ old('description', $project->description) }}</textarea></br>
<button>{{ $btnText }}</button>
