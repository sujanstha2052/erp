<x-admin-layout>
    <x-slot name="header">Users</x-slot>

    <x-slot name="stylesheet">
    </x-slot>

    <div class="text-center mt-5">
        <h1>Users</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            $(function() {

                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.datatable-data') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            });
        </script>
    </x-slot>
</x-admin-layout>
