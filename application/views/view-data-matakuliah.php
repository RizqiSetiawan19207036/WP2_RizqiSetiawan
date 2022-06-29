<html>

<head> 
    <title>Form Data Matakuliah</title> 
</head> 

<body> 
    <center> 

        <table> 
                 <tr> 
                    <th colspan="3"> Form Data Mata Kuliah </th> 
                </tr> 
                 <tr> 
                    <td colspan="3">
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Kode MTK</th> 
                    <th>:</th> 
                    <th><?= $kode;?></th>
                    
                </tr> 
                <tr> 
                    <th>Nama MTK</th> 
                    <th>:</th> 
                    <th><?= $nama;?></th>
                </tr> 
                <tr> 
                    <th>SKS</th> 
                    <th>:</th>
                    <th><?= $sks;?>
                    </th> 
                    
                </tr> 
                <tr> 
                    <th colspan="3"><a href="<?= base_url();?>matakuliah" title="Kembali"> Kembali</a>
                    </th> 
                </tr> 
            </table>
       
    </center> 
</body> 

</html>