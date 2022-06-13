// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({

      language: {
        lengthMenu :                  "Görkez _MENU_ ",
        search:                       "Gözleg",
        emptyTable:                   "Ulanyjy tapylmady",
        info:                         "_START_ - _END_ aralygy görkezilýar | Jemi _TOTAL_",
        infoEmpty:                    "0 ulanyjy görkezilýär",
        infoFiltered:                 "(_MAX_ maglumatdan gözleg esasynda)",
        infoPostFix:                  "",
        lengthMenu:                   "Görkez _MENU_ ",
        loadingRecords:               "Ýüklenýär...",
        processing:                   "Dowam edýär...",
        search:                       "Gözleg",
        zeroRecords:                  "Gözlegiňize görä ulanyjy tapylmady :(",
        paginate: {
                        first:        "Ilkinji",
                        previous:     "Öňki",
                        next:         "Indiki",
                        last:         "Soňky"

                    }

      }

    });
});
