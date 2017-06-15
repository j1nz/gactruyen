<?php
    require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH .'/include/template/site/header.php'); ?>
</head>
<body>
	<?php include_once(ABSPATH .'/include/template/site/menu-bar.php'); ?>
    <div class="container">
        <div class="widget">
           	<div class="title">

                <a href="<?php echo ('/' .$this->function .'/' );?>">
                    <span><?php echo $obj_result_function['function_name'];?></span>
                </a>
                <span> » </span>
                <span><?php echo $obj_category->getCategory_name();?></span>

            </div>
            
            <?php
                if ($list_manga != null) {
                   foreach($list_manga as $row) {
                        echo '<div class="list-item">';
                        echo '<img src="/upload/images/icon/item.png" alt="»">';
                        echo '<a rel="dofollow" href="/'.$this->function .'/' .$obj_category->getSlug() .'/' .$row['slug'] .'" title="'.$row['story_name'] .'">';
                        echo $row['story_name'];
                        echo '</a>';
                        echo '</div>';
                    } 
                } else {
                    echo '<div class="content">';
                    echo 'Chua co noi dung';
                    echo '</div>';
                }
                
            ?>
            
            <?php 
                if ($total_page > 1) {
            ?>        
                <div class="mainstory">
                    <div class="pagination">
                        
                        <?php
                            $var_link = '<a class="pagenav" href="?pn=';
                            $cut_paging = '<a class="pagenav">...</a>';;
                            
                            if (($page - 1) >= 1) {
                        ?>
                            <a class="pagenav" href="?pn=<?php echo $page - 1 ?>">&lt;&lt;</a>
                        <?php    
                            }
                            if ($total_page <= 9) {
                                for ($i = 0; $i < $total_page; $i++) {
                                    if ($page == ($i + 1)) {
                                        echo '<span>';
                                        echo $page;
                                        echo '</span>';
                                        
                                        $i = $i + 1;
                                    }
                                    if ($i < $total_page) {
                                        echo $var_link;
                                        echo $i + 1;
                                        echo '">';
                                        echo $i + 1;
                                        echo '</a>';
                                    }
                                    
                                }
                            } else {
                                
                                if ($page <= 5) {
                                    for ($i = 0; $i < 7; $i++) {
                                        if ($page == ($i + 1)) {
                                            echo '<span>';
                                            echo $page;
                                            echo '</span>';
                                            
                                            $i = $i + 1;
                                        }
                                        if ($i < 7) {
                                            echo $var_link;
                                            echo $i + 1;
                                            echo '">';
                                            echo $i + 1;
                                            echo '</a>';
                                        }
                                    }
    
                                    echo $cut_paging;
                                    if ($page < 2) {
                                        echo $var_link;
                                        echo $total_page - 1;
                                        echo '">';
                                        echo $total_page - 1;
                                        echo '</a>';
                                    }
    
                                    echo $var_link;
                                    echo $total_page;
                                    echo '">';
                                    echo $total_page;
                                    echo '</a>';
                                } 
                                
                                if ($page >= ($total_page - 4)) {
                                    echo '<a class="pagenav" href="?pn=1">1</a>';
    
                                    if ($page > ($total_page - 1)) {
                                        echo '<a class="pagenav" href="?pn=2">2</a>';
                                    }
                                    
                                    echo $cut_paging;
    
                                    for ($i = ($total_page - 6); $i <= $total_page; $i++) {
                                        
                                        if ($page == $i) {
                                            echo '<span>';
                                            echo $page;
                                            echo '</span>';
                                            
                                            $i++;
                                        } 
                                        if ($i <= $total_page) {
                                            
                                            echo $var_link;
                                            echo $i;
                                            echo '">';
                                            echo $i;
                                            echo '</a>';
                                        }
                                        
                                    }
    
    
                                } if ($page > 5 && $page < ($total_page - 4)) {
                                    echo '<a class="pagenav" href="?pn=1">1</a>';
                                    echo $cut_paging;
                                    
                                    echo $var_link;
                                    echo $page - 2;
                                    echo '">';
                                    echo $page - 2;
                                    echo '</a>';
                                    
                                    echo $var_link;
                                    echo $page - 1;
                                    echo '">';
                                    echo $page - 1;
                                    echo '</a>';
                                    
                                    echo '<span>';
                                    echo $page;
                                    echo '</span>';
                                    
                                    echo $var_link;
                                    echo $page + 1;
                                    echo '">';
                                    echo $page + 1;
                                    echo '</a>';
                                    
                                    echo $var_link;
                                    echo $page + 2;
                                    echo '">';
                                    echo $page + 2;
                                    echo '</a>';
                                    
                                    echo $cut_paging;
                                    
                                    echo $var_link;
                                    echo $total_page;
                                    echo '">';
                                    echo $total_page;
                                    echo '</a>';
                                }                          
                            }
                            
                            if (($page + 1) <= $total_page) {
                                echo $var_link;
                                echo $page + 1;
                                echo '">&gt;&gt;</a>';
                            }
                            
                        ?>
                        
                        
                    </div>
                    
                    <form action="" method="get">
                        <input name="pn" type="number" max="<?php echo $total_page; ?>" min="1" value=""/>
                        <input type="submit" value="Ðến trang >>"/>
                    </form>
                </div>
            <?php      
                }
            ?>
            
            
        </div>
    </div>    

    <?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>
