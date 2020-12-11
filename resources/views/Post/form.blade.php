


<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{old("title")?? $post->title ?? ''}}">
    <span class="error">{{$errors->first('title')}}</span>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <input type="text" name="content" class="form-control" id="content" value="{{old("content")??$post->content ?? ''}}">
    <span class="error">{{$errors->first('content')}}</span>
</div>
<div class="form-group">
    <label for="author">Author</label>
    <select name="author" id="author" class="form-control">
        @foreach ($customers as $customer)
        <option value="{{$customer->id}}" {{($customer->id==($post->id?? '')) ? 'selected':''}}>{{$customer->name}}</option>
        @endforeach
        <span class="error">{{$errors->first('author')}}</span>
     {{-- <input type="text" name="author" id="author" value="{{old("author")??$post->author ?? ''}}" > --}}
</div>
<div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control" id="image">
    <span class="error">{{$errors->first('image')}}</span>
</div>




{{-- <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{old("title")?? $post->title ?? ''}}">
        <span class="error">{{$errors->first('title')}}</span><br><br>
        <label for="content">Content</label>
        <input type="text" name="content" id="content" value="{{old("content")??$post->content ?? ''}}">
        <span class="error">{{$errors->first('content')}}</span><br><br>
        <label for="author">Author</label>
    <select name="author" id="author">
        @foreach ($customers as $customer)
        <option value="{{$customer->id}}" {{($customer->id==($post->id?? '')) ? 'selected':''}}>{{$customer->name}}</option>
        @endforeach
        {{-- <input type="text" name="author" id="author" value="{{old("author")??$post->author ?? ''}}" > --}}
        {{-- <span class="error">{{$errors->first('author')}}</span><br><br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <span class="error">{{$errors->first('image')}}</span><br><br>
 --}}
