<!DOCTYPE html>
<html>
    <head>
        <title>不 存 在 的</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/indexcss.css" />
        <style>
            .button {
                border:2px solid;
                border-radius: 8px;
                color: white;
                padding: 10px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 10px;
                cursor: pointer;
            }
/*            .add{background-color: #00896C;}*/
            .add{background-color: white;color:#00896C;border:2px solid #00896C;}
            .search{background-color: #0089A7;}
            .search:hover{background-color: white;color:#0089A7;border:2px solid #0089A7;}
            .update{background-color: #F7C242;}
            .update:hover{background-color: white;color:#F7C242;border:2px solid #F7C242;}
            .delete{background-color:#EB7A77;}
            .delete:hover{background-color: white;color:#EB7A77;border:2px solid #EB7A77;}
            
            div.haha{text-align: center;}
            div#showdata{
                text-align:center；
                margin:30px；
            }
            #addtable {
                border-collapse: collapse;
                width: 100%;
            }
            #addtable th,#addtable td {
                border-bottom: 1px solid #ddd;
                padding: 15px;
                text-align: left;
            }
            #addtable tr:hover {background-color:#B5CAA0;color:white}
            form{
                padding-left:40%;
                padding-right: 40%;
            }
            #gongyingdingdan{
                background-color: #1EA084;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div align="center"><a href="index.html"><img id="title" src=images/title.png alt="不存在的"></a></div>
                <ul class="oe_menu">
                    <li><a href="Flower.html">花</a></li>
                    <li><a href="Customer.html">顾客</a></li>
                    <li><a href="Order.html">顾客订单</a></li>
                    <li><a href="Supplier.html">供应商</a></li>
                    <li><a href="Supply.html" id="gongyingdingdan">供应订单</a></li>
                    <li><a href="Employee.html">员工</a></li>
                </ul>
            </div>
            <br>
            <div id="page">
                <div class="haha">
                    <a href="SupplyAdd.php"><input type="button" class="button add" value="新增"></a>
                    <a href="SupplySearch.php"><input type="button" class="button search" value="查询"></a>
                </div>
                <div class="demo">
                    
                </div>
                <div id="showdata" class="demo">
                    <?php
                        $link = mysqli_connect('localhost','root','','FinalExam');
                        if(isset($_POST) && $_POST != NULL){
                            $result = mysqli_query($link,"INSERT INTO Supply(C_Fid,C_Sid,Snumber,Sdate)"
                                                   ."VALUES('{$_POST['C_Fid']}', '{$_POST['C_Sid']}', '{$_POST['Snumber']}', '{$_POST['Sdate']}')");
                        }
                    ?>
                    <form name="add" action="<?php $_SERVER['PHP_SELF'] ?>" method="post"><br><br>
                        <table>
                            <tr>
                                <td>花编号：</td>
                                <td><input name="C_Fid" type="text"></td>
                            </tr>
                            <tr>
                                <td>供应商编号：</td>
                                <td><input name="C_Sid" type="text"></td>
                            </tr>
                            <tr>
                                <td>供应数量：</td>
                                <td><input name="Snumber" type="text"></td>
                            </tr>
                            <tr>
                                <td>供应日期：</td>
                                <td><input name="Sdate" type="text"></td>
                            </tr>
                        </table><br>
                        <input type="submit" value="新增">
                    </form>
                    
                    <?php
                        $link = mysqli_connect('localhost','root','','FinalExam');
                        mysqli_query($link,'set names utf8');
                        echo '<br><br><table id="addtable">';
                        $result = mysqli_query($link,"SELECT * FROM Supply");
                        echo '<tr><th>花编号</th><th>供应商编号</th><th>供应数量</th><th>供应日期</th></tr>';
                        while($obj = $result->fetch_object()){
                            print_r('<tr><td>'.$obj->C_Fid.'</td><td>'.$obj->C_Sid.'</td><td>'.$obj->Snumber.'</td><td>'.$obj->Sdate.'</td></tr>');
                        }
                        mysqli_close($link);
                        echo '</table>';
                    ?>
                </div>
             </div>
        </div>
                
    </body>
</html>