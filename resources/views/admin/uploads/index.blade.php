<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Upload Image</h5>
        <div class="col-5">
            <a href="{{ url('/admin/upload/create') }}" class="btn btn-primary" style="margin-left: 20px; color: white;">Upload Image</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->link) }}" alt="Avatar" class="rounded" width="80px" />
                            </td>
                            <td> {{ asset($item->link) }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
