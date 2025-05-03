<x-layout>
    <!-- CSS Links (CDN only) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <div class="container mt-4">
        <table id="dataTable2" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FULLNAME</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>NUMBER</th>
                    <th>GENDER</th>
                    <th>PROGRAMME</th>
                    <th>DATE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                <tr>
                    <td>{{$applicant['id']}}</td>
                    <td>{{$applicant['fullname']}}</td>
                    <td>{{$applicant['email']}}</td>
                    <td>{{$applicant['address']}}</td>
                    <td>{{$applicant['number']}}</td>
                    <td>{{$applicant['gender']}}</td>
                    <td>{{$applicant['title']}}</td>
                    <td>{{$applicant['created_at']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form method="POST" action="{{ route('applications.clear') }}" id="clear-applicants-form">
        @csrf
        @method('DELETE')
    
        <button type="submit" class="btn btn-danger" 
            onclick="clearApplications()">
            <i class="fas fa-trash-alt mr-1"></i>
            {{ __('Clear All Applicants') }}
        </button>
        </form>
    </div>


    <!-- JavaScript (CDN only) - MUST BE IN THIS ORDER -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
    console.log('Initializing DataTable...');
    var table = $('#dataTable2').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true
    });
    
    // Debug output
    console.log('Table initialized:', table);
    console.log('Buttons container:', table.buttons().container());
    });
    </script>
    <script>
        function clearApplications() {
        if (confirm('Are you sure?')) {
            fetch('{{ route("applications.clear") }}', {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                }
            })
            .then(response => {
                if (response.ok) {
                    window.location.reload();
                }
            });
        }
    }
    </script>

<style>
        .dt-buttons {
            margin-bottom: 20px;
            float: none;
            text-align: center;
        }
        .dt-button {
            background-color: #32DF32 !important;
            color: orange !important;
            border: none;
            padding: 8px 15px;
            margin: 0 5px;
            border-radius: 4px;
        }
    </style>
</x-layout>