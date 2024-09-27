 <div class="accordion-item">
     <h2 class="accordion-header" id="heading7">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapse7" aria-expanded="false" aria-controls="collapse7">#7 Penerapan K3</button>
     </h2>
     <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7"
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
                         <td>Perancangan sarana evakuasi: seperti jalur evakuasi, titik kumpul dan jalur keluar masuk
                             ruangan kantor</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck7_1" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck7_1', $score->ck7_1 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt7_1" value="{{ old('txt7_1', $score->txt7_1 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">2</th>
                         <td>Terdapat denah ruangan kantor/bangunan sebagai sarana upaya evakuasi</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck7_2" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck7_2', $score->ck7_2 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt7_2" value="{{ old('txt7_2', $score->txt7_2 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">3</th>
                         <td>Ketersediaan fasilitas APAR serta pengecekan rutin dan pelatihan penggunaannya</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck7_3" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck7_3', $score->ck7_3 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt7_3" value="{{ old('txt7_3', $score->txt7_3 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">4</th>
                         <td>Pemeliharaan dan pengecekan keamanan ruang panel kantor</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck7_4" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck7_4', $score->ck7_4 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt7_4" value="{{ old('txt7_4', $score->txt7_4 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>


                 </tbody>
             </table>

         </div>
     </div>
 </div>
