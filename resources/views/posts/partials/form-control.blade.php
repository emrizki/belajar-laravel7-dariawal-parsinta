<div class="form-group">
  <label for="title">Title</label>
  <input type="text" value="{{ old('title') ?? $post->title }}" name="title" id="title" class="form-control">
  @error('title')
    <div class="mt-2 text-danger">
      {{ $message }}
    </div>
  @enderror
</div>
<div class="form-group">
  <label for="body">Body</label>
  <textarea name="body" id="body" class="form-control">{{ old('body') ?? $post->body }}</textarea>
  @error('body')
    <div class="mt-2 text-danger">
      {{ $message }}
    </div>
  @enderror
</div>

<button type="submit" class="btn btn-primary my-3">{{ $submit ?? 'Update' }}</button>