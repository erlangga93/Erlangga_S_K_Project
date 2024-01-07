<!DOCTYPE html>
<html lang="en">
<head>
   <?php $this->load->view("member/layout/header");?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        
        <header class="main-header">
            <?php $this->load->view("member/layout/main_header");?>
        </header>

        <aside class="main-sidebar">
            <?php $this->load->view("member/layout/main_sidebar");?>
        </aside>

        <div class="content-wrapper">
            <?php //echo $contents; ?>
            <?php $this->load->view($contents); ?>
        </div>

        <footer class="main-footer">
            <?php $this->load->view("member/layout/footer");?>
        </footer>
    </div>
</body>
</html>