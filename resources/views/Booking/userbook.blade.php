@extends('layouts.app')

@section('content')
@include('layouts.message')


    <h2 class="text-4xl font-bold border-b-4 text-black">User Bookings</h2>


<div class="table-responsive">
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead class="bg-dark text-white">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Booking Count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $sn = 1; @endphp
            @foreach($users as $user)
            <tr>
                <td>{{ $sn++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->bookings_count }}</td>
                <td class="text-center">
                    <a href="{{ route('booking.show', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [[ 3, "desc" ]],
            "pageLength": 10,
            "columnDefs": [{
                "targets": 4,
                "orderable": false
            }]
        });
    });
</script>
@endpush
