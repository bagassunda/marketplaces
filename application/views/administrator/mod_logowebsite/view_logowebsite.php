<div class="col-xs-12">  
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Ganti Logo Website</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-bordered table-striped">
                <tbody>
                <?php 
                    $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart($this->uri->segment(1).'/logowebsite',$attributes); 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                        echo "<input type='hidden' name='id' value='$row[id_logo]'>";
                        $gambar = $row['gambar'];
                        $gambar_dengan_ekstensi = $gambar . ".jpg";
                        if (in_array(pathinfo($gambar, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "svg"))) {
                            $gambar_dengan_ekstensi = $gambar;
                        }
                        echo "<tr><td width=120px>Logo Terpasang</td><td><a href=''><img width='100%' src='".base_url()."asset/logo/$gambar_dengan_ekstensi'></a></td></tr>";
                        echo "<tr><td>Ganti Logo</td><td><div class='input-group'>
                            <input type='text' class='form-control' id='file-name' readonly>
                            <span class='input-group-btn'>
                                <button type='button' class='btn btn-default' onclick=\"document.getElementById('fileInput').click();\">Browse</button>
                            </span>
                            <input id='fileInput' type='file' name='logo' accept='.jpg, .jpeg, .png, .svg' style='display: none;' onchange=\"document.getElementById('file-name').value = this.files.length ? this.files[0].name : ''\">
                        </div></td></tr>";
                        $no++;
                    }
                    echo "<tr><td></td><td><div class='box-footer'>
                            <button type='submit' name='submit' class='btn btn-info'>Update</button>
                            <a href='".base_url().$this->uri->segment(1)."/logowebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                          </div></td></tr>";
                    echo form_close();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
