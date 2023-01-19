<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Ubah Klien</h5>
            <div class="card-body">
                <form action="{{ route('updateClient') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $client->id }}"/>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $client->title }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ $client->image }}"/>
                    </div>
                    <div class="mb-3">
                        <small class="fw-semibold d-block">Status</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="status" id="active"
                                value="active" {{ $client->status == 'active' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="inactive" {{ $client->status == 'inactive' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="inactive">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="deleted"
                                value="deleted" {{ $client->status == 'deleted' ? 'checked' : '' }}/>
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
</x-app-layout>
