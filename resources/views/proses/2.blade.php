  <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
              data-coreui-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">#2 Pengelolaan
              Sampah</button>
      </h2>
      <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
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
                          <th colspan="3">Pengurangan Sampah</th>

                      </tr>
                  </thead>

                  <tbody>
                      <tr>
                          <th scope="row"></th>
                          <td>1. Pengurangan penggunaan kemasan sekali pakai</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_a_1" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_a_1', $score->ck2_a_1 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_a_1"
                                  value="{{ old('txt2_a_1', $score->txt2_a_1 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row">
                          </th>
                          <td>
                              &nbsp; &nbsp; a. Sosialisasi terkait Kebijakan Lingkungan yang
                              diterbitkan
                          </td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_a_1_a" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck1_5', $score->ck1_5 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_a_1_a"
                                  value="{{ old('txt2_a_1_a', $score->txt2_a_1_a ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row">
                          </th>
                          <td>
                              &nbsp; &nbsp; b. Kemasan sekali pakai lainnya
                          </td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_a_1_b" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck1_5', $score->ck1_5 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_a_1_b"
                                  value="{{ old('txt2_a_1_b', $score->txt2_a_1_b ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      <tr>
                          <th scope="row"></th>
                          <td>2. Penggunaan dan pemanfaatan kertas guna ulang (ATK)</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_a_2" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_a_2', $score->ck2_a_2 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_a_2"
                                  value="{{ old('txt2_a_2', $score->txt2_a_2 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <thead class="table-warning">
                          <tr>
                              <th scope="col">B</th>
                              <th colspan="3">Pemilahan dan Pembuangan Sampah</th>
                          </tr>
                      </thead>
                      <tr>
                          <th scope="row"></th>
                          <td>1. Pengurangan penggunaan kemasan sekali pakai</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_b_1" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_b_1', $score->ck2_b_1 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_b_1"
                                  value="{{ old('txt2_b_1', $score->txt2_b_1 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>2. Proses pemilahan sampah </td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_b_2" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_b_2', $score->ck2_b_2 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_b_2"
                                  value="{{ old('txt2_b_2', $score->txt2_b_2 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>3. Keberadaan Bank Sampah atau bentuk sarana sejenis lainnya</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_b_3" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_b_3', $score->ck2_b_3 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_b_3"
                                  value="{{ old('txt2_b_3', $score->txt2_b_3 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>4. Pembuangan Sampah</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_b_4" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_b_4', $score->ck2_b_4 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_b_4"
                                  value="{{ old('txt2_b_4', $score->txt2_b_4 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <thead class="table-warning">
                          <tr>
                              <th scope="col">C</th>
                              <th colspan="3">Penanganan Lanjutan Sampah</th>
                          </tr>
                      </thead>
                      <tr>
                          <th scope="row"></th>
                          <td>1. Sarana pengelolaan sampah (komposter)</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_1" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_1', $score->ck2_c_1 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_1"
                                  value="{{ old('txt2_c_1', $score->txt2_c_1 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>2. Proses pengelolaan sampah</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_2" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_2', $score->ck2_c_2 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_2"
                                  value="{{ old('txt2_c_2', $score->txt2_c_2 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>3. Jumlah sampah untuk diolah</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_3" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_3', $score->ck2_c_3 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_3"
                                  value="{{ old('txt2_c_3', $score->txt2_c_3 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>4. Pemanfaatan</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_4" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_4', $score->ck2_c_4 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_4"
                                  value="{{ old('txt2_c_4', $score->txt2_c_4 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>5. Keaktifan ASN sebagai nasabah Bank Sampah di sekitar tempat
                              tinggal masing-masing</td>

                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_5" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_5', $score->ck2_c_5 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_5"
                                  value="{{ old('txt2_c_5', $score->txt2_c_5 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>6. Keaktifan SKPD dalam menabung sampah ke Bank Sampah terdekat</td>
                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_c_6" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_c_6', $score->ck2_c_6 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_c_6"
                                  value="{{ old('txt2_c_6', $score->txt2_c_6 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <thead class="table-warning">
                          <tr>
                              <th scope="col">D</th>
                              <th colspan="3">Kampanye, SOP dan Penanggung Jawab</th>
                          </tr>
                      </thead>
                      <tr>
                          <th scope="row"></th>
                          <td>1. Kampanye</td>
                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_d_1" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_d_1', $score->ck2_d_1 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_d_1"
                                  value="{{ old('txt2_d_1', $score->txt2_d_1 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>2. SOP</td>
                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_d_2" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_d_2', $score->ck2_d_2 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_d_2"
                                  value="{{ old('txt2_d_2', $score->txt2_d_2 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td>3. Penanggung Jawab</td>
                          <td>
                              <div class="form-check">
                                  <input value="true" name="ck2_d_3" class="form-check-input" type="checkbox"
                                      id="flexCheckDefault"
                                      {{ old('ck2_d_3', $score->ck2_d_3 ?? null) == 'true' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="flexCheckDefault">
                                      YA
                                  </label>
                              </div>
                          </td>
                          <td><input type="text" name="txt2_d_3"
                                  value="{{ old('txt2_d_3', $score->txt2_d_3 ?? null) }}"
                                  class="form-control form-control-sm">
                          </td>
                      </tr>
                  </tbody>

              </table>
          </div>
      </div>
  </div>
