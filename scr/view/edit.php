<?php include("template/header.php"); ?>
    <form method="post">
        <input type="text" placeholder="Mã môn học" name="txtmamh" value="<?php echo $data['mamh']; ?>"><br>
        <input type="text" placeholder="Tên môn học" name="txttenmonhoc" value="<?php echo $data['ten_mh']; ?>"><br>
        <input type="text" placeholder="Số tín chỉ" name="txtsotinchi" value="<?php echo $data['sotinchi']; ?>"><br>
        <input type="text" placeholder="Số tiết lý thuyết" name="txtsotietlythuyet" value="<?php echo $data['sotiet_lt']; ?>"><br>
        <input type="text" placeholder="Số tiết bài tập" name="txtsotietbaitap" value="<?php echo $data['sotiet_bt']; ?>"><br>
        <input type="text" placeholder="Số tiết thực hành" name="txtsotietthuchanh" value="<?php echo $data['sotiet_thtn']; ?>"><br>
        <input type="text" placeholder="Số giờ tự học" name="txtsogiotuhoc" value="<?php echo $data['sogio_tuhoc']; ?>"><br>
        <button type="submit">Lưu</button>
    </form>
<?php include("template/footer.php"); ?>