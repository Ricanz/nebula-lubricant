<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Ubah Artikel</h5>
            <div class="card-body">
                <form action="{{ route('updateArticle') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $article->id }}"/>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ $article->image }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="summernote" name="description" rows="5">{!! $article->description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <small class="fw-semibold d-block">Status</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="status" id="active"
                                value="active" {{ $article->status == 'active' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="inactive" {{ $article->status == 'inactive' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="inactive">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="deleted"
                                value="deleted"/>
                            <label class="form-check-label" for="deleted">Deleted</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['picture']],
            ]
        });
    </script>
</x-app-layout>
