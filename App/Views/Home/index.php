<?php
// dd($datas);
?>

<div class="w-full h-full flex justify-center">
    <div class="shadow-lg">
        <div class="flex gap-10">
            <button class="shadow-lg" type="button" onclick="openTabs('data')">Data</button>
            <button class="shadow-lg" type="button" onclick="openTabs('edit')">Edit</button>
        </div>

        <div class="w-full">
            <div id="dataContainer" class="hide_tabs_content hidden">
                <table id="dataTables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">Total</td>
                            <td>Rp. </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="editContainer" class="hide_tabs_content hidden">
                <form id="formEditBarang" onsubmit="simpanEditBarang()">
                    <table id="editTables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rows_edit_data">
                                <td>1</td>
                                <td><input type="text" name="[1]nama_barang" /></td>
                                <td><input type="text" class="oninput_barang" id="1_qyt_barang" name="[1]qyt_barang" /></td>
                                <td><input type="text" class="oninput_barang" id="1_harga_barang" name="[1]harga_barang" /></td>
                                <td><input type="text" id="1_total_harga_barang" name="[1]total_harga_barang" /></td>
                                <td>
                                    <div class="flex gap-10">
                                        <button type="button" onclick="formActions('kurang', this)">Kurang</button>
                                        <button type="button" onclick="formActions('tambah')">Tambah</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tr>
                            <td colspan="4">Total</td>
                            <td>Rp. </td>
                        </tr>
                    </table>
                    <button type="button" onclick="simpanEditBarang()">Simpan</button>
                    <button type="reset">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        (function() {
            initDOMOnInput(1);
        })();
    });

    function initDOMOnInput($counter) {
        $(`.oninput_barang`).on("input", function() {
            const $totalHarga = $(`#${$counter}_qyt_barang`).val() * $(`#${$counter}_harga_barang`).val();
            $(`#${$counter}_total_harga_barang`).val($totalHarga);
        });
    }

    function openTabs($tabs) {
        if ($tabs == "data") {
            const $localDatas = JSON.parse(localStorage.getItem("datas"));
            console.log($localDatas);

            let $htmlDatas = ``;
            if ($localDatas) {
                const $tmpeDatasDsply = [];
                $localDatas.forEach(function($list, $index) {
                    const { nama_barang, qyt_barang, harga_barang, total_harga_barang } = $list;

                    $htmlDatas += `
                    <tr class="rows_edit_data">
                        <td>${$index + 1}</td>
                        <td><input type="text" /><p>${nama_barang}</p></td>
                        <td><input type="text" /><p>${qyt_barang}</p></td>
                        <td><input type="text" /><p>${harga_barang}</p></td>
                        <td><input type="text" /><p>${total_harga_barang}</p></td>
                    </tr>
                    `;
                })
            }

            $("#editContainer").hide();
            $("#dataContainer").show();
            $("#dataTables tbody").html($htmlDatas);
        } 
        
        if ($tabs == "edit") {
            $("#dataContainer").hide();
            $("#editContainer").show();
        }
    }

    let $lengthRowsData = $(".rows_edit_data").length;

    function formActions($aksi, $this = null) {
        if ($aksi = "kurang") {
            // $this.parent().remove();
        }

        if ($aksi = "tambah") {
            const $htmlTambah = `
                <tr class="rows_edit_data">
                    <td>${++$lengthRowsData}</td>
                    <td><input type="text" name="[${$lengthRowsData}]nama_barang" /></td>
                    <td><input type="text" class="oninput_barang" id="${$lengthRowsData}_qyt_barang" name="[${$lengthRowsData}]qyt_barang" /></td>
                    <td><input type="text" class="oninput_barang" id="${$lengthRowsData}_harga_barang" name="[${$lengthRowsData}]harga_barang" /></td>
                    <td><input type="text" id="${$lengthRowsData}_total_harga_barang" name="[${$lengthRowsData}]total_harga_barang" /></td>
                    <td>
                        <div class="flex gap-10">
                            <button type="button" onclick="formActions('kurang', this)">Kurang</button>
                            <button type="button" onclick="formActions('tambah')">Tambah</button>
                        </div>
                    </td>
                </tr>
            `;

            $("#editTables").append($htmlTambah);
            initDOMOnInput($lengthRowsData);
        }
    }

    function simpanEditBarang() {
        let $formDatas = $("#formEditBarang").serializeArray();
        let $localDatas = JSON.parse(localStorage.getItem("datas"));

        let $tmpDatas = [];
        let $tmpObject = {};
        $formDatas.forEach(function($list, $index) {
            let { name, value } = $list;
            let $tmpIndex = name.split("[")[1].split("]")[0];
            let $tmpNamas = name.split("[")[1].split("]")[1];
            
            $tmpObject[$tmpNamas] = value;
            $tmpDatas[--$tmpIndex] = $tmpObject;
        });

        console.log($tmpDatas);        
        
        if (!$localDatas) {
            localStorage.setItem("datas", JSON.stringify($tmpDatas));
        } else {
            $localDatas.push($tmpDatas);
            localStorage.setItem("datas", JSON.stringify($localDatas));
        }
    }
</script>