<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Testimoni</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Testimoni</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->image) }}" alt="Avatar" class="rounded" width="80px" />
                            </td>
                            <td> <a href="{{ url('/admin/testimonial/edit/'.$item->id) }}"><strong>{{ $item->name }}</strong></a></td>
                            <td>{{ $item->position }}</td>
                            <td>{{ $item->description }}</td>
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
