@extends('layouts.app')

@section('content')
@include('layouts.message')

<div class="flex justify-between items-center mb-4 border-b-4">
    <h2 class="text-4xl font-bold  text-black">Booking Records</h2>
    <a href="{{ route('userbook') }}" class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i> Exit</a>
</div>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Check_in</th>
            <th>Check_out</th>
            <th>Room</th>
            <th>Payment Status</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $currentNumber = $forms->firstItem(); // Get the starting number from the paginator
        @endphp
        @foreach($forms as $form)
        <tr>
            <td>{{ $currentNumber }}</td>
            <td>{{ $form->name }}</td>
            <td>{{ $form->email }}</td>
            <td>{{ $form->check_in }}</td>
            <td>{{ $form->check_out }}</td>
            <td>{{ $form->room->room_type }}</td>
            <td>
                @if ($form->payment_status === 'Pending')
                <span class="p-2 badge bg-warning text-white">{{ $form->payment_status }}</span>
                @elseif ($form->payment_status === 'Received')
                <span class="p-2 badge bg-success text-white">{{ $form->payment_status }}</span>
                @endif
            </td>
            <td>
                @if ($form->status === 'Booked')
                <span class="p-2 badge bg-success text-white">Booked</span>
                @elseif ($form->status === 'Cancelled')
                <span class="p-2 badge bg-dark text-white">Cancelled</span>
                @endif
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('booking.edit', $form->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="showDeleteConfirmation('{{ $form->id }}')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </div>
            </td>
        </tr>
        @php
        $currentNumber++; // Increment the current number
        @endphp
        @endforeach
    </tbody>
</table>
<!-- Delete Confirmation Modal -->
<div id="deleteConfirmationModal" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="modal-container flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>

            <div class="text-center">
                <form action="{{ route('booking.delete') }}" method="POST">
                    @csrf
                    <input type="hidden" id="deleteFormId" name="dataid" value="">
                    <div class="flex mt-10 justify-center">
                        <input type="submit" value="Yes! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                        <a onclick="hideDeleteConfirmation()" class="btn btn-danger text-white rounded-lg px-4 py-2 mx-2">Exit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        function showDeleteConfirmation(id) {
            document.getElementById('deleteFormId').value = id;
            const modal = document.getElementById('deleteConfirmationModal');
            modal.style.display = 'block'; // Show the modal
        }

        function hideDeleteConfirmation() {
            document.getElementById('deleteFormId').value = ''; // Clear the hidden input value
            const modal = document.getElementById('deleteConfirmationModal');
            modal.style.display = 'none'; // Hide the modal
        }
    </script>
    @endsection