<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Banner</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td> 
                                {{-- <a href="{{ url('/admin/banner/edit/'.$item->id) }}"><strong>{{ $item->title }}</strong></a> --}}
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->phone }}
                            </td>
                            <td>
                                {{ $item->message }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
