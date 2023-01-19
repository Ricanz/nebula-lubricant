<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Tambah Testimonial</h5>
            <div class="card-body">
                <form action="{{ route('addTestimoni') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukkan nama" />
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Posisi</label>
                        <input type="text" class="form-control" id="position" name="position"
                            placeholder="Masukkan posisi" />
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Testimoni</label>
                        <input type="text" class="form-control" id="testimoni" name="testimoni"
                            placeholder="Masukkan testimoni" />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="image" name="image"
                            placeholder="Masukkan gambar" />
                    </div>
                    <div class="mb-3">
                        <small class="fw-semibold d-block">Status</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="status" id="active"
                                value="active" checked/>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                value="inactive" />
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
