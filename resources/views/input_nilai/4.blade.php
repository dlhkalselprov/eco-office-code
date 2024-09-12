 <div class="accordion-item">
     <h2 class="accordion-header" id="heading4">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapse4" aria-expanded="false" aria-controls="collapse4">#4 Ruang Terbuka
             Hijau</button>
     </h2>
     <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4"
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
                         <td>Alokasi RTH</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_1" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_1', $score->ck4_1 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_1" value="{{ old('txt4_1', $score->txt4_1 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">2
                         </th>
                         <td>Pohon peneduh berdasarkan sebaran</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_2" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_2', $score->ck4_2 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_2" value="{{ old('txt4_2', $score->txt4_2 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">3</th>
                         <td>Pohon peneduh berdasarkan fungsi</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_3" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_3', $score->ck4_3 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_3" value="{{ old('txt4_3', $score->txt4_3 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     <tr>
                         <th scope="row">4</th>
                         <td>Penghijauan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_4" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_4', $score->ck4_4 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_4" value="{{ old('txt4_4', $score->txt4_4 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">5</th>
                         <td>Untuk mengatasi tanaman liar, kantor menggunakan bahan kimia/tidak pada pembasminya</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_5" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_5', $score->ck4_5 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_5" value="{{ old('txt4_5', $score->txt4_5 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">6</th>
                         <td>Melaksanakan inventarisasi keanekaragaman hayati jenis tanaman yang ada di lingkungan
                             kantor</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck4_6" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck4_6', $score->ck4_6 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt4_6" value="{{ old('txt4_6', $score->txt4_6 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                 </tbody>
             </table>

         </div>
     </div>
 </div>
