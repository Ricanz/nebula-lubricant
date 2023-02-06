<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Penawaran</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Diedit Pada</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td> <a href="{{ url('/admin/offer/edit/'.$item->id) }}"><strong>{{ $item->title }}</strong></a>
                            </td>
                            <td>
                                @if ($item->status == 'active')
                                    <span class="badge bg-label-primary me-1">{{ $item->status }}</span>
                                @elseif ($item->status == 'inactive')
                                    <span class="badge bg-label-warning me-1">{{ $item->status }}</span>
                                @else
                                    <span class="badge bg-label-danger me-1">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
