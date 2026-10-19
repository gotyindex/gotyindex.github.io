<?php echo file_get_contents('http://pages.nameserver.sk/defaultpage?iddomain=807456'); ?>

<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Odstranění přípony .html (přístup bez přípony)
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^([^\.]+)$ $1.html [NC,L]
    
    # Volitelné: Přesměrování starých URL s .html na URL bez .html
    # RewriteCond %{THE_REQUEST} /(.+)\.html [NC]
    # RewriteRule ^(.*)\.html$ /$1 [R=301,L]
</IfModule>