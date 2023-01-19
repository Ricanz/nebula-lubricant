<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Ubah Penawaran</h5>
            <div class="card-body">
                <form action="{{ route('updateOffer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $offer->id }}"/>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $offer->title }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ $offer->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <small class="fw-semibold d-block">Status</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="status" id="active"
                                value="active" {{ $offer->status == 'active' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="inactive" {{ $offer->status == 'inactive' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="inactive">Inactive</label>
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
