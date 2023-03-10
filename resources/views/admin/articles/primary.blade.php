<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Artikel Utama</h5>
        <div class="col-5">
            <a href="{{ url('/admin/primary-article/create') }}" class="btn btn-primary" style="margin-left: 20px; color: white;">Tambah Berita Utama</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->image) }}" alt="Avatar" class="rounded" width="80px" />
                            </td>
                            <td> <a href="{{ url('/admin/article/edit/'.$item->id) }}"><strong>{{ $item->title }}</strong></a>
                            </td>
                            <td>{{ Str::limit($item->short_desc, 30, '...') }}</td>
                            <td>
                                @if ($item->status == 'active')
                                    <span class="badge bg-label-primary me-1">{{ $item->status }}</span>
                                @elseif ($item->status == 'inactive')
                                    <span class="badge bg-label-warning me-1">{{ $item->status }}</span>
                                @else
                                    <span class="badge bg-label-danger me-1">{{ $item->status }}</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
