<?php
    $dashboard="ecommerce";
    function getDasboard($dashboard,$seccion)
    {
        if($dashboard and $seccion==0):
            switch ($dashboard) {
                case 'ecommerce':
                    include_once("part/dashboard/ecommerce.php");
                    break;
    
                case 'project-manager':
                    include_once("part/dashboard/project-manager.php");
                    break;
    
                case 'analytics':
                    include_once("part/dashboard/analytics.php");
                    break;
    
                case 'crm':
                    include_once("part/dashboard/crm.php");
                    break;
                
                default:
                    include_once("part/dashboard/ecommerce.php");
                    break;
            }
        else:
            switch ($dashboard) {
                case 'ecommerce':
                    ?>
                    <script src="assets/js/pages/demo.dashboard.js"></script>
                    <?php
                    break;
    
                case 'project-manager':
                    ?>
                    <script src="assets/js/pages/demo.dashboard-projects.js"></script>
                    <?php
                    break;
    
                case 'analytics':
                    ?>
                    <script src="assets/js/pages/demo.dashboard-analytics.js"></script>
                    <?php
                    break;
    
                case 'crm':
                    ?>
                    <script src="assets/js/pages/demo.dashboard-crm.js"></script>
                    <?php
                    break;
                
                default:
                    ?>
                    <script src="assets/js/pages/demo.dashboard.js"></script>
                    <?php
                    break;
            }
        endif;
    }
?>