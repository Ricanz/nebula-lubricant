<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Upload Image</h5>
            <div class="card-body">
                <form action="{{ route('submitImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image"
                            placeholder="Masukkan gambar" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
