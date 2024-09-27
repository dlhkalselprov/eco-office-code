 <div class="accordion-item">
     <h2 class="accordion-header" id="heading6">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapse6" aria-expanded="false" aria-controls="collapse6">#6 Pengadaan Barang/ Peralatan
             Kantor</button>
     </h2>
     <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6"
         data-coreui-parent="#accordionExample">
         <div class="accordion-body">
             <table class="table">
                 <thead class="table-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Sub Komponen</th>
                         <th scope="col">Ketersediaan</th>
                         <th scope="col">Keterangan</th>
                     </tr>
                 </thead>

                 <tbody>
                     <tr>
                         <th scope="row">1</th>
                         <td>Pengadaan barang/peralatan kantor berorientasi ramah lingkungan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck6_1" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck6_1', $score->ck6_1 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt6_1" value="{{ old('txt6_1', $score->txt6_1 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>


                 </tbody>
             </table>

         </div>
     </div>
 </div>
