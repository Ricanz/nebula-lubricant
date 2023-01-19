<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Ubah Banner</h5>
            <div class="card-body">
                <form action="{{ route('updateBanner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $banner->id }}"/>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Background Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ $banner->image }}" />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ $banner->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <small class="fw-semibold d-block">Status</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="status" id="active"
                                value="active" {{ $banner->status == 'active' ? 'checked' : 'inactive' }}/>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="inactive" {{ $banner->status == 'inactive' ? 'checked' : 'inactive' }}/>
                            <label class="form-check-label" for="inactive">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="deleted"/>
                            <label class="form-check-label" for="inactive">Delete</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>