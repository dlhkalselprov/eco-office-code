 <div class="accordion-item">
     <h2 class="accordion-header" id="heading8">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapse8" aria-expanded="false" aria-controls="collapse8">Lampiran Bukti
             dukung</button>

     </h2>
     <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8"
         data-coreui-parent="#accordionExample">
         <div class="accordion-body">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header text-right" data-coreui-i18n="trafficAndSales">
                         @if ($lampiran && $lampiran->lampiran)
                             <form method="POST"
                                 action="{{ route('input-data.destroy', ['filename' => $lampiran->lampiran]) }}">
                                 @csrf
                                 @method('DELETE') <button type="submit" class="btn btn-sm btn-warning"> Hapus
                                     Lampiran</button>
                             </form>
                         @else
                         @endif

                     </div>
                     <div class="card-body">
                         <div class="mb-3">
                             @if ($lampiran && $lampiran->lampiran)
                                 <iframe src="{{ asset('assets/lampiran/' . $lampiran->lampiran) }}" width="100%"
                                     height="600px"></iframe>
                             @else
                                 <label for="formFile" class="form-label">Masukkan file PDF/WORD/EXCEL</label>
                                 <input name="lampiran" class="form-control" type="file" id="formFile">
                                 @error('lampiran')
                                     <div>{{ $message }}</div>
                                 @enderror
                             @endif
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
