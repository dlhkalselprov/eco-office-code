 <div class="accordion-item">
     <h2 class="accordion-header" id="headingThree">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">#3 Efisiensi
             Energi</button>
     </h2>
     <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
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
                 <thead class="table-warning">
                     <tr>
                         <th scope="col">A</th>
                         <th colspan="3">Penggunaan Listrik</th>
                     </tr>
                 </thead>
                 <tr>
                     <th scope="row"></th>
                     <td>1. Lampu hemat energi</td>

                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_1" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_1', $score->ck3_a_1 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_1" value="{{ old('txt3_a_1', $score->txt3_a_1 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>2. AC Hemat energi</td>

                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_2" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_2', $score->ck3_a_2 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_2" value="{{ old('txt3_a_2', $score->txt3_a_2 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>3. Pencahayaan dan sirkulasi</td>

                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_3" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_3', $score->ck3_a_3 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_3" value="{{ old('txt3_a_3', $score->txt3_a_3 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>4. Standart pencahayaan lampu</td>

                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_4" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_4', $score->ck3_a_4 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_4" value="{{ old('txt3_a_4', $score->txt3_a_4 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>5. Kampanye hemat listrik</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_5" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_5', $score->ck3_a_5 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_5" value="{{ old('txt3_a_5', $score->txt3_a_5 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>6. SOP hemat energi</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_6" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_6', $score->ck3_a_6 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_6" value="{{ old('txt3_a_6', $score->txt3_a_6 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>7. Penanggung jawab</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_7" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_7', $score->ck3_a_7 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_7"
                             value="{{ old('txt3_a_7', $score->txt3_a_7 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>8. Evaluasi penggunaan listrik</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_a_8" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_a_8', $score->ck3_a_8 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_a_8"
                             value="{{ old('txt3_a_8', $score->txt3_a_8 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <thead class="table-warning">
                     <tr>
                         <th scope="col">B</th>
                         <th colspan="3">Penggunaan Air</th>
                     </tr>
                 </thead>
                 <tr>
                     <th scope="row"></th>
                     <td>1. Peralatan saniter hemat air</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_1" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_1', $score->ck3_b_1 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_1"
                             value="{{ old('txt3_b_1', $score->txt3_b_1 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>2. Ditemukan pipa/kran bocor</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_2" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_2', $score->ck3_b_2 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_2"
                             value="{{ old('txt3_b_2', $score->txt3_b_2 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>3. SOP hemat air</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_3" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_3', $score->ck3_b_3 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_3"
                             value="{{ old('txt3_b_3', $score->txt3_b_3 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>4. Pemanfaatan kembali/IPAL</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_4" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_4', $score->ck3_b_4 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_4"
                             value="{{ old('txt3_b_4', $score->txt3_b_4 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>5. Kampanye hemat air</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_5" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_5', $score->ck3_b_5 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_5"
                             value="{{ old('txt3_b_5', $score->txt3_b_5 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>6. Penanggung jawab</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_6" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_6', $score->ck3_b_6 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_6"
                             value="{{ old('txt3_b_6', $score->txt3_b_6 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <tr>
                     <th scope="row"></th>
                     <td>7. Evaluasi penggunaan air</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_b_7" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_b_7', $score->ck3_b_7 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_b_7"
                             value="{{ old('txt3_b_7', $score->txt3_b_7 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>
                 <thead class="table-warning">
                     <tr>
                         <th scope="col">C</th>
                         <th colspan="3">Pengurangan Emisi Karbon</th>
                     </tr>
                 </thead>
                 <tr>
                     <th scope="row"></th>
                     <td>1. Melakukan pengecekan kendaraan dinas/operasional kantor terkait uji emisi</td>
                     <td>
                         <div class="form-check">
                             <input value="true" name="ck3_c_1" class="form-check-input" type="checkbox"
                                 id="flexCheckDefault"
                                 {{ old('ck3_c_1', $score->ck3_c_1 ?? null) == 'true' ? 'checked' : '' }}>
                             <label class="form-check-label" for="flexCheckDefault">
                                 YA
                             </label>
                         </div>
                     </td>
                     <td><input type="text" name="txt3_c_1"
                             value="{{ old('txt3_c_1', $score->txt3_c_1 ?? null) }}"
                             class="form-control form-control-sm">
                     </td>
                 </tr>

             </table>
         </div>
     </div>
 </div>
