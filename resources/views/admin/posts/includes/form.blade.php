<div class="mb-3">
    <label for="input-title" class="form-label">title</label>
    <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title', $post->title) }}">
    @include('admin.posts.includes.errors', ['value' => 'title'])
</div>
<div class="mb-3">
    <label for="input-post_content" class="form-label">post_content</label>
    <input type="text" class="form-control" id="input-post_content" name="post_content" value="{{ old('post_content', $post->post_content) }}">
    @include('admin.posts.includes.errors', ['value' => 'post_content'])
</div>
<div class="mb-3">
    <label for="input-post_image" class="form-label">post_image</label>
    <textarea class="form-control" name="post_image" id="input-post_image" cols="30" rows="10">{{ old('post_image', $post->post_image) }}</textarea>
    @include('admin.posts.includes.errors', ['value' => 'post_image'])
</div>

<button type="submit" class="btn btn-primary">Submit</button>
