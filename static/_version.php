<?php
header('Content-Type: text/plain');
?>
{% for release in releases_featured %}\
${release.version}
${release.date.datestring()}
{% for server in sfservers %}\
http://${server}.dl.sourceforge.net/sourceforge/phpmyadmin/phpMyAdmin-${release.version}-all-languages.tar.gz
{% end %}
{% end %}
