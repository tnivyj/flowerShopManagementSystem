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
            .add{background-color: #00896C;}
            .add:hover{background-color: white;color:#00896C;border:2px solid #00896C;}
/*            .search{background-color: #0089A7;}*/
            .search{background-color: white;color:#0089A7;border:2px solid #0089A7;}
            .update{background-color: #F7C242;}
            .update:hover{background-color: white;color:#F7C242;border:2px solid #F7C242;}
            .delete{background-color:#EB7A77;}
            .delete:hover{background-color: white;color:#EB7A77;border:2px solid #EB7A77;}
            
            div.haha{text-align: center;}
            div#showdata{
                text-align:center；
                margin:30px；
            }
            #searchtable {
                border-collapse: collapse;
                width: 100%;
            }
            #searchtable th,#searchtable td {
                border-bottom: 1px solid #ddd;
                padding: 15px;
                text-align: left;
            }
            #searchtable tr:hover {background-color:#577C8A;color:white;opacity: 0.7}
            form{
                padding-left:40%;
                padding-right: 30%;
            }
            #gukedingdan{
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
                    <li><a href="Order.html" id="gukedingdan">顾客订单</a></li>
                    <li><a href="Supplier.html">供应商</a></li>
                    <li><a href="Supply.html">供应订单</a></li>
                    <li><a href="Employee.html">员工</a></li>
                </ul>
            </div>
            <br>
            <div id="page">
                <div class="haha">
                    <a href="OrderSearch.php"><input type="button" class="button search" value="查询"></a>
                    <a href="OrderUpdate.php"><input type="button" class="button update" value="修改"></a>
                </div>
                <div>
                    <form name="search" action="<?php $_SERVER['PHP_SELF'] ?>" method="post"><br><br>
                        查询顾客订单：<input name="search" type="text">
                        <input type="submit" value="确定">
                </form>
                </div>
                <div class="demo">
                    
                    <?php
                        if(isset($_POST['search'])){
                            $searchName = $_POST['search'];
                            echo'<br><br><table id=searchtable>';
                            echo '<tr><th>订单编号</th><th>花编号</th><th>顾客编号</th><th>订购数量</th><th>订购日期</th><th>送货时间</th><th>进送货地址</th><th>备注</th></tr>';
                            $link = mysqli_connect('localhost','root','','FinalExam');
                            mysqli_query($link,'set names utf8');
                            $result = mysqli_query($link,"SELECT * FROM Order_Info WHERE Oid like'%{$searchName}%'");
                            while($obj = $result->fetch_object()){
                            print_r('<tr><td>'.$obj->Oid.'</td><td>'.$obj->O_Fid.'</td><td>'.$obj->O_Cid.'</td><td>'.$obj->Onumber.'</td><td>'.$obj->Odate.'</td><td>'.$obj->Deliver_time.'</td><td>'.$obj->Deliver_location.'</td><td>'.$obj->Remark.'</td></tr>');
                        }
                            mysqli_close($link);
                            echo '</table>';
                        }
                    ?>
                </div>
             </div>
        </div>
    </body>
</html>