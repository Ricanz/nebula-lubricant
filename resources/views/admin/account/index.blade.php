<x-app-layout>
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Ubah Akun</h5>
            <div class="card-body">
                <form action="{{ route('updateAccount') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $email }}" />
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan password" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
