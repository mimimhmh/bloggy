@extends ('layouts.fullmaster')

@section ('content')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>

    <h1>Publish a post</h1>
    <form method="post" action="/posts" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control"
                   id="title"
                   name="title"
                   value="{{ old('title') }}"
                   placeholder="Enter title"
                   required>
        </div>

        <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                   value="{{ old('slug') }}"
                   placeholder="Enter slug">
        </div>

        <div class="form-group">
            <label for="abstract">Post Abstract</label>
            <textarea class="form-control" id="abstract"
                      name="abstract"
                      placeholder="Enter abstract"
                      rows="2"
                      maxlength="400">
                {{ old('abstract') }}
            </textarea>
            <small id="fileHelp" class="form-text text-muted">
                Max length 400 characters.
            </small>
        </div>

        <div class="form-group">
            <label for="mainImage">Main Image</label>
            <input type="file" name="large_img_url" class="form-control-file" id="mainImage"
                   aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Post Image 840 x 341.
            </small>
        </div>

        <div class="form-group">
            <label for="postEditor">Post body</label>
            <textarea class="form-control" id="postEditor" name="body">
                {{ old('body') }}
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>
    <!-- Initialize the editor. -->
    <script>
        $(function () {
            $('#postEditor').froalaEditor({
                // Set the file upload URL.
                toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertTable'],
                heightMin: 300,
                imageMove: true,
                imageUploadParam: 'image',
                imageUploadMethod: 'post',
                // Set the image upload URL.
                imageUploadURL: '/files/post',
                imageUploadParams: {
                    location: 'images', // This allows us to distinguish between Froala or a regular file upload.
                    _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
                },
                // URL to get all department images from
                imageManagerLoadURL: '/fileuploads',
                // Set the delete image request URL.
                imageManagerDeleteURL: "/fileuploads",
                // Set the delete image request type.
                imageManagerDeleteMethod: "DELETE",
                imageManagerDeleteParams: {
                    _token: "{{ csrf_token() }}"
                }
            })
        });
    </script>

    @include('layouts.errors')

@endsection