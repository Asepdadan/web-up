<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Polban</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('jeeasyui/themes/default/easyui.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('jeeasyui/themes/icon.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('jeeasyui/demo/demo.css')?>">
    <script type="text/javascript" src="<?php echo base_url('jeeasyui/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('jeeasyui/jquery.easyui.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('jeeasyui/jquery.edatagrid.js')?>"></script>
 
</head>
<body>
    <table>
    <tr>
        <td>
     <img src="<?php echo base_url('asset/images/polban.jpg'); ?>" width="50px" ></img>
        </td>
        <td style="padding-left: 20px; font-size: 18px; font-weight: bold;" >POLITEKNIK NEGERI BANDUNG </td>
     </tr>
    </table>
    <div style="margin:10px 0;"></div>
    <div class="easyui-panel" style="padding: 5px; ">
    
        <a href="<?php echo base_url('index.php/Chome'); ?>" class="easyui-linkbutton" data-options="plain:true">Home</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#penelitian'">Penelitian</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#admin'">Administrator</a>

        <a href="<?php echo base_url('index.php/Clogin'); ?>" class="easyui-linkbutton" data-options="plain:true">Log Out</a>
  
    </div>
    <div id="penelitian" style="width:250px;">
             <div>
                <a href="<?php echo base_url('index.php/Cpenelitian'); ?>">Tahun 2015</a>
       
            </div>
            <div><a href="<?php echo base_url('#'); ?>">Tahun 2014</a></div>

    </div>
    <div id="admin" style="width:250px;">
            <div><a href="<?php echo base_url('#'); ?>">Data Peneliti</a></div>
            <div><a href="<?php echo base_url('#'); ?>">Akun</a></div>
    </div>
    
   
</body>
</html>







