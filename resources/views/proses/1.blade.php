 <div class="accordion-item">
     <h2 class="accordion-header" id="headingOne">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">#1 Kebijakan dan Dukungan
             Pimpinan</button>
     </h2>
     <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne"
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
                         <td>Kebijakan Pimpinan mengenai pengelolaan lingkungan hidup di unit
                             kerja yang dipimpin</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck1_1" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck1_1', $score->ck1_1 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt1_1" value="{{ old('txt1_1', $score->txt1_1 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">2
                         </th>
                         <td>Sosialisasi terkait Kebijakan Lingkungan yang diterbitkan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck1_2" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck1_2', $score->ck1_2 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt1_2" value="{{ old('txt1_2', $score->txt1_2 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">3</th>
                         <td>Satgas/Tim Penanggung Jawab</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck1_3" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck1_3', $score->ck1_3 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt1_3" value="{{ old('txt1_3', $score->txt1_3 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     <tr>
                         <th scope="row">4</th>
                         <td>SOP pelaksanaan kebijakan lingkungan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck1_4" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck1_4', $score->ck1_4 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt1_4" value="{{ old('txt1_4', $score->txt1_4 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">5</th>
                         <td>Alokasi anggaran</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck1_5" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck1_5', $score->ck1_5 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt1_5" value="{{ old('txt1_5', $score->txt1_5 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                 </tbody>
             </table>

         </div>
     </div>
 </div>
