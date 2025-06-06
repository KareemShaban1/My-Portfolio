 <!-- bundle -->
 <script src="{{ asset('backend/template2/assets/js/vendor.min.js')}}"></script>
 <script src="{{ asset('backend/template2/assets/js/app.min.js')}}"></script>

 <!-- third party js -->
 <!-- <script src="{{ asset('backend/template2/assets/js/vendor/apexcharts.min.js')}}"></script> -->
 <script src="{{ asset('backend/template2/assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
 <script src="{{ asset('backend/template2/assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
 <!-- third party js ends -->

 <!-- demo app -->
 <!-- <script src="{{ asset('backend/template2/assets/js/pages/demo.dashboard.js')}}"></script> -->
 <!-- end demo js-->

 <!-- Datatables js -->
 <script src="{{asset('backend/template2/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/dataTables.buttons.min.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/buttons.html5.min.js')}} "></script>
 <script src="{{asset('backend/template2/assets/js/vendor/buttons.flash.min.js')}}"></script>
 <script src="{{asset('backend/template2/assets/js/vendor/buttons.print.min.js')}}"></script>
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> <!-- ✅ Required for colvis -->

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <script>
     const languages = {
         @if(App::getLocale() == 'en')
         en: {
             paginate: {
                 previous: "<i class='mdi mdi-chevron-left'></i> Previous",
                 next: "Next <i class='mdi mdi-chevron-right'></i>"
             },
             info: "Showing records _START_ to _END_ of _TOTAL_",
             lengthMenu: "Display _MENU_ records",
             search: "_INPUT_",
             searchPlaceholder: "Search...",
             zeroRecords: "No matching records found",
             infoEmpty: "No records to display",
             infoFiltered: "(filtered from _MAX_ total records)"
         },
         @else
         ar: {
             paginate: {
                 previous: "<i class='mdi mdi-chevron-right'></i> السابق",
                 next: "التالي <i class='mdi mdi-chevron-left'></i>"
             },
             info: "عرض السجلات من _START_ إلى _END_ من إجمالي _TOTAL_ سجلات",
             lengthMenu: "عرض _MENU_ سجلات",
             search: "_INPUT_",
             searchPlaceholder: "بحث...",
             zeroRecords: "لا توجد سجلات مطابقة",
             infoEmpty: "لا توجد سجلات للعرض",
             infoFiltered: "(تمت التصفية من إجمالي _MAX_ سجلات)"
         }
         @endif
     };

     const language = '{{ App::getLocale() }}';
 </script>

 @stack('scripts')
