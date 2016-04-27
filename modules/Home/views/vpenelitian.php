<!DOCTYPE html>
<head>

<html lang="en">
  <head>


    <meta charset="utf-8">

    <title>Penelitian Politeknik Bandung</title>




  </head>

 
    <!-- Fixed navbar -->
    <?php $this->view('template/vmenu'); ?>
    <br>
    <br>
   <body align="center">
    <h2>Daftar Penelitian </h2>
    <p>Tahun 2015</p>
  <a href="<?php echo base_url('index.php/Chome'); ?>" class="easyui-linkbutton" data-options="plain:true">Grafik</a>
    <table id="dg" title="PENELITIAN" class="easyui-datagrid" style="width:1310px; height:450px"
            url="get_users.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true" nowrap="false">
        <thead>
            <tr>
           
                <th field="nama ketua" width="30">Nama Ketua</th>
                <th field="nama anggota" width="30">Nama Anggota</th>
                <th field="jurusan" width="20">Jurusan</th>
                <th field="judul" width="40">Judul</th>
                <th field="jenis" width="10">Jenis</th>
                <th field="sumber dana" width="20">Sumber Dana</th>
                <th field="besar dana" width="20">Besar Dana</th>
                <th field="tahun anggaran" width="10">TA</th>
                <th field="jumlah peneliti" width="15">Jumlah Peneliti</th>
            </tr>
        </thead>
        <tbody>

               <tbody>
    <?php $i = 1; ?>
    <?php foreach ($view AS $row) { ?>
        <tr>

          
	    <td><?php echo $row->nama_ketua ?></td>
	    <td><?php echo $row->nama_anggota ?></td>
	    <td><?php echo $row->jurusan ?></td>
	    <td><?php echo $row->judul ?></td>
	    <td><?php echo $row->jenis ?></td>
	    <td><?php echo $row->sumber_dana ?></td>
	    <td><?php echo $row->besar_dana ?></td>
	    <td><?php echo $row->ta ?></td>
	    <td><?php echo $row->jml_peneliti ?></td> </tr>
    <?php } ?>
     </tbody>
          
    </table>
<!--    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Tambah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove Data</a>
    </div>-->

    <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">Data Penelitian</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>No.:</label>
                <input name="no" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Nama Ketua:</label>
                <input name="nama ketua" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Nama Anggota:</label>
                <input name="nama anggota" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Jurusan:</label>
                <input name="jurusan" class="easyui-textbox" >
            </div>
            <div class="fitem">
                <label>Judul:</label>
                <input name="judul" class="easyui-textbox" >
            </div>
            <div class="fitem">
                <label>Jenis:</label>
                <input name="jenis" class="easyui-textbox" >
            </div>
            <div class="fitem">
                <label>Sumber Dana:</label>
                <input name="sumber dana" class="easyui-textbox" >
            </div>
            <div class="fitem">
                <label>Besar Dana:</label>
                <input name="besar dana" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Tahun Anggaran:</label>
                <input name="tahun anggaran" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Jumlah Peneliti:</label>
                <input name="jumlah peneliti" class="easyui-textbox">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    <script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Tambah Data');
            $('#fm').form('clear');
            url = 'save_user.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'update_user.php?id='+row.id;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                    if (r){
                        $.post('destroy_user.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
    <style type="text/css">
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
        .fitem input{
            width:160px;
        }
    </style>
</body>
</html>