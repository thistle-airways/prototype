<body id="page">
	<div id="page-inner">
        <div id="top-bar">
           <div id="page-title">Thistle Airways</div>
        </div>
        <div id="wrapper">
        
            <?php //Always include page title ?>
            <div id="header">
                <?php include 'pages/header.php';?>
            </div>
            
            <?php //Determine page being requested, and include file from /pages/
            //
            //General Pages
            if ($page == 'index') {?><div id="<?php echo $page; ?>"><?php include 'pages/home.php'; ?></div><?php }
            
            elseif ($page == 'details') {?><div id="<?php echo $page; ?>"><?php include 'pages/details.php'; ?></div><?php }
            elseif ($page == 'confirmation') {?><div id="<?php echo $page; ?>"><?php include 'pages/confirmation.php'; ?></div><?php }
            
            //Else show page not found error
            else {?>
                <div class="error">
                    <?php include 'pages/error.php'; ?>
                </div>
            <?php }
            
            //Always include footer ?>
            <div id="footer">
                <?php include 'pages/footer.php';?>
            </div>
        
        </div>
    </div>
</body>
