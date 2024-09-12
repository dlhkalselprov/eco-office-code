 <div class="accordion-item">
     <h2 class="accordion-header" id="heading5">
         <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
             data-coreui-target="#collapse5" aria-expanded="false" aria-controls="collapse5">#5 Kenyamanan, keindahan
             dan estetika </button>
     </h2>
     <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5"
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
                         <td>Kondisi ruang kerja</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_1" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_1', $score->ck5_1 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_1" value="{{ old('txt5_1', $score->txt5_1 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row" rowspan="3">2
                         </th>
                         <td>Toilet</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_2" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_2', $score->ck5_2 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_2" value="{{ old('txt5_2', $score->txt5_2 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>

                         <td>a. Kebersihan toilet</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_2_a" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_2_a', $score->ck5_2_a ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_2_a"
                                 value="{{ old('txt5_2_a', $score->txt5_2_a ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     <tr>

                         <td>b. Air bersih di toilet</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_2_b" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_2_b', $score->ck5_2_b ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_2_b"
                                 value="{{ old('txt5_2_b', $score->txt5_2_b ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">3</th>
                         <td>Musholla</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_3" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_3', $score->ck5_3 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_3" value="{{ old('txt5_3', $score->txt5_3 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">4</th>
                         <td>Dapur/Kantin</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_4" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_4', $score->ck5_4 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_4" value="{{ old('txt5_4', $score->txt5_4 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">5</th>
                         <td>Lobby</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_5" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_5', $score->ck5_5 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_5"
                                 value="{{ old('txt5_5', $score->txt5_5 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">6</th>
                         <td>Drainase (Sampah, gulma dan sedimen)</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_6" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_6', $score->ck5_6 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_6"
                                 value="{{ old('txt5_6', $score->txt5_6 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">7</th>
                         <td>Sirkulasi udara</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_7" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_7', $score->ck5_7 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_7"
                                 value="{{ old('txt5_7', $score->txt5_7 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">8</th>
                         <td>Perihal Merokok</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_8" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_8', $score->ck5_8 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_8"
                                 value="{{ old('txt5_8', $score->txt5_8 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">9</th>
                         <td>Kenyamanan suhu ruangan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_9" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_9', $score->ck5_9 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_9"
                                 value="{{ old('txt5_9', $score->txt5_9 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">10</th>
                         <td>Kecukupan tingkat cahaya alami</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_10" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_10', $score->ck5_10 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_10"
                                 value="{{ old('txt5_10', $score->txt5_10 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">11</th>
                         <td>Bau ruangan</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_11" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_11', $score->ck5_11 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_11"
                                 value="{{ old('txt5_11', $score->txt5_11 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">12</th>
                         <td>Penataan ruangan kerja</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_12" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_12', $score->ck5_12 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_12"
                                 value="{{ old('txt5_12', $score->txt5_12 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">13</th>
                         <td>Kerapian kursi dan meja, rak lemari atau interior lain</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_13" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_13', $score->ck5_13 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_13"
                                 value="{{ old('txt5_13', $score->txt5_13 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">14</th>
                         <td>Kerapian kabel instalasi</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_14" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_14', $score->ck5_14 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_14"
                                 value="{{ old('txt5_14', $score->txt5_14 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">15</th>
                         <td>Kerapian ATK</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_15" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_15', $score->ck5_15 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_15"
                                 value="{{ old('txt5_15', $score->txt5_15 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">16</th>
                         <td>Penataan buku/arsip/dokumen di tempatnya</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_16" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_16', $score->ck5_16 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_16"
                                 value="{{ old('txt5_16', $score->txt5_16 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">17</th>
                         <td>Ketersediaan ruang laktasi</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_17" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_17', $score->ck5_17 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_17"
                                 value="{{ old('txt5_17', $score->txt5_17 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>
                     <tr>
                         <th scope="row">18</th>
                         <td>Penanggung jawab</td>
                         <td>
                             <div class="form-check">
                                 <input value="true" name="ck5_18" class="form-check-input" type="checkbox"
                                     id="flexCheckDefault"
                                     {{ old('ck5_18', $score->ck5_18 ?? null) == 'true' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="flexCheckDefault">
                                     YA
                                 </label>
                             </div>
                         </td>
                         <td><input type="text" name="txt5_18"
                                 value="{{ old('txt5_18', $score->txt5_18 ?? null) }}"
                                 class="form-control form-control-sm">
                         </td>
                     </tr>

                 </tbody>
             </table>

         </div>
     </div>
 </div>
