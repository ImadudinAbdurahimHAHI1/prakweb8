<div class="col-md-9">
    <h2 style="text-align: center">
        Daftar BMI Pasien
    </h2>
    <table class="table" style="margin: 0 auto" border="1px solid black">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <?php 
                $nomor=1;
                foreach($list_bmipasien as $data): ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $data->tanggal ?></td>
                    <td><?= $data->pasien->kode ?></td>
                    <td><?= $data->pasien->nama ?></td>
                    <td><?= $data->pasien->gender ?></td>
                    <td><?= $data->bmi->berat ?></td>
                    <td><?= $data->bmi->tinggi ?></td>
                    <td><?= $data->bmi->nilaiBMI() ?></td>
                    <td><?= $data->bmi->statusBMI() ?></td>
                    
                </tr>   
            <?php
                $nomor++;
                endforeach;
            ?>
        </tbody>
    </table>
</div> 