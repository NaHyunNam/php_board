<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                <?php
                    $now_login_id = $_SESSION['name'];
                    $sql2 = "
                        SELECT
                            co_no,
                            co_editdate,
                            co_text,
                            user_name
                        FROM TB_user AS u, TB_comment AS c
                        WHERE u.user_no = c.co_regno
                        AND co_bono = {$get_bo_no};
                    ";

                    $result2 = mysqli_query($conn, $sql2);
                    while($row2 = mysqli_fetch_array($result2)){
                        $go_co_no = $row2['co_no'];
                        if($now_login_id == $row2['user_name']){
                    ?>
                        <tr>
                            <td><?=$row2['user_name']?></td>
                            <td><?=$row2['co_editdate']?></td>
                            <td><a href="comment_alter.php?co_no=<?=$row2['co_no']?>">수정</a></td>
                            <td><a href="comment_delete.php?co_no=<?=$row2['co_no']?>&bo_no=<?=$get_bo_no?>">삭제</a></td>
                        </tr>
                        <tr>    
                            <td colspan="4"><?=$row2['co_text']?></td>    
                        </tr>
                    <?php
                    }else{
                    ?>
                        <tr>
                            <td><?=$row2['user_name']?></td>
                            <td><?=$row2['co_editdate']?></td>
                        </tr>
                        <tr>    
                            <td colspan="2"><?=$row2['co_text']?></td>    
                        </tr>
                  <?php      
                        }
                     }
                    ?>   
                </tbody>
                </table>
            </div>