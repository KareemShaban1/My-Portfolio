<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('PDF') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="pdfForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="pdf_id">

                </form>
            </div>
        </div>
    </div>
</div>

