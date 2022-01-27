@section('title', 'Certificates')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Certificates of Deletion</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <div class="int-table__inner text-sm">
                <table class="datatable int-table__table" aria-label="Datatable">
                    <thead class="int-table__header">
                        <tr class="int-table__row">
                            <th>
                                <div class="flex items-center">
                                    <span>Ship name</span>
                                </div>
                            </th>
                            <th>
                                <div class="flex items-center">
                                    <span>Official number</span>
                                </div>
                            </th>
                            <th>
                                <div class="flex items-center">
                                    <span>Signal letters</span>
                                </div>
                            </th>
                            <th>
                                <div class="flex items-center">
                                    <span>IMO number</span>
                                </div>
                            </th>
                            <th>
                                <div class="flex items-center">
                                    <span>Action</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layout>

<x-datatable />

<script type="text/javascript">
    $(function() {
        var table = $(".datatable").DataTable({
            dom: "Bfrtip",
            lengthMenu: [
                [10, 25, 50, -1],
                ["10 rows", "25 rows", "50 rows", "Show all"],
            ],
            buttons: [{
                    extend: "excel",
                    text: "Excel",
                    exportOptions: {
                        columns: ":visible",
                    },
                },
                {
                    extend: "pdf",
                    text: "PDF",
                    exportOptions: {
                        modifier: {
                            page: "current",
                        },
                    },
                },
                {
                    extend: "colvis",
                    text: "Columns",
                },
                {
                    extend: "pageLength",
                    text: "Rows",
                },
            ],

            processing: true,
            serverSide: true,
            select: true,
            mark: true,
            autoFill: true,
            responsive: true,

            ajax: "{{ route('certificateDeletion') }}",
            columns: [{
                    data: "ship_name",
                    name: "ship_name"
                },
                {
                    data: "official_number",
                    name: "official_number"
                },
                {
                    data: "signal_letter",
                    name: "signal_letter"
                },
                {
                    data: "imo_number",
                    name: "imo_number"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ],
        });
    });
</script>
