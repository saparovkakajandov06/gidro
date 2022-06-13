<?php echo $__env->make('administrator.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <div class="col-lg-12">
        <h1 class="page-header"> Log taryhy sanawy</h1>
        <hr class="hr-header">
    </div>

    <table id="teachers" class="table table-bordered table-striped" style="width:100%">
        <thead>
        <tr>
            <th scope="col">F.A.A.a</th>
            <th scope="col">Ulanyjy ady</th>
            <th scope="col">Ip</th>
            <th scope="col">Info</th>
            <th scope="col">Wagty</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#teachers').DataTable({
                "processing":true,
                "serverSide":true,
                "pageLength": 10,
                "responsive": true,
                "ajax":{
                    "url":"<?= route('log.api') ?>",
                    "dataType":"json",
                    "type":"POST",
                    "data":{"_token":"<?= csrf_token() ?>"},
                },
                "columns":[
                    {"data":"name" },
                    {"data":"email"},
                    {"data":"ip"},
                    {"data":"kind"},
                    {"data":"created_at"},
                ],
                order: [[4, 'desc']],
                mark: true,
                language: {
                    emptyTable:       "Log tapylmady",
                    info:             "_START_ - _END_ aralygy görkezilýär | Jemi _TOTAL_",
                    infoEmpty:        "0 log görkezilýär",
                    infoFiltered:     "(_MAX_ maglumatdan gözleg esasynda)",
                    infoPostFix:      "",
                    lengthMenu:       "Görkez _MENU_ ",
                    loadingRecords:   "Ýüklenýär...",
                    processing:       "Dowam edýär...",
                    search:           "Gözleg",
                    zeroRecords:      "Gözlegiňize göra log tapylmady :(",
                    paginate: {
                        first:        "Ilkinji",
                        previous:     "Öňki",
                        next:         "Indiki",
                        last:         "Soňky"
                    }
                }
            });
        });
    </script>

<?php /**PATH C:\xampp\htdocs\gidro\resources\views/log/logs.blade.php ENDPATH**/ ?>